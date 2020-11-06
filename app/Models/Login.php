<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Login extends Model
{
    protected $table = "login";
    public $timestamps = true;
    protected $guarded = [];
    protected $primaryKey ="phone";
}
