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
        
        // $post = new Post;
        // $post->title = 'Bob\'s Post1';
        // $post->message = 'Bob\'s public post';
        // $post->user()->associate($user);
        // $post->privacy = 'public';
        // $post->created_at = new DateTime("now");
        // $post->update_at = new DateTime("now");
        
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
    }
}
