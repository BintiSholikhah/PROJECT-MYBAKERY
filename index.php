<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>MyBakery</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <link rel="stylesheet" type="text/css" href="awesome/css/all.min">
    <link rel="stylesheet" type="text/css" href="awesome/css/stylehome.css">

  </head>
  <body>
      <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
        <div class="container">
           <a class="navbar-brand" href="#"> <img src="asset/logo.png" alt="Bootstrap" width="50" height="50" class="me-2"></a> 
          <a class="navbar-brand" href="#"><strong>MyBakery</strong></a>
          <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>
          <div class="collapse navbar-collapse" id="navbarNav">
            <form class="d-flex ms-auto" role="search">
              <input class="form-control me-2" type="search" placeholder="Cari menu anda" aria-label="Search">
              <button class="btn btn-outline-success" type="submit">Cari</button>
            </form>

            <ul class="navbar-nav ms-auto">
              <li class="nav-item">
                <a class="nav-link active" aria-current="page" href="#">Home</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="#">Notifikasi</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="#">Keranjang</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="login-backup.php">Login</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="logout.php">Logout</a>
              </li>
            </ul>
          </div>
      </div>
    </nav>
<div class="container">
    <div id="carouselExampleAutoplaying" class="carousel slide mt-5" data-bs-ride="carousel" style="margin-left: 30px;">
      <div class="carousel-inner">
        <div class="carousel-item active">
          <img src="asset/welcome1.png" class="d-block" alt="..." sizes="90">
        </div>
        <div class="carousel-item">
          <img src="asset/diskon.png" class="d-block" alt="...">
        </div>
        <div class="carousel-item">
          <img src="asset/komposisi.png" class="d-block" alt="...">
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

    <!-- Kategori-->
    <div class="container mt-5">
      <div class="judul-kategori" style="background-color: #FFF; padding: 5px 10px;">
        <h5 class="text-center" style="margin-top: 5px;">KATEGORI</h5>
      </div>
      <div class="row text-center row-container mt-2">
        <div class="col-lg-2 col-md-2 col-sm-4 col-6">
          <div class="menu-kategori">
            <a href="#"><img src="asset/kategori/kategori-kue-ulang-tahun.jpg" class="img-categori mt-3"></a>
            <p class="mt-2">Birthday Cake</p>  
          </div>
        </div>
        <div class="col-lg-2 col-md-3 col-sm-4 col-6">
          <div class="menu-kategori">
            <a href="#"><img src="asset/kategori/kategori-croissant.jpg" class="img-categori mt-3"></a>
            <p class="mt-2">Croissant</p>  
          </div>
        </div>
        <div class="col-lg-2 col-md-3 col-sm-4 col-6">
          <div class="menu-kategori">
            <a href="#"><img src="asset/kategori/kategori-muffin2.jpg" class="img-categori mt-3"></a>
            <p class="mt-2">Muffin</p>  
          </div>
        </div>
        <div class="col-lg-2 col-md-3 col-sm-4 col-6">
          <div class="menu-kategori">
            <a href="#"><img src="asset/kategori/kategori-pukis.png" class="img-categori mt-3"></a>
            <p class="mt-2">Pukis</p>  
          </div>
        </div>
        <div class="col-lg-2 col-md-3 col-sm-4 col-6">
          <div class="menu-kategori">
            <a href="#"><img src="asset/kategori/kategori-pudding.png" class="img-categori mt-3"></a>
            <p class="mt-2">Pudding Cake</p>  
          </div>
        </div>
        <div class="col-lg-2 col-md-3 col-sm-4 col-6">
          <div class="menu-kategori">
            <a href="#"><img src="asset/kategori/kategori-bolu.jpg" class="img-categori mt-3"></a>
            <p class="mt-2">Bolu</p>  
          </div>
        </div>
      </div>
    </div>
    <!-- Kategori-->

    <!-- Produk-->
    <div class="container mt-5">
      <div class="judul-kategori" style="background-color: #FFF; padding: 5px 10px;">
        <h5 class="text-center" style="margin-top: 5px;">PRODUK</h5>
      </div>
      <div class="row">
        <div class="col-lg-2 col-md-2 col-sm-4 col-6 mt-2">
          <div class="card text-center">
            <img src="asset/bolu/bolu-gulung-pandan.png" class="card-img-top" alt="...">
            <div class="card-body">
              <h5 class="card-title">Bolu Gulung Pandan</h5>
              <p class="card-text">Rp 85.000</p>
              <a href="#" class="btn btn-dark d-grid">Beli</a>
            </div>
          </div>
        </div>
        <div class="col-lg-2 col-md-2 col-sm-4 col-6 mt-2">
          <div class="card text-center">
            <img src="asset/croissant/Croissant22.png" class="card-img-top" alt="...">
            <div class="card-body">
              <h5 class="card-title">Croissant Coklat</h5>
              <p class="card-text">Rp 67.000</p>
              <a href="#" class="btn btn-dark d-grid">Beli</a>
            </div>
          </div>
        </div>
        <div class="col-lg-2 col-md-2 col-sm-4 col-6 mt-2">
          <div class="card text-center">
            <img src="asset/bolu/bolu-marmer.jpg" class="card-img-top" alt="...">
            <div class="card-body">
              <h5 class="card-title">Bolu Kukus Marmer</h5>
              <p class="card-text">Rp 97.000</p>
              <a href="#" class="btn btn-dark d-grid">Beli</a>
            </div>
          </div>
        </div>
        <div class="col-lg-2 col-md-2 col-sm-4 col-6 mt-2">
          <div class="card text-center">
            <img src="asset/muffin/muffin5.jpg" class="card-img-top" alt="...">
            <div class="card-body">
              <h5 class="card-title">Muffin Original</h5>
              <p class="card-text">Rp 85.000</p>
              <a href="#" class="btn btn-dark d-grid">Beli</a>
            </div>
          </div>
        </div>
        <div class="col-lg-2 col-md-2 col-sm-4 col-6 mt-2">
          <div class="card text-center">
            <img src="asset/pukis/pukis.png" class="card-img-top" alt="...">
            <div class="card-body">
              <h5 class="card-title">Pukis Ayu Messes</h5>
              <p class="card-text">Rp 85.000</p>
              <a href="#" class="btn btn-dark d-grid">Beli</a>
            </div>
          </div>
        </div>
        <div class="col-lg-2 col-md-2 col-sm-4 col-6 mt-2">
          <div class="card text-center">
            <img src="asset/pukis/original.png" class="card-img-top" alt="...">
            <div class="card-body">
              <h5 class="card-title">Pukis Ayu Nanas</h5>
              <p class="card-text">Rp 35.000</p>
              <a href="#" class="btn btn-dark d-grid">Beli</a>
            </div>
          </div>
        </div>
        <div class="col-lg-2 col-md-2 col-sm-4 col-6 mt-2">
          <div class="card text-center">
            <img src="asset/pudding/pudding.jpeg" class="card-img-top" alt="...">
            <div class="card-body">
              <h5 class="card-title">Pudding Madu</h5>
              <p class="card-text">Rp 40.000</p>
              <a href="#" class="btn btn-dark d-grid">Beli</a>
            </div>
          </div>
        </div>
        <div class="col-lg-2 col-md-2 col-sm-4 col-6 mt-2">
          <div class="card text-center">
            <img src="asset/pudding/cup-coklat.jpg" class="card-img-top" alt="...">
            <div class="card-body">
              <h5 class="card-title">Pudding Cup Coklat</h5>
              <p class="card-text">Rp 60.000</p>
              <a href="#" class="btn btn-dark d-grid">Beli</a>
            </div>
          </div>
        </div>
        <div class="col-lg-2 col-md-2 col-sm-4 col-6 mt-2">
          <div class="card text-center">
            <img src="asset/ulang-tahun/cake-kopi.png" class="card-img-top" alt="...">
            <div class="card-body">
              <h5 class="card-title">Birthday Cake Coffee</h5>
              <p class="card-text">Rp 225.000</p>
              <a href="#" class="btn btn-dark d-grid">Beli</a>
            </div>
          </div>
        </div>
        <div class="col-lg-2 col-md-2 col-sm-4 col-6 mt-2">
          <div class="card text-center">
            <img src="asset/croissant/bolu-pandan.jpg" class="card-img-top" alt="...">
            <div class="card-body">
              <h5 class="card-title">Bolu Kukus Pandan</h5>
              <p class="card-text">Rp 85.000</p>
              <a href="#" class="btn btn-dark d-grid">Beli</a>
            </div>
          </div>
        </div>
        <div class="col-lg-2 col-md-2 col-sm-4 col-6 mt-2">
          <div class="card text-center">
            <img src="asset/ulang-tahun/cake-moka.jpg" class="card-img-top" alt="...">
            <div class="card-body">
              <h5 class="card-title">Birthday Cake Moca</h5>
              <p class="card-text">Rp 357.000</p>
              <a href="#" class="btn btn-dark d-grid">Beli</a>
            </div>
          </div>
        </div>
        <div class="col-lg-2 col-md-2 col-sm-4 col-6 mt-2">
          <div class="card text-center">
            <img src="asset/bolu/bolu-gulung-redvelvet.png" class="card-img-top" alt="...">
            <div class="card-body">
              <h5 class="card-title">Bolu Gulung RedVelvet</h5>
              <p class="card-text">Rp 105.000</p>
              <a href="#" class="btn btn-dark d-grid">Beli</a>
            </div>
          </div>
        </div>
     </div>
    </div>
    <!-- Produk-->

    <!-- Footer -->
    <footer class="bg-dark p-5 mt-5">
      <div class="container">
        <div class="row">
          <div class="col">
            <a href="" class="text-decoration-none">
              <img src="asset/logo.png" style="width: 50px">
            </a>
            <span style="color: white;">Copyright  @2023  |  Create and Develope by MyBakery</span>
          </div>
          
        </div>
      </div>
    </footer>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
  </body>
</html>