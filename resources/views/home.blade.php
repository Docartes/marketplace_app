<!DOCTYPE html>
<html>
<head>
	<title>Home</title>
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">

  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Geologica:wght@100..900&family=Manrope:wght@200..800&display=swap" rel="stylesheet">
</head>
<body class="bg-dark">

	<nav class="navbar navbar-expand-lg bg-body-tertiary" data-bs-theme="dark" style="font-family: Manrope">
    <div class="container-fluid">
      <a class="navbar-brand mt-4" href="#">
        <img src="{{ asset('SUPER/3.png') }}" width="80" height="80">
      </a>
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarNav">
        <ul class="navbar-nav">
          <li class="nav-item">
            <a class="nav-link active" aria-current="page" href="#">Home</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#">Features</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#">Pricing</a>
          </li>
        </ul>
      </div>
    </div>
  </nav>


  <main>
    <div class="jumbotron bg-dark p-4 text-white" style="font-family: Geologica; max-height: 100vh;">
      <h1 class="display-4">Selamat Datang</h1>
      <div class="content">
        <p class="lead w-75 pb-4">
          Selamat datang di website kami. Disini kami menjual berbagai kebutuhan teknologi  elektronik anda. mulai dari komputer, alat jaringan, dan masih banyak lagi. selamat berbelanja.
          #Supertech

          
        </p>
        <a class="btn btn-primary btn-lg mt-4" href="#" role="button">Shop Now</a>
      </div>

      <!-- <img src="{{ asset('SUPER/pic.png') }}" style="background-color: transparent; border: none;" width="400" height="400"> -->
      
      
    </div>


    <div class="jumbotron bg-dark p-4 text-white" style="font-family: Geologica">
      <h1 class="display-3 mb-4" style="padding-left: 5.5rem;">Produk Kami</h1>
      
      <div class="produk">
        <div class="container">
          <div class="row">
            <div class="col-md-4 mb-4">
              <div class="card" style="width: 18rem;">
                <img src="https://www.itjaringan.net/cdn/shop/products/hex_lite_grande.jpg?v=1481090350" class="card-img-top" alt="...">
                <div class="card-body">
                  <h5 class="card-title">Card title</h5>
                  <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                  <a href="#" class="btn btn-primary">Go somewhere</a>
                </div>
              </div>
            </div>
            <div class="col-md-4 mb-4">
              <div class="card" style="width: 18rem;">
                <img src="https://www.bhinneka.com/blog/wp-content/uploads/2021/09/router-nirkabel-500x338.jpg" class="card-img-top" alt="...">
                <div class="card-body">
                  <h5 class="card-title">Card title</h5>
                  <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                  <a href="#" class="btn btn-primary">Go somewhere</a>
                </div>
              </div>
            </div>
            <div class="col-md-4 mb-4">
              <div class="card" style="width: 18rem;">
                <img src="https://images-cdn.ubuy.co.id/633aac77439ff81eff38e799-mikrotik-routerboard-rb2011uias-2hnd-in.jpg" class="card-img-top" alt="...">
                <div class="card-body">
                  <h5 class="card-title">Card title</h5>
                  <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                  <a href="#" class="btn btn-primary">Go somewhere</a>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </main>





  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>

</body>
</html>