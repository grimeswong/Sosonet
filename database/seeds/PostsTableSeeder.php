<?php

use Illuminate\Database\Seeder;
use App\Post;
use App\User;


class PostsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('posts')->insert([
            'title' => 'Bob\'s Post1',
            'message' =>'Bob\'s public post',
            'user_id' => '1',
            'privacy' => 'public',
            'created_at' => \DB::raw('CURRENT_TIMESTAMP'),
            'updated_at' => \DB::raw('CURRENT_TIMESTAMP')
        ]);
        

        DB::table('posts')->insert([
            'title' => 'Bob\'s Post2',
            'message' =>'Bob\'s friend post',
            'user_id' => '1',
            'privacy' => 'friends',
            'created_at' => \DB::raw('CURRENT_TIMESTAMP'),
            'updated_at' => \DB::raw('CURRENT_TIMESTAMP')
        ]);
        
        DB::table('posts')->insert([
            'title' => 'Bob\'s Post3',
            'message' =>'Bob\'s private post',
            'user_id' => '1',
            'privacy' => 'private',
            'created_at' => \DB::raw('CURRENT_TIMESTAMP'),
            'updated_at' => \DB::raw('CURRENT_TIMESTAMP')
        ]);
        
        DB::table('posts')->insert([
            'title' => 'John Post1',
            'message' =>'John public post1',
            'user_id' => '2',
            'privacy' => 'public',
            'created_at' => \DB::raw('CURRENT_TIMESTAMP'),
            'updated_at' => \DB::raw('CURRENT_TIMESTAMP')
        ]);
        
         DB::table('posts')->insert([
            'title' => 'John\'s Post2',
            'message' =>'John\'s friend post',
            'user_id' => '2',
            'privacy' => 'friends',
            'created_at' => \DB::raw('CURRENT_TIMESTAMP'),
            'updated_at' => \DB::raw('CURRENT_TIMESTAMP')
        ]);
        
        DB::table('posts')->insert([
            'title' => 'John\'s Post3',
            'message' =>'John\'s private post',
            'user_id' => '2',
            'privacy' => 'private',
            'created_at' => \DB::raw('CURRENT_TIMESTAMP'),
            'updated_at' => \DB::raw('CURRENT_TIMESTAMP')
        ]);
        
         DB::table('posts')->insert([
            'title' => 'John\'s Post4',
            'message' =>'You are not alone',
            'user_id' => '2',
            'privacy' => 'public',
            'created_at' => \DB::raw('CURRENT_TIMESTAMP'),
            'updated_at' => \DB::raw('CURRENT_TIMESTAMP')
        ]);
        
        DB::table('posts')->insert([
            'title' => 'John\'s Post5',
            'message' =>'What can I do',
            'user_id' => '2',
            'privacy' => 'friends',
            'created_at' => \DB::raw('CURRENT_TIMESTAMP'),
            'updated_at' => \DB::raw('CURRENT_TIMESTAMP')
        ]);
        
        DB::table('posts')->insert([
            'title' => 'John\'s Post6',
            'message' =>'I believe I can fly',
            'user_id' => '2',
            'privacy' => 'private',
            'created_at' => \DB::raw('CURRENT_TIMESTAMP'),
            'updated_at' => \DB::raw('CURRENT_TIMESTAMP')
        ]);
        
        DB::table('posts')->insert([
            'title' => 'John\'s Post7',
            'message' =>'Most Advanced Technology',
            'user_id' => '2',
            'privacy' => 'public',
            'created_at' => \DB::raw('CURRENT_TIMESTAMP'),
            'updated_at' => \DB::raw('CURRENT_TIMESTAMP')
        ]);
        
        DB::table('posts')->insert([
            'title' => 'John\'s Post8',
            'message' =>'I love my friends',
            'user_id' => '2',
            'privacy' => 'friends',
            'created_at' => \DB::raw('CURRENT_TIMESTAMP'),
            'updated_at' => \DB::raw('CURRENT_TIMESTAMP')
        ]);
        
        DB::table('posts')->insert([
            'title' => 'John\'s Post9',
            'message' =>'My own secret',
            'user_id' => '2',
            'privacy' => 'private',
            'created_at' => \DB::raw('CURRENT_TIMESTAMP'),
            'updated_at' => \DB::raw('CURRENT_TIMESTAMP')
        ]);
        
        DB::table('posts')->insert([
            'title' => 'John\'s Post10',
            'message' =>'I know what I should do',
            'user_id' => '2',
            'privacy' => 'public',
            'created_at' => \DB::raw('CURRENT_TIMESTAMP'),
            'updated_at' => \DB::raw('CURRENT_TIMESTAMP')
        ]);
    }
}
