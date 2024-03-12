<?php

namespace Database\Seeders;
use Illuminate\Support\Facades\DB; // Correção do nome da classe Facades
use Illuminate\Database\Seeder;

class FlightsSeeders extends Seeder // Correção do nome da classe
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table("flights")->insert([
            'name' => 'voo 737',
            'airline' => 'Gol Linhas Aéreas' // Correção do nome da companhia aérea
        ]);
        //
    }
}
