<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Sanction;

class CatSanction extends Model
{
    use HasFactory;

    public function Sanction(){
        return $this->hasMany(Sanction::class);
    }
}
