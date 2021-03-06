@extends('layouts.app')
@section('content')

<!-- Errors or short msgs from server are showed here -->
<div class="d-flex justify-content-center">
	<div class="row col-md-2 mb-4 text-center">
		@if(!empty($error))
		<div class="alert alert-danger">
			{{ $error }}
		</div>
		@endif
	</div>
</div>


@if(empty($error))
<div class="row d-flex justify-content-center">
	<div class="col-sm-6">
		<h4 class="mb-4 mt-4 text-center">Συνταγές του χρήστη <b>{{ $username }}</b></h4>

		<input 	type="text" size="30" id="search_box" onkeyup="search_box()" placeholder="Αναζήτηση.."
		style="border: 1px solid blue; color: purple; font-size: 13px; border-radius:20px; text-align: center;">

		<div class="table-responsive">
			<table class="table table-striped table-hover text-center table-bordered" id="recipes_table">
				<thead class="text-center" >
					<th class="text-center" scope="col">
						<b>Όνομα</b>
						<img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcT_i_DfXCW6TIqhqYKDvOodMlmfBnO77TefTg&usqp=CAU" 
						style="height: 10px; width:15px; display: inline;">
					</th>
					<th class="text-center" scope="col">Βαθμολογία</th>
					<th class="text-center" scope="col">Συστατικά</th>
				</thead>

				<tbody id="recipes" class="text-center">
					@if (!empty($recipes))
					@foreach($recipes as $recipe)
					<tr class="text-center">
						<td class="text-center">
							<a style="text-align: center;" href="{{ route('recipes.show',$recipe->id)}}">{{$recipe->recipe_name }}</a>
						</td>
						<td class="text-center">
							@if ($recipe->rating>0)
								{{$recipe->rating}}/5
							@else
								-
							@endif
						</td>
						<td>
							<input class="iButton" type="button" value="Επέκταση" style="{display:block;}">
							<div class="container" style="display:none;width:200px;height: auto;">
								@if (!empty($ingredients))
								@foreach($ingredients as $ingredient)
								@php
								if ($ingredient->recipe_id == $recipe->id)
									echo '<li style="color: purple;">'.$ingredient->qty.' '.$ingredient->ingredient_name.'</li>';
								@endphp
								@endforeach
								@endif
							</div>
						</td>
					</tr>
					@endforeach
					@endif
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
		if ( this.value === 'Απόκρυψη' ) {
			open = false;
			this.value = 'Επέκταση';
			$(this).next("div.container").hide(4);
		}
		else {
			open = true;
			this.value = 'Απόκρυψη';
			$(this).siblings("[value='Απόκρυψη']").click();
			$(this).next("div.container").show(4);
		}
	});
</script>


@endif
@endsection