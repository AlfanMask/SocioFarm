<div class="container">
  <form method="post" action="<?= base_url('profile/update') ?>" enctype="multipart/form-data">
    
    <div class="form-group">
      <label for="profilepict">Profile Picture: <?= $userData['img_url'] ?></label>
      <input type="file" class="form-control-file" id="img_file" name="img_file" value="<?= $userData['img_url'] ?>">
    </div>

    <div class="row">
      <div class="col-lg-6 col-md-6">
        <input type="text" class="form-control" placeholder="Nama lengkap" name="nama" value="<?= $userData['nama'] ?>">
        <input type="number" class="form-control" placeholder="Telepon" name="telepon" value="<?= $userData['telepon'] ?>">
        <input type="text" class="form-control" placeholder="TTL" name="ttl" value="<?= $userData['ttl'] ?>">
        <!-- <input type="text" class="form-control" placeholder="Jenis Kelamin" name="gender" value="<?= $userData['gender'] ?>"> -->
        <select class="form-control" id="gender" name="gender">
          <?php if($userData['gender'] == 'Laki-laki') : ?>
            <option value="Laki-laki" selected>Laki-laki</option>
            <option value="Perempuan">Perempuan</option>
          <?php else : ?>
            <option value="Laki-laki">Laki-laki</option>
            <option value="Perempuan" selected>Perempuan</option>
          <?php endif; ?>
        </select>
        <input type="text" class="form-control" placeholder="Pekerjaan" name="pekerjaan" value="<?= $userData['pekerjaan'] ?>">
      </div>
      <div class="col-lg-6 col-md-6">
        <!-- <input type="text" class="form-control" placeholder="Nama Bank" name="nama_bank" value="<?= $userData['nama_bank'] ?>"> -->
        <select class="form-control" id="nama_bank" name="nama_bank">
            <option value="BRI" <?= $bankselected[0] ?>>BRI</option>
            <option value="BNI" <?= $bankselected[1] ?>>BNI</option>
            <option value="BCA" <?= $bankselected[2] ?>>BCA</option>
        </select>
        <input type="number" class="form-control" placeholder="Nomor Rekening" name="norek" value="<?= $userData['norek'] ?>">
        <input type="text" class="form-control" placeholder="Nama Akun Rekening" name="nama_rekening" value="<?= $userData['nama_rekening'] ?>">
        <input type="text" class="form-control" placeholder="Cabang Bank" name="cabang_bank" value="<?= $userData['cabang_bank'] ?>">
        <input type="file" class="form-control" placeholder="KTP" name="ktp_file" value="<?= $userData['ktp_url'] ?>">
        <p>KTP: <?= $userData['ktp_url'] ?></p>
      </div>
    </div>

    <button type="submit" class="btn btn-primary">Update</button>

  </form>
</div>