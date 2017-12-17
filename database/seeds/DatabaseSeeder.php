<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // $this->call(UsersTableSeeder::class);
        $this->call(PostsTableSeeder::class); //create the posts seeder file
        $this->call(CommentsTableSeeder::class); //create the posts seeder file
        $this->call(UsersTableSeeder::class); //create the Users seeder file
        $this->call(FriendshipsTableSeeder::class); //create the Users seeder file
    }
}
