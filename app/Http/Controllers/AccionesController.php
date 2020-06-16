<?php

namespace App\Http\Controllers;

use App\CompraVenta;
use App\Ventas;
use App\Vidrios;
use App\Pedidos;
use App\Reparacion;

use Redirect;


use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;

class AccionesController extends Controller
{

 public function AgregarVenta(Request $request)
    {
    	$carbon = new \Carbon\Carbon();
		$date = $carbon->now();
		$fecha = $date->format('Y-m-d');

    	$total = $request['precio'] * $request['cantidad'];
    	$compra =  CompraVenta::create(array(
    		'IngresoEgreso' => 'Venta',
    		'tipo' => $request['tipo'],
    		'clave' => $request['marca'] . ' ' . $request['modelo'],
    		'cantidad' => $request['cantidad'],
    		'precio' => $request['precio'],
    		'detalle' => $request['descripcion'],
    		'fecha' => $fecha,
    		'total' => $total

    	));

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

    	$carbon = new \Carbon\Carbon();
		$date = $carbon->now();
		$fecha = $date->format('Y-m-d');

    	$instancia =  CompraVenta::create(array(
    		'IngresoEgreso' => 'Gasto',
    		'tipo' => $request['tipo'],
    		'precio' => $request['precio'],
    		'detalle' => $request['descripcion'],
    		'fecha' => $fecha,
    		'total' => $request['precio']

    	));


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

    public function getModelos(Request $request)
     {
        //$modelos = Vidrios::where('marca','=', $request['marca'])->get('modelo');
         //return view('home', compact('modelos'));
     }


    public function AgregarPedido(Request $request)
     {
        $carbon = new \Carbon\Carbon();
		$date = $carbon->now();
		$fecha = $date->format('Y-m-d');

     	$canP = $request['precio'] * $request['cantidad'];
     	$total = $canP - $request['abono'];

    	Pedidos::create(array(
    		'tipo' => $request['marca'],
    		'descripcion' => $request['modelo'],
    		'precio' => $request['precio'],
    		'abono' => $request['abono'],
    		'cantidad' => $request['cantidad'],
    		'fecha' => $request['fecha'],
    		'total' => $total,
    		'estado' => 'pendiente'
    	));

    	$request['tipo'] = 'Pedido';
    	$request['cantidad'] = 1;

    	if ($request['abono'] > 0) {
    		$request['precio'] = $request['abono'] ;
			$this->AgregarVenta($request);
      	}else{

			return Redirect::route('home');
      	}


     }



     public function AgregarReparacion(Request $request)
     {
    	$carbon = new \Carbon\Carbon();
		$date = $carbon->now();
		$fecha = $date->format('Y-m-d');
     	$total = $request['precio'] - $request['abono'];
    	$reparacion =  Reparacion::create(array(
    		'marca' => $request['marca'],
    		'modelo' => $request['modelo'],
    		'reparacion' => $request['reparacion'],
    		'detalle' => $request['detalle'],
    		'cliente' => $request['cliente'],
    		'telefono' => $request['telefono'],
    		'detalle' => $request['descripcion'],
    		'fecha' => $fecha,
    		'precio' => $request['precio'],
    		'abono' => $request['abono'],
    		'total' => $total,
    		'estado' => 'pendiente',
    		'fecha_de_entrega' => ''

    	));
    	$request['tipo'] = 'Reparacion';
    	$request['cantidad'] = 1;

    	if ($request['abono'] > 0) {
    		$request['precio'] = $request['abono'] ;
			$this->AgregarVenta($request);
      	}else{

			return Redirect::route('home');
      	}


     }

    
}
