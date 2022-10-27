<div class="wrapper">
  <!-- Navbar -->
  <nav class="main-header navbar navbar-expand navbar-white navbar-light">
    <!-- Left navbar links -->
    <ul class="navbar-nav">
      <li class="nav-item">
        <a class="nav-link" data-widget="pushmenu" href="#" role="button"><i class="fas fa-bars"></i></a>
      </li>
      <li class="nav-item d-none d-sm-inline-block">
        <a href="<?= base_url() ?>" class="nav-link">Home</a>
      </li>
    </ul>

    <!-- Right navbar links -->
    <ul class="navbar-nav ml-auto">
      <!-- Navbar Search -->
      <li class="nav-item">
        <a class="nav-link" data-widget="navbar-search" href="#" role="button">
          <i class="fas fa-search"></i>
        </a>
        <div class="navbar-search-block">
          <form class="form-inline">
            <div class="input-group input-group-sm">
              <input class="form-control form-control-navbar" type="search" placeholder="Search" aria-label="Search">
              <div class="input-group-append">
                <button class="btn btn-navbar" type="submit">
                  <i class="fas fa-search"></i>
                </button>
                <button class="btn btn-navbar" type="button" data-widget="navbar-search">
                  <i class="fas fa-times"></i>
                </button>
              </div>
            </div>
          </form>
        </div>
      </li>

      <!-- Notifications Dropdown Menu -->
      <li class="nav-item dropdown">
        <a class="nav-link" data-toggle="dropdown" href="#">
          <i class="far fa-bell"></i>
          <span class="badge badge-warning navbar-badge">15</span>
        </a>
        <div class="dropdown-menu dropdown-menu-lg dropdown-menu-right">
          <span class="dropdown-item dropdown-header">15 Notifications</span>
          <div class="dropdown-divider"></div>
          <a href="#" class="dropdown-item">
            <i class="fas fa-envelope mr-2"></i> 4 new messages
            <span class="float-right text-muted text-sm">3 mins</span>
          </a>
          <div class="dropdown-divider"></div>
          <a href="#" class="dropdown-item">
            <i class="fas fa-users mr-2"></i> 8 friend requests
            <span class="float-right text-muted text-sm">12 hours</span>
          </a>
          <div class="dropdown-divider"></div>
          <a href="#" class="dropdown-item">
            <i class="fas fa-file mr-2"></i> 3 new reports
            <span class="float-right text-muted text-sm">2 days</span>
          </a>
          <div class="dropdown-divider"></div>
          <a href="#" class="dropdown-item dropdown-footer">See All Notifications</a>
        </div>
      </li>
      <li class="nav-item">
        <a class="nav-link" data-widget="fullscreen" href="#" role="button">
          <i class="fas fa-expand-arrows-alt"></i>
        </a>
      </li>
    </ul>
  </nav>
  <!-- /.navbar -->

  <!-- Main Sidebar Container -->
  <aside class="main-sidebar sidebar-dark-primary elevation-4">
    <!-- Brand Logo -->
    <a href="<?= base_url('admin') ?>" class="brand-link">
      <img src="<?= base_url('assets/img/') ?>logo-footer-sociofarm.png" alt="AdminLTE Logo" style="qmargin-left:8px">
    </a>

    <!-- Sidebar -->
    <div class="sidebar">
      <!-- Sidebar user panel (optional) -->
      <div class="user-panel mt-3 pb-3 mb-3 d-flex">
        <div class="image">
          <img src="<?= base_url('dashboard/') ?>dist/img/user2-160x160.jpg" class="img-circle elevation-2" alt="User Image">
        </div>
        <div class="info">
          <a href="#" class="d-block">Admin's Name</a>
        </div>
      </div>

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
            <h1 class="m-0">Projects</h1>
            <a href="<?= base_url('admin/addproject') ?>" class="btn btn-primary btn-orange" style="margin-top:20px; padding:10px 20px;">+ Tambah Proyek</a>
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


    <!-- PROYEK -->
    <div class="section-proyek" style="padding: 0px 20px; margin-top:20px !important">
      <div class="row">
        <!-- dynamic -->
        <?php foreach ($projects as $project) : ?>
          <div class="col-lg-3 col-md-3 col-sm-12 mb-3">
            <a href="<?= base_url('singleproyek/') . $project['id'] ?>" class="" style="text-decoration: none; color:#000">
              <div class="card">
                <div class="img-card-proyek"><img src="<?= base_url('uploads/proyek/') . $project['img_url'] ?>" class="card-img-top" alt="..." style="height: 240px"></div>
                <div class="card-body">
                  <div class="fa-roi">
                    <p>Total ROI <?= $project['roi_top'] ?>%</p>
                  </div>
                  <p class="proyek-title"><?= $project['name'] ?></p>
                  <p class="card-text">Terkumpul</p>
                  <h5 class="card-title" style="font-weight:bold;">Rp <?= number_format($project['price'], 0, ',', '.') ?></h5>
                </div>
                <div class="row" style="padding: 0px 10px 10px 10px;">
                  <div class="col-6">
                    <a href="<?= base_url('admin/editproject/') . $project['id'] ?>" class="btn btn-outline-warning" style="width:100%; background-color:#ffc107;">Edit</a>
                  </div>
                  <div class="col-6">
                    <a href="<?= base_url('admin/deleteproject/') . $project['id'] ?>" onclick="return confirm('Anda yakin akan menghapus proyek ini?')" class="btn btn-outline-danger" style="width:100%; background-color:#dc3545;">Hapus</a>
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