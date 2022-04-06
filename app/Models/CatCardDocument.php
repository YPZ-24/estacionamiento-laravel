<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\CardDocument;

class CatCardDocuments extends Model
{
    use HasFactory;

    //Llaves foraneas
    public function CardDocument(){
        return $this->hasMany(CardDocument::class);
    }
}
