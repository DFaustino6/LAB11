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
			      <th scope="col">ID</th>
			      <th scope="col">Ordered</th>
			      <th scope="col">Total</th>
			      <th scope="col">Status</th>
			      <th scope="col"></th>
			    </tr>
			  </thead>
			  @if(!isset($error))
			  @foreach($db as $keyO => $order)
				  <tbody class="text-center">
				    <tr>
				      <th scope="row">{{$order->id}}</th>
				      <td>{{$order->created_at}}</td>
				      <td>{{$order->total}}€</td>
				      <td>{{$order->status}}</td>
				      <td><a class="btn btn-link" class="clickable" href="{{action('OrdersController@order',$order->id)}}">Details</a>
        			  </td>
				    </tr>	
				  </tbody>	  
			  @endforeach
			  @else
				<div class="card-body text-center">
					<h2>No orders. Go buy some sunglasses!</h2>
				</div>
			  @endif
			</table>
		</div>
	</div>
</div>