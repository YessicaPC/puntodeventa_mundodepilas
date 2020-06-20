<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Notifications\Notifiable;

class Tiendas extends Model
{
    use Notifiable;

     protected $table = 'tiendas';


    protected $guard = 'tiendas';

    protected $fillable = ['nombre','admin', 'email', 'password'];

    public $timestamps = false;

     public function ventasTienda() {
    
        return $this->hasOne('App\Venta', 'id_tienda');
    }  

}
