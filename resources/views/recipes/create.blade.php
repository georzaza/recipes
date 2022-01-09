@extends('layouts.app')

@section('content')


<div class="row d-flex justify-content-center">
  	<div class="col-sm-5 col-md-offset-2">
    	
		<h3 style="text-align:center;">Προσθήκη Νέας Συνταγής</h3>
   		
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
	            	Όνομα συνταγής:
	            </label>
	            <br>
           		<input type="text"class="form-control"name="recipe_name"/>
			</div>

			<div class="form-group">
	            <label for="execution">Οδηγίες Εκτέλεσης:</label>
	            <br>
				<textarea 
					class="form-group" 
					name="execution"
					wrap="soft" 
					form="theForm"
					style="width:100%; height:85px; margin-bottom: 0%;"></textarea>
			</div>
			<br>

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
			  	
			  	<label 
			  		for="recipeIngredients0" 
			  		style="width:290px; display:inline-block; ">
			  		Συστατικά
			  	</label>
      			
      			<label 
      				for="recipeIngredientQty0" 
      				style="width:120px; display:inline-block; text-align: center;">
      				Ποσότητα
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
					style="display: inline-block;" 
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
