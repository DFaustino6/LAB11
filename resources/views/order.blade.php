	@extends('base_template')
@include('navbar_template')

<div class="container" style="padding-top: 4%">
	<div class="card">
		<div class="card-header text-center">
			<h3>My Orders</h3>
		</div>
		<div class="card-body">
			<table class="table table-striped">
			  <thead class="text-center">
			    <tr>
			      <th scope="col">Product</th>
			      <th scope="col">Name</th>
			      <th scope="col">Price</th>
			      <th scope="col">Quantity</th>
			    </tr>
			  	@foreach($Order_items as $Item)
				  <tbody class="text-center">
				    <tr>
				      <td><img src="{{asset('resources/assets/images/'.$Item->image)}}" style="max-width: 200px; max-height: 200px"></td>
				      <td>{{$Item->name}}</td>
				      <td>{{$Item->price}}</td>
				      <td>{{$Item->quantity}}</td>
				    </tr>	
				  </tbody>	  
			  	@endforeach  
			</table>
		</div>
		<div class="card-footer">
			<small>Order ID: {{$id}}</small>
		</div>
	</div>
</div>