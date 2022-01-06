@extends('layouts.app')
@section('content')

<!-- Errors or short msgs from server are showed here -->
<div class="d-flex justify-content-center">
	<div class="row col-md-2 mb-4 text-center">
		@if(session()->get('success'))
		<div class="alert alert-success">
			{{ session()->get('success') }} 
		</div>
		@endif
	</div>
</div>


<div class="row d-flex justify-content-center">
	<div class="col-sm-6">
		<input 	type="text" size="30" id="search_box" onkeyup="search_box()" placeholder="Search for recipes.."
		style="border: 1px solid blue; color: purple; font-size: 13px; border-radius:20px; text-align: center;">

		<div class="table-responsive">
			
			<table class="table table-striped table-hover text-center table-bordered" id="recipes_table">
				
				<thead class="text-center" >
					<th class="text-center" scope="col">
						<b>Name</b>
						<img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcT_i_DfXCW6TIqhqYKDvOodMlmfBnO77TefTg&usqp=CAU" 
						style="height: 10px; width:15px; display: inline;">
					</th>
					<th class="text-center" scope="col">Ingredients</th>					
				</thead>


				<tbody id="recipes" class="text-center">
					@foreach($recipes as $recipe)
					<tr class="text-center">
						<td class="text-center">
							<a style="text-align: center;" href="{{ route('recipes.show',$recipe->id)}}">{{$recipe->recipe_name }}</a>
						</td>
						<td>
							<input class="iButton" type="button" value="See Ingredients" style="{display:block;}">
							<div class="container" style="display:none;width:200px;height: auto;">
								@foreach($ingredients as $ingredient)
								<?php 
								if ($ingredient->recipe_id == $recipe->id)
									echo '<li style="color: purple;">'.$ingredient->qty.' '.$ingredient->ingredient_name.'</li>';
								?>
								@endforeach	
							</div>
						</td>
					</tr>
					@endforeach
				</tbody>
			</table>
		</div>
	</div>
</div>





<!-- Search bar-->
<script>
	function search_box() {
		let input, filter, tr, td, i, txtValue;
		input = document.getElementById('search_box');
		filter = input.value.toUpperCase();
		tbody = document.getElementById("recipes");
		tr = tbody.getElementsByTagName('tr');
		


		for (i = 0; i < tr.length; i++) {
			td = tr[i].getElementsByTagName("td")[0];
			txtValue = td.textContent || td.innerText;

			if (txtValue.toUpperCase().indexOf(filter) > -1 )
				tr[i].style.display = "";
			else
				tr[i].style.display = "none";
		}
	}
</script>

<!-- Ingridients Button -->
<script>
	$('.iButton').click(function(){
		if ( this.value === 'Hide Ingredients' ) {
			open = false;
			this.value = 'See Ingredients';
			$(this).next("div.container").hide(4);
		}
		else {
			open = true;
			this.value = 'Hide Ingredients';
			$(this).siblings("[value='Hide Ingredients']").click();
			$(this).next("div.container").show(4);
		}
	});
</script>

@endsection
