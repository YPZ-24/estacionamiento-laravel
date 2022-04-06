<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\User;
use App\Models\CardCalls;

class CardCallUsers extends Model
{
    use HasFactory;

    //Llaves foraneas

    public function User(){
        return $this->hasOne(User::class);
    }

    public function CardCalls(){
        return $this->hasOne(CardCalls::class);
    }
}
