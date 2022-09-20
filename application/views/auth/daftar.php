<div class="container form-daftar">
<h5 class="h5-orange text-center" style="color:#F23029">DAFTAR</h5>
<form method="post" action="<?= base_url('auth/daftar') ?>">
    <div class="form-group">
      <label for="inputName">Nama</label>
      <input type="text" class="form-control" name="inputName" id="inputName" placeholder="Nama lengkap">
      <span style="color:red"><?= form_error('inputName') ?></span>
    </div>
    <div class="form-group">
      <label for="inputEmail">Email</label>
      <input type="email" class="form-control" name="inputEmail" id="inputEmail" placeholder="Email">
      <span style="color:red"><?= form_error('inputEmail') ?></span>
    </div>
    <div class="form-group">
      <label for="inputPassword">Password</label>
      <input type="password" class="form-control" name="inputPassword" id="inputPassword" placeholder="Password">
      <span style="color:red"><?= form_error('inputPassword') ?></span>
    </div>
    <div class="form-group">
      <label for="inputPasswordConf">Password Confirmation</label>
      <input type="password" class="form-control" name="inputPasswordConf" id="inputPasswordConf" placeholder="Password Confirmation">
      <span style="color:red"><?= form_error('inputPasswordConf') ?></span>
    </div>
  <div class="form-group">
    <label for="inputAddress">Address</label>
    <input type="text" class="form-control" name="inputAddress" id="inputAddress" placeholder="1234 Main St">
    <span style="color:red"><?= form_error('inputAddress') ?></span>
  </div>
  <div class="form-group">
    <div class="form-check">
      <input class="form-check-input" type="checkbox" id="gridCheck">
      <label class="form-check-label" for="gridCheck">
        Setuju syarat dan ketentuan
      </label>
    </div>
  </div>
  <button type="submit" class="btn btn-primary">Daftar</button>
  <p class="bisa-masuk">Sudah punya akun? <a href="<?= base_url('masuk') ?>">Masuk</a></p>
</form>
</div>