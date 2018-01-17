<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class User extends Model
{
    protected $table='users';

    protected $primaryKey='id';

    public $timestamps=false;

    public function scopeId($query){
        return $query->where('id','>','0');
    }


}
