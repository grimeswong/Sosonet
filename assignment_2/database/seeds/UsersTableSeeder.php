<?php

use Illuminate\Database\Seeder;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('users')->insert([
            'email' => 'Bob@a.org',
            'password' => bcrypt('1234'),
            'fullname' => 'Bob',
            'DOB' => new DateTime('1970-01-01'),
            'image' => 'user_img/batman.jpeg',
            'created_at' => \DB::raw('CURRENT_TIMESTAMP'),
            'updated_at' => \DB::raw('CURRENT_TIMESTAMP')
        ]);
        
        // $user = new \App\User;
        // $user->email = 'Bob@a.org';
        // $user->password = bcrypt('1234');
        // $user->fullname = 'Bob';
        // $dob = new DateTime(1970-01-01);
        // $user->DOB = $dob;
        // $user->image = 'user_img/batman.jpeg';
        // $user->created_at = new DateTime();
        // $user->save();
        
        
        
        DB::table('users')->insert([
            'email' => 'John@a.org',
            'password' => bcrypt('1234'),
            'fullname' => 'John',
            'DOB' => new DateTime('1965-12-1'),
            'image' => 'user_img/peter.jpeg',
            'created_at' => \DB::raw('CURRENT_TIMESTAMP'),
            'updated_at' => \DB::raw('CURRENT_TIMESTAMP')
        ]);
        
        DB::table('users')->insert([
            'email' => 'Tom@a.org',
            'password' => bcrypt('1234'),
            'fullname' => 'Tom',
            'DOB' => new DateTime('1985-7-15'),
            'image' => 'user_img/tom.png',
            'created_at' => \DB::raw('CURRENT_TIMESTAMP'),
            'updated_at' => \DB::raw('CURRENT_TIMESTAMP')
        ]);
        
        DB::table('users')->insert([
            'email' => 'dave@a.org',
            'password' => bcrypt('1234'),
            'fullname' => 'Dave',
            'DOB' => new DateTime('1990-8-5'),
            'image' => 'user_img/people-icon.png',
            'created_at' => \DB::raw('CURRENT_TIMESTAMP'),
            'updated_at' => \DB::raw('CURRENT_TIMESTAMP')
        ]);
        
        DB::table('users')->insert([
            'email' => 'peter@a.org',
            'password' => bcrypt('1234'),
            'fullname' => 'Peter',
            'DOB' => new DateTime('1989-3-4'),
            'image' => 'user_img/people-icon.png',
            'created_at' => \DB::raw('CURRENT_TIMESTAMP'),
            'updated_at' => \DB::raw('CURRENT_TIMESTAMP')
        ]);
        
        DB::table('users')->insert([
            'email' => 'june@a.org',
            'password' => bcrypt('1234'),
            'fullname' => 'June',
            'DOB' => new DateTime('1986-10-1'),
            'image' => 'user_img/people-icon.png',
            'created_at' => \DB::raw('CURRENT_TIMESTAMP'),
            'updated_at' => \DB::raw('CURRENT_TIMESTAMP')
        ]);
        
        DB::table('users')->insert([
            'email' => 'ann@a.org',
            'password' => bcrypt('1234'),
            'fullname' => 'Ann',
            'DOB' => new DateTime('1995-2-1'),
            'image' => 'user_img/people-icon.png',
            'created_at' => \DB::raw('CURRENT_TIMESTAMP'),
            'updated_at' => \DB::raw('CURRENT_TIMESTAMP')
        ]);
        
        DB::table('users')->insert([
            'email' => 'sue@a.org',
            'password' => bcrypt('1234'),
            'fullname' => 'Sue',
            'DOB' => new DateTime('1985-9-23'),
            'image' => 'user_img/people-icon.png',
            'created_at' => \DB::raw('CURRENT_TIMESTAMP'),
            'updated_at' => \DB::raw('CURRENT_TIMESTAMP')
        ]);
        
        DB::table('users')->insert([
            'email' => 'mary@a.org',
            'password' => bcrypt('1234'),
            'fullname' => 'Mary',
            'DOB' => new DateTime('1995-2-1'),
            'image' => 'user_img/people-icon.png',
            'created_at' => \DB::raw('CURRENT_TIMESTAMP'),
            'updated_at' => \DB::raw('CURRENT_TIMESTAMP')
        ]);
        
        DB::table('users')->insert([
            'email' => 'zoe@a.org',
            'password' => bcrypt('1234'),
            'fullname' => 'Zoe',
            'DOB' => new DateTime('1987-5-1'),
            'image' => 'user_img/people-icon.png',
            'created_at' => \DB::raw('CURRENT_TIMESTAMP'),
            'updated_at' => \DB::raw('CURRENT_TIMESTAMP')
        ]);
    }
}
