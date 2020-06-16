<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Notifications\Notifiable;

class Vidrios extends Model
{

	const SAMSUNG = array(
        'Grand Primer' => 'Grand Primer',
        'J7' => 'J7'
    );
    use Notifiable;

     protected $table = 'vidriosT';


    protected $guard = 'vidriosT';

    protected $fillable = ['marca','modelo', 'precio', '0'];


}
