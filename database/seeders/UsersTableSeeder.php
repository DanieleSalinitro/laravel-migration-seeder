<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Faker\Generator as Faker;
use App\Models\Train;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run(Faker $faker)
    {
        for ($i = 0; $i < 25; $i++) {
            $new_train = new Train();
            $new_train->azienda = $faker->company();
            $new_train->stazione_di_partenza = $faker->city();
            $new_train->stazione_di_arrivo = $faker->city();
            $new_train->orario_di_partenza = $faker->dateTimeBetween('-24 hours', '-2 hours');
            $new_train->orario_di_arrivo = $faker->dateTimeBetween('2 hours', '+8 hours');
            $new_train->codice_treno = $faker->regexify('[A-Za-z0-9]{5}');
            $new_train->numero_carrozze = $faker->numberBetween(1, 10);
            $new_train->in_orario = $faker->numberBetween(0, 1);
            $new_train->cancellato = $faker->numberBetween(0, 1);
            $new_train->save();
        }
    }
}
