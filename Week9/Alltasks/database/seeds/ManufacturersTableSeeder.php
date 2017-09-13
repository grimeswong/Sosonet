<?php

use Illuminate\Database\Seeder;

class ManufacturersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('manufacturers')->insert([
            'name'=> 'Apple',
            'id'=>'01', 
            'updated_at' => \DB::raw('CURRENT_TIMESTAMP'),
            
        ]);
        
        DB::table('manufacturers')->insert([
            'name'=> 'Samsung',
            'id'=>'02',
            'updated_at' => \DB::raw('CURRENT_TIMESTAMP'),
        ]);
        DB::table('manufacturers')->insert([
            'name'=> 'Blackberry',
            'id'=>'03',
            'updated_at' => \DB::raw('CURRENT_TIMESTAMP'),
        ]);
        DB::table('manufacturers')->insert([
            'name'=> 'Nokia',
            'id'=>'04',
            'updated_at' => \DB::raw('CURRENT_TIMESTAMP'),
        ]);
    }
}
