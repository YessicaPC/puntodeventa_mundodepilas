<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Notifications\Notifiable;

class Vidrios extends Model
{
	 const Modelo = array(
        'Samsung' => 'Samsung',
        'Lg' => 'Marketing'
    );
    use Notifiable;

     protected $table = 'vidriosT';


    protected $guard = 'vidriosT';

    protected $fillable = ['id_tienda','fecha','venta', 'gastos', 'total'];


}
