@extends('layouts.app')

@section('content')
<div class="container">
	<div id="carouselExampleAutoplaying" class="carousel slide" data-bs-ride="carousel">
		<div class="carousel-inner">
			<div class="carousel-item active" data-bs-interval="10000">
				<img src="{{ asset('banner/1.png') }}" class="d-block w-100" alt="...">
			</div>
			<div class="carousel-item" data-bs-interval="10000">
				<img src="{{ asset('banner/2.png') }}" class="d-block w-100" alt="...">
			</div>
			<div class="carousel-item" data-bs-interval="10000">
				<img src="{{ asset('banner/3.png') }}" class="d-block w-100" alt="...">
			</div>
		</div>
		<button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleAutoplaying" data-bs-slide="prev">
			<span class="carousel-control-prev-icon" aria-hidden="true"></span>
			<span class="visually-hidden">Previous</span>
		</button>
		<button class="carousel-control-next" type="button" data-bs-target="#carouselExampleAutoplaying" data-bs-slide="next">
			<span class="carousel-control-next-icon" aria-hidden="true"></span>
			<span class="visually-hidden">Next</span>
		</button>
	</div>
</div>

<div class="jumbotron p-4" id="product" style="font-family: Manrope">
	<div class="produk">
		<div class="container">
			<h1 class="display-2 mb-4 mt-4">Produk Kami</h1>
			<div class="row">
				@foreach ( $products as $product )
				@if ( $product['category'] == 'electronics' )
				<div class="card mb-3 mx-2" style="max-width: 540px;">
					<div class="row g-0">
						<div class="col-md-4">
							<img src="{{ $product['image'] }}" class="img-fluid rounded-start" alt="...">
						</div>
						<div class="col-md-8">
							<div class="card-body">
								<h5 class="card-title">{{ $product['title'] }}</h5>
								<p class="card-text">{{ $product['description'] }}</p>
								<p class="card-text"><small class="text-muted">Price: Rp{{ number_format(($product['price'] * 15000),2,',','.'); }}</small></p>
								<a href="#" class="btn btn-primary">Add to Cart</a>
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

<div class="container d-flex justify-content-center mb-3">
	<nav aria-label="Page navigation example">
		<ul class="pagination">
			<li class="page-item"><a class="page-link" href="#">Previous</a></li>
			<li class="page-item"><a class="page-link active" href="#">1</a></li>
			<li class="page-item"><a class="page-link" href="#">2</a></li>
			<li class="page-item"><a class="page-link" href="#">Next</a></li>
		</ul>
	</nav>
</div>
@endsection