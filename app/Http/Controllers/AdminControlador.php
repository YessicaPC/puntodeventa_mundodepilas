<?php

namespace App\Http\Controllers;

use App\Ventas;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;

class AdminControlador extends Controller
{

	public function venta_dia(){

		$carbon = new \Carbon\Carbon();
		$date = $carbon->now();
		$fecha = $date->format('Y-m-d');

		$ventas =  Ventas::where('fecha', '=', $fecha)->get();
		return view('admin.Ventas', compact('ventas'));

	}

	public function ventasT(){

		$ventas =  Ventas::all();
		return view('admin.Ventas', compact('ventas'));

	}

	public function ventasF(Request $request){


		$ventas =  Ventas::where('fecha', '=', $request['fecha'])->get();
		return view('admin.Ventas', compact('ventas'));

	}

	 public function AgregarVenta()
    {

    }
    //
}
