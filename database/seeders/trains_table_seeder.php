<?php

namespace Database\Seeders;

use App\Models\Train;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class trains_table_seeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $treno_padova_roma = new Train();
        $treno_padova_roma->azienda = "Freccia Rossa";
        $treno_padova_roma->stazione_partenza = 3;
        $treno_padova_roma->stazione_arrivo = 8;
        $treno_padova_roma->ora_partenza = 10.00;
        $treno_padova_roma->ora_arrivo = 18.23;
        $treno_padova_roma->codice_treno = 27375;
        $treno_padova_roma->numero_carrozze = 15;
        $treno_padova_roma->in_orario = 1;
        $treno_padova_roma->save();
        
        $treno_padova_venezia = new Train();
        $treno_padova_venezia->azienda = "trenitalia";
        $treno_padova_venezia->stazione_partenza = 6;
        $treno_padova_venezia->stazione_arrivo = 2;
        $treno_padova_venezia->ora_partenza = 10.11;
        $treno_padova_venezia->ora_arrivo = 11.23;
        $treno_padova_venezia->codice_treno = 27304;
        $treno_padova_venezia->numero_carrozze = 11;
        $treno_padova_venezia->in_orario = 1;
        $treno_padova_venezia->save();

    }
}
