<?php

namespace App\Models;

use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;

class User extends Authenticatable
{
    use HasFactory, Notifiable;
    protected $table = 'users';
    protected $fillable = [
        'email',
        'password',
        'name',
        'surname',
        'middle_name',
        'phone',
        'admin',
        'discount_card',
        'born_data',
    ];
    protected $hidden = [
        'password',
        'remember_token',
        'admin',
    ];
}
