<?php

use Illuminate\Database\Seeder;

class PicsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('pics')->delete();

        for($i=1; $i <=25;$i++)
        {
            DB::table('pics')->insert([
                "beach_id" => 2,
                "url" => "BA/PortoSeguro/porto$i.jpg"            
            ]);
        }
        for($i=1; $i <=19;$i++)
        {
            DB::table('pics')->insert([
                "beach_id" => 3,
                "url" => "BA/Praia_do_forte/praia_forte$i.jpg"            
            ]);
        }       
         for($i=1; $i <=8;$i++)
        {
            DB::table('pics')->insert([
                "beach_id" => 5,
                "url" => "CE/fortaleza/fortaleza$i.jpg"            
            ]);
        }  
        for($i=1; $i <=10;$i++)
        {
            DB::table('pics')->insert([
                "beach_id" => 7,
                "url" => "CE/Lagoinha/lagoinha$i.jpg"            
            ]);
        }      
        for($i=1; $i <=10;$i++)
        {
            DB::table('pics')->insert([
                "beach_id" => 9,
                "url" => "RJ/cabofrio/cabofrio$i.jpg"            
            ]);
        }      


        // DB::table('beaches')->insert([
        //     "beach_id" => "",
        //     "url" => ""            
        // ]);
    }
}
