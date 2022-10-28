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
              <p>
                Projects
              </p>
            </a>
          </li>

          <li class="nav-item">
            <a href="<?= base_url('admin/mitras') ?>" class="nav-link">
              <i class="nav-icon fa fa-users"></i>
              <p style="color:#FFFFFF">
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
            <h1 class="m-0">Mitras</h1>
            <a href="<?= base_url('admin/addmitra') ?>" class="btn btn-primary btn-orange" style="margin-top:20px; padding:10px 20px;">+ Tambah Mitra</a>
          </div><!-- /.col -->
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="<?= base_url('admin') ?>">Admin</a></li>
              <li class="breadcrumb-item active">Mitras</li>
            </ol>
          </div><!-- /.col -->
        </div><!-- /.row -->
      </div><!-- /.container-fluid -->
    </div>
    <!-- /.content-header -->

    <!-- PROYEK -->
    <div class="section-proyek" style="padding: 0px 20px; margin-top:20px !important">
      <div class="row">
        <?php foreach ($mitras as $mitra) : ?>
          <div class="col-lg-3 col-md-3 col-sm-12 mb-3">
            <a href="<?= base_url('mitra/') . $mitra['id'] ?>" class="" style="text-decoration: none; color:#000">
              <div class="card">
                <div class="img-card-proyek"><img src="<?= base_url('uploads/mitra/') . $mitra['img_url'] ?>" class="card-img-top" alt="..." style="height: 240px"></div>
                <div class="card-body">
                  <div class="fa-roi" style="background-color:#FFA12D">
                    <p><?= $mitra['proyek'] ?> proyek telah berjalan</p>
                  </div>
                  <p class="card-text"><?= $mitra['alamat'] ?></p>
                  <h5 class="card-title" style="font-weight:bold;"><?= $mitra['nama'] ?></h5>
                </div>
                <div class="row" style="padding: 10px;">
                  <div class="col-6">
                    <a href="<?= base_url('admin/editmitra/') . $mitra['id'] ?>" class="btn btn-outline-warning" style="width:100%; background-color:#ffc107;">Edit</a>
                  </div>
                  <div class="col-6">
                    <a href="<?= base_url('admin/deletemitra/') . $mitra['id'] ?>" onclick="return confirm('Anda yakin akan menghapus mitra ini?')" class="btn btn-outline-danger" style="width:100%; background-color:#dc3545;">Hapus</a>
                  </div>
                </div>
              </div>
            </a>
          </div>
        <?php endforeach; ?>
      </div>
    </div>


  </div>
  <!-- /.content-wrapper -->