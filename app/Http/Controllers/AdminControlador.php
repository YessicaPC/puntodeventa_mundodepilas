<?php

namespace App\Http\Controllers;

use App\Ventas;
use App\CompraVenta;
use App\Tiendas;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;

class AdminControlador extends Controller
{

	public function venta_dia(){

		$user = Auth::user();


		$carbon = new \Carbon\Carbon();
		$date = $carbon->now();
		$fecha = $date->format('Y-m-d');

		$tienda = Tiendas::where('admin', '=', $user->id)->first();

        $articulos =  CompraVenta::where('fecha', '=', $fecha)->where('id_tienda', '=', $tienda->id)->get();
        $ventas =  Ventas::where('fecha', '=', $fecha)->where('id_tienda', '=', $tienda->id)->get();
		return view('admin.Ventas', compact('ventas','articulos'));

	}

	public function ventasT(){

		$ventas =  Ventas::all();
		return view('admin.Ventas', compact('ventas'));

	}

	public function ventasF(Request $request){


		$ventas =  Ventas::where('fecha', '=', $request['fecha'])->get();
		return view('admin.Ventas', compact('ventas'));

	}

	 public function AgregarTienda(Request $request){
		$user = Auth::user();

	    $carbon = new \Carbon\Carbon();
		$date = $carbon->now();
		$fecha = $date->format('Y-m-d');

	 	$admin = User::create([
            'name' => $request['admin'],
            'email' => $request['email'],
            'password' => Hash::make($data['password']),
        ]);

       $tienda = Tiendas::create([
            'nombre' => $data['NombreT'],
            'admin' => $admin->id,
            'email' => $data['email'],
            'creado_por' => $user->id,
            'created_at' => $fecha,
            'password' => Hash::make($data['password']),
        ]);

       $relacion = Relacion::create([
            'id_tienda' => $tienda->id,
            'id_users' => $user->id,
        ]);

       	$relacionT = $user->tienda;
       	dd($relacionT);
		return view('admin.Tiendas', compact('ventas'));

    }

	 public function Tienda(Request $request){
		set_time_limit(0);

	 	$user = Auth::user();
       	$tiendas = Tiendas::where('creado_por','=', $user->id)->get();
		return view('admin.Tiendas', compact('tiendas'));

    }

    //
}
