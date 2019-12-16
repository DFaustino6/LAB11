<div class="container-fluid">
	@foreach($products as $product)
		<div class="row mt-3">
			<div class="col-3 text-center">
				<div class="card mx-auto border-dark" style="width: 400px">
					<img class="mx-auto d-block" src="{{asset('resources/assets/images/'.$product->image)}}" style="width: 200px;height: 200px;">
					<div class="card-body">
						<h5 class="card-title">{{$product->price}}</h5>
						<a href="#" class="btn btn-primary btn-lg active mx-auto " role="button" aria-pressed="true">Adicionar ao Carrinho</a>
					</div>
				</div>
			</div>
		</div>
	@endforeach
</div>