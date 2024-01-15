<?php
require 'functionUser.php';

?>
<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Toko Laptop 2023</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.1/css/all.min.css" integrity="sha512-MV7K8+y+gLIBoVD59lQIYicR65iaqukzvf/nwasF0nqhPay5w/9lJmVM2hMDcnK1OnMGCdVK+iQrJ7lzPJQd1w==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <style>
        form {
            position: absolute;
            left: 150px;

        }
        .btn-lengkap{
          border-radius: 50px;
        }
        .pesana-saya {
          margin-right: 20px;
        }

        .box{
          width: 230px;
          height: 120px;
          border-radius: 20px;
          background-color: aqua;
        }

        .sidebar{
          margin: 20px;
        }
        
        .kategori{
          text-decoration: none;
          color: black;
          font-size: 24px;
        }
    </style>
  </head>
  <body>

    <div class="collapse" id="navbarToggleExternalContent">
        <div class="bg-dark p-4">
          <h5 class="text-white h4">Toko Printer</h5>
          <span class="text-muted">Cannon, Epson, and Laserjet.</span>
        </div>
      </div>
      <nav class="navbar navbar-light bg-light ms-5">
        <div class="container">
          <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarToggleExternalContent" aria-controls="navbarToggleExternalContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>
          <form class="d-flex" role="search">
            <input class="form-control me-2" type="search" placeholder="nyari printer model apa?" aria-label="Search">
            <button class="btn btn-outline-success" type="submit">Search</button>
          </form>
            
            
          <?php if(isset($_SESSION["username"])) : ?>
              <a href="../auth/login/index.php" class="btn" style="margin-left: 830px;">Halo, <?= $_SESSION["username"]; ?></a>
              <a href="logout.php" class="btn btn-primary px-4 py-2">Logout</a>
          <?php endif; ?>
            
        </div>
      </nav>

      <div class="container mt-3">
        <div id="carouselExampleFade" class="carousel slide carousel-fade" data-bs-ride="carousel" >
          <div class="carousel-inner">
            <div class="carousel-item active">
              <img src="assets/images/epson.jpeg" class="d-block w-100" height="450" alt="...">
            </div>
            <div class="carousel-item">
              <img src="assets/images/cannon.jpg" class="d-block w-100" height="450" alt="...">
            </div>
            <div class="carousel-item">
              <img src="assets/images/laserjet.jpg" class="d-block w-100" height="450" alt="...">
            </div>
          </div>
          <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleFade" data-bs-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Previous</span>
          </button>
          <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleFade" data-bs-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Next</span>
          </button>
        </div>
  
      </div>

              
      <section class="container">
        <div class="row mt-5">
          <div class="col">
            <h4 class="fs-1 fw-bold">Kategori Pilihan</h4>
          </div>
        </div>
        <hr>

        <div class="row mt-3">
          
          <div class="col">
            <a href="" class="kategori">
            <div class="card card-categories py-3">
             <div class="image-card text-center">
               <img src="assets/images/epson.jpeg" alt="snack" class="img-fluid">
            </div>
            <div class="text-card text-center mt-2">Epson</div>
            </div>
            </a>
          </div>

          <div class="col">
            <a href="" class="kategori">
            <div class="card card-categories py-3">
             <div class="image-card text-center">
               <img src="assets/images/cannon.jpg" alt="snack" class="img-fluid">
            </div>
            <div class="text-card text-center mt-2">Cannon</div>
            </div>
            </a>
          </div>
          
          <div class="col">
            <a href="" class="kategori">
            <div class="card card-categories py-3">
             <div class="image-card text-center">
               <img src="assets/images/laserjet.jpg" alt="snack" class="img-fluid">
            </div>
            <div class="text-card text-center mt-2">Laserjet</div>
            </div>
            </a>
          </div>
          
          <div class="col">
            <a href="" class="kategori">
            <div class="card card-categories py-3">
             <div class="image-card text-center">
               <img src="assets/images/epson.jpeg" alt="snack" class="img-fluid">
            </div>
            <div class="text-card text-center mt-2">Epson</div>
            </div>
            </a>
          </div>
          
  </section>

   <div class="container mt-4">

    <div class="row">
      <div class="col">
        <h4 class="fs-1 fw-bold"> Produk </h4>
        <hr class=""> 
      </div>
    </div>

    <div class="row">
      <div class="col d-flex justify-content-between">
        <div class="card" style="width: 18rem;">
          <img src="assets/images/cannon.jpg" class="card-img-top" height="300px" alt="">
          <div class="card-body">
            <h5 class="card-title"></h5>
            <h5 class="card-title"></h5>
            <a href="" class="btn btn-primary">Beli Sekarang</a>
          </div>
        </div>  

      </div>
      <div class="col d-flex justify-content-between">
        <div class="card" style="width: 18rem;">
          <img src="assets/images/laserjet.jpg" class="card-img-top" height="300px" alt="">
          <div class="card-body">
            <h5 class="card-title"></h5>
            <h5 class="card-title"></h5>
            <a href="" class="btn btn-primary">Beli Sekarang</a>
          </div>
        </div>  

      </div>
      <div class="col d-flex justify-content-between">
        <div class="card" style="width: 18rem;">
          <img src="assets/images/epson.jpeg" class="card-img-top" height="300px" alt="">
          <div class="card-body">
            <h5 class="card-title"></h5>
            <h5 class="card-title"></h5>
            <a href="" class="btn btn-primary">Beli Sekarang</a>
          </div>
        </div>  

      </div>
    </div>

    </div>
    <footer class="my-4 text-center">
      @copyright 2024 All right reserved Toko Printer
    </footer>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-OERcA2EqjJCMA+/3y+gxIOqMEjwtxJY7qPCqsdltbNJuaOe923+mo//f6V8Qbsw3" crossorigin="anonymous"></script>
  </body>
</html>