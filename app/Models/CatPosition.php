<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Position;

class CatPositions extends Model
{
    use HasFactory;

    //Llaves foraneas
    public function Position(){
        return $this->hasMany(Position::class);
    }
}
