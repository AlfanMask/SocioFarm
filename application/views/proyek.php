<div class="proyek-header">
<div class="container">
  <div class="proyek-text">
  <h5>PROYEK</h5>
    <div class="row">
      <div class="col-lg-6 col-md-12 col-sm-12">
        <div class="texts">
          <h1>Mari Bergabung dengan Ratusan Investasi Sukses</h1>
        </div>
      </div>
      <div class="div-gap col-lg-1 col-md-1"></div>
      <div class="col-lg-5 col-md-12 col-sm-12">
        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Lectus fusce sit imperdiet lorem quisque mauris.</p>
      </div>
    </div>
  </div>
</div>
</div>

<!-- PROYEK -->
<div class="container section-proyek">
  <div class="row d-flex justify-content-center">

    <!-- dynamic -->
    <?php foreach($projects as $project) : ?>
    <div class="col-lg-4 col-md-4 col-sm-12 mb-4">
    <a href="<?= base_url('singleproyek/').$project['id'] ?>" class="" style="text-decoration: none; color:#000">
      <div class="card">
        <div class="img-card-proyek"><img src="<?= base_url('uploads/proyek/').$project['img_url'] ?>" class="card-img-top" alt="..." style="height: 240px"></div>
        <div class="card-body">
          <div class="fa-roi"><p>Total ROI <?= $project['roi_top'] ?>%</p></div>
          <p class="proyek-title"><?= $project['name'] ?></p>
          <p class="card-text">Terkumpul</p>
          <h5 class="card-title" style="font-weight:bold;">Rp <?= number_format($project['price'],0,',','.') ?></h5>
        </div>
      </div>
    </a>
    </div>
    <?php endforeach; ?>

  </div>

  <div class="row d-flex justify-content-center">
    <div class="col-2"><a href="#" class="btn text-center">Lihat lebih banyak</a></div>
  </div>

</div>

<!-- REKAM JEJAK -->
<div class="container rekam-jejak proyek-header">
  <div class="container">
    <div class="proyek-text text-center">
      <h5>PROYEK</h5>
      <h1>Simak Hasil Nyata Kami</h1>
    </div>
  </div>
  <div class="row achievements">
    <div class="col-lg-4 col-md-12 col-sm-12">
      <div class="achive achive-1">
        <div class="icon"><i class="fa fa-check-square-o" style="font-size:32px"></i></div>
        <h2>50+ <br>Total proyek</h2>
        <p>Lorem ipsum dolor sit amet, consec adipiscing elit. Sit nunc sollicitudin ac leo at nec cras.</p>
      </div>
    </div>  
    <div class="col-lg-4 col-md-12 col-sm-12">
      <div class="achive achive-2">
        <div class="icon"><i class="fa fa-area-chart" style="font-size:32px"></i></div>
        <h2>50jt+ <br>Investasi Terkelola</h2>
        <p>Lorem ipsum dolor sit amet, consec adipiscing elit. Sit nunc sollicitudin ac leo at nec cras.</p>
      </div>
    </div>
    <div class="col-lg-4 col-md-12 col-sm-12">
      <div class="achive achive-3">
        <div class="icon"><i class="fa fa-users" style="font-size:28px;"></i></div>
        <h2>100+ <br>Mitra Terdaftar</h2>
        <p>Lorem ipsum dolor sit amet, consec adipiscing elit. Sit nunc sollicitudin ac leo at nec cras.</p>
      </div>
    </div>
  </div>
</div>