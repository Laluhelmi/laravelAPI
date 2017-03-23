<?php

namespace App;
use Illuminate\Notifications\Notifiable;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Database\Eloquent\Model;

class Pengguna extends Authenticatable
{
    //
    protected $primaryKey = 'email';
    protected $table = "users";
}
