<div class="container form-masuk">
<h5 class="h5-orange text-center" style="color:#F23029">MASUK</h5>
<form method="post" action="<?= base_url('auth/masuk') ?>">
  <div class="form-group">
    <label for="inputEmail">Email</label>
    <input type="email" class="form-control" name="inputEmail" id="inputEmail" placeholder="Email">
  </div>
  <div class="form-group">
    <label for="inputPassword">Password</label>
    <input type="password" class="form-control" name="inputPassword" id="inputPassword" placeholder="Password">
  </div>
  <div class="form-group">
    <div class="row">
      <div class="col-6">
        <div class="form-check">
          <input class="form-check-input" type="checkbox" id="gridCheck">
          <label class="form-check-label" for="gridCheck">
            Ingat saya
          </label>
        </div>
      </div>
      <div class="col-6">
        <div class="form-check">
          <div class="form-check-label">
            <a class="lupa-password" href="#">Lupa password?</a>
          </div>
        </div>  
      </div>
    </div>
  </div>
  <!-- <div class="row">
    <div class="col-6">
      <input type="radio" id="ingat" name="ingat" value="ingat-saya">
      <label for="ingat">Ingat saya</label><br>
    </div>
    <div class="col-6">
      <a href="#">Lupa password?</a>
    </div>
  </div> -->
  <span style="color:red"><?= $error_masuk ?></span>
  <button type="submit" class="btn btn-primary">Masuk</button>
  <p class="harus-daftar">Belum punya akun? <a href="<?= base_url('daftar') ?>">Daftar</a></p>
</form>

</div>