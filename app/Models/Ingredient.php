<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/*
    qty: 
 * how much of this product is used in the corresponding recipe.
 * Is a double. 
 * For a double value of 1.25 we mean 1kg and 250 gr. (or L/ml )
 */

class Ingredient extends Model
{
    protected $primaryKey = 'id';
    
    // guarded prevents mass-assignment on these fields.
    // Naturally, we want to protect our id from this effect
    protected $guarded = ['id'];
    protected $fillable = [
        'ingredient_name', 
        'qty',
        //'qty_units',
        'recipe_id',
    ];

    public function recipes() {
        return $this->belongToMany(Recipe::cless);
    }
}
