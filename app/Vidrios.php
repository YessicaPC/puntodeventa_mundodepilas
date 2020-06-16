<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Notifications\Notifiable;

class Vidrios extends Model
{
    use Notifiable;

     protected $table = 'vidriosT';


    protected $guard = 'vidriosT';

    protected $fillable = ['fecha','venta', 'gastos', 'total'];


}
