<?php

namespace App\Http\Controllers;

use App\Ventas;

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
        if ($user->rol != 1 ) {

        $carbon = new \Carbon\Carbon();
        $date = $carbon->now();
        $fecha = $date->format('Y-m-d');

        $venta =  Ventas::where('fecha', '=', $fecha)->first();
           return view('home', compact('venta','fecha'));
        }else {
           return view('admin.Registro');

        }
    }
}
