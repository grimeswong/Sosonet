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
        $this->call(ProductsTableSeeder::class);    // call the product seeder file
        $this->call(ManufacturersTableSeeder::class);   // call the manufacturer seeder file
    }
}
