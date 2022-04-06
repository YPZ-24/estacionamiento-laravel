<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Position;

class ExtraordinaryExpenses extends Model
{
    use HasFactory;

    public function Treasurer(){
        return $this->hasOne(Position::class);
    }

    public function President(){
        return $this->hasOne(Position::class);
    }
}
