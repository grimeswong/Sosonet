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

// root page -> return item_list page
Route::get('/', function() {
   $sql = "select * from item";
   $items = DB::select($sql);
//   dd($items);    // debugger

   return view('item.item_list')->withItems($items); // <-- Magic...
});

// list item details ->: return item_detail page
Route::get('item_detail/{id}', function($id){
    // dd($id);    // debugger
    $item = get_item($id);
    return View('item.item_detail')->with('item', $item);
});

// Add Item Form
Route::get('item_add/', function(){
    return View('item.item_add');
    
});

// Add Item Action page
Route::post('item_add_action', function(){
    $summary = request('summary');
    $details = request('details');
    $id = add_item($summary, $details);
    
    if ($id) {
        return redirect("item_detail/$id");
    } else {
        die("Error while adding item");
    }
});


// Update Item Form
Route::get('item_update/{id}', function($id){   /* <- remember put parameter in function */
    // dd($id);
    $item = get_item($id);
    return view('item.item_update')->withItem($item); // return the view page "item_update.blade.php"
});

// Update Item Action page
Route::post('item_update_action', function(){
   $summary = request('summary') ;
   $details = request('details');
   $id = request('id');
   update_item($id, $summary, $details);
   
   if ($id) {
       return redirect("/");
   } else {
       die ("Error while update item");
   }
});

// Delete Item 
Route::get('item_delete/{id}', function($id){
    // dd($id);
    delete_item($id);
    return redirect('/');
});


/*** Funciton ***/

// add item to database
function add_item($summary, $details) {
    $sql = "Insert into item (summary, details) values (?, ?)"; //setup sql query to variable
    DB::insert($sql, array($summary, $details));
    $id = DB::getPdo()->lastInsertId(); // store last id in variable
    // dd($id);
    return $id;
}


// get item from database
function get_item($id) {
    $sql = "select * from item where id = ?";   
    $items = DB::select($sql, array($id));
    
    if(count($items) !=1){
        die("Something has gone wrong, invalid query or result: $sql");
    }
    
    $item = $items[0];
    return $item;
}

// update item to database
function update_item($id, $summary, $details) {
    $sql= "update item set summary = ?, details = ? where id = ?";
    DB::update($sql, array($summary, $details, $id));
}

// delete item from database
function delete_item($id) {
    $sql = "delete from item where id = ?";
    DB::delete($sql, array($id));
}


