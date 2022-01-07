@extends('layouts.app')
@section('content')

<div class="row d-flex justify-content-center">	
	<div class="col-sm-8">
		<h2 class="text-center" style="color: #0050a; margin-bottom: 50px;"><b>{{$recipe->recipe_name}}</b></h2>


		<!-- Errors or short msgs from server are showed here -->
		<div class="d-flex justify-content-center">
			<div class="text-center">
				@if(session()->get('success'))
				<div class="alert alert-success">
					{{ session()->get('success') }} 
				</div>
				@endif
				@if(session()->get('error'))
				<div class="alert alert-danger">
					{{ session()->get('error') }} 
				</div>
				@endif
			</div>
		</div>


		<div class="card mt-4">
			<div class="card-header">
				<h5 class="text-center">
					@if ($recipe->rating>0)
						Συνολική Βαθμολογία:  {{$recipe->rating}}/5
					@else
						{{ __('Η συνταγή δεν έχει βαθμολογηθεί από κανέναν χρήστη.') }}
					@endif
				</h5>
			</div>

			{{-- Only show the rating fields if the user has not rated this recipe yet.--}}
			@if(empty(\DB::table('ratings')
						->where('recipe_id', \Route::getCurrentRoute()->parameters["id"])
						->where('user_id', \Auth::user()->id)
						->get()[0]))
			<div class="card-body">
				<div class="mt-3 text-center">
					<form method="POST" action="{{ route('recipes.rate',$recipe->id) }}" class="text-center">
						@csrf
					    <label>1</label>
					    <input type="radio" name="rating" value="1"
					    	style="margin-left:2px; margin-right:8px;"/>
					    <label>2</label>
					    <input type="radio" name="rating" value="2"
					    	style="margin-left:2px; margin-right:8px;"/>
					    <label>3</label>
					    <input type="radio" name="rating" value="3"
					    	style="margin-left:2px; margin-right:8px;"/>
					    <label>4</label>
					    <input type="radio" name="rating" value="4"
					    	style="margin-left:2px; margin-right:8px;"/>
					    <label>5</label>
					    <input type="radio" name="rating" value="5"
					    	style="margin-left:2px;"/>
						<br>
						<button type="submit" class="btn btn-success text-center" 
							style="margin-left:30px; margin-top:10px;">
							Βαθμολόγησε
						</button>
					</form>
				</div>
			</div>
			@else
			<div class="card-body">
				<div class="mt-3 text-center">
					{{ __('Έχετε ήδη βαθμολογήσει αυτή τη συνταγή με') }}
					@php
					$r = (\DB::table('ratings')
						->select('rating')
						->where('recipe_id', \Route::getCurrentRoute()->parameters["id"])
						->where('user_id', \Auth::user()->id)
						->get());
					echo $r[0]->rating.'/5';
					@endphp
				</div>
			</div>
			@endif
		</div>		

		<div class="card mt-4">
			<div class="card-header">
				<div class="d-flex flex-column justify-content-start">
					<h5 class="d-flex justify-content-start text-center" 
						style="margin-left: 33%; color: purple;">
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
			</div>
		</div>


		<div class="card mt-4">
			<div class="card-header">
				<h4 class="text-center" style="color: purple;">
					<b>Συστατικά:</b>
				</h4>
			</div>
			<ul class="list-group">
				@foreach ($ingredients as $ingredient)
					<li class="list-group-item text-center">
						{{ $ingredient->ingredient_name }}: {{ $ingredient->qty}}
					</li>
				@endforeach
			</ul>
		</div>


		<div class="card mt-4">
			<div class="card-header">
				<h4 style="text-align: center; color: purple;">
					<b>Εκτέλεση</b>
				</h4>
			</div>
			<ul class=list-group>
				<li class="list-group-item text-center">
					{{ $recipe->execution }}
				</li>
			</ul>
		</div>
		<br><br>


		<div class="card">
			<!-- Errors or short msgs from server are showed here -->
			<div class="d-flex justify-content-center">
				<div class="text-center">
					@if(session()->get('comment_success'))
					<div class="alert alert-success">
						{{ session()->get('comment_success') }} 
					</div>
					@endif
					@if(session()->get('error'))
					<div class="alert alert-danger">
						{{ session()->get('comment_error') }} 
					</div>
					@endif
				</div>
			</div>

			<div class="card-header">
				<h4 class="text-center" style="margin-top: 30px; color: purple;">
					<b>Σχόλια</b>
				</h4>
			</div>

			<div class="card-body ">
				<ul class="list-group">
					@foreach ($comments as $comment)
					<li class="list-group-item card-header">
						<p class="text-center"> 
							<i>
								{{ substr($comment->created_at, 0, 10) }}
							</i>
							
							από τον χρήστη
							<b><i>
								{{	(DB::table('users')
										->where('id', $comment->user_id)
										->get()
							   		)[0]->username
								}}
							</i></b>
						</p>
						
						<p>{{ $comment->comment }}</p>
					</li>
					
					@endforeach
				</ul>
				
				{{-- Only if the user has not commented to this recipe, show the comment form.--}}
				@if(empty(\DB::table('comments')
						->where('recipe_id', \Route::getCurrentRoute()->parameters["id"])
						->where('user_id', \Auth::user()->id)
						->get()[0]))
				<form action="{{ route('recipes.comment', $recipe->id) }}" 
					method="POST" class="text-center">
					@csrf
					<label>Άφησε το σχόλιο σου</label>
					<br>
					<textarea style="width: 400px;" name="comment"></textarea>
					<br>
					<button type="submit" class="btn btn-success">Κοινοποίηση</button>
				</form>
				@endif
			</div>
		</div>
	</div>	
</div>

@endsection
