<?php

use Illuminate\Database\Seeder;

class RegionsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('regions')->insert([
            'name' => 'AL',
            'description' => 'Alagoas'            
        ]);
        DB::table('regions')->insert([
            'name' => 'BA',
            'description' => 'Bahia'            
        ]);
        DB::table('regions')->insert([
            'name' => 'CE',
            'description' => 'Ceará'            
        ]);
        DB::table('regions')->insert([
            'name' => 'PE',
            'description' => 'Pernambuco'            
        ]);

        DB::table('regions')->insert([
            'name' => 'RJ',
            'description' => 'Rio de Janeiro'            
        ]);

        DB::table('regions')->insert([
            'name' => 'RN',
            'description' => 'Rio Grande do Norte'            
        ]);

        DB::table('regions')->insert([
            'name' => 'SP',
            'description' => 'São Paulo'            
        ]);
    }
}
