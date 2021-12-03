<?php

namespace App\Models\Users;

use App\Models\Eps\Eps;
use App\Models\Roles\Roles;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Users extends Model
{
    use HasFactory;

    protected $table = 'tb_users';

    protected $fillable = ['name', 'email', 'password', 'rol_id', 'eps_id',
        'nit', 'phone', 'gender', 'date_birth'];

    function rol(): \Illuminate\Database\Eloquent\Relations\BelongsTo
    {
        return $this->belongsTo(Roles::class, 'rol_id');
    }

    function eps(): \Illuminate\Database\Eloquent\Relations\BelongsTo
    {
        return $this->belongsTo(Eps::class, 'eps_id');
    }
}
