<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\User;
use App\Models\Building;
use App\Models\Apartment;
use App\Models\Car;
use App\Models\CatCardType;
use App\Models\CatParkingPlace;
use App\Models\Card;

class DatabaseSeeder extends Seeder{

  public function run(){

    Building::factory(5)
      ->has(
        Apartment::factory(30)->has(
          User::factory(1)->has(
            Car::factory(1)
          )
        )
      )
      ->has(CatParkingPlace::factory(30))
      ->create();

    CatCardType::factory(3)->create();

    for ($i = 1; $i <= 150; $i++){
      Card::factory(1)
        ->for(Car::all()->random(1)->unique()->first())
        ->for(CatCardType::all()->random(1)->first())
        ->for(CatParkingPlace::all()->random(1)->unique()->first())
        ->create();
    }

  }
}
