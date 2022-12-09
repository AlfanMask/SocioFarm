<div class="single-proyek container text-center">
  <h5>PROYEK BERJALAN</h5>
  <h1><?= $project['name'] ?></h1>
</div>

<!-- SINGLE PROYEK GALLERY -->
<div class="single-gallery container">
  <div class="row">
    <div class="gallery-show col-lg-10 col-md-10 col-sm-12">
      <img src="<?= base_url('uploads/proyek/').$project['img_url']?>" class="gallery-show-pict" alt="">
    </div>
    <div class="gallery-select col-lg-2 col-md-2 col-sm-12">
      <div onclick="changePict1()" class="pict-1">
        <img src="<?= base_url('assets/img/slide1.png')?>" class="pict-active" alt="">
      </div>
      <div onclick="changePict2()" class="pict-2">
        <img src="<?= base_url('assets/img/slide2.png')?>" alt="">
      </div>
      <div onclick="changePict3()" class="pict-3">
        <img src="<?= base_url('assets/img/slide3.png')?>" alt="">
      </div>
      <div onclick="changePict4()" class="pict-4">
        <img src="<?= base_url('assets/img/slide4.png')?>" alt="">
      </div>
    </div>
  </div>
</div>

<div class="invest-area container">
  <div class="row">
    <div class="left-side col-lg-9 col-md-9 col-sm-12">
      <div class="row">

        <div class="col-lg-6 col-md-6 col-sm-12">
          <p><strong>1000</strong> lembar masih tersedia dari 10.000 lembar</p>
        </div>
        <div class="col-lg-6 col-md-6 col-sm-12">
          <p class="text-pendanaan-ditutup" style="text-align:right">Pendanaan ditutup dalam: <strong>2 Minggu 3 hari 8 jam</strong></p>
        </div>
      </div>
      <progress id="" value="90" max="100"></progress>
      <div class="invest-icon">
        <p><i class="fa fa-check-square-o"></i> Harga Proyek: <strong>Rp. <?= number_format($project['price'],0,',','.')?></strong></p>
        <p><i class="fa fa-check-square-o"></i> Perkiraan Harga Jual Tertinggi dan Terendah: <strong><?= $project['roi_top'] ?> - <?= $project['roi_bot'] ?></strong></p>
      </div>
    </div>

    <div class="right-side col-lg-3 col-md-3 col-sm-12">
      <a href="#" class="btn btn-primary btn-invest">Invest Sekarang</a>
      <a href="<?= base_url('simulasi') ?>" class="btn btn-primary btn-simulasi">Simulasi</a>
    </div>

  </div>
</div>

<!-- SINGLEPROYEK DESCRIPTION -->
<div class="container proyek-desc-area">
  <div class="row">
    
    <div class="left-desc col-lg-8 col-md-12 col-sm-12">
      <h3>Tentang Proyek</h3>
      <p><?= $project['description'] ?></p>
      <div class="btn-desc">
        <a href="<?= base_url('uploads/proposal/proposal_bebek_peking.pdf') ?>" target="_blank" class="btn btn-primary btn-proposal">Baca Proposal</a>
        <a href="#" class="btn btn-primary btn-video">Lihat Video</a>
      </div>
    </div>

    <div class="right-desc col-lg-4 col-md-12 col-sm-12">
      <div class="first-line">
        <h3>Lokasi</h3>
        <a href="#">Lihat lokasi</a>
      </div>
      <p class="desc-lokasi">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Venenatis pharetra nunc erat vitae morbi volutpat, diam, </p>
      <h3>Peternak</h3>
      <div class="profil-mitra">
        <img src="<?= base_url('assets/img/') ?>bg-proyek-card.jpg" alt="">
        <p class="nama-mitra">Bapak Zainudin</p>
        <a href="#">Lihat profil</a>
      </div>
      <h3>Periode</h3>
      <p class="periode-proyek">8 Agustus 2022 - 8 Mei 2023</p>
      <h3>Status</h3>
      <p class="status-proyek">Sedang Berlangsung</p>
    </div>

  </div>
</div>