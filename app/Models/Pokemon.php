<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Pokemon extends Model
{
    use HasFactory;
    public function photos(){
        return $this->belongsTo(Photo::class, 'photo_id', 'id');
    }

    public function types(){
        return $this->belongsTo(Type::class, 'type_id', 'id');
    }
}
