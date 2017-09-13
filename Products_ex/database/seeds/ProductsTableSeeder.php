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
        DB::table('products')->insert([ // associate array
            'name' => 'iPhone 6',
            'price' => '600',
            'updated_at' => \DB::raw('CURRENT_TIMESTAMP'),
        ]);
        DB::table('products')->insert([
            'name' => 'Note 4',
            'price' => '567',
            'updated_at' => \DB::raw('CURRENT_TIMESTAMP'),
        ]);
        DB::table('products')->insert([
            'name' => 'Surface Pro 4',
            'price' => '987',
            'updated_at' => \DB::raw('CURRENT_TIMESTAMP'),
        ]);
    }
}
