@extends('layouts.app')

@section('content')


<div class="col-sm-12">
	<br>
	@if(session()->get('success'))
	<div class="alert alert-success">
		{{ session()->get('success') }} 
	</div>
	@endif
</div>

<div class="row d-flex justify-content-center">
	<div class="col-sm-10">
		<div class="m-8">
			<a style="width: auto; margin-left:40%; " href="{{ route('products.create')}}" class="btn btn-success">Add New Product</a>  	
		</div>

		<input style="border: 1px solid blue; color: purple; font-size: 13px; border-radius:20px; text-align: center;" type="text" size="30" id="search_box" onkeyup="search_box()" placeholder="Search for product or details..">

		<form action="{{ route('available-recipes-with.store') }}" method="get">
			<div class="form-group">
				<label for="ingredient" style="color: purple; font-size:15px; text-align: right;" >Search for recipes with: </label>
				<input type="text" size="20" id="ingredient" name="ingredient" placeholder="Type an ingredient" style="text-align: center; font-size: 15px; vertical-align:middle; border: 1px solid purple; border-radius:20px;">
				<button type="submit" class="btn btn-info" style="color: purple; margin-bottom: 1px; border-radius:10px; vertical-align:middle;">Search</button>
			</div>
		</form>
		
		<div class="table-responsive">
			<table class="table table-striped table-hover text-center table-bordered" id="products_table" >
				<thead class="thead-dark">
					<th scope="col">Product Name &emsp;</th>
					<th scope="col">Expiration Date 
						<img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcT_i_DfXCW6TIqhqYKDvOodMlmfBnO77TefTg&usqp=CAU" 
						style="height: 10px; width:15px; display: inline;">
						&emsp; 
					</th>
					<th scope="col"><b>Quantity</b> &emsp;</th>
					<th scope="col"><b>Weight</b> &emsp;</th>
					<th scope="col"><b>Details</b> &emsp;</th>
					<th colspan = 2><b></b></th>
				</thead>
				<tbody id="products">

					@foreach($products as $item)
					<tr>
						<td>{{$item->product_name}}</td>
						<td>{{$item->exp_date }}</td>
						<td>{{$item->qty }}</td>
						<td>{{$item->weight }}</td>
						<td>{{$item->details }}</td>
						<td>
							<a href="{{ route('products.edit',$item->product_id)}}" class="btn btn-primary">Edit</a>
						</td>
						<td>
							<form action="{{ route('products.destroy', $item->product_id)}}" method="post">
								@csrf
								@method('DELETE')
								<button class="btn btn-danger" type="submit">Delete</button>
							</form>
						</td>
					</tr>
					@endforeach
				</tbody>
			</table>
		</div>
	</div>
</div>
<br>



<script>
	
	// Search bar
	function search_box() {
		let input, filter, tr, td, i, txtValue;
		input = document.getElementById('search_box');
		filter = input.value.toUpperCase();
		tbody = document.getElementById("products");
		tr = tbody.getElementsByTagName('tr');


		for (i = 0; i < tr.length; i++) {
			td = tr[i].getElementsByTagName("td")[0];
			txtValue = td.textContent || td.innerText;
			td2 =  tr[i].getElementsByTagName("td")[4];
			txtValue2 = td2.textContent || td2.innerText;
			if (txtValue.toUpperCase().indexOf(filter) > -1 || txtValue2.toUpperCase().indexOf(filter) > -1)
				tr[i].style.display = "";
			else
				tr[i].style.display = "none";
		}
	}
</script>


@endsection
