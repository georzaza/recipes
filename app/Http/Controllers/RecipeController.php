<?php

namespace App\Http\Controllers;

use App\Models\{Ingredient, Recipe, Rating, Comment};
use Illuminate\Http\Request;
use Illuminate\Support\Facades\{DB, Auth};


class RecipeController extends Controller {
    
    public function __construct() {
        $this->middleware('auth');
    }
   
    public function index() {
        // get Recipes through Laravel query
        $recipes = Recipe::where('user_id', Auth::user()->id)->orderBy('recipe_name')->get();
        
        // get all recipe ids. We'll use them to get the ingredients.
        $ids = [];
        foreach ($recipes as $recipe)
            array_push($ids, $recipe->id);

        // get the ingredients
        $ingredients = DB::table('ingredients')->whereIn('recipe_id', $ids)->get();
        return view('recipes.index', ['ingredients' => $ingredients, 'recipes' => $recipes]);
    }

    
    public function create() {
        return view('recipes.create');
    }

    
    public function store(Request $request) {   
        // Save the recipe, without ingredients.
        // We do this first as we need it's id for the ingredient table.
        $request->validate([
            'recipe_name'   => 'required', 
            'execution'     => 'required',
            'time'   => 'required|integer',
            'diet'   => 'required'
            //todo should also validate type
        ]);
        $recipe = new Recipe([
            'recipe_name'   => $request->get('recipe_name'),
            'execution'     => $request->get('execution'),
            'time'          => $request->get('time'),
            'diet'          => $request->get('diet'),
            'type'          => $request->get('type'),
            'user_id'       => Auth::user()->id,
            'rating'        => 0
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
                'recipe_id' => $recipe->id
            ]);

            $ingredient->save();
            $counter++;
        }
        return redirect('/recipes')->with('success', 'Η συνταγή αποθηκεύτηκε επιτυχώς!');
    }

    
    public function show($id) {
        // again, we use the Collection Provider of Laravel 
        // instead of DB queries.
        $recipe = Recipe::find($id);
        $ingredients = $recipe->ingredients()->where('recipe_id', $recipe->id)->get();
        /*
        Both below would be equivalent since laravel is smart 
        enough to understand we want to do an '=' operation.
           $recipe = DB::table('recipes')->where('recipe_id', '=', $recipe->id);
           $recipe = DB::table('recipes')->where('recipe_id',      $recipe->id);

        
        And similarly for ingredients would be something like ..
        $ingredients = DB::table('ingredients')
                    ->select('ingredient_name', 'qty')
                    ->where('recipe_id', $recipe->id)
                    ->get();
        */
        $comments = DB::table('comments')->where('recipe_id', $id)->orderBy('created_at')->get();

        return view('recipes.show', [
            'ingredients' => $ingredients,
            'recipe' => $recipe,
            'comments' => $comments
        ]);
    }

    
    public function edit($id) {
        $recipe = Recipe::find($id);
        $ingredients = $recipe->ingredients()->where('recipe_id', $recipe->id)->get();
        return view('recipes.edit', ['ingredients' => $ingredients, 'recipe' => $recipe]);
    }

    
    public function update(Request $request, $id) {
        $request->validate([
            'recipe_name'   => 'required',
            'execution'     => 'required',
            'time'   => 'required|integer',
            'diet'   => 'required'
            //todo should also validate type
        ]);

        $recipe = Recipe::find($id);
        $recipe->recipe_name = $request->get('recipe_name');
        $recipe->execution   = $request->get('execution');
        $recipe->time        = $request->get('time');
        $recipe->diet        = $request->get('diet');
        $recipe->type        = $request->get('type');
        $recipe->user_id     = Auth::user()->id;
        $recipe->save();
        
        // Delete all the ingredients the old recipe had.
        $ingredients = DB::table('ingredients')->where('recipe_id', '=', $id)->get();
        foreach ($ingredients as $ingredient)   {
            $ingredient = Ingredient::find($ingredient->id);
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
                'recipe_id' => $recipe->id,
            ]);
            
            $ingredient->save();
            $counter++;
        }
        return redirect('/recipes')->with('success', 'Η συνταγή ενημερώθηκε επιτυχώς!');
    }


    public function destroy($id) {
        // deletes the recipe. 
        // In our migration file, we declare the 'recipe' foreign key
        // of the table ingredients in a way that when a recipe is removed, 
        // all it's ingredients will be removed too. (onDelete('CASCADE'))
        $recipe = Recipe::find($id);
        $recipe->delete();
        return redirect('/recipes')->with('success', 'Η συνταγή διεγράφη!');
    }


    public function rate(Request $r) {
        if ($r->has('rating'))  {
            $rating = $r->get('rating');
            // return error if the user tried to post a non-acceptable rating value.
            // not tested, but should work.
            if ($rating<1 || $rating>5)
                return back()->with(['error' => 'wrong rating']);
            $user_id = Auth::user()->id;
            $recipe_id = explode("/", $r->path())[2];
            // get user's previous rating for this recipe
            $previous_rating = DB::table('ratings')
                ->where('user_id', $user_id)
                ->where('recipe_id', $recipe_id)
                ->get();
            // if the user had already rated this recipe dont do anything.
            if (!empty($previous_rating[0]))   {
                return back()->with([
                    'error' => 'Έχετε ήδη βαθμολογήσει αυτή τη συνταγή στο παρελθόν.'
                ]);
            }
            // save the user's rating.
            $new_rating = new Rating([
                'user_id'   => $user_id,
                'recipe_id' => $recipe_id,
                'rating'    => $rating
            ]);
            $new_rating->save();
            // update the recipe's total rating.
            $recipe = Recipe::find($recipe_id);
            $recipe->rating = DB::table('ratings')
                ->select('rating')
                ->where('recipe_id', $recipe_id)
                ->avg('rating');
            $recipe->save();            
            return back()->with([
                'success' => 'Επιτυχής βαθμολόγηση της συνταγής'
            ]);
        }
        // in case where a post was made to this route without a rating value.
        else 
            return back()->with(['error' => 'Κάτι πήγε στραβά']);
    }


    public function comment(Request $r) {
        if ($r->has('comment'))  {
            $comment = $r->get('comment');
            $user_id = Auth::user()->id;
            $recipe_id = explode("/", $r->path())[2];
            
            // get user's previous rating for this recipe
            $previous_comment = DB::table('comments')
                ->where('user_id', $user_id)
                ->where('recipe_id', $recipe_id)
                ->get();
            // if the user had already commented this recipe dont do anything.
            if (!empty($previous_comment[0]))   {
                return back()->with([
                    'comment_error' => 'Έχετε ήδη υποβάλει κάποιο σχόλιο για αυτή τη συνταγή.'
                ]);
            }
            // save the user's comment.
            $new_comment = new Comment([
                'user_id'   => $user_id,
                'recipe_id' => $recipe_id,
                'comment'    => $comment
            ]);
            $new_comment->save();
            return back()->with(['comment_success' => 'Σχολιάσατε επιτυχώς αυτή τη συνταγή']);
        }
        else 
            return back()->with(['comment_error' => 'Κάτι πήγε στραβά']);
    }
}
