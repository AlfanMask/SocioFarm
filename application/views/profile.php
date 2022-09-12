<div class="container">
  <form method="post" action="<?= base_url('profile/update') ?>">
    
    <div class="form-group">
      <label for="profilepict">Profile Picture</label>
      <input type="file" class="form-control-file" id="profilepict" name="profilepict" value="<?= $userData['img_url'] ?>">
    </div>

    <div class="row">
      <div class="col-lg-6 col-md-6">
        <input type="text" class="form-control" placeholder="Nama lengkap" name="nama" value="<?= $userData['nama'] ?>">
        <input type="number" class="form-control" placeholder="Telepon" name="telepon" value="<?= $userData['telepon'] ?>">
        <input type="text" class="form-control" placeholder="TTL" name="ttl" value="<?= $userData['ttl'] ?>">
        <input type="text" class="form-control" placeholder="Jenis Kelamin" name="gender" value="<?= $userData['gender'] ?>">
        <input type="text" class="form-control" placeholder="Pekerjaan" name="pekerjaan" value="<?= $userData['pekerjaan'] ?>">
      </div>
      <div class="col-lg-6 col-md-6">
        <input type="text" class="form-control" placeholder="Nama Bank" name="nama_bank" value="<?= $userData['nama_bank'] ?>">
        <input type="number" class="form-control" placeholder="Nomor Rekening" name="norek" value="<?= $userData['norek'] ?>">
        <input type="text" class="form-control" placeholder="Nama Akun Rekening" name="nama_rekening" value="<?= $userData['nama_rekening'] ?>">
        <input type="text" class="form-control" placeholder="Cabang Bank" name="cabang_bank" value="<?= $userData['cabang_bank'] ?>">
        <input type="file" class="form-control" placeholder="KTP" name="ktp_url" value="<?= $userData['ktp_url'] ?>">
      </div>
    </div>

    <button type="submit" class="btn btn-primary">Update</button>

  </form>
</div>