@extends('layouts.app')
@section('content')

<div class="container d-flex flex-row mt-2">
    <div class="card d-flex">
    	<div class="card-header d-flex flex-column justify-content-start mt-1 text-center">
    		{{ __('Αναζήτηση Συνταγών Βάση Υλικών')}}
			<form action="{{ route('explore.search') }} " method="POST" class="mt-2">
				@csrf
				<div class="form-group d-flex justify-content-center">
					<input type="text" id="search_term" name="search_term" placeholder="" style="height: 35px;">
					<button type="submit" class="btn btn-success">Ψάξε</button>
				</div>
			</form>

			@if (!empty($recipes))
			<div class="card-body d-flex flex-row ">
				<div class="w-100 mt-4 d-inline-flex flex-column alert alert-success text-danger">
					@foreach($recipes as $recipe)
						<a href="{{ route('recipes.show',$recipe->id)}}"
							style="text-align: center; text-decoration: none;color: purple;">
							<b>{{$recipe->recipe_name }}</b>
                        </a>
                        <i> από </i>
                        <a href="/recipes/user/{{ $recipe->user_id }}">
                            <b>{{$recipe->name }}</b>
                        </a>
					@endforeach
				</div>
			</div>
			@endif
		</div>
	</div>
</div>

@endsection
