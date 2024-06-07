<!DOCTYPE html>
<html>
<head>
	<title>{{ $title }}</title>
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">

  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Geologica:wght@100..900&family=Manrope:wght@200..800&display=swap" rel="stylesheet">
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">
</head>
<body id="home">


	<nav class="navbar navbar-expand-lg bg-body-tertiary" style="font-family: Manrope;">
    <div class="container">
      <a class="navbar-brand" href="#home">SuperTech</a>
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <ul class="navbar-nav me-auto mb-2 mb-lg-0">
          <li class="nav-item">
            <a class="nav-link active" aria-current="page" href="#home">Home</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#product">Products</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" aria-disabled="true"><i class="bi bi-cart"></i></a>
          </li>
        </ul>
        <form class="d-flex" role="search">
          <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
          <button class="btn btn-outline-success" type="submit"><i class="bi bi-search"></i></button>
        </form>
      </div>
    </div>
  </nav>


  <main class="m-4">
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


    <div class="jumbotron p-4" id="product" style="font-family: Geologica">
      <div class="produk">
        <div class="container">
          <h1 class="display-3 mb-4">Produk Kami</h1>
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
  </main>

  <footer class="bg-body-tertiary text-center text-lg-start" style="font-family: Manrope">
    <!-- Copyright -->
    <div class="text-center p-3" style="background-color: rgba(0, 0, 0, 0.05);">
      © 2024 Copyright:
      <a class="text-body link-underline link-underline-opacity-0" href="">Kelompok 1</a>
    </div>
    <!-- Copyright -->
  </footer>






  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>

</body>
</html>