<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ContactSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table("contacts")->insert([

            'name'      => 'marlon',
            'email'     => 'marlon@gmail.com',
            'phone'     => '(00) 9 9956-0547',
            'data_nasc' => '2002-09-19',
        ]);
        
        DB::table("contacts")->insert([

            'name'      => 'carlos',
            'email'     => 'carlos@gmail.com',
            'phone'     => '(00) 9 9999-9999',
            'data_nasc' => '2000-12-01',
        ]);

    }
}
