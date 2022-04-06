<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Model\Building;
use App\Model\Card;

class CatParkingPlace extends Model
{
    use HasFactory;

    //LLaves foraneas
    public function Building(){
        return $this->hasOne(Building::class);
    }

    public function Card(){
        return $this->hasMany(Card::class);
    }
}
