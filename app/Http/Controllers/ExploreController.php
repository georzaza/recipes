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
        $user_id = explode("/", $r->path())[2];
        $user = User::find($user_id);
        $username = NULL;

        // if the user does not exist, just return empty results. 
        // A 404 would be more appropriate.
        if ($user != NULL)
            $username = $user->name;
        else {
            return view('user.recipes')->with('error', 'Ο χρήστης δεν υπάρχει ή δεν έχει προσθέσει συνταγές ακόμη.');
        }

        $recipes = Recipe::where('user_id', $user_id)->orderBy('recipe_name')->get();
        $ids = [];
        foreach ($recipes as $recipe)
            array_push($ids, $recipe->id);
        $ingredients = DB::table('ingredients')->whereIn('recipe_id', $ids)->get();
        return view('user.recipes', [
            'ingredients' => $ingredients, 
            'recipes' => $recipes, 
            'username' => $username
        ]);
    }
}
