<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class supplier extends Model
{
    protected $table = 'supplier';
    protected $attributes = ['status' => 1];
    protected $fillable = ['name','address', 'phone', 'email'];
}
