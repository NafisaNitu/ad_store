<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Database\Eloquent\Model;

class customer extends Authenticatable
{
    use HasFactory;
    protected $hidden = [
        'password',
        'remember_token',
    ];
}
