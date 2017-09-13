<?php

use Illuminate\Database\Seeder;

class ProductsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('products')->insert([
            'name'=> 'iPhone 6',
            'price'=> '600',
            'manufacturer_id'=>'01', 
            'updated_at' => \DB::raw('CURRENT_TIMESTAMP'),
            
        ]);
        
        DB::table('products')->insert([
            'name'=> 'Note 4',
            'price'=> '567',
            'manufacturer_id'=>'02',
            'updated_at' => \DB::raw('CURRENT_TIMESTAMP'),
        ]);
        DB::table('products')->insert([
            'name'=> 'Blackberry passport',
            'price'=> '400',
            'manufacturer_id'=>'03',
            'updated_at' => \DB::raw('CURRENT_TIMESTAMP'),
        ]);
        DB::table('products')->insert([
            'name'=> 'Nokia 6 ',
            'price'=> '450',
            'manufacturer_id'=>'04',
            'updated_at' => \DB::raw('CURRENT_TIMESTAMP'),
        ]);
    }
}
