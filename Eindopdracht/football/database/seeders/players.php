<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class players extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        {

            //1
             DB::table('players')->insert([
                'Name' => 'Karim Benzema',
                'Position' => 'Attacker',
                'Nationality' => 'France',
                'Birthdate' => '1987-12-19',
            ]);




            //2
            DB::table('players')->insert([
                'Name' => 'Luka Modric',
                'Position' => 'Midfielder',
                'Nationality' => 'Croatia',
                'Birthdate' => '1985-09-09',
            ]);




              //3
              DB::table('players')->insert([
                'Name' => 'Frenkie de Jong',
                'Position' => 'Midfielder',
                'Nationality' => 'Netherlands',
                'Birthdate' => '1997-05-12',
            ]);


            //4
            DB::table('players')->insert([
                'Name' => 'Robert Lewandowski',
                'Position' => 'Attacker',
                'Nationality' => 'Poland',
                'Birthdate' => '1988-08-21',
            ]);


            //5
            DB::table('players')->insert([
                'Name' => 'Antoine Griezmann',
                'Position' => 'Attacker',
                'Nationality' => 'France',
                'Birthdate' => '1991-03-21',
            ]);


            //6
            DB::table('players')->insert([
                'Name' => 'Jan Oblak',
                'Position' => 'Goalkeeper',
                'Nationality' => 'Slovenia',
                'Birthdate' => '1993-01-07',
            ]);



            //7
            DB::table('players')->insert([
                'Name' => 'Cristiano Ronaldo',
                'Position' => 'Attcaker',
                'Nationality' => 'Portugal',
                'Birthdate' => '1985-02-05',
            ]);


            //8
            DB::table('players')->insert([
                'Name' => 'David de Gea',
                'Position' => 'Goalkeeper',
                'Nationality' => 'Spain',
                'Birthdate' => '1990-09-07',
            ]);



            //9
            DB::table('players')->insert([
                'Name' => 'Martin Odegaard',
                'Position' => 'Midfielder',
                'Nationality' => 'Norway',
                'Birthdate' => '1998-12-17',
            ]);



            //10
            DB::table('players')->insert([
                'Name' => 'Bukayo Saka',
                'Position' => 'Attacker',
                'Nationality' => 'England',
                'Birthdate' => '2001-09-05',
            ]);



            //11
            DB::table('players')->insert([
                'Name' => 'Mohammed Salah',
                'Position' => 'Attacker',
                'Nationality' => 'Egypt',
                'Birthdate' => '1992-06-15',
            ]);



            //12
            DB::table('players')->insert([
                'Name' => 'Virgil van Dijk',
                'Position' => 'Defender',
                'Nationality' => 'Netherlands',
                'Birthdate' => '1991-07-08',
            ]);



            //13
            DB::table('players')->insert([
                'Name' => 'Erling Haalnd',
                'Position' => 'Attacker',
                'Nationality' => 'Norway',
                'Birthdate' => '2000-07-21',
            ]);



            //14
            DB::table('players')->insert([
                'Name' => 'Kevin de Bruyne',
                'Position' => 'Midfielder',
                'Nationality' => 'Belgium',
                'Birthdate' => '1991-06-28',
            ]);



            //15
            DB::table('players')->insert([
                'Name' => 'Zlatan Ibrahimovic',
                'Position' => 'Attacker',
                'Nationality' => 'Sweden',
                'Birthdate' => '1981-10-03',
            ]);



            //16
            DB::table('players')->insert([
                'Name' => 'Rafael Leao',
                'Position' => 'Attacker',
                'Nationality' => 'Portugal',
                'Birthdate' => '1999-06-10',
            ]);



            //17
            DB::table('players')->insert([
                'Name' => 'Lautato Martinez',
                'Position' => 'Attacker',
                'Nationality' => 'Argentina',
                'Birthdate' => '1997-08-22',
            ]);



            //18
            DB::table('players')->insert([
                'Name' => 'Romelu Lukaku',
                'Position' => 'Attacker',
                'Nationality' => 'Belgium',
                'Birthdate' => '1993-05-13',
            ]);



            //19
            DB::table('players')->insert([
                'Name' => 'Dusan Vlahovic',
                'Position' => 'Attacker',
                'Nationality' => 'Serbia',
                'Birthdate' => '2000-01-28',
            ]);



            //20
            DB::table('players')->insert([
                'Name' => 'Paul Pogba',
                'Position' => 'Midfielder',
                'Nationality' => 'France',
                'Birthdate' => '1993-03-15',
            ]);



              //21
              DB::table('players')->insert([
                'Name' => 'Thomas Muller',
                'Position' => 'Attacker',
                'Nationality' => 'Germany',
                'Birthdate' => '1989-09-13',
            ]);



             //22
             DB::table('players')->insert([
                'Name' => 'Manuel Neur',
                'Position' => 'Goalkeeper',
                'Nationality' => 'Germany',
                'Birthdate' => '1986-03-27',
            ]);



            //23
            DB::table('players')->insert([
                'Name' => 'Marco Reus',
                'Position' => 'Attacker',
                'Nationality' => 'Germany',
                'Birthdate' => '1989-05-31',
            ]);



            //24
            DB::table('players')->insert([
                'Name' => 'Jude Bellingham',
                'Position' => 'Midfielder',
                'Nationality' => 'England',
                'Birthdate' => '2003-06-29',
            ]);



            //25
              DB::table('players')->insert([
                'Name' => 'Lionel Messi',
                'Position' => 'Attacker',
                'Nationality' => 'Argentina',
                'Birthdate' => '1987-06-24',
            ]);



            //26
            DB::table('players')->insert([
                'Name' => 'Neymar',
                'Position' => 'Attacker',
                'Nationality' => 'Brasil',
                'Birthdate' => '1992-02-05',
            ]);



            //27
              DB::table('players')->insert([
                'Name' => 'Dimitri Payet',
                'Position' => 'Midfielder',
                'Nationality' => 'France',
                'Birthdate' => '1987-03-29',
            ]);



            //28
            DB::table('players')->insert([
                'Name' => 'Matteo Guendouzi',
                'Position' => 'Midfielder',
                'Nationality' => 'France',
                'Birthdate' => '1999-04-14',
            ]);



            //29
               DB::table('players')->insert([
                'Name' => 'Steven Bergwijn',
                'Position' => 'Attacker',
                'Nationality' => 'Nehtherlands',
                'Birthdate' => '1997-10-08',
            ]);



            //30
            DB::table('players')->insert([
                'Name' => 'Dusan Tadic',
                'Position' => 'Attacker',
                'Nationality' => 'Serbia',
                'Birthdate' => '1988-11-20',
            ]);



            //31
               DB::table('players')->insert([
                'Name' => 'Cody Gakpo',
                'Position' => 'Attacker',
                'Nationality' => 'Nehtherlands',
                'Birthdate' => '1999-05-07',
            ]);



            //32
            DB::table('players')->insert([
                'Name' => 'Xavi Simons',
                'Position' => 'Midfielder',
                'Nationality' => 'Nehtherlands',
                'Birthdate' => '2003-04-21',
            ]);



            //33
            DB::table('players')->insert([
                'Name' => 'Orkun Kokcu',
                'Position' => 'Midfielder',
                'Nationality' => 'Turkey',
                'Birthdate' => '2000-12-29',
            ]);



            //34
            DB::table('players')->insert([
                'Name' => 'Justin Bijlow',
                'Position' => 'Goalkeeper',
                'Nationality' => 'Nehtherlands',
                'Birthdate' => '1998-01-22',
            ]);



















        }







}



}
