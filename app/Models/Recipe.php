<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;


class Recipe extends Model
{
    protected $primaryKey = 'id';
    
    // guarded prevents mass-assignment on these fields.
    // Naturally, we want to protect our id from this effect
    protected $guarded = ['id'];
    protected $fillable = [
        'user_id',
        'recipe_name', 
        'time',
        'type',
        'diet',
        'execution'
    ];

    public function ingredients() {
        return $this->hasMany(Ingredient::class);
    }

    public function user() {
        return $this->belongsTo(User::class);
    }
}
