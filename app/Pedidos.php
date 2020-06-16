<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Notifications\Notifiable;

class Pedidos extends Model
{
    use Notifiable;

     protected $table = 'pedido';


    protected $guard = 'pedido';

    protected $fillable = ['tipo','descripcion','abono','cantidad', 'precio', 'descripcion','fecha_a_recoger','estado','total'];

    public $timestamps = false;



}
