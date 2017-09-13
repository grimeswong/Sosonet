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
            'email' => 'bob@a.org',
            'password' => bcrypt('1234'),
            'fullname' => 'Bob',
            'DOB' => '1970-1-1',
            'image' => 'Nothing to show',
            'created_at' => \DB::raw('CURRENT_TIMESTAMP'),
            'updated_at' => \DB::raw('CURRENT_TIMESTAMP')
        ]);
        
        DB::table('users')->insert([
            'email' => 'join@a.org',
            'password' => bcrypt('1234'),
            'fullname' => 'John',
            'DOB' => '1965-12-1',
            'image' => 'Nothing to show',
            'created_at' => \DB::raw('CURRENT_TIMESTAMP'),
            'updated_at' => \DB::raw('CURRENT_TIMESTAMP')
        ]);
        
        DB::table('users')->insert([
            'email' => 'Tom@a.org',
            'password' => bcrypt('1234'),
            'fullname' => 'Tom',
            'DOB' => '1985-7-15',
            'image' => 'Nothing to show',
            'created_at' => \DB::raw('CURRENT_TIMESTAMP'),
            'updated_at' => \DB::raw('CURRENT_TIMESTAMP')
        ]);
        
        DB::table('users')->insert([
            'email' => 'dave@a.org',
            'password' => bcrypt('1234'),
            'fullname' => 'Dave',
            'DOB' => '1990-8-5',
            'image' => 'Nothing to show',
            'created_at' => \DB::raw('CURRENT_TIMESTAMP'),
            'updated_at' => \DB::raw('CURRENT_TIMESTAMP')
        ]);
        
        DB::table('users')->insert([
            'email' => 'peter@a.org',
            'password' => bcrypt('1234'),
            'fullname' => 'Peter',
            'DOB' => '1989-3-4',
            'image' => 'Nothing to show',
            'created_at' => \DB::raw('CURRENT_TIMESTAMP'),
            'updated_at' => \DB::raw('CURRENT_TIMESTAMP')
        ]);
        
        DB::table('users')->insert([
            'email' => 'june@a.org',
            'password' => bcrypt('1234'),
            'fullname' => 'June',
            'DOB' => '1986-10-1',
            'image' => 'Nothing to show',
            'created_at' => \DB::raw('CURRENT_TIMESTAMP'),
            'updated_at' => \DB::raw('CURRENT_TIMESTAMP')
        ]);
        
        DB::table('users')->insert([
            'email' => 'ann@a.org',
            'password' => bcrypt('1234'),
            'fullname' => 'Ann',
            'DOB' => '1995-2-1',
            'image' => 'Nothing to show',
            'created_at' => \DB::raw('CURRENT_TIMESTAMP'),
            'updated_at' => \DB::raw('CURRENT_TIMESTAMP')
        ]);
        
        DB::table('users')->insert([
            'email' => 'sue@a.org',
            'password' => bcrypt('1234'),
            'fullname' => 'Sue',
            'DOB' => '1985-9-23',
            'image' => 'Nothing to show',
            'created_at' => \DB::raw('CURRENT_TIMESTAMP'),
            'updated_at' => \DB::raw('CURRENT_TIMESTAMP')
        ]);
        
        DB::table('users')->insert([
            'email' => 'mary@a.org',
            'password' => bcrypt('1234'),
            'fullname' => 'Mary',
            'DOB' => '1995-2-1',
            'image' => 'Nothing to show',
            'created_at' => \DB::raw('CURRENT_TIMESTAMP'),
            'updated_at' => \DB::raw('CURRENT_TIMESTAMP')
        ]);
        
        DB::table('users')->insert([
            'email' => 'zoe@a.org',
            'password' => bcrypt('1234'),
            'fullname' => 'Zoe',
            'DOB' => '1987-5-1',
            'image' => 'Nothing to show',
            'created_at' => \DB::raw('CURRENT_TIMESTAMP'),
            'updated_at' => \DB::raw('CURRENT_TIMESTAMP')
        ]);
    }
}
