<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\User;
use App\Models\CatSanction;
use App\Models\Position;

class Sanction extends Model
{
    use HasFactory;

    //Llaves foraneas
    public function User(){
        return $this->hasOne(User::class);
    }

    public function Position(){
        return $this->hasOne(Position::class);
    }

    public function CatSanction(){
        return $this->hasOne(CatSanction::class);
    } 
    
}
