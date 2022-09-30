<div class="container form-profile">
  <h5 class="h5-orange text-center" style="margin-bottom:64px">PROFIL ANDA</h5> 
  
  <form method="post" action="<?= base_url('profile/update') ?>" enctype="multipart/form-data">
    
  <!-- top profile -->
    <div class="row">
      <div class="col-lg-3 col-md-9 col-sm-12">
        <img src="<?= base_url('uploads/pp/'.$userData['img_url']) ?>" alt="" class="pp">
        <span class="text-center mt-4 alert-pp" style="color:#FFA12D">Gambar berhasil terpilih, update profile untuk melihat perubahan!</span>
        <label for="img_file" class="label-editpp"><i class="fa fa-pencil" style="font-size:18px;"></i> Upload Foto</label>
        <input type="file" class="form-control-file img-file" id="img_file" name="img_file" value="<?= $userData['img_url'] ?>" placeholder="asd">
      </div>
      <div class="col-lg-9 col-md-9 col-sm-12">
        <div class="form-group">
          <label for="nama">Nama lengkap</label>
          <input type="text" class="form-control" placeholder="Nama lengkap" name="nama" value="<?= $userData['nama'] ?>">
        </div>

        <div class="form-group">
          <label for="ttl">Tempat, Tanggal Lahir</label>
          <input type="text" class="form-control" placeholder="TTL" name="ttl" value="<?= $userData['ttl'] ?>">
        </div>
      </div>
    </div>

    <!-- below profile -->
    <div class="row">
      <div class="col-lg-6 col-md-6">
        <div class="form-group">
          <label for="telepon">Telepon</label>
          <input type="number" class="form-control" placeholder="Telepon" name="telepon" value="<?= $userData['telepon'] ?>">
        </div>

        <div class="form-group">
          <label for="gender">Gender</label>
          <select class="form-control" id="gender" name="gender">
            <?php if($userData['gender'] == 'Laki-laki') : ?>
              <option value="Laki-laki" selected>Laki-laki</option>
              <option value="Perempuan">Perempuan</option>
            <?php else : ?>
              <option value="Laki-laki">Laki-laki</option>
              <option value="Perempuan" selected>Perempuan</option>
            <?php endif; ?>
          </select>
        </div>
        
        <div class="form-group">
          <label for="telepon">Pekerjaan</label>
          <input type="text" class="form-control" placeholder="Pekerjaan" name="pekerjaan" value="<?= $userData['pekerjaan'] ?>">
        </div>

        <div class="form-group">
          <label for="ktp_file">Upload KTP</label>
          <input type="file" class="form-control" placeholder="KTP" name="ktp_file" value="<?= $userData['ktp_url'] ?>">
          <?php if(!empty($userData['ktp_url'])) : ?>
            <p style="color:#FFA12D;margin-top:-10px">Terimakasih, Anda telah mengupload KTP sebelumnya</p>
          <?php else: ?>
            <p style="color:#FFA12D;margin-top:-10px">Mohon upload KTP Anda</p>
          <?php endif; ?>
        </div>

      </div>
      <div class="col-lg-6 col-md-6">
        <!-- <input type="text" class="form-control" placeholder="Nama Bank" name="nama_bank" value="<?= $userData['nama_bank'] ?>"> -->
        <div class="form-group">
          <label for="nama_bank">Nama Bank</label>
          <select class="form-control" id="nama_bank" name="nama_bank">
            <option value="BRI" <?= $bankselected[0] ?>>BRI</option>
            <option value="BNI" <?= $bankselected[1] ?>>BNI</option>
            <option value="BCA" <?= $bankselected[2] ?>>BCA</option>
          </select>
        </div>
        
        <div class="form-group">
          <label for="norek">Nomor Rekening</label>
          <input type="number" class="form-control" placeholder="Nomor Rekening" name="norek" value="<?= $userData['norek'] ?>">
        </div>

        <div class="form-group">
          <label for="nama_rekening">Nama Akun Rekening</label>
          <input type="text" class="form-control" placeholder="Nama Akun Rekening" name="nama_rekening" value="<?= $userData['nama_rekening'] ?>">
        </div>

        <div class="form-group">
          <label for="cabang_bank">Cabang Bank</label>
          <input type="text" class="form-control" placeholder="Cabang Bank" name="cabang_bank" value="<?= $userData['cabang_bank'] ?>">
        </div>

      </div>
    </div>

    <button type="submit" class="btn btn-primary">Update</button>
  </form>
</div>