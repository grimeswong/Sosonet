<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

use App\Product;        // use backslash
use App\Manufacturer;   // user backslash

Route::resource('product', 'ProductController'); 

Route::get('/', function () {
    return view('welcome');
    // return redirect('/'); // redirect to product page
});

Route::get('/test', function() {
    
    /* Create one new item in the product table related record*/
    // $product = new Product;
    // $product->name = 'ipod';
    // $product->price = 19.99;
    // $product->manufacturer_id = '01';
    // $product->save();    // save to products table
    // $id = $product->id; // retrieve the id of the newly crated product object
    // dd($id);
    
    /* Alternative way to create one new item in the product table */
    // $product = Product::create(array('name'=>'ipod', 'price'=> 19.99, 'manufacturer_id'=> '01'));   // remember put the protected 
    
    /* Query all the products and display them all */ 
    // $products = Product::all();
    // // dd($products);
    // foreach ($products as $product) {
    //     echo $product->name;
    // }
    
    /* Find the product with id 1 */
    // $productId1 = Product::find(1)->manufacturer;
    // $productId1 = Product::findOrfail(1)->manufacturer;
    // dd($productId1);
    
    /* Find the product price greater than $450 */
    // $products = Product::where('price', '>', 450)->get();
    // dd($products);
    
    /* Find out how many products's price greater than $450 */
    // $count = Product::where('price', '>', 450)->count();
    // dd($count);
    
    /* show the result if we don't use the get, will return the query object */
    // $q = Product::where('price', '>', 450);
    // dd($q); // contain the builder object
    
    /* Find the first element of the collections */
    // $product = Product::whereRaw('price > 450')->first();
    // dd($product);
    
    /* Find the relationship between Manufacturers and Products */
    // $products = App\Manufacturer::find(1)->products;
    // dd($products);
    
    /* Find the first element of relationship that Product with Manufactureres */
    // dd(Product::find(1)->manufacturer);
});
Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
