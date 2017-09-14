<?php

use Illuminate\Database\Seeder;

class CommentsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('comments')->insert([
            'post_id' => '1',
            'message' =>'Hello',
            'user_id' => '2',
            'created_at' => \DB::raw('CURRENT_TIMESTAMP'),
            'updated_at' => \DB::raw('CURRENT_TIMESTAMP')
        ]);
        
        DB::table('comments')->insert([
            'post_id' => '2',
            'message' =>'Hello',
            'user_id' => '6',
            'created_at' => \DB::raw('CURRENT_TIMESTAMP'),
            'updated_at' => \DB::raw('CURRENT_TIMESTAMP')
        ]);
        
        DB::table('comments')->insert([
            'post_id' => '3',
            'message' =>'Hello',
            'user_id' => '3',
            'created_at' => \DB::raw('CURRENT_TIMESTAMP'),
            'updated_at' => \DB::raw('CURRENT_TIMESTAMP')
        ]);
        
        DB::table('comments')->insert([
            'post_id' => '4',
            'message' =>'Hello',
            'user_id' => '4',
            'created_at' => \DB::raw('CURRENT_TIMESTAMP'),
            'updated_at' => \DB::raw('CURRENT_TIMESTAMP')
        ]);
        
        DB::table('comments')->insert([
            'post_id' => '1',
            'message' =>'Hello',
            'user_id' => '5',
            'created_at' => \DB::raw('CURRENT_TIMESTAMP'),
            'updated_at' => \DB::raw('CURRENT_TIMESTAMP')
        ]);
        
        DB::table('comments')->insert([
            'post_id' => '2',
            'message' =>'Hello',
            'user_id' => '7',
            'created_at' => \DB::raw('CURRENT_TIMESTAMP'),
            'updated_at' => \DB::raw('CURRENT_TIMESTAMP')
        ]);
        
       
    }
}
