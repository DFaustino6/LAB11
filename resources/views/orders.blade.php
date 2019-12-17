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
			  @foreach($orders as $order)
				  <tbody class="text-center">
				    <tr>
				      <th scope="row">{{$order->id}}</th>
				      <td>{{$order->created_at}}</td>
				      <td>{{$order->total}}€</td>
				      <td>{{$order->status}}</td>
				      <td><button class="btn btn-link"  data-toggle="collapse" data-target="#details{{$order->id}}" class="clickable">Details</button>
        			  </td>
				    </tr>
				    <tr>
				    	<td colspan="5">
                             <div id="details{{$order_items[$loop->index]->id}}" class="collapse">
                                  <div class="col-3 text-center mb-3">
                                    <div class="card mx-auto border-dark" style="width: 200px">
                                        <img class="mx-auto d-block" src="{{asset('resources/assets/images/'.$order_items[$loop->index]->image)}}" style="width: 100px;height: 100px;">
                                        <div class="card-body">
                                            <h5 class="card-title">{{$order_items[$loop->index	]->price}}€</h5>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </td>
				    </tr>	
				  </tbody>	  
			  @endforeach
			</table>
		</div>
	</div>
</div>