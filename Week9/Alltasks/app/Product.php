<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    protected $fillable = ['name', 'price', 'manufacturer_id']; //Avoiding MassAssignmentException
    
    function manufacturer() {
        return $this->belongsTo('App\Manufacturer');
    }
    
}
