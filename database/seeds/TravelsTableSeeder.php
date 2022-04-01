<?php

use App\Travel;
use Illuminate\Database\Seeder;

class TravelsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        
        $trip = new Travel();

        $trip->city = 'Tokyo';
        $trip->country = 'Japan';
        $trip->costo = 2199;
        $trip->description = 'La posizione sull’oceano rende Tokyo una città non soggetta a grandi sbalzi termici tra giorno e notte. I mesi più piacevoli per un viaggio a Tokyo sono sicuramente quelli che vanno da Settembre a Novembre e da Marzo a Maggio. L’estate è molto calda e umida mentre l’inverno ha temperature comparabili a quelle del nord Italia, con il vantaggio su quest’ultimo di cieli quasi sempre sereni e tersi.';
        $trip->partenza = '2022-08-01';
        $trip->ritorno = '2022-08-15';

        $trip->save();

    }
}
