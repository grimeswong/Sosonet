<?php

use Illuminate\Database\Seeder;

class FriendshipsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('friendships')->insert([
            'user_id' => '1',   //Bob
            'friend_user_id' => '2',    //John
            'created_at' => \DB::raw('CURRENT_TIMESTAMP'),
            'updated_at' => \DB::raw('CURRENT_TIMESTAMP')
        ]);
        
        DB::table('friendships')->insert([
            'user_id' => '3',   //Tom
            'friend_user_id' => '5',    //Peter
            'created_at' => \DB::raw('CURRENT_TIMESTAMP'),
            'updated_at' => \DB::raw('CURRENT_TIMESTAMP')
        ]);
        
        DB::table('friendships')->insert([
            'user_id' => '4',   //Dave
            'friend_user_id' => '1',    //Bob
            'created_at' => \DB::raw('CURRENT_TIMESTAMP'),
            'updated_at' => \DB::raw('CURRENT_TIMESTAMP')
        ]);
        
        DB::table('friendships')->insert([
            'user_id' => '4',   //Dave
            'friend_user_id' => '2',    //John
            'created_at' => \DB::raw('CURRENT_TIMESTAMP'),
            'updated_at' => \DB::raw('CURRENT_TIMESTAMP')
        ]);
        
        DB::table('friendships')->insert([
            'user_id' => '4',   //Dave
            'friend_user_id' => '3',    //Tom
            'created_at' => \DB::raw('CURRENT_TIMESTAMP'),
            'updated_at' => \DB::raw('CURRENT_TIMESTAMP')
        ]);
        
        DB::table('friendships')->insert([
            'user_id' => '5',   //Peter
            'friend_user_id' => '7',    //Ann
            'created_at' => \DB::raw('CURRENT_TIMESTAMP'),
            'updated_at' => \DB::raw('CURRENT_TIMESTAMP')
        ]);
        
        DB::table('friendships')->insert([
            'user_id' => '5',   //Peter
            'friend_user_id' => '8',    //Sue
            'created_at' => \DB::raw('CURRENT_TIMESTAMP'),
            'updated_at' => \DB::raw('CURRENT_TIMESTAMP')
        ]);
        
        DB::table('friendships')->insert([
            'user_id' => '6',   //June
            'friend_user_id' => '4',    //Dave
            'created_at' => \DB::raw('CURRENT_TIMESTAMP'),
            'updated_at' => \DB::raw('CURRENT_TIMESTAMP')
        ]);
        
        DB::table('friendships')->insert([
            'user_id' => '6',   //June
            'friend_user_id' => '5',    //Peter
            'created_at' => \DB::raw('CURRENT_TIMESTAMP'),
            'updated_at' => \DB::raw('CURRENT_TIMESTAMP')
        ]);
        
        DB::table('friendships')->insert([
            'user_id' => '7',   //Ann
            'friend_user_id' => '8',    //Sue
            'created_at' => \DB::raw('CURRENT_TIMESTAMP'),
            'updated_at' => \DB::raw('CURRENT_TIMESTAMP')
        ]);
        
        DB::table('friendships')->insert([
            'user_id' => '7',   //Ann
            'friend_user_id' => '9',    //Mary
            'created_at' => \DB::raw('CURRENT_TIMESTAMP'),
            'updated_at' => \DB::raw('CURRENT_TIMESTAMP')
        ]);
        
        DB::table('friendships')->insert([
            'user_id' => '8',   //Sue
            'friend_user_id' => '1',    //Bob
            'created_at' => \DB::raw('CURRENT_TIMESTAMP'),
            'updated_at' => \DB::raw('CURRENT_TIMESTAMP')
        ]);
        
        DB::table('friendships')->insert([
            'user_id' => '8',   //Sue
            'friend_user_id' => '2',    //John
            'created_at' => \DB::raw('CURRENT_TIMESTAMP'),
            'updated_at' => \DB::raw('CURRENT_TIMESTAMP')
        ]);
        
        DB::table('friendships')->insert([
            'user_id' => '9',   //Mary
            'friend_user_id' => '1',    //Bob
            'created_at' => \DB::raw('CURRENT_TIMESTAMP'),
            'updated_at' => \DB::raw('CURRENT_TIMESTAMP')
        ]);
        
        DB::table('friendships')->insert([
            'user_id' => '9',   //Mary
            'friend_user_id' => '2',    //John
            'created_at' => \DB::raw('CURRENT_TIMESTAMP'),
            'updated_at' => \DB::raw('CURRENT_TIMESTAMP')
        ]);
    }
}
