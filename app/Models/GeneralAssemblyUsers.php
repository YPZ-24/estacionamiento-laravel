<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Position;

class GeneralAssemblyUsers extends Model
{
    use HasFactory;

    //Llaves foraneas
    public function Creator(){
        return $this->hasOne(Position::class);
    }
}
