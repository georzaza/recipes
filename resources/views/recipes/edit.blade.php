@extends('layouts.app')
@section('content')

<div class="row d-flex justify-content-center">
  	<div class="col-sm-5 col-md-offset-2">
    	
		<h1 style="text-align:center;">Αλλαγή Συνταγής</h1>
    	
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
    	
		<form id=theForm method="GET" action="{{ route('recipes.update', ['id' => $recipe->id]) }}">
			@csrf

			<div class="form-group" style=" margin-bottom:6%;">
	            <label for="recipe_name">Όνομα συνταγής:</label><br>
           		<input type="text" class="form-control" name="recipe_name" value="{{$recipe->recipe_name}}"/>
			</div>

			<div class="form-group">
	            <label for="execution">Οδηγίες Εκτέλεσης:</label>
				<textarea form="theForm" class="form-group" name="execution" style="width:100%; height:85px; margin-bottom: 0%;">{{$recipe->execution}}</textarea>
			</div><br>

			<div class="form-group">
				<label for="recipy_type">Είδος γεύματος</label>
				<select name="type" id="type">
					<option value="Γλυκό">Γλυκό</option>
					<option value="Κοκτέιλ">Κοκτέιλ</option>
					<option value="Κυρίως Γεύμα">Κυρίως Γεύμα</option>
					<option value="Ορεκτικό">Ορεκτικό</option>
					<option value="Πρωινό">Πρωινό</option>
					<option value="Ροφήματα">Ροφήματα</option>
					<option value="Σαλάτα">Σαλάτα</option>
					<option value="Σνακ">Σνακ</option>
					<option value="Συνοδευτικά">Συνοδευτικά</option>
				</select>
			</div>

			<div class="form-group">
				<label for="diet">Ειδική διατροφή</label>
				<select name="diet" id="diet">
					<option value="Βίγκαν">Όχι</option>
					<option value="Βίγκαν">Βίγκαν</option>
					<option value="Χορτοφαγικά">Χορτοφαγικά</option>
					<option value="Χωρίς γαλακτοκομικά">Χωρίς γαλακτοκομικά</option>
					<option value="Χωρίς γλουτένη">Χωρίς γλουτένη</option>
					<option value="Χωρίς ζάχαρη">Χωρίς ζάχαρη</option>
				</select>
			</div>
			<br>

			<div class="form-group">
				<label 
			  		for="time" 
			  		style="display:inline-block; ">
			  		Χρόνος
			  	</label>
			  	<input 
					class="form-control" 
					name="time" 
					type="number"
					min="1"
					placeholder="Σε λεπτά" 
					style="width:110px; display:inline-block;
					margin-bottom: 10px;" 
					required>
			</div>

			<div class="form-group" id="formIngredients">
			  	<label for="recipeIngredients0" style="width:290px; display:inline-block; ">Ingredients</label>
      			<label for="recipeIngredientQty0" style="width:120px; display:inline-block; text-align: center;">Ποσότητα (βάρος)</label>
				<?php $count=-1 ?>
				@foreach ($ingredients as $ingredient)
					<input 	value="{{$ingredient->ingredient_name}}" type="text" class="form-control" name="recipeIngredients<?php $count++; echo $count; ?>" style="width:290px; display:inline-block; margin-right: 15px; margin-bottom: 10px;">
					<input 	value="{{$ingredient->qty}}" type="number" step="0.001" min="0" class="form-control" name="recipeIngredientQty<?php echo $count?>" style="width:80px; display:inline-block; margin-right: 15px; margin-bottom: 10px;">
					<button type="button" onclick="removeUnusedIngredient(this.id)" class="btn btn-danger"id="minus-button-<?php echo $count?>" style="display: inline-block; margin-y: 10px;">-
					</button>
				@endforeach
      		</div>
			<button id="plus-button" type="button" style="display: inline-block; " class="btn btn-success"  onclick="addIngredient()">+</button>
      		<br>

			<div class="form-group" >
       			<button type="submit" class="btn btn-info" style="margin-left:37%; width: auto; margin-top: 15px;">
		  			Προσθήκη Συνταγής
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

	// represents the rows already present.
	let counter = (document.getElementsByTagName("input").length-3) / 2;

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
	 	The function removes an input line from the ingredients. (ingredient & qty & button '-')
	 	todo has a problem. The way it works is the upper '-' button removes 
	 	the item from the next row.
	 */
	function removeUnusedIngredient(id)	{

		var ingredientFormdiv = document.getElementById("formIngredients");
		var inputs = ingredientFormdiv.getElementsByClassName("form-control");
		var real_id = (id.split('-'))[2];
		var position = -1;

		// remove the ingredient and qty input fields, then delete the button as well
		for (var i=0; i<inputs.length; i++)	{
  			if (inputs[i].name == "recipeIngredients".concat(real_id))	{
				ingredientFormdiv.removeChild(inputs[i]);
				ingredientFormdiv.removeChild(inputs[i++]);
				position = i;
			}
		}
		ingredientFormdiv.removeChild(document.getElementById(id));

		// rename every remaining input field appropriately
		for (let i=0; i<inputs.length; i+=2)	{
			inputs[i].setAttribute("name", "recipeIngredients".concat((i/2).toString()));
			inputs[i+1].setAttribute("name", "recipeIngredientQty".concat(Math.floor(((i+1)/2)).toString()));
		}

		// get the buttons, then rename every remaining one appropriately as well.
		let buttons = ingredientFormdiv.getElementsByTagName("button");
		for (let i=0; i<buttons.length; i++)	{
			buttons[i].setAttribute("name", "minus-button-".concat(i.toString()))
		}

		// lastly, reduce the counter by 1 since we just deleted a row.
		counter--;
	}
</script>


@endsection
