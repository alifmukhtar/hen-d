<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Raw_material extends Model
{
    protected $table = 'rawmaterial';
    protected $fillable = ['item','supplier', 'unit', 'price_pr_unt', 'shlf_life', 'lead_time', 'sfty_stck', 'hlding_cost'];
}
