<?php
require "./function.php";
?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Subplay Store</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
  <link rel="stylesheet" href="<?= $link ?>asset/css/style.css">
</head>

<body>

  <!-- navbar -->
  <nav class="navbar navbar-expand-lg navbar-dark bg-secondary">
    <div class="container">
      <a class="navbar-brand" href="#">
        <img src="<?= $link ?>asset/mlbb_logo.jpg " alt="logo icon" width="50" height="50" class="me-2">
          <span class="font-subplay">Subplay <strong>Store</strong></span>
      </a>
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <ul class="navbar-nav ms-auto">
          <li class="nav-item">
            <a class="nav-link active" aria-current="page" href="#">Home</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#">Games</a>
          </li>
          <li class="nav-item">
            <a class="btn btn-outline-light" href="#singin">Singin</a>
          </li>
        </ul>
        </li>
        </ul>
      </div>
    </div>
  </nav>
  <!-- navbar selesai -->

  <!-- carousel -->
  <div class="container">
    <div id="carouselExampleIndicators" class="carousel slide mt-5" data-bs-ride="carousel">
      <div class="carousel-indicators">
        <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
        <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="1" aria-label="Slide 2"></button>
        <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="2" aria-label="Slide 3"></button>
      </div>
      <div class="carousel-inner">
        <div class="carousel-item active">
          <img src="<?= $link ?>asset/FF_logo.png" class="d-block img-fluid" alt="Gambar1">
        </div>
        <div class="carousel-item">
          <img src="<?= $link ?>asset/mlbb_logo.jpg" class="d-block img-fluid" alt="Gambar2">
        </div>
        <div class="carousel-item">
          <img src="..." class="d-block w-100" alt="Gambar3">
        </div>
      </div>
      <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="prev">
        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
        <span class="visually-hidden">Previous</span>
      </button>
      <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="next">
        <span class="carousel-control-next-icon" aria-hidden="true"></span>
        <span class="visually-hidden">Next</span>
      </button>
    </div>
  </div>
  <!-- carousel selesai -->
  <div class="container mt-5">
    <div class="row">
      <div class="col">
        <h5>poppuler</h5>
        <h2>Now Tranding</h2>
      <!-- card -->
      </div>
    </div>
    <div class="row">
      <div class="col-sm-auto">
        <div class="card" style="width: 14rem;">
          <img src="<?= $link ?>asset/mlbb_logo.jpg" class="card-img-rounded mx-auto d-block mt-4" alt="mlbb">
          <div class="card-body">
            <h5 class="card-title">MOBILE LEGEDS (FAST)</h5>
            <p class="card-text mg-auto">proses 1-10 menit</p>
            <a href="#" class="btn btn-primary">Top Up</a>
          </div>
        </div>
      </div>
      <div class="col-sm-auto">
        <div class="card" style="width: 14rem;">
          <img src="<?= $link ?>asset/mlbb_logo.jpg" class="card-img-rounded mx-auto d-block mt-4" alt="mlbb">
          <div class="card-body">
            <h5 class="card-title">MOBILE LEGEDS (SLOW)</h5>
            <p class="card-text mg-auto">proses 1 X 24 jam</p>
            <a href="#" class="btn btn-primary">Top Up</a>
          </div>
        </div>
      </div>
      <div class="col-sm-auto">
         <div class="card" style="width: 14rem;">
          <img src="<?= $link ?>asset/mlbb_logo.jpg" class="card-img-rounded mx-auto d-block mt-4" alt="pubgm">
          <div class="card-body">
            <h5 class="card-title">PUBG MOBILE</h5>
            <p class="card-text">testing.</p>
            <a href="#" class="btn btn-primary">Top Up</a>
          </div>
        </div>
      </div>
      <div class="col-sm-auto">
         <div class="card" style="width: 14rem;">
          <img src="<?= $link ?>asset/FF_logo.png" class="card-img-rounded mx-auto d-block mt-4" alt="ff">
          <div class="card-body">
            <h5 class="card-title">FREE FIRE</h5>
            <p class="card-text">testing.</p>
            <a href="#" class="btn btn-primary">Top Up</a>
          </div>
        </div>
      </div>
  </div>
  <!-- card selesai -->
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous">
  </script>
</body>

</html>