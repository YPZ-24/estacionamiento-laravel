<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Building;
use App\Models\Card;

class CatParkingPlace extends Model
{
    use HasFactory;

    //LLaves foraneas
    public function Building(){
        return $this->hasOne(Building::class);
    }

    public function Card(){
        return $this->hasOne(Card::class);
    }
}
