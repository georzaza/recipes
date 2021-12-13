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
	<div class="col-sm-10">
		<div class="m-8">
			<a style="width: auto; margin-left:40%; " href="{{ route('products.create')}}" class="btn btn-success">Add New Product</a>  	
		</div>

		<!-- Search -->
		<div class="d-flex justify-content-between mt-4 mb-1 text-center">
			
			<!-- Search Products -->
			<input type="text" id="search_box" onkeyup="search_box()" placeholder="Search products or details... ">

			<!-- Search Recipes For Some Product-->
			<form action="{{ route('available-recipes-with.store') }}" method="get">
				<div class="form-group d-flex justify-content-center">
					<input type="text" id="ingredient" name="ingredient" placeholder="Find Recipes With..." style="height: 35px;">
					<button type="submit" class="btn btn-success">Search</button>
				</div>
			</form>
		</div>

		<!-- Main Content -->
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

					@foreach($products as $product)
					<tr>
						<td>{{$product->product_name}}</td>
						<td>{{$product->exp_date }}</td>
						<td>{{$product->qty }}</td>
						<td>{{$product->weight }}</td>
						<td>{{$product->details }}</td>
						<td>
							<a href="{{ route('products.edit',$product->product_id)}}" class="btn btn-primary">Edit</a>
						</td>
						<td>
							<a href="{{ route('products.destroy', $product->product_id)}}" method="get">
								<button class="btn btn-danger">Delete</button></a>
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
