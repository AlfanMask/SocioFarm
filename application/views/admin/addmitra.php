<!-- Sidebar Menu -->
<nav class="mt-2">
  <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
    <!-- Add icons to the links using the .nav-icon class
               with font-awesome or any other icon font library -->

    <li class="nav-item">
      <a href="<?= base_url('admin') ?>" class="nav-link">
        <i class="nav-icon fa fa-bar-chart-o"></i>
        <p>
          Dashboard
        </p>
      </a>
    </li>

    <li class="nav-item">
      <a href="<?= base_url('admin/projects') ?>" class="nav-link">
        <i class="nav-icon fas fa-th"></i>
        <p style="color:#FFFFFF">
          Projects
        </p>
      </a>
    </li>

    <li class="nav-item">
      <a href="<?= base_url('admin/mitras') ?>" class="nav-link">
        <i class="nav-icon fa fa-users"></i>
        <p>
          Mitras
        </p>
      </a>
    </li>

  </ul>
</nav>
<!-- /.sidebar-menu -->
</div>
<!-- /.sidebar -->
</aside>

<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
  <!-- Content Header (Page header) -->
  <div class="content-header">
    <div class="container-fluid">
      <div class="row mb-2">
        <div class="col-sm-6">
          <h1 class="m-0 mb-2">Tambah Mitra</h1>
          <?= $this->session->flashdata('alert') ?>
        </div><!-- /.col -->
        <div class="col-sm-6">
          <ol class="breadcrumb float-sm-right">
            <li class="breadcrumb-item"><a href="<?= base_url('admin') ?>">Admin</a></li>
            <li class="breadcrumb-item active">Edit Mitra</li>
          </ol>
        </div><!-- /.col -->
      </div><!-- /.row -->
    </div><!-- /.container-fluid -->
  </div>
  <!-- /.content-header -->

  <!-- NOT FINISHED FORM -->
  <div class="form-admin">
    <form method="post" action="<?= base_url('admin/addmitranow') ?>" enctype="multipart/form-data">
      <div class="form-group">
        <label for="nama_mitra">Nama Mitra</label>
        <input type="text" class="form-control" name="nama_mitra" id="nama_mitra" placeholder="Nama Mitra" value="">
      </div>
      <div class="form-group">
        <label for="proyek">Jumlah Proyek</label>
        <input type="number" class="form-control" name="proyek" id="proyek" placeholder="Jumlah Proyek" value="">
      </div>
      <div class="form-group">
        <label for="alamat">Alamat</label>
        <input class="form-control" name="alamat" id="alamat" placeholder="Masukkan alamat mitra">
      </div>
      <div class="form-group">
        <label for="deskripsi">Deskripsi</label>
        <textarea class="form-control" name="deskripsi" id="deskripsi" row="1" placeholder="Masukkan deskripsi mitra"></textarea>
      </div>
      <div class="form-group">
        <label for="img_url" class="label-editpp"><i class="fa fa-pencil" style="font-size:18px;"></i>Upload Foto Mitra</label>
        <input type="file" class="form-control-file img-file" id="img_url" name="img_url" value="" placeholder="foto mitra">
      </div>
      <button type="submit" class="btn btn-primary">Tambahkan Mitra</button>
    </form>
  </div>


</div>
<!-- /.content-wrapper -->