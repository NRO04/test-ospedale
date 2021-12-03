<?php

namespace App\Models\Users;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Users extends Model
{
    use HasFactory;

    protected $table = 'tb_users';

    protected $fillable = ['name', 'email', 'password', 'rol_id', 'eps_id',
        'nit', 'phone', 'gender', 'date_birth',];
}
