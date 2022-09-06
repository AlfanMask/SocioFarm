<div class="container">

<form method="post" action="<?= base_url('auth/masuk') ?>">
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
    <div class="form-check">
      <input class="form-check-input" type="checkbox" id="gridCheck">
      <label class="form-check-label" for="gridCheck">
        Setuju dengan syarat dan ketentuan
      </label>
    </div>
  </div>
  <button type="submit" class="btn btn-primary">Daftar</button>
</form>

</div>