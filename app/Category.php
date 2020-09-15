<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\Category

class Category extends Model
{
    public function sector(){
        return $this->belongsTo(Sector::class);
    }
}
