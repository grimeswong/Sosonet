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

Route::get('/', function () {
    return view('greeting_form');
});

Route::post('greeting', function() {    // match the view greeting_form <form method="post" action="greeting"
    $name = request('name');            // request can be used by the POST or GET, set variable to store the variable
    $age = request('age');
    // var_dump($name);
    // var_dump($age);
    // exit;
    return view('greeting')->with('name', $name)->with('age', $age+1);  // pass these variables to the view
});