<?php

namespace App\Http\Controllers;

use App\Models\Ingredient;
use App\Models\Recipe;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;


class RecipeController extends Controller {
    
    public function __construct() {
        $this->middleware('auth');
    }
   
    public function index() {
        // we need to change that, the first query already
        // contains the recipes...
        // changing this means we need to change the recipes.index
        // view that MAY be using the $recipes or the $items variables
        // that we pass to it.
        $items = DB::table('recipes')
                    ->join('ingredients', 'recipes.recipe_id', '=', 'ingredients.recipe')
                    ->select('recipe_name', 'execution', 'ingredient_name', 'qty', 'recipe')
                    ->get();
        $recipes = DB::table('recipes')
                    ->orderBy('recipe_name')
                    ->get();
        //dd($items);
        return view('recipes.index', ['items' => $items, 'recipes' => $recipes]);
    }

    
    public function create() {
        return view('recipes.create');
    }

    
    public function store(Request $request) {   
        // Save the recipe, without ingredients.
        // We do this first as we need it's id for the ingredient table.
        $request->validate([
            'recipe_name'   => 'required', 
            'execution'     => 'required'
        ]);
        $recipe = new Recipe([
            'recipe_name'   => $request->get('recipe_name'), 
            'execution'     => $request->get('execution')
        ]);
        $recipe->save();
        
        
        // Next we save the ingredients of the recipe.
        // For every ingredient of the request, we
        // create a new ingredient entry in our table, 
        // save it's name and qty based on request, 
        // and associate it's foreign key recipe_id with the recipe 
        // we saved earlier.
        $counter = 0;
        while($request->has('recipeIngredients'.strval($counter))  &&
              $request->has('recipeIngredientQty'.strval($counter)))    {
            
            $request->validate([
                'recipeIngredients'.strval($counter) => 'required', 
                'recipeIngredientQty'.strval($counter) => 'required|regex:/^\d+(\.\d{1,3})?$/'
            ]);
            
            $ingredient = new Ingredient([
                'ingredient_name' => $request->get('recipeIngredients'.strval($counter)), 
                'qty' => $request->get('recipeIngredientQty'.strval($counter)), 
                'recipe' => $recipe->recipe_id
            ]);
            
            $ingredient->save();
            $counter++;
        }

        return redirect('/recipes')->with('success', 'recipe saved!');
    }

    
    public function show($id) {
        $recipe = Recipe::find($id);
        $ingredients = DB::table('ingredients')
                    ->select('ingredient_name', 'qty')
                    ->where('recipe', '=', $recipe->recipe_id)
                    ->get();
        return view('recipes.show', ['ingredients' => $ingredients, 'recipe' => $recipe]);
    }

    
    public function edit($id) {
        $recipe = Recipe::find($id);
        $ingredients = DB::table('ingredients')
                    ->where('recipe', '=', $recipe->recipe_id)
                    ->get();
        return view('recipes.edit', ['ingredients' => $ingredients, 'recipe' => $recipe]);
    }

    
    public function update(Request $request, $id) {
        $request->validate([
            'recipe_name'   => 'required', 
            'execution'     => 'required'
        ]);

        $recipe = Recipe::find($id);
        $recipe->recipe_name = $request->get('recipe_name');
        $recipe->execution   = $request->get('execution');
        $recipe->save();
        
        // Delete all the ingredients the old recipe had.
        $ingredients = DB::table('ingredients')->where('recipe', '=', $id)->get();
        foreach ($ingredients as $ingredient)   {
            $ingredient = Ingredient::find($ingredient->ingredient_id);
            $ingredient->delete();
        }

        // Insert the new ingredients of the recipe (as in store())
        $counter = 0;
        while($request->has('recipeIngredients'.strval($counter))  &&
              $request->has('recipeIngredientQty'.strval($counter)))    {
            
            $request->validate([
                'recipeIngredients'.strval($counter) => 'required', 
                'recipeIngredientQty'.strval($counter) => 'required|regex:/^\d+(\.\d{1,3})?$/'
            ]);
            
            $ingredient = new Ingredient([
                'ingredient_name' => $request->get('recipeIngredients'.strval($counter)), 
                'qty' => $request->get('recipeIngredientQty'.strval($counter)), 
                'recipe' => $recipe->recipe_id
            ]);
            
            $ingredient->save();
            $counter++;
        }

        return redirect('/recipes')->with('success', 'recipe updated!');
    }

    
    public function destroy($id) {
        // deletes the recipe. 
        // In our migration file, we declare the 'recipe' foreign key
        // of the table ingredients in a way that when a recipe is removed, 
        // all it's ingredients will be removed too. (onDelete('CASCADE'))
        $recipe = Recipe::find($id);
        $recipe->delete();
        return redirect('/recipes')->with('success', 'recipe deleted!');
    }

    public function search(Request $request) {
        
        $item=Request()->get('ingredient');
        $ingredients = DB::table('ingredients')
            ->where('ingredient_name', 'like', $item)
            ->get();

        $items = array();
        foreach($ingredients as $ingredient){
            $recipe = DB::table('recipes')
                ->where('recipe_id', $ingredient->recipe)
                ->distinct()
                ->get();
            $items[] = $recipe[0];
        }
        return view('Questions.answers', ['items' => $items]);
    }
}
