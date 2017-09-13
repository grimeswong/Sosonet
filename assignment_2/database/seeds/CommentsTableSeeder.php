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
            'user_id' => 'John',
            'created_at' => \DB::raw('CURRENT_TIMESTAMP'),
            'updated_at' => \DB::raw('CURRENT_TIMESTAMP')
        ]);
        
        DB::table('comments')->insert([
            'post_id' => '2',
            'message' =>'Hello',
            'user_id' => 'June',
            'created_at' => \DB::raw('CURRENT_TIMESTAMP'),
            'updated_at' => \DB::raw('CURRENT_TIMESTAMP')
        ]);
        
        DB::table('comments')->insert([
            'post_id' => '3',
            'message' =>'Hello',
            'user_id' => 'Tom',
            'created_at' => \DB::raw('CURRENT_TIMESTAMP'),
            'updated_at' => \DB::raw('CURRENT_TIMESTAMP')
        ]);
        
        DB::table('comments')->insert([
            'post_id' => '4',
            'message' =>'Hello',
            'user_id' => 'Dave',
            'created_at' => \DB::raw('CURRENT_TIMESTAMP'),
            'updated_at' => \DB::raw('CURRENT_TIMESTAMP')
        ]);
        
        DB::table('comments')->insert([
            'post_id' => '1',
            'message' =>'Hello',
            'user_id' => 'Peter',
            'created_at' => \DB::raw('CURRENT_TIMESTAMP'),
            'updated_at' => \DB::raw('CURRENT_TIMESTAMP')
        ]);
        
        DB::table('comments')->insert([
            'post_id' => '2',
            'message' =>'Hello',
            'user_id' => 'Ann',
            'created_at' => \DB::raw('CURRENT_TIMESTAMP'),
            'updated_at' => \DB::raw('CURRENT_TIMESTAMP')
        ]);
        
       
    }
}
