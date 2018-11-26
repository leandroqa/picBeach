<?php

use Illuminate\Database\Seeder;

class ReviewsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('reviews')->delete();

        DB::table('reviews')->insert([
            'id' => 1,
            'beach_id' => 11,
            'review' => 'First review'            
        ]);
    }
}
