<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Notifications\Notifiable;

class Relacion extends Model
{
    use Notifiable;

     protected $table = 'relacion';


    protected $guard = 'relacion';

    protected $fillable = ['id_tienda','id_users'];

    public $timestamps = false;



}
