<?php

namespace App\Http\Controllers;

use App\Models\{Ingredient, Recipe, User};
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Route;

class ExploreController extends Controller
{
    // displays the results of either a simple search for a recipe with a 
    // specific ingredient, or advanced search with types like 'eidos_diatrofis'
    public function search(Request $request) {
        
        $recipes = [];

        // If the user tried to search for recipes with some ingredient
        if ($request->has('search_term')) {
            $search_term = $request->get('search_term');
            if (empty($search_term))
                return view('explore')->with(['recipes' => NULL]);
            
            $recipes = DB::table('ingredients')
                ->where('ingredient_name', 'like', '%'.$search_term.'%')
                ->select('recipes.id', 'recipe_name', 'user_id', 'users.name', 'recipes.created_at')
                ->join('recipes','recipes.id','recipe_id')
                ->join('users', 'users.id', 'recipes.user_id')
                ->orderBy('created_at')
                ->distinct()
                ->get();
        }
        // if the user used the advanced search
        else if ($request->has('eidos_geumatos') && $request->has('eidos_diatrofis')) {
            $eidos_diatrofis = $request->get('eidos_diatrofis');
            $eidos_geumatos = $request->get('eidos_geumatos');
            $recipes = Recipe::whereIn('diet', $eidos_diatrofis)
                ->whereIn('type', $eidos_geumatos)
                ->select('recipes.id', 'recipe_name', 'user_id', 'users.name', 'recipes.created_at')
                ->join('users', 'users.id', 'recipes.user_id')
                ->orderBy('created_at')
                ->get();
        }
        else if ($request->has('eidos_diatrofis')) {
            $eidos_diatrofis = $request->get('eidos_diatrofis');
            $recipes = Recipe::whereIn('diet', $eidos_diatrofis)
                ->select('recipes.id', 'recipe_name', 'user_id', 'users.name', 'recipes.created_at')
                ->join('users', 'users.id', 'recipes.user_id')
                ->orderBy('created_at')
                ->get();
        }
        else if ($request->has('eidos_geumatos')) {
            $eidos_geumatos = $request->get('eidos_geumatos');
            $recipes = Recipe::whereIn('type', $eidos_geumatos)
                ->select('recipes.id', 'recipe_name', 'user_id', 'users.name', 'recipes.created_at')
                ->join('users', 'users.id', 'recipes.user_id')
                ->orderBy('created_at')
                ->get();
        }
        
        // we handle the case where the recipes are empty in the view.
        return view('explore')->with(['recipes' => $recipes]);
    }

    public function searchByUser(Request $r) {
        $user_id = explode("/", $r->path())[2];
        $user = User::find($user_id);
        $username = NULL;

        // if the user does not exist, just return empty results. 
        // A 404 would (?) be more appropriate to prevent IDOR attacks
        // but we are not concerned with that kind of issues at this point.
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
