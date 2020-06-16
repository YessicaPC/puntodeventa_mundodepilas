<?php

namespace App\Http\Controllers;

use App\Ventas;
use App\CompraVenta;

use Redirect;


use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;

class AccionesController extends Controller
{

 public function AgregarVenta(Request $request)
    {


    	$total = $request['precio'] * $request['cantidad'];
    	$instancia =  CompraVenta::create(array(
    		'IngresoEgreso' => 'Venta',
    		'tipo' => $request['tipo'],
    		'clave' => $request['marca'] . ' ' . $request['modelo'],
    		'cantidad' => $request['cantidad'],
    		'precio' => $request['precio'],
    		'detalle' => $request['descripcion'],
    		'total' => $total

    	));
    	$carbon = new \Carbon\Carbon();
		$date = $carbon->now();
		$fecha = $date->format('Y-m-d');

		$venta =  Ventas::where('fecha', '=', $fecha)->first();
		if (is_null($venta)) {
			$venta =  Ventas::create(array(
    		'fecha' => $fecha,
    		'venta' => $total,
    		'gastos' => 0,
    		'total' => $total

    	));

		}else{
		$ventaAct = $venta->venta + $total;
		$totalAct = $venta->total + $total;

		$venta->venta = $ventaAct;
		$venta->total = $totalAct;

		$venta->save();

		}

		 return Redirect::route('home');

    }


    public function AgregarGasto(Request $request){

    	$instancia =  CompraVenta::create(array(
    		'IngresoEgreso' => 'Gasto',
    		'tipo' => $request['tipo'],
    		'precio' => $request['precio'],
    		'detalle' => $request['descripcion'],
    		'total' => $request['precio']

    	));

    	$carbon = new \Carbon\Carbon();
		$date = $carbon->now();
		$fecha = $date->format('Y-m-d');

		$venta =  Ventas::where('fecha', '=', $fecha)->first();
		if (is_null($venta)) {
			$venta =  Ventas::create(array(
    		'fecha' => $fecha,
    		'venta' => 0,
    		'gastos' => $request['precio'],
    		'total' => $request['precio']

    	));

		}else{
		$ventaAct = $venta->gastos + $request['precio'];
		$totalAct = $venta->total - $request['precio'];

		$venta->gastos = $ventaAct;
		$venta->total = $totalAct;

		$venta->save();

		}
		
		return Redirect::route('home');


    }

    
}
