<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class customer extends Model
{
    protected $table = 'customer';
    protected $attributes = ['status' => 1];
    protected $fillable = ['name','address', 'phone', 'email'];
}
