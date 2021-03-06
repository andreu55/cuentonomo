<?php

namespace App;

use Illuminate\Notifications\Notifiable;
use Illuminate\Foundation\Auth\User as Authenticatable;

class User extends Authenticatable
{
    use Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name', 'email', 'password',
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];

    public function facturas(){ return $this->hasMany('App\Factura'); }
    public function clients(){ return $this->hasMany('App\Client'); }
    public function gastos(){ return $this->hasMany('App\Gasto'); }
    public function jornadas(){ return $this->hasMany('App\Jornada'); }
    public function horas(){ return $this->hasMany('App\Hora'); }
}
