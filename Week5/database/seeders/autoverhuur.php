<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class autoverhuur extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        {
            DB::table('leenautos')->insert([
                'merk' => 'Audi',
                'type' => 'RS6',
                'bouwjaar' => '2020'
            ]);

            
        }

        {
            DB::table('leenautos')->insert([
                'merk' => 'Mercedes Benz',
                'type' => 'A class',
                'bouwjaar' => '2019'
            ]);

            
        }

        {
            DB::table('leenautos')->insert([
                'merk' => 'Mercedes Benz',
                'type' => 'S class',
                'bouwjaar' => '2022'
            ]);
            
        }
    }
}
