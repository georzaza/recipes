@extends('layouts.app')

@section('content')


<div class="row d-flex justify-content-center">
  	<div class="col-sm-5 col-md-offset-2">
    	
		<h3 style="text-align:center;">Add New Recipe</h3>
   		
		@if ($errors->any())
      		<div class="alert alert-danger">
       			<ul>
	           		@foreach ($errors->all() as $error)
             			<li>{{ $error }}</li>
           			@endforeach
       			</ul>
   			</div>
			<br/>
   		@endif

		<form id=theForm method="GET" action="{{ route('recipes.store') }}">
	        @csrf


       		<div
       			class="form-group" 
       			style=" margin-bottom:6%;">
	            <label for="recipe_name">
	            	Recipe Name:(eg. Spaghetti Marinara)
	            </label>
	            <br>
           		<input type="text"class="form-control"name="recipe_name"/>
			</div>

			<div class="form-group">
	            <label for="execution">Execution Instructions:</label>
	            <br>
				<textarea 
					class="form-group" 
					name="execution"
					wrap="soft" 
					form="theForm"
					style="width:100%; height:85px; margin-bottom: 0%;"></textarea>
			</div>
			<br>

      		<div class="form-group" id="formIngredients">
			  	
			  	<label 
			  		for="recipeIngredients0" 
			  		style="width:290px; display:inline-block; ">
			  		Ingredients
			  	</label>
      			
      			<label 
      				for="recipeIngredientQty0" 
      				style="width:120px; display:inline-block; text-align: center;">
      				Quantity (in kg/L)
      			</label>

				<input 
					class="form-control" 
					name="recipeIngredients0" 
					type="text"
					style="width:290px; display:inline-block; 
					margin-right: 15px; margin-bottom: 10px;" 
					required>

				<input 
					class="form-control" 
					name="recipeIngredientQty0"
					type="number"
					step="0.001"
					min="0" 
					style="width:80px; display:inline-block; margin-right: 15px;
					margin-bottom: 10px;"
					required>

				<button
					id="minus-button-0"
					class="btn btn-danger"
					onclick="removeUnusedIngredient(this.id)"
					type="button" 
					style="display: inline-block; margin-y: 10px;" 
					 >-
				</button>
      		</div>
			<button 
				id="plus-button"
				class="btn btn-primary"
				onclick="addIngredient()"
				type="button" 
				style="display: inline-block; ">+</button>
      		<br>

			<div class="form-group" >
       			<button 
       				type="submit" 
       				class="btn btn-success" 
       				style="margin-left:37%; width: auto; margin-top: 15px;">
		  			Add Recipe
				</button>
			</div>
   		</form>
	</div>
</div>





<!--
	This script's main functionality is to provide a dynamic form for the ingredients,
	while keeping the frontend clean and nice.
	Since we have buttons for when the user adds a new ingredient, we mess around with these
	buttons. The counter is used to set some attributes on <input> or <button> elements that are
	relative to the ingredients.
-->
<script>
	let counter = 1;

	// Gets called when the user hits the '+' button.
	// The function injects a new input line for the ingredients. (ingredient & qty & button '-')
	function addIngredient() {

		let ingredientFormdiv = document.getElementById("formIngredients");
		let theButton = document.getElementById("minus-button-".concat((counter-1).toString()));
		let ingredient_input_name = "recipeIngredients".concat(counter.toString());
		let ingredient_qty_name = "recipeIngredientQty".concat(counter.toString());

		let HTMLcode = '<input type="text" class="form-control" style="width:290px; display:inline-block; margin-right:18px; margin-bottom: 10px;" ';
		HTMLcode +=	'name="'.concat(ingredient_input_name).concat('" required>');

		HTMLcode += '<input type="number" step="0.001" min="0" class="form-control" style="width:80px; display:inline-block; margin-right: 18px; margin-bottom: 10px;" ';
		HTMLcode += 'name="'.concat(ingredient_qty_name).concat('" required>');

		HTMLcode += '<button id="minus-button-'.concat(counter.toString()).concat('" ');
		HTMLcode += 'type="button" style="display: inline-block; margin-y: 10px;" class="btn btn-danger"  onclick="removeUnusedIngredient(this.id)">-</button>';

		ingredientFormdiv.insertAdjacentHTML('beforeend', HTMLcode);
		counter++;
	}

	/** Gets called when the user hits the '-' button.
	 	The function removes an input line.
	 */
	function removeUnusedIngredient(id)	{
		
		// caller = Button '-'
		caller = document.getElementById(id);

		// delete caller button and it's corresponding ingredients.
		caller.previousElementSibling.previousElementSibling.remove();
		caller.previousElementSibling.remove();
		caller.remove();

		var temp = document.getElementById("formIngredients");
		var inputs = temp.getElementsByClassName("form-control");

		// rename every remaining input field appropriately
		for (let i=0; i<inputs.length; i+=2)	{
			inputs[i].setAttribute("name", "recipeIngredients".concat((i/2).toString()));
			inputs[i+1].setAttribute("name", "recipeIngredientQty".concat(Math.floor(((i+1)/2)).toString()));
		}

		// get the buttons, then rename every remaining one appropriately as well.
		var buttons = temp.getElementsByClassName("btn-danger");
		for (let i=0; i<buttons.length; i++)	{
			buttons[i].setAttribute("name", "minus-button-".concat(i.toString()))
			buttons[i].id = "minus-button-".concat(i.toString());
		}
		counter--;
	}

</script>
@endsection
