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

class DatabaseSeeder extends Seeder
{
    
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {

        $cars = Car::factory(2);
        $users = User::factory(10)->has(
            $cars
        );
        $catParkingPlace = CatParkingPlace::factory(2);

        $buildings = Building::factory(10)->has(
            Apartment::factory(3)->has(
                $users
            )
        )->has(
            $catParkingPlace
        );

        $catCardType = CatCardType::factory()->count(3);
        $cards = Card::factory()->count(2);

        $catCardType->has($cards)->create();
        $cars->has($cards)->create();
        $buildings->create();
        

        //


        /*Card::factory(10)->make()->each(function ($card) {
            $card->car()->associate(Car::all()->random(1));
            //$card->catCardType()->associate(CatCardType::inRandomOrder()->first());
            //$card->catParkingPlace()->associate(CatParkingPlace::inRandomOrder()->first());
        })->save();*/

        //User::factory(10)->has()->create();


    }
}
