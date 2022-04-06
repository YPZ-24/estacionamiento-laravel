<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\User;
use App\Models\Card;

class Car extends Model
{
    use HasFactory;

    //LLaves foraneas
    public function User(){
        return $this->hasOne(User::class);
    }

    public function Card(){
        return $this->hasOne(Card::class);
    }

}
