<?php

namespace Database\Seeders;

use App\Models\Train;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

use Faker\Generator as Faker;

class trains_table_seeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(Faker $faker): void
    {

        for ($i = 0; $i < 12; $i++) {

            $new_train = new Train();

            $new_train->azienda = $faker->name();
            $new_train->stazione_partenza = $faker->numberBetween(0, 15);
            $new_train->stazione_arrivo = $faker->numberBetween(0, 15);
            $new_train->ora_partenza = $faker->time();
            $new_train->ora_arrivo = $faker->time();
            $new_train->codice_treno =  $faker->randomNumber(5, true);
            $new_train->numero_carrozze = $faker->numberBetween(1, 25);
            $new_train->in_orario = 1;

            $new_train->save();
        }




        // $new_train = new Train();
        // $new_train->azienda = "Freccia Rossa";
        // $new_train->stazione_partenza = 3;
        // $new_train->stazione_arrivo = 8;
        // $new_train->ora_partenza = 122300;
        // $new_train->ora_arrivo = 182300;
        // $new_train->codice_treno = 27375;
        // $new_train->numero_carrozze = 15;
        // $new_train->in_orario = 1;
        // $new_train->save();

        // $new_train = new Train();
        // $new_train->azienda = "trenitalia";
        // $new_train->stazione_partenza = 6;
        // $new_train->stazione_arrivo = 2;
        // $new_train->ora_partenza = 10100;
        // $new_train->ora_arrivo = 112300;
        // $new_train->codice_treno = 27304;
        // $new_train->numero_carrozze = 11;
        // $new_train->in_orario = 1;
        // $new_train->save();



    }
}
