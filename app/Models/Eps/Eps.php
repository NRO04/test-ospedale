<?php

namespace App\Models\Eps;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Eps extends Model
{
    use HasFactory;
    protected $table = 'tb_eps';
    protected $fillable = ['name'];
}
