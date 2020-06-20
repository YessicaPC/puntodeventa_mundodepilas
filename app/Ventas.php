<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Notifications\Notifiable;

class Ventas extends Model
{
    use Notifiable;

     protected $table = 'ventas';


    protected $guard = 'ventas';

    protected $fillable = ['id_tienda','fecha','venta', 'gastos', 'total'];

    public $timestamps = false;

    public function ventasTienda() {
    
        return $this->hasOne('App\Tienda', 'id_tienda');
    }  



}
