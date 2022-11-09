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
          <h1 class="m-0 mb-2">Tambah Proyek</h1>
          <?= $this->session->flashdata('alert') ?>
        </div><!-- /.col -->
        <div class="col-sm-6">
          <ol class="breadcrumb float-sm-right">
            <li class="breadcrumb-item"><a href="<?= base_url('admin') ?>">Admin</a></li>
            <li class="breadcrumb-item active">Projects</li>
          </ol>
        </div><!-- /.col -->
      </div><!-- /.row -->
    </div><!-- /.container-fluid -->
  </div>
  <!-- /.content-header -->

  <!-- NOT FINISHED FORM -->
  <div class="form-admin">
    <form method="post" action="<?= base_url('admin/addprojectnow') ?>" enctype="multipart/form-data">
      <div class="form-group">
        <label for="nama_proyek">Nama Proyek</label>
        <input type="text" class="form-control" name="nama_proyek" id="nama_proyek" placeholder="Nama Proyek">
      </div>
      <div class="form-group">
        <label for="harga">Harga</label>
        <input type="number" class="form-control" name="harga" id="harga" placeholder="Harga">
      </div>
      <div class="form-group">
        <label for="deskripsi">Deskripsi</label>
        <textarea class="form-control" name="deskripsi" id="deskripsi" row="1" placeholder="Masukkan deskripsi proyek"></textarea>
      </div>
      <div class="row">
        <div class="col-6">
          <div class="form-group">
            <label for="roi_top">ROI Top (%)</label>
            <input type="number" class="form-control" name="roi_top" id="roi_top" placeholder="0%">
          </div>
        </div>
        <div class="col-6">
          <div class="form-group">
            <label for="roi_bot">ROI Bottom (%)</label>
            <input type="number" class="form-control" name="roi_bot" id="roi_bot" placeholder="0%">
          </div>
        </div>
      </div>
      <div class="row">
        <div class="col-6">
          <div class="form-group">
            <label for="img_file" class="label-editpp"><i class="fa fa-pencil" style="font-size:18px;"></i>Upload Gambar (lebih dari satu)</label>
            <input type="file" class="form-control-file img-file" id="img_file" name="img_file" value="" placeholder="asd">
          </div>
        </div>
        <div class="col">
          <div class="form-group">
            <label for="proposal_file" class="label-editpp"><i class="fa fa-pencil" style="font-size:18px;"></i>Upload File Proposal (doesn't work yet)</label>
            <input type="file" class="form-control-file img-file" id="proposal_file" name="proposal_file" value="" placeholder="asd">
          </div>
        </div>
      </div>

      <button type="submit" class="btn btn-primary">Tambahkan Proyek</button>
    </form>
  </div>


</div>
<!-- /.content-wrapper -->