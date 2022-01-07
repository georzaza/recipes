@extends('layouts.app')
@section('content')

<div class="row d-flex justify-content-center">	
	<div class="col-sm-8">
		<h2 class="text-center">Βαθμολογία:  {{4}}/5</h2>
		<form action="kati allo" class="text-center" style="margin-top: 10px;">
			<button type="submit">
				dose ti diki sou vathmologia todo
			</button>
		</form>
		<br>
		<br>
		<h1 class="text-center" style="color: #0050a"><b>{{$recipe->recipe_name}}</b></h1>
		<div class="d-flex flex-column justify-content-start">
			<h5 class="d-flex justify-content-start text-center" 
				style="margin-left: 33%; margin-top: 20px; color: purple;">
				<b>Χρόνος: </b>
				<p style="display: inline-block; color: black; margin-left: 20px;">
					{{$recipe->time}}'
				</p>
			</h5>
			<h5 class="d-flex justify-content-start text-center" 
				style="margin-left: 33%; color: purple;">
				<b>Είδος Γεύματος: </b>
				<p style="display: inline-block; color: black; margin-left: 20px;">
					{{$recipe->type}}
				</p>
			</h5>

			@if(!empty($recipe->diet))
			<h5 class="d-flex justify-content-start text-center" 
				style="margin-left: 33%; color: purple;">
				<b>Ειδική κατηγορία: </b>
				<p style="display: inline-block; color: black; margin-left: 20px;">
					{{$recipe->diet}}
				</p>
			</h5>
			@endif
		</div>

		<div>
			<h4 class="text-center" style="margin-top: 30px; color: purple;">
				<b>Συστατικά:</b>
			</h4>
			<ul class="list-group">
				@foreach ($ingredients as $ingredient)
					<li style="margin-bottom: 5px;" class="list-group-item text-center">
						{{ $ingredient->ingredient_name }}: {{ $ingredient->qty}}
					</li>
				@endforeach
			</ul>
		</div>
		<div>
			<h4 style="margin-top: 30px; text-align: center; color: purple;">
				<b>Εκτέλεση</b>
			</h4>
			<ul class=list-group>
				<li style="margin-bottom: 45px;" class="list-group-item text-center">
					{{ $recipe->execution }}
				</li>
			</ul>
		</div>
		<br><br>
		<div>
			<h4 style="margin-top: 30px; text-align: center; color: purple;"><b>Σχόλια</b></h4>
			<ul class=list-group>
				<p>{{ __('date') }} apo ton {{ __('tade') }}</p>
				<li style="margin-bottom: 45px; width: max-content;" class="list-group-item text-center">
					{{ __('Sxolia') }}
				</li>
				<p>{{ __('date') }} apo ton {{ __('tade') }}</p>
				<li style="margin-bottom: 45px; width: max-content;" class="list-group-item text-center">
					{{ __('Sxolia polla kai kala')}}
				</li>
			</ul>
			<form action="kati">
				{{-- check if authed. todo
				--}}
				<p>Afhse to sxolio sou</p>
				<textarea style="width: 400px;">
					something
				</textarea>
				<br>
				<button type="submit">Koinopoiisi todo</button>
			</form>
		</div>
	</div>	
</div>

@endsection
