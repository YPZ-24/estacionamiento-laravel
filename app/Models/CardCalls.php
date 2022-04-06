<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Position;
use App\Models\CardCallUsers;

class CardCalls extends Model
{
    use HasFactory;

    //Llaves foraneas
    public function representativeBuilding(){
        return $this->hasOne(Position::class);
    }

    public function CardCallUsers(){
        return $this->hasMany(CardCallUsers::class);
    }
}
