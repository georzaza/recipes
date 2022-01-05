<?php

namespace App\Http\Controllers;

use App\Models\{Ingredient, Recipe, User};
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Route;

class ExploreController extends Controller
{
    public function search(Request $request) {
        
        // If the user tried to search for recipes
        if ($request->has('search_term')) {
            $search_term = $request->get('search_term');
            
            $recipes = DB::table('ingredients')
            ->where('ingredient_name', 'like', '%'.$search_term.'%')
            ->select('recipes.id', 'recipe_name', 'user_id', 'users.name')
            ->join('recipes','recipes.id','recipe_id')
            ->join('users', 'users.id', 'recipes.user_id')
            ->distinct()
            ->get();

            return view('explore')->with(['recipes' => $recipes]);
        }        
    }

    public function searchByUser(Request $r) {
        $recipes = Recipe::where('user_id', (explode("/", $r->path())[2]))->orderBy('recipe_name')->get();
        
        // get all recipe ids. We'll use them to get the ingredients.
        $ids = [];
        foreach ($recipes as $recipe)
            array_push($ids, $recipe->id);

        // get the ingredients
        $ingredients = DB::table('ingredients')->whereIn('recipe_id', $ids)->get();
        return view('user.recipes', ['ingredients' => $ingredients, 'recipes' => $recipes]);
    }
}
