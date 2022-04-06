<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Card;

class CatCardType extends Model
{
    use HasFactory;

    //LLaves foraneas

    public function Card(){
        return $this->hasMany(Card::class);
    }
}
