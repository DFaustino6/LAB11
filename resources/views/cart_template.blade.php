@extends('base_template')
@include('navbar_template')
<div class="container-fluid" style="padding-top: 4%">
	<div class="card">
		<div class="card-hearder text-center mt-3">
			<h2>Cart</h2>
			<div class="card-body">
				<div class="row mt-3">
					@if(session('cart'))
						@foreach(session('cart') as $id => $details)
						<div class="col-3 text-center mb-3">
							<div class="card mx-auto border-dark" style="width: 400px">
								<img class="mx-auto d-block" src="{{asset('resources/assets/images/'.$details['image'])}}" style="width: 200px;height: 200px;">
								<div class="card-body">
									<h5 class="card-title">{{$details['price']}}€</h5>
									<h5 class="card-title">{{$details['name']}}</h5>
									<div class=" row mb-2">
										<div class="col-4"></div>
										<div class="col-4">
											<input type="number" class="form-control quantity" value="{{$details['quantity']}}">
										</div>
										<div class="col-4"></div>
									</div>
									<button class="btn btn-primary update-cart" data-id="{{ $id }}">Update</button>
									<button class="btn btn-danger remove-from-cart" data-id="{{ $id }}">Remove</button>
								</div>
							</div>
						</div>
						@endforeach
				</div>
				<div class="row">
					<div class="col-3"></div>
					<div class="col-3"></div>
					<div class="col-3"></div>
					<div class="col-3">
						<a href=""><a href="{{action('CheckoutController@checkout')}}" class="btn btn-primary btn-lg active mx-auto " role="button" aria-pressed="true">Checkout</a></a>
					</div>
				</div>
				@else
				<h2 class="text-center">Cart Empty</h2>
				@endif
			</div>
		</div>
	</div>
</div>
@section('scripts')
 
 
    <script type="text/javascript">
 
        $(".update-cart").click(function (e) {
           e.preventDefault();
 
           var ele = $(this);
 	
            $.ajax({
               url: '{{ url('update-cart') }}',
               method: "patch",
               data: {_token: '{{ csrf_token() }}', id: ele.attr("data-id"), quantity: ele.parents("div").find(".quantity").val()},
               success: function (response) {
                   window.location.reload();
               }
            });
        });
 
        $(".remove-from-cart").click(function (e) {
            e.preventDefault();
 
            var ele = $(this);
 
            if(confirm("Are you sure")) {
                $.ajax({
                    url: '{{ url('remove-from-cart') }}',
                    method: "DELETE",
                    data: {_token: '{{ csrf_token() }}', id: ele.attr("data-id")},
                    success: function (response) {
                        window.location.reload();
                    }
                });
            }
        });
 
    </script>
 
@endsection