@extends('layouts.app')

@section('content')


<div class="row d-flex justify-content-center">	
	<div class="col-sm-8">
		<br>
		<br>
		<div>
			<h1 style="text-align: center; color: #0050a"><b>{{$recipe->recipe_name}}</b></h1>
		</div>
		<div>
			<h5 style="margin-top: 20px; text-align: center; color: purple;">
				<b style="display: inline-block;">Χρόνος: </b>
				<p style="display: inline-block; color: black; margin-left: 20px;">{{$recipe->recipe_time}}</p>
			</h5>
		</div>
		<div>
			<h5 style="margin-top: 20px; text-align: center; color: purple;">
				<b style="display: inline-block;">Είδος Γεύματος: </b>
				<p style="display: inline-block; color: black; margin-left: 20px;">
					{{$recipe->recipe_type}}
				</p>
			</h5>
		</div>
		
		@if(!empty($recipe->recipe_diet))
		<div>
			<h5 style="margin-top: 20px; text-align: center; color: purple;">
				<b style="display: inline-block;">Ειδική κατηγορία: </b>
				<p style="display: inline-block; color: black; margin-left: 20px;">{{$recipe->recipe_diet}}</p>
			</h5>
		</div>
		@endif
		
		<div>
			<h4 style="margin-top: 50px; text-align: center; color: purple;"><b>Ingredients:</b></h4>
			<ul class="list-group">
				@foreach ($ingredients as $ingredient)
					<li style="text-align: center; margin-bottom: 5px;" class="list-group-item">
						{{ $ingredient->ingredient_name }}: {{ $ingredient->qty}} Kg/L
					</li>
				@endforeach
			</ul>
		</div>
		<div>
			<h4 style="margin-top: 50px; text-align: center; color: purple;"><b>Execution</b></h4>
			<ul class=list-group>
			<li style="text-align: center; margin-bottom: 45px;" class=list-group-item>{{ $recipe->execution }}</li>
			</ul>
		</div>
		<br>
		<br>
	
	</div>	
</div>

@endsection
