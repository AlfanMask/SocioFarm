<!-- navbar -->
<nav class="navbar navbar-expand-lg">
  <div class="container">
    <a class="navbar-brand" href="#">
      <img src="<?= base_url('assets/img/logo-sociofarm.png') ?>" alt="" height="24">
    </a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarNav">
      <ul class="navbar-nav">
        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="#">Proyek</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#">Portfolio</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#">Keunggulan</a>
        </li>
        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
            Mitra
          </a>
          <ul class="dropdown-menu">
            <li><a class="dropdown-item" href="#">Dropdown 1</a></li>
            <li><a class="dropdown-item" href="#">Dropdown 2</a></li>
            <li><a class="dropdown-item" href="#">Dropdown 3</a></li>
          </ul>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#">Kontak</a>
        </li>
      </ul>
      <ul class="nav-right">
        <li class="nav-item">
            <a class="nav-link link-register" href="#">Daftar</a>
        </li>
        <li class="nav-item" style="float: right;">
            <a class="nav-link link-login" href="#">Masuk</a>
        </li>
      </ul>
    </div>
  </div>
</nav>

<!-- carousel -->
<div id="carouselHome" class="container carousel slide" data-ride="carousel">
  <ol class="carousel-indicators">
    <li data-target="#carouselHome" data-slide-to="0" class="active"></li>
    <li data-target="#carouselHome" data-slide-to="1"></li>
    <li data-target="#carouselHome" data-slide-to="2"></li>
  </ol>
  <div class="carousel-inner">
    <div class="carousel-item active">
      <img src="<?= base_url('assets/img/slide1.png') ?>" class="d-block w-100" alt="...">
    </div>
    <div class="carousel-item">
      <img src="<?= base_url('assets/img/slide2.png') ?>" class="d-block w-100" alt="...">
    </div>
    <div class="carousel-item">
      <img src="<?= base_url('assets/img/slide3.png') ?>" class="d-block w-100" alt="...">
    </div>
  </div>
  <a class="carousel-control-prev" href="#carouselHome" role="button" data-slide="prev">
    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
    <span class="sr-only"></span>
  </a>
  <a class="carousel-control-next" href="#carouselHome" role="button" data-slide="next">
    <span class="carousel-control-next-icon" aria-hidden="true"></span>
    <span class="sr-only"></span>
  </a>
</div>

<!-- projects -->
<div class="container section-projects">
  <div class="row">
    <div class="col-lg-6 col-md-6 col-sm-12 left-project">
      <div class="row">
        <div class="col-lg-6 col-md-6 col-sm-12">
        <div class="card" style="width: 18rem;">
          <img src="<?= base_url('assets/img/slide1.png') ?>" class="card-img-top" alt="..." style="height: 240px">
          <div class="card-body">
            <p class="card-text">Proyek Kambin Ternak Bpk. Zainudin - Part 2</p>
            <h5 class="card-title" style="font-weight:bold;">Rp 500.000</h5>
            <a href="#" class="btn btn-primary">Lihat Proyek</a>
          </div>
        </div>
        </div>
        <div class="col-lg-6 col-md-6 col-sm-12">
        <div class="card" style="width: 18rem;">
          <img src="<?= base_url('assets/img/slide1.png') ?>" class="card-img-top" alt="..." style="height: 240px">
          <div class="card-body">
            <p class="card-text">Proyek Kambin Ternak Bpk. Zainudin - Part 2</p>
            <h5 class="card-title" style="font-weight:bold;">Rp 500.000</h5>
            <a href="#" class="btn btn-primary">Lihat Proyek</a>
          </div>
        </div>
        </div>
        <div class="col-lg-6 col-md-6 col-sm-12 mt-4">
        <div class="card" style="width: 18rem;">
          <img src="<?= base_url('assets/img/slide1.png') ?>" class="card-img-top" alt="..." style="height: 240px">
          <div class="card-body">
            <p class="card-text">Proyek Kambin Ternak Bpk. Zainudin - Part 2</p>
            <h5 class="card-title" style="font-weight:bold;">Rp 500.000</h5>
            <a href="#" class="btn btn-primary">Lihat Proyek</a>
          </div>
        </div>
        </div>
        <div class="col-lg-6 col-md-6 col-sm-12 mt-4">
        <div class="card" style="width: 18rem;">
          <img src="<?= base_url('assets/img/slide1.png') ?>" class="card-img-top" alt="..." style="height: 240px">
          <div class="card-body">
            <p class="card-text">Proyek Kambin Ternak Bpk. Zainudin - Part 2</p>
            <h5 class="card-title" style="font-weight:bold;">Rp 500.000</h5>
            <a href="#" class="btn btn-primary">Lihat Proyek</a>
          </div>
        </div>
        </div>
      </div>
    </div>
    <div class="col-lg-6 col-md-6 col-sm-1 right-project">
      <h5>PROYEK</h5>
      <h1>Puluhan Proyek Perlu Bantuanmu</h1>
      <p>Mari bantu peternak lokal mengembangkan usahanya, dan ambil keuntungannya.</p>
      <a href="#" class="btn">Lihat lebih banyak</a>
      <div class="achievements">
        <div class="achive achive-1">
          <div class="icon"><i class="fa fa-check-square-o" style="font-size:32px"></i></div>
          <h2>50+<span style="font-size: 16px; vertical-align: middle">&nbsp;&nbsp; Total proyek</span></h2>
        </div>
        <div class="achive achive-2">
          <div class="icon"><i class="fa fa-area-chart" style="font-size:32px"></i></div>
          <h2>50jt+<span style="font-size: 16px; vertical-align: middle">&nbsp;&nbsp; Investasi Terkelola</span></h2>
        </div>
        <div class="achive achive-3">
          <div class="icon"><i class="fa fa-users" style="font-size:28px;"></i></div>
          <h2>100+<span style="font-size: 16px; vertical-align: middle">&nbsp;&nbsp; Mitra Terdaftar</span></h2>
        </div>
      </div>
    </div>
  </div>
</div>