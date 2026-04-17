<?php
// You can add PHP logic here if needed
?>

<!doctype html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>My Daraz</title>

  <!-- Bootstrap CSS (stable version) -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">

  <!-- Custom CSS -->
  <link rel="stylesheet" href="style.css">
</head>

<body>

<!-- Top Bar -->
<div class="top-bar bg-dark text-white py-2">
  <div class="container">
    <ul class="top-links list-inline mb-0 text-end">
      <li class="list-inline-item"><a href="home.php" class="text-white text-decoration-none">Home</a></li>
      <li class="list-inline-item"><a href="about.php" class="text-white text-decoration-none">About</a></li>
      <li class="list-inline-item"><a href="#" class="text-white text-decoration-none">Help</a></li>
      <li class="list-inline-item"><a href="#" class="text-white text-decoration-none">Login</a></li>
      <li class="list-inline-item"><a href="sign.php" class="text-white text-decoration-none">Sign Up</a></li>
    </ul>
  </div>
</div>

<!-- Navbar -->
<nav class="navbar navbar-expand-lg bg-light">
  <div class="container-fluid">

    <img src="darazlogoo.png" class="img-fluid" alt="Logo" style="height:50px; width:100px;">

    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarContent">
      <span class="navbar-toggler-icon"></span>
    </button>

    <div class="collapse navbar-collapse" id="navbarContent">

      <form class="d-flex mx-auto w-50">
        <input class="form-control me-2" type="search" placeholder="Search">
        <button class="btn btn-warning" type="submit">Search</button>
      </form>

    </div>
  </div>
</nav>

<!-- Carousel -->
<div id="carouselExample" class="carousel slide" data-bs-ride="carousel">
  <div class="carousel-inner">

    <div class="carousel-item active">
      <img src="pic1.png" class="d-block w-100" alt="Slide 1">
    </div>

    <div class="carousel-item">
      <img src="pic2.png" class="d-block w-100" alt="Slide 2">
    </div>

    <div class="carousel-item">
      <img src="pic1.png" class="d-block w-100" alt="Slide 3">
    </div>

  </div>

  <button class="carousel-control-prev" type="button" data-bs-target="#carouselExample" data-bs-slide="prev">
    <span class="carousel-control-prev-icon"></span>
  </button>

  <button class="carousel-control-next" type="button" data-bs-target="#carouselExample" data-bs-slide="next">
    <span class="carousel-control-next-icon"></span>
  </button>
</div>

<!-- Products -->
<div class="container my-4">
  <div class="row g-3">

    <!-- Product 1 -->
    <div class="col-6 col-md-4 col-lg-3">
      <div class="card">
        <img src="https://images.unsplash.com/photo-1542291026-7eec264c27ff" class="card-img-top">
        <div class="card-body">
          <h6 class="card-title">Apple iPhone 13</h6>
          <p class="text-danger">Rs. 189999</p>
          <small>⭐⭐⭐⭐⭐ (320)</small>
        </div>
      </div>
    </div>

    <!-- Product 2 -->
    <div class="col-6 col-md-4 col-lg-3">
      <div class="card">
        <img src="https://images.unsplash.com/photo-1542291026-7eec264c27ff" class="card-img-top">
        <div class="card-body">
          <h6 class="card-title">Nike Air Max Shoes</h6>
          <p class="text-danger">Rs. 12499</p>
          <small>⭐⭐⭐⭐☆ (210)</small>
        </div>
      </div>
    </div>

    <!-- Product 3 -->
    <div class="col-6 col-md-4 col-lg-3">
      <div class="card">
        <img src="https://images.unsplash.com/photo-1585386959984-a4155224a1ad" class="card-img-top">
        <div class="card-body">
          <h6 class="card-title">Bluetooth Headphones</h6>
          <p class="text-danger">Rs. 2999</p>
          <small>⭐⭐⭐⭐☆ (200)</small>
        </div>
      </div>
    </div>

    <!-- Product 4 -->
    <div class="col-6 col-md-4 col-lg-3">
      <div class="card">
        <img src="https://images.unsplash.com/photo-1593359677879-a4bb92f829d1" class="card-img-top">
        <div class="card-body">
          <h6 class="card-title">Samsung 55" Smart TV</h6>
          <p class="text-danger">Rs. 134999</p>
          <small>⭐⭐⭐⭐⭐ (340)</small>
        </div>
      </div>
    </div>

  </div>
</div>

<!-- Bootstrap JS -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>

</body>
</html>