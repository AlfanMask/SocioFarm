<div class="proyek-header">
<div class="container">
  <div class="proyek-text" style="text-align:center">
    <h5>MITRA</h5>
    <h1>Kenali Puluhan Mitra Peternak Kami</h1>
  </div>
</div>
</div>

<!-- PROYEK -->
<div class="container section-proyek">
  <div class="row">

    <?php foreach($mitras as $mitra) : ?>
    <div class="col-lg-4 col-md-4 col-sm-12 mb-4">
      <a href="<?= base_url('mitra/').$mitra['id'] ?>" class="" style="text-decoration: none; color:#000">
      <div class="card">
        <div class="img-card-proyek"><img src="<?= base_url('uploads/mitra/').$mitra['img_url'] ?>" class="card-img-top" alt="..." style="height: 240px"></div>
        <div class="card-body">
          <div class="fa-roi" style="background-color:#FFA12D"><p><?= $mitra['proyek'] ?> proyek telah berjalan</p></div>
          <p class="card-text"><?= $mitra['alamat'] ?></p>
          <h5 class="card-title" style="font-weight:bold;"><?= $mitra['nama'] ?></h5>
        </div>
      </div>
      </a>
    </div>
    <?php endforeach; ?>

    <a href="#" class="btn">Lihat lebih banyak</a>

  </div>
</div>