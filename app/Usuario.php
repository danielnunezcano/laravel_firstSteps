<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Usuario extends Model
{
    //
    public $timestamps = false;
    protected $table = "usuarios";
    protected $primaryKey = "id";
    protected $casts = ["id" => "INT"];

    protected $fillable = ['Username','Password','created_at','updated_at'];
}
