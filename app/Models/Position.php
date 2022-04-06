<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\CatPosition;
use App\Models\Sanction;
use App\Models\ExtraordinaryExpenses;
use App\Models\IncomeAndExpenses;
use App\Models\GeneralAssemblyUsers;

class Positions extends Model
{
    use HasFactory;

    //Llaves foraneas
    public function CatPosition(){
        return $this->hasOne(CatPosition::class);
    }

    public function User(){
        return $this->hasOne(User::class);
    }

    public function Sanction(){
        return $this->hasMany(Sanction::class);
    }

    public function ExtraordinaryExpenses(){
        return $this->hasMany(ExtraordinaryExpenses::class);
    }

    public function IncomeAndExpenses(){
        return $this->hasMany(IncomeAndExpenses::class);
    }

    public function GeneralAssemblyUsers(){
        return $this->hasMany(GeneralAssemblyUsers::class);
    }

    public function CardCalls(){
        return $this->hasMany(CardCalls::class);
    }
}
