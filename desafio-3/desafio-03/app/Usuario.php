<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Usuario extends Model
{
    protected $fillable = ['nome','email','senha','dataNascimento'];
    protected $guarded = ['id','created_at','update_at'];
    protected $table = 'usuarios';
}
