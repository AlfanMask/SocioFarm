<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-gH2yIJqKdNHPEq0n4Mqa/HGKIhSkIHeL5AyhkYV8i59U5AR6csBvApHHNl/vI1Bx" crossorigin="anonymous">
    <!-- FONTS -->
    <link rel="preconnect" href="https://fonts.googleapis.com"><link rel="preconnect" href="https://fonts.gstatic.com" crossorigin><link href="https://fonts.googleapis.com/css2?family=DM+Sans:ital,wght@0,400;0,500;1,400;1,500&family=Montserrat:ital,wght@0,200;0,400;0,600;0,700;1,200;1,400;1,600;1,700&display=swap" rel="stylesheet">
    <script src="https://kit.fontawesome.com/a6b535fb5d.js" crossorigin="anonymous"></script>

    <link rel="stylesheet" href="<?= base_url('assets/css/style.css') ?>">

    <!-- ADMIN LTE -->
    <!-- Google Font: Source Sans Pro -->
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
    <!-- Font Awesome Icons -->
    <link rel="stylesheet" href="<?= base_url('dashboard/') ?>plugins/fontawesome-free/css/all.min.css">
    <!-- IonIcons -->
    <link rel="stylesheet" href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">
    <!-- Theme style -->
    <link rel="stylesheet" href="<?= base_url('dashboard/') ?>dist/css/adminlte.min.css">

    <title>Sociofarm</title>
  </head>
  <body>

  <!-- navbar -->
<nav class="navbar navbar-expand-lg">
  <div class="container">
    <a class="navbar-brand" href="<?= base_url() ?>">
      <img src="<?= base_url('assets/img/logo-sociofarm.png') ?>" alt="" height="24">
    </a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarNav">
      <ul class="navbar-nav">
        <li class="nav-item">
          <a class="nav-link <?= $navFocus[0] ?>" aria-current="page" href="<?= base_url('proyek') ?>">Proyek</a>
        </li>
        <li class="nav-item">
          <a class="nav-link <?= $navFocus[1] ?>" href="<?= base_url('portfolio') ?>">Portfolio</a>
        </li>
        <li class="nav-item">
          <a class="nav-link <?= $navFocus[2] ?>" href="<?= base_url('keunggulan') ?>">Keunggulan</a>
        </li>
        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
            Mitra
          </a>
          <ul class="dropdown-menu">
            <li><a class="dropdown-item" href="<?= base_url('daftarmitra') ?>">Daftar Mitra</a></li>
            <li><a class="dropdown-item" href="#">Cara Menjadi Mitra</a></li>
          </ul>
        </li>
        <li class="nav-item">
          <a class="nav-link <?= $navFocus[4] ?>" href="<?= base_url('kontak') ?>">Kontak</a>
        </li>
      </ul>
      <?php if(isset($_SESSION['username'])) : ?>
        <ul class="nav-right">
          <li class="nav-item nav-item-register">
              <a class="nav-link link-register" href="#">Transaksi</a>
          </li>
          <li class="nav-item dropdown nav-item-login" style="float: right;">
            <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false"><?= $_SESSION['username'] ?></a>
            <ul class="dropdown-menu">
              <li><a class="dropdown-item" href="<?= base_url('profile') ?>">Detail Akun</a></li>
              <li><a class="dropdown-item" href="<?= base_url('auth/unsetsession') ?>">Ubah Password (reset session)</a></li>
              <?php if($_SESSION['userole'] == 2) : ?>
                <li><a class="dropdown-item" href="<?= base_url('admin') ?>">Admin Dashboard</a></li>
              <?php endif; ?>
            </ul>
          </li>
        </ul>
      <?php else : ?>
        <ul class="nav-right">
          <li class="nav-item nav-item-register">
              <a class="nav-link link-register" href="<?= base_url('daftar') ?>">Daftar</a>
          </li>
          <li class="nav-item nav-item-login" style="float: right;">
              <a class="nav-link link-login" href="<?= base_url('masuk') ?>">Masuk</a>
          </li>
        </ul>
      <?php endif; ?>
    </div>
  </div>
</nav>