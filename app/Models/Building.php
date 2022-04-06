<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Apartment;
use App\Models\CatParkingPlace;

class Building extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
    ];

    public function Apartment(){
        return $this->hasMany(Apartment::class);
    }

    public function CatParkingPlace(){
        return $this->hasMany(CatParkingPlace::class);
    }
}
