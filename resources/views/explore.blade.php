@extends('layouts.app')
@section('content')

<div class="container d-flex flex-row justify-content-start mt-2">

	<div class="card d-flex" style="height: max-content;">
    	<div class=" card-header d-flex flex-column justify-content-center mt-1 text-center" style="height: 100px;">
    		{{ __('Πρόσφατες συνταγές χρηστών')}}
		</div>
		<div class="card-body d-flex flex-row">
			<div class="w-100 d-inline-flex flex-column alert alert-success">
				@php
				$recent_recipes = DB::table('recipes')
                	->select('recipes.id', 'recipe_name', 'user_id', 'users.name')
                	->orderBy('recipes.created_at')
                	->take(10)
                	->join('users', 'users.id', 'recipes.user_id', 'created_at')
                	->get();
                @endphp
				@foreach($recent_recipes as $recipe)
					<div class="d-flex justify-content-between">
						<a href="{{ route('recipes.show',$recipe->id)}}"
							style="text-align: center; text-decoration: none;color: purple;">
							<b>{{$recipe->recipe_name }}</b>
						</a>
						<a class="text-center" 
							href="/recipes/user/{{ $recipe->user_id }}" 
							style="text-decoration: none; margin-left: 5px;">
							{{-- look at the controller. recipe->name is the username--}}
							από <b><i>{{$recipe->name }}</i></b>
						</a>
                   </div>
				@endforeach
			</div>
		</div>
	</div>


	<div>
		<div class="card d-flex" 
			style="height: max-content; margin-left: 15%;">
    		<div class="card-header d-flex flex-column justify-content-center mt-1 text-center" style="height: 100px;">
    			{{ __('Αναζήτηση Συνταγών Βάση Υλικών')}}
				<form action="{{ route('explore.search') }} " method="POST" class="mt-2">
					@csrf
					<div class="form-group d-flex justify-content-center">
						<input type="text" id="search_term" name="search_term" placeholder="" style="height: 35px;">
						<button type="submit" class="btn btn-success">Ψάξε</button>
					</div>
				</form>
			</div>
		</div>

		<div class="card-header mt-3 d-flex flex-column justify-content-center text-center" 
			style="height: 100px; margin-left: 15%;">
    		{{ __('Αναζήτηση Συνταγών Βάση Άλλων κριτηρίων')}}
    	</div>

    	<div class="card-body p-0" style="margin-left: 15%;">
			<form action="{{ route('explore.search') }} " method="POST" class="d-flex flex-column">
				@csrf
				<div class="d-flex flex-column alert alert-success">

					@php
					$eidos_geumatos = [
						'Γλυκό',
						'Κοκτέιλ',
						'Κυρίως Γεύμα',
						'Ορεκτικό',
						'Πρωινό',
						'Ροφήματα',
						'Σαλάτα',
						'Σνακ',
						'Συνοδευτικά'
					];
					$eidos_diatrofis = [
						'Βίγκαν',
						'Χορτοφαγικά',
						'Χωρίς γαλακτοκομικά',
						'Χωρίς γλουτένη',
						'Χωρίς ζάχαρη'
					];
					@endphp

					<p class="text-center mb-0 mt-0" style="color: purple;">Είδος Γεύματος</p>
					@php
					foreach ($eidos_geumatos as $eidos)
					    echo '<label class="m-checkbox" style="color: #0a58ca;"><input name="eidos_geumatos[]" type="checkbox" value="'.$eidos.'" style="margin-right: 10px;">'.$eidos.'</label>';
					@endphp
					<hr class="mt-1 mb-1">
					<p class="text-center mt-0 mb-0" style="color: purple;">Είδος Διατροφής</p>
					@php
					foreach ($eidos_diatrofis as $diatrofi) {
					    echo '<label class="m-checkbox" style="color: #0a58ca;"><input name="eidos_diatrofis[]" type="checkbox" value="'.$diatrofi.'" style="margin-right: 10px;">'.$diatrofi.'</label>';
					}
					@endphp
					<br>
    				<button type="submit" class="btn btn-success">Ψάξε</button>
				</div>
			</form>
		</div>
	</div>


	<div class="card d-flex" style="height: max-content; margin-left: 15%; width: max-content;">
		<div class="card-header d-flex flex-column justify-content-center mt-1 text-center" style="height: 100px;">
	    	{{ __('Αποτελέσματα Αναζήτησης')}}
	    </div>
		@if (!empty($recipes[0]))
			<div class="card-body d-flex flex-row ">
				<div class="w-100 d-inline-flex flex-column alert alert-success">
					@foreach($recipes as $recipe)
						<div class="d-flex justify-content-between">
							<a href="{{ route('recipes.show',$recipe->id)}}"
								style="text-align: center; text-decoration: none;color: purple;">
								<b>{{$recipe->recipe_name }}</b>
							</a>
							<a class="text-center" 
								href="/recipes/user/{{ $recipe->user_id }}" 
								style="text-decoration: none; margin-left: 5px;">
								{{-- look at the controller. recipe->name is the username--}}
								από <b><i>{{$recipe->name }}</i></b>
							</a>
	                   </div>
					@endforeach
				</div>
			</div>
		{{-- Case where the user has not searched for anything (yet)--}}
		@else
			<div class="card-body d-flex flex-row ">
				<div class="w-100 d-inline-flex flex-column alert alert-success">
					<p>{{ __('Δεν βρέθηκαν συνταγές.') }}</p>
				</div>
			</div>
		@endif
	</div>

</div>

@endsection
