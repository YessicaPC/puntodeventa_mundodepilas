<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Notifications\Notifiable;

class Ventas extends Model
{
    use Notifiable;

     protected $table = 'ventas';


    protected $guard = 'ventas';

    protected $fillable = ['fecha','venta', 'gastos', 'total'];

    public $timestamps = false;


}
