<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\CatCardType;
use App\Models\Car;
use App\Models\CatParkingPlace;
use App\Models\CardDocument;

class Card extends Model
{
    use HasFactory;

    protected $fillable = [
        'period',
        'car_id',
        'cat_card_type_id',
        'cat_parking_place_id',
    ];

    //Llaves foraneas
    public function CatCardType(){
        return $this->hasOne(CatCardType::class);
    }

    public function CatParkingPlace(){
        return $this->hasOne(CatParkingPlace::class);
    }

    public function Cars(){
        return $this->hasOne(Car::class);
    }

    public function CardDocument(){
        return $this->hasMany(CardDocument::class);
    }
}
