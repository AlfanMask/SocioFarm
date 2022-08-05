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
            <li><a class="dropdown-item" href="#">Daftar Mitra</a></li>
            <li><a class="dropdown-item" href="#">Cara Menjadi Mitra</a></li>
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

<!-- tentang dan keunggulan kami -->
<div id="tentang-dan-keunggulan">
<div class="container">
  <div class="tentang-kami">
    <div class="row">
      <div class="col-lg-6 col-md-6 col-sm-12 tentang-left-side">
        <div class="texts">
          <h5>TENTANG KAMI</h5>
          <h1 class="text-white">Karena Tak Kenal Maka Tak Sayang</h1>
          <p class="text-white">Sociofarm memiliki 2 program layanan, berikut ini adalah layanan yang di kelola dan memiliki kepercayaan di masyarakat</p>
        </div>
      </div>
      <div class="col-lg-6 col-md-6 col-sm-12">
        <img class="img-tentang-kami" src="<?= base_url('assets/img/img-tentang-kami.png') ?>" alt="" style="width:100%;border-radius: 40px;">
      </div>
    </div>
    <div class="keunggulan-kami">
      <div class="keunggulan-first-side">  
        <h5 class="text-center">KEUNGGULAN KAMI</h5>
        <h1 class="text-white text-center">Kenapa Kamu <br>Harus Pilih SocioInvest</h1>
        <p class="text-white text-center" style="opacity: .7">Berikut ini merupakan keunggulan yang akan kamu dapatkan jika bermitra dengan Sociofarm Indonesia</p>
      </div>
      <div class="keunggulan-second-side">
        <div class="row">
          <div class="col-lg-4 col-md-4 col-ms-12">
            <div class="keunggulan-point">  
              <i class="fa fa-suitcase"></i>
              <h3>Memberdayakan</h3>
              <p>Proyek usaha sektor pertanian, peternakan dan pangan selalu berorientasi untuk memberdayakan peternak petani lokal.</p>
            </div>
          </div>
          <div class="col-lg-4 col-md-4 col-ms-12">
          <div class="keunggulan-point">    
          <i class="fa fa-shield"></i>
            <h3>Terpercaya</h3>
            <p>Proses bermitra yang mudah serta dana usaha ataupun investasi di kelola secara transparan oleh mitra yang terpercaya.</p>
          </div>
          </div>
          <div class="col-lg-4 col-md-4 col-ms-12">
          <div class="keunggulan-point">    
          <i class="fa  fa-bar-chart-o"></i>
            <h3>Keuntungan</h3>
            <p>Pengelolaan tepat dan pertumbuhan usaha pertanian dan peternakan  menghasilkan keuntungan yang stabil.</p>
          </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>
</div>

<!-- form -->
<div class="container socio-form">
  <div class="row">
    <div class="col-lg-5 col-md-5 col-sm-12">
      <h1>Ingin Memulai Usaha dengan Kami?</h1>
      <p>Mari terhubung & bekerjasama dengan kami untuk mewujudkan acara ataupun proyek usaha sektor pertanian, peternakan dan pangan. </p>
    </div>
    <div class="col-lg-1 col-md-1"></div>
    <div class="col-lg-6 col-md-6 col-sm-12">
      <form class="row g-3">
        <div class="col-12" style="margin-top:-12px;">
          <label for="inputName" class="form-label">Nama Lengkap</label>
          <input type="text" class="form-control" id="inputName" placeholder="Nama Lengkap">
        </div>
        <div class="col-12">
          <label for="inputEmail" class="form-label">Alamat Email</label>
          <input type="email" class="form-control" id="inputEmail" placeholder="Alamat Email">
        </div>
        <div class="form-group">
          <label for="inputMsg">Isi Pesan</label>
          <textarea class="form-control" id="inputMsg" rows="4" placeholder="Isi Pesan"></textarea>
        </div>
        <div class="col-12">
          <button type="submit" class="btn btn-primary">Kirim Pesan</button>
        </div>
      </form>
    </div>
  </div>
</div>

<!-- footer -->
<footer>
<div class="container">
  <div class="row">
    
    <div class="col-lg-5 col-md-5 col-sm-12">
      <img class="mb-4" src="<?= base_url('assets/img/logo-footer-sociofarm.png') ?>" alt="">
      <p>Mari terhubung & bekerjasama dengan kami untuk mewujudkan acara ataupun proyek usaha sektor pertanian, peternakan dan pangan. </p>
    </div>

    <div class="col-lg-1 col-md-1 col-sm-12"></div>
    
    <div class="col-lg-2 col-md-2 col-sm-12">
      <h3>Layanan</h3>
      <ul>
        <li><a href="#">Pelatihan</a></li>
        <li><a href="#">Proyek Usaha</a></li>
        <li><a href="#">SCR</a></li>
      </ul>
    </div>

    <div class="col-lg-2 col-md-2 col-sm-12">
      <h3>Media</h3>
        <ul>
          <li><a href="#">Tentang</a></li>
          <li><a href="#">Privasi</a></li>
          <li><a href="#">Blog</a></li>
        </ul>
    </div>

    <div class="col-lg-2 col-md-2 col-sm-12">
      <h3>Sosial Media</h3>
        <ul>
          <li><a href="#">Facebook</a></li>
          <li><a href="#">Twitter</a></li>
          <li><a href="#">Instagram</a></li>
        </ul>
    </div>

  </div>
</div>
</footer>