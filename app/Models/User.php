<?php

namespace App\Models;

use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Laravel\Sanctum\HasApiTokens;
use App\Models\RequestCardWaitingList;
use App\Models\Car;
use App\Models\CardWaitingList;
use App\Models\ComplaintsAndRequest;
use App\Models\CardCallUsers;
use App\Models\Apartment;


class User extends Authenticatable
{
    use HasApiTokens, HasFactory, Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = [
        'name',
        'email',
        'password',
    ];

    /**
     * The attributes that should be hidden for serialization.
     *
     * @var array<int, string>
     */
    protected $hidden = [
        'password',
        'remember_token',
    ];

    /**
     * The attributes that should be cast.
     *
     * @var array<string, string>
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
    ];




    //Foreing keys
    public function CardWaitingList(){
        return $this->hasMany(CardWaitingList::class);
    }

    public function RequestCardWaitingList(){
        return $this->hasMany(RequestCardWaitingList::class);
    }

    public function Car(){
        return $this->hasMany(Car::class);
    }

    public function Apartment(){
        return $this->hasOne(Apartment::class);
    }

    public function ComplaintsAndRequest(){
        return $this->hasMany(ComplaintsAndRequest::class);
    }

    public function Position(){
        return $this->hasOne(Position::class);
    }

    public function CardCallUsers(){
        return $this->hasMany(CardCallUsers::class);
    }

}
