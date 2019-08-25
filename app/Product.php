<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    protected $table = 'product';
    protected $fillable = ['item','supplier', 'unit', 'price_pr_unt', 'shlf_life', 'lead_time', 'sfty_stck', 'hlding_cost'];
}
