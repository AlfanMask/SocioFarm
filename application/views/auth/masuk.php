<div class="container">

<form method="post" action="<?= base_url('auth/masuk') ?>">
  <div class="form-group">
    <label for="inputEmail">Email</label>
    <input type="email" class="form-control" name="inputEmail" id="inputEmail" placeholder="Email">
  </div>
  <div class="form-group">
    <label for="inputPassword">Password</label>
    <input type="password" class="form-control" name="inputPassword" id="inputPassword" placeholder="Password">
  </div>
  <span style="color:red"><?= $error_masuk ?></span>
  <button type="submit" class="btn btn-primary">Masuk</button>
</form>

</div>