<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Notifications\Notifiable;

class CompraVenta extends Model
{
    use Notifiable;

     protected $table = 'compraventa';


    protected $guard = 'compraventa';

    protected $fillable = ['IngresoEgreso','tipo','clave', 'cantidad', 'precio', 'descripcion','total'];

    public $timestamps = false;



}
