<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Foundation\Auth\User as Authenticatable;

class Adminlogin extends Authenticatable
{
    use HasFactory;
    protected $table = 'adminlogins';
    protected $fillable = ['username', 'password'];
    protected $hidden = ['password'];
}

