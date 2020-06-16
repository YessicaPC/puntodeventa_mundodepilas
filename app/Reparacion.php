<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Notifications\Notifiable;

class Reparacion extends Model
{
    use Notifiable;

     protected $table = 'repacioncelulares';


    protected $guard = 'repacioncelulares';

    protected $fillable = ['marca','modelo','reparacion', 'detalle', 'cliente', 'telefono','fecha','precio','abono','total','estado','fecha_de_entrega'];

    public $timestamps = false;



}
