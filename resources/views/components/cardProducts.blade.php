<div class="jumbotron p-4" id="product" style="font-family: Manrope">
	<div class="produk">
		<div class="container">
			<h1 class="display-2 mb-4 mt-4">Produk Kami</h1>
			<div class="row">
				@foreach ( $products as $product )
					@if ( $product['category'] == 'electronics' )
						<div class="card mb-3 mx-2 products" style="max-width: 540px;">
							<div class="row g-0">
								<div class="col-md-4">
									<img src="{{ $product['image'] }}" class="img-fluid rounded-start img" alt="...">
								</div>
								<div class="col-md-8">
									<div class="card-body">
										<h5 class="card-title title">{{ $product['title'] }}</h5>
										<p class="card-text">{{ $product['description'] }}</p>
										<p class="card-text price"><small class="text-muted">Price: Rp{{ number_format(($product['price'] * 15000)); }}</small></p>
										<!-- <a href="#" class="btn btn-primary cart-btn">Add to cart</a> -->
										<button type="submit" class="btn btn-primary cart-btn">Add to Cart</button>
									</div>
								</div>
							</div>
						</div>
					@endif
				@endforeach
			</div>
		</div>
	</div>
</div>