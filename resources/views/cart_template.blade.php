@extends('base_template')
@include('navbar_template')
<div class="container-fluid" style="padding-top: 4%">
	<div class="card">
		<div class="card-hearder text-center mt-3">
			<h2>Cart</h2>
			<div class="card-body">
				<div class="row mt-3">
					@foreach($products as $product)
					<div class="col-3 text-center mb-3">
						<div class="card mx-auto border-dark" style="width: 400px">
							<img class="mx-auto d-block" src="{{asset('resources/assets/images/'.$product->image)}}" style="width: 200px;height: 200px;">
							<div class="card-body">
								<h5 class="card-title">{{$product->price}}€</h5>
								<div class=" row mb-2">
									<div class="col-4"></div>
									<div class="col-4">
										<input type="number" class="form-control quantity ">
									</div>
									<div class="col-4"></div>
								</div>
								<a href="" class="btn btn-primary btn-lg active mx-auto " role="button" aria-pressed="true">Update</a>
								<a href="" class="btn btn-danger btn-lg active mx-auto " role="button" aria-pressed="true">Clear</a>
							</div>
						</div>
					</div>
					@endforeach
				</div>
			</div>
		</div>
	</div>
</div>