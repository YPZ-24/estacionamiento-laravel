<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Card;
use App\Models\CatCardDocument;

class CardDocument extends Model
{
    use HasFactory;

    //Laves foraneas

    public function Card(){
        return $this->hasOne(Card::class);
    }

    public function CatCardDocument(){
        return $this->hasOne(CatCardDocument::class);
    }
}
