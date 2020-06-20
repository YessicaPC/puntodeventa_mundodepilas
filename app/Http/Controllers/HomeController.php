<?php

namespace App\Http\Controllers;

use App\Ventas;
use App\Tiendas;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;


class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        $user = Auth::user();

        $tienda = Tiendas::where('admin', '=', $user->id)->first();
        
        $carbon = new \Carbon\Carbon();
        $date = $carbon->now();
        $fecha = $date->format('Y-m-d');
        $venta =  Ventas::where('id', '=', $tienda->id)->first();

        if ($user->rol != 1 ) {
        $venta =  Ventas::where('id', '=', $tienda->id)->first();
           return view('home', compact('venta','fecha'));
        }else {
           return view('admin.Registro', compact('venta','fecha'));

        }
    }
    public function caja(){
        $user = Auth::user();

        $tienda = Tiendas::where('admin', '=', $user->id)->first();
        
        $carbon = new \Carbon\Carbon();
        $date = $carbon->now();
        $fecha = $date->format('Y-m-d');

        $venta =  Ventas::where('fecha', '=', $fecha)->where('id_tienda', '=', $tienda->id)->first();
        if ($user->rol != 1 ) {
           return view('home', compact('venta','fecha'));
        }else {
           return view('admin.Caja', compact('venta','fecha'));

        }
    }
}
