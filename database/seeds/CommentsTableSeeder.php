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
            'post_id' => '13',
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
        
        DB::table('comments')->insert([
            'post_id' => '13',
            'message' =>'Hello everyone',
            'user_id' => '1',
            'created_at' => \DB::raw('CURRENT_TIMESTAMP'),
            'updated_at' => \DB::raw('CURRENT_TIMESTAMP')
        ]);
        
        DB::table('comments')->insert([
            'post_id' => '13',
            'message' =>'Thanks',
            'user_id' => '2',
            'created_at' => \DB::raw('CURRENT_TIMESTAMP'),
            'updated_at' => \DB::raw('CURRENT_TIMESTAMP')
        ]);
        
        DB::table('comments')->insert([
            'post_id' => '13',
            'message' =>'Hello',
            'user_id' => '3',
            'created_at' => \DB::raw('CURRENT_TIMESTAMP'),
            'updated_at' => \DB::raw('CURRENT_TIMESTAMP')
        ]);
        
        DB::table('comments')->insert([
            'post_id' => '13',
            'message' =>'Just to say hi!!!',
            'user_id' => '5',
            'created_at' => \DB::raw('CURRENT_TIMESTAMP'),
            'updated_at' => \DB::raw('CURRENT_TIMESTAMP')
        ]);
        
        DB::table('comments')->insert([
            'post_id' => '13',
            'message' =>'Someone can tell me how to post?',
            'user_id' => '6',
            'created_at' => \DB::raw('CURRENT_TIMESTAMP'),
            'updated_at' => \DB::raw('CURRENT_TIMESTAMP')
        ]);
        
        DB::table('comments')->insert([
            'post_id' => '13',
            'message' =>'I don\'t really know!!!',
            'user_id' => '7',
            'created_at' => \DB::raw('CURRENT_TIMESTAMP'),
            'updated_at' => \DB::raw('CURRENT_TIMESTAMP')
        ]);
        
        DB::table('comments')->insert([
            'post_id' => '13',
            'message' =>'get used to it',
            'user_id' => '8',
            'created_at' => \DB::raw('CURRENT_TIMESTAMP'),
            'updated_at' => \DB::raw('CURRENT_TIMESTAMP')
        ]);
        
        DB::table('comments')->insert([
            'post_id' => '13',
            'message' =>'ok champ',
            'user_id' => '9',
            'created_at' => \DB::raw('CURRENT_TIMESTAMP'),
            'updated_at' => \DB::raw('CURRENT_TIMESTAMP')
        ]);
        
        DB::table('comments')->insert([
            'post_id' => '13',
            'message' =>'Sorry, I\'m late here!!!',
            'user_id' => '10',
            'created_at' => \DB::raw('CURRENT_TIMESTAMP'),
            'updated_at' => \DB::raw('CURRENT_TIMESTAMP')
        ]);
    }
}
