<!-- carousel -->
<div id="carouselHome" class="container carousel slide" data-ride="carousel">
  <ol class="carousel-indicators">
    <li data-target="#carouselHome" data-slide-to="0" class="active"></li>
    <li data-target="#carouselHome" data-slide-to="1"></li>
    <li data-target="#carouselHome" data-slide-to="2"></li>
  </ol>
  <div class="carousel-inner" role="listbox">
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
    <div class="col-lg-6 col-md-12 col-sm-12 left-project">
      <div class="row col-centered">
        
        <?php foreach($homeProjects as $hp): ?>
          <div class="col-lg-6 col-md-6 col-sm-12 mb-4">
            <div class="card" style="width: 18rem;">
              <div class="img-card-home-project"><img src="<?= base_url('uploads/proyek/').$hp['img_url'] ?>" class="card-img-top" alt="..." style="height: 240px"></div>
              <div class="card-body">
                <div class="fa-roi">
                  <p>ROI <?= $hp['roi_bot'] ?>% - <?= $hp['roi_top'] ?>%</p>
                </div>
                <p class="card-text"><?= $hp['name'] ?></p>
                <h5 class="card-title" style="font-weight:bold;">Rp <?= number_format($hp['price'],0,',','.') ?></h5>
                <a href="<?= $hp['project_url'] ?>" class="btn btn-primary">Lihat Proyek</a>
              </div>
            </div>
          </div>
        <?php endforeach; ?>

      </div>
    </div>
    <div class="col-lg-6 col-md-12 col-sm-1 right-project">
      <h5>PROYEK</h5>
      <h1>Puluhan Proyek Perlu Bantuanmu</h1>
      <p>Mari bantu peternak lokal mengembangkan usahanya, dan ambil keuntungannya.</p>
      <a href="<?= base_url('proyek') ?>" class="btn">Lihat lebih banyak</a>
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
          <h1 class="text-white text-center">Kenapa Kamu <br class="keunggulan-first-side-br">Harus Pilih SocioInvest</h1>
          <p class="text-white text-center" style="opacity: .7">Berikut ini merupakan keunggulan yang akan kamu dapatkan jika bermitra dengan Sociofarm Indonesia</p>
        </div>
        <div class="keunggulan-second-side">
          <div class="row">
            <div class="col-lg-4 col-md-12 col-ms-12">
              <div class="keunggulan-point" style="margin-top:0px !important">
                <i class="fa fa-suitcase"></i>
                <h3>Memberdayakan</h3>
                <p>Proyek usaha sektor pertanian, peternakan dan pangan selalu berorientasi untuk memberdayakan peternak petani lokal.</p>
              </div>
            </div>
            <div class="col-lg-4 col-md-12 col-ms-12">
              <div class="keunggulan-point">
                <i class="fa fa-shield"></i>
                <h3>Terpercaya</h3>
                <p>Proses bermitra yang mudah serta dana usaha ataupun investasi di kelola secara transparan oleh mitra yang terpercaya.</p>
              </div>
            </div>
            <div class="col-lg-4 col-md-12 col-ms-12">
              <div class="keunggulan-point">
                <i class="fa fa-bar-chart-o"></i>
                <h3>Keuntungan</h3>
                <p>Pengelolaan tepat dan pertumbuhan usaha pertanian dan peternakan menghasilkan keuntungan yang stabil.</p>
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
    <div class="col-lg-5 col-md-6 col-sm-12">
      <h1>Ingin Memulai Usaha dengan Kami?</h1>
      <p>Mari terhubung & bekerjasama dengan kami untuk mewujudkan acara ataupun proyek usaha sektor pertanian, peternakan dan pangan. </p>
    </div>
    <div class="form-gap col-lg-1"></div>
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