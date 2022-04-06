<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Building;
use App\Models\User;

class Apartment extends Model
{
    use HasFactory;
    
    protected $fillable = [
        'name',
    ];
    
    public function Building(){
        return $this->hasOne(Building::class);
    }

    public function User(){
        return $this->hasMany(User::class);
    }
}
