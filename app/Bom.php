<?php


namespace App;

use Illuminate\Database\Eloquent\Model;

class Bom extends Model
{
    protected $table = 'bom';

    public function material() {
        return $this->hasOne('App\Raw_material', 'id', 'material_id');
    }
}
