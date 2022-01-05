@extends('layouts.app')
@section('content')

<div class="container d-flex flex-col mt-2">
    <div class="card d-flex">
    	<div class="card-header d-flex flex-column justify-content-start mt-1 text-center">
    		{{ __('Αναζήτηση Συνταγών Βάση Υλικών')}}
			<form action="{{ route('explore.search') }} " method="POST" class="mt-2">
				@csrf
				<div class="form-group d-flex justify-content-center">
					<input type="text" id="search_term" name="search_term" placeholder="Αναζήτηση" style="height: 35px;">
					<button type="submit" class="btn btn-success" >Search</button>
				</div>
			</form>

			@if (!empty($recipes))
			<div class="card-body d-flex flex-row">
				<div class="mt-4 d-inline-flex flex-column alert alert-success text-danger">
					@foreach($recipes as $recipe)
						<a href="{{ route('recipes.show',$recipe->id)}}"
							style="text-align: center; text-decoration: none;color: purple;">
							<b>{{$recipe->recipe_name }}</b><i> from <b>{{$recipe->name }}</b></i>
						</a>
					@endforeach
				</div>
			</div>
			@endif
		</div>
	</div>
</div>

@endsection


<!--
        
            <div class="card">
                <div class="card-header">{{ __('Status') }}</div>
                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success text-center" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif
                    <div class="alert alert-success text-center" role="alert">
                        {{ __('You are logged in!') }}
                    </div>
                </div>
                
                <div class="card-body">
                    <button class="btn-primary">{{ __('Add a new Recipe') }} </button>
                </div>
                <div class="card-body">
                    <button class="btn-primary">{{ __('Add a new Product') }} </button>
                </div>
                
            </div>
        </div>
        <div class="col-md-3">
            <div class="card d-flex justify-content-center">
                <div class="card-header">{{ __('Recent Recipes?') }}</div>
                <div class="card-body d-flex row justify-content-center">
                    <div class="alert alert-success text-danger text-center w-50" role="alert">
                        {{ __('Show some recipes here') }}
                    </div>
                </div>
            </div>
            <div class="card d-flex justify-content-center mt-5">
                <div class="card-header">{{ __('Recent Products?') }}</div>
                <div class="card-body d-flex row justify-content-center">
                    <div class="alert alert-success text-danger text-center w-50" role="alert">
                        {{ __('Show some products here') }}
                    </div>
                </div>
            </div>
        </div>
    </div>

-->