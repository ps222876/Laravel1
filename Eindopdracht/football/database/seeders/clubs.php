<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class clubs extends Seeder
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
             DB::table('clubs')->insert([
                'Name' => 'Real Madrid',
                'League' => 'Laliga',
                'Champions_league_titels' => '14',
                'Top_scorer' => 'Cristiano Ronaldo',
            ]);




            //2

             DB::table('clubs')->insert([
                'Name' => 'Barcelona',
                'League' => 'Laliga',
                'Champions_league_titels' => '5',
                'Top_scorer' => 'Lionel Messi',
            ]);



            //3

            DB::table('clubs')->insert([
               'Name' => 'Athletico Madrid',
               'League' => 'Laliga',
               'Champions_league_titels' => '0',
               'Top_scorer' => 'Luis Aragones',
           ]);



           //4

            DB::table('clubs')->insert([
              'Name' => 'Manchester Uinted',
              'League' => 'premier league',
              'Champions_league_titels' => '3',
              'Top_scorer' => 'Wayne Rooney',
          ]);



          //5

            DB::table('clubs')->insert([
             'Name' => 'Arsenal',
             'League' => 'premier league',
             'Champions_league_titels' => '0',
             'Top_scorer' => 'Thierry Henry',
         ]);




         //6

             DB::table('clubs')->insert([
            'Name' => 'Liverpool',
            'League' => 'premier league',
            'Champions_league_titels' => '6',
            'Top_scorer' => 'Ian Rush',
        ]);




            //7

            DB::table('clubs')->insert([
           'Name' => 'Manchester City',
           'League' => 'premier league',
           'Champions_league_titels' => '0',
           'Top_scorer' => 'Sergio Aguero',
       ]);



            //8

             DB::table('clubs')->insert([
          'Name' => 'Ac Milan',
          'League' => 'Serie A',
          'Champions_league_titels' => '7',
          'Top_scorer' => 'Gunnar Nordahl',
      ]);



        //9

        DB::table('clubs')->insert([
         'Name' => 'Inter Milano',
         'League' => 'Serie A',
         'Champions_league_titels' => '2',
         'Top_scorer' => 'Giuseppe Meazza',
     ]);



        //10

         DB::table('clubs')->insert([
        'Name' => 'Juventus',
        'League' => 'Serie A',
        'Champions_league_titels' => '2',
        'Top_scorer' => 'Alessandro Del Piero',
    ]);



        //11

        DB::table('clubs')->insert([
       'Name' => 'Bayern Munich',
       'League' => 'Bundesliga',
       'Champions_league_titels' => '6',
       'Top_scorer' => 'Gerd Muller',
   ]);



        //12

         DB::table('clubs')->insert([
      'Name' => 'Borussia dortmund',
      'League' => 'Bundesliga',
      'Champions_league_titels' => '1',
      'Top_scorer' => 'Alfred Preissler',
  ]);



        //13

    DB::table('clubs')->insert([
     'Name' => 'Paris Saint germain',
     'League' => 'Ligue 1',
     'Champions_league_titels' => '0',
     'Top_scorer' => 'Kilyan Mbappe',
 ]);



    //14

    DB::table('clubs')->insert([
    'Name' => 'Olympique Marseille',
    'League' => 'Ligue 1',
    'Champions_league_titels' => '1',
    'Top_scorer' => 'Jean-Pierre Papin',
]);



    //15

    DB::table('clubs')->insert([
   'Name' => 'Ajax',
   'League' => 'Eredivisie',
   'Champions_league_titels' => '4',
   'Top_scorer' => 'Johan Cruyff',
]);



    //16

DB::table('clubs')->insert([
   'Name' => 'PSV',
   'League' => 'Eredivisie',
   'Champions_league_titels' => '1',
   'Top_scorer' => 'Willy van der Kuijlen',
]);



    //17

    DB::table('clubs')->insert([
   'Name' => 'Feyenoord',
   'League' => 'Eredivisie',
   'Champions_league_titels' => '1',
   'Top_scorer' => 'Cor van der Gijp',
]);
        }






            

            
        
    }
}
