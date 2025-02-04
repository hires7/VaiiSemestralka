<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Car extends Model
{
    
    protected $fillable = ['user_id', 'brand', 'model', 'license_plate', 'year',];

    public function user() {
        return $this->belongsTo(User::class);
    }

}
