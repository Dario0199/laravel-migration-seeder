<?php

use Illuminate\Database\Seeder;
use Faker\Generator as Faker;
use App\Travel;

class TravelsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run(Faker $faker)
    {
        for($i = 0; $i < 15; $i++){
            $new_travel = new Travel();

            $new_travel->destinaziione = $faker->text(100);
            $new_travel->hotel = $faker->text(50);
            $new_travel->pernottamento = $faker->randomDigit();
            $new_travel->prezzo = $faker->numberBetween(200, 500);

            $new_travel->save();
        }
    }
}
