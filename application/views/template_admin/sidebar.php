<body>
  <div id="app">
    <div class="main-wrapper">
      <div class="navbar-bg"></div>
      <nav class="navbar navbar-expand-lg main-navbar">
        <form class="form-inline mr-auto">
          <ul class="navbar-nav mr-3">
            <li><a href="#" data-toggle="sidebar" class="nav-link nav-link-lg"><i class="fas fa-bars"></i></a></li>
            <li><a href="#" data-toggle="search" class="nav-link nav-link-lg d-sm-none"><i class="fas fa-search"></i></a></li>
          </ul>
        </form>
        <ul class="navbar-nav navbar-right">
          <li class="dropdown">
            <a href="#" data-toggle="dropdown" class="nav-link dropdown-toggle nav-link-lg nav-link-user">
              <div class="d-sm-none d-lg-inline-block"><?= $_SESSION['nama'] ?></div>
            </a>
            <div class="dropdown-menu dropdown-menu-right">
              <a href="<?= base_url('auth/logout') ?>" class="dropdown-item has-icon">
                <i class="fas fa-sign-out-alt"></i> Logout
              </a>
              <!-- <a href="<?= base_url('auth/ganti_password') ?>" class="dropdown-item has-icon">
                <i class="fas fa-lock"></i> Ganti Pasword
              </a> -->
            </div>
          </li>
        </ul>
      </nav>
      <div class="main-sidebar">
        <aside id="sidebar-wrapper">
          <div class="sidebar-brand">
            <a href="index.html"><img src="<?= base_url('assets/assets_stisla') ?>/assets/img/logo.ico" height="45" width="45" alt="">  rental mobil</a>
          </div>
          <div class="sidebar-brand sidebar-brand-sm">
            <a href="index.html"><img src="<?= base_url('assets/assets_stisla') ?>/assets/img/logo.ico" height="45" width="45" alt=""></a>
          </div>
          <ul class="sidebar-menu">
              <li><a class="nav-link" href="<?= base_url('admin/dashboard')?>"><i class="fas fa-tachometer-alt"></i> <span>Dashboard</span></a></li>
              <li><a class="nav-link" href="<?= base_url('admin/data_mobil')?>"><i class="fas fa-car"></i> <span>Data Mobil</span></a></li>
              <li><a class="nav-link" href="<?= base_url('admin/data_type')?>"><i class="fas fa-grip-horizontal"></i> <span>Data Type</span></a></li>
              <!-- <li><a class="nav-link" href="<?= base_url('admin/transaksi')?>"><i class="fas fa-random"></i> <span>Transaksi</span></a></li> -->

              <li class="nav-item dropdown">
                <a href="#" class="nav-link has-dropdown" data-toggle="dropdown"><i class="fas fa-random"></i> <span>Transaksi</span></a>
                <ul class="dropdown-menu">
                  <li><a class="nav-link" href="<?=base_url('admin/transaksi/menunggu_pembayaran')?>">Menunggu Pembayaran</a></li>
                  <li><a class="nav-link" href="<?=base_url('admin/transaksi/menunggu_konfirmasi')?>">Menunggu Konfirmasi</a></li>
                  <li><a class="nav-link" href="<?=base_url('admin/transaksi/sedang_disewa')?>">Sedang Disewa</a></li>
                  <li><a class="nav-link" href="<?=base_url('admin/transaksi/selesai')?>">Transaksi Selesai</a></li>
                </ul>
              </li>


              <!-- <li><a class="nav-link" href="<?= base_url('admin/data_user')?>"><i class="fas fa-user"></i> <span>Data User</span></a></li> -->
              <li><a class="nav-link" href="<?= base_url('admin/data_user')?>"><i class="fas fa-users"></i> <span>Data User</span></a></li>
              <!-- <li><a class="nav-link" href="<?= base_url('admin/laporan')?>"><i class="fas fa-clipboard-list"></i> <span>Laporan</span></a></li> -->
            </ul>
        </aside>
      </div>