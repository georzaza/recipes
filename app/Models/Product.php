<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;



/*
    qty:
* This is different from the qty field in the Ingredient Model
* It represents how many of this product the user has.

*/


class Product extends Model
{
    protected $primaryKey = 'id';
    
    // guarded prevents mass-assignment on these fields.
    // Naturally, we want to protect our id from this effect
    protected $guarded = ['id'];
    protected $fillable = [
        'product_name', 
        'exp_date',  
        'qty',
        'weight',
        'details'
    ];
}
