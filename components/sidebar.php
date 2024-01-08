<aside class="main-sidebar sidebar-dark-primary elevation-4">
    <!-- Brand Logo -->
<<<<<<< HEAD
    <!-- <a href="index3.html" class="brand-link">
        <img src="assets/dist/img/AdminLTELogo.png" alt="AdminLTE Logo" class="brand-image img-circle elevation-3"
            style="opacity: .8">
        <span class="brand-text font-weight-light">AdminLTE 3</span>
    </a> -->

    <!-- Sidebar -->
    <div class="sidebar">
        <!-- Sidebar user panel (optional) -->
        <div class="user-panel mt-3 pb-3 mb-3 d-flex">
            <div class="image">
                <img src="assets/dist/img/avatar5.png" class="img-circle elevation-2" alt="User Image">
            </div>
            <div class="info">
                <a href="#" class="d-block"><?php echo $username ?></a>
            </div>
        </div>

        <!-- SidebarSearch Form -->
        <div class="form-inline">
            <div class="input-group" data-widget="sidebar-search">
                <input class="form-control form-control-sidebar" type="search" placeholder="Search" aria-label="Search">
                <div class="input-group-append">
                    <button class="btn btn-sidebar">
                        <i class="fas fa-search fa-fw"></i>
                    </button>
                </div>
            </div>
        </div>

        <!-- Sidebar Menu -->
        <nav class="mt-2">
            <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
                <!-- Add icons to the links using the .nav-icon class
               with font-awesome or any other icon font library -->
                <li class="nav-item menu-open">
                    <a href="#" class="nav-link active">
                        <i class="nav-icon fas fa-tachometer-alt"></i>
                        <p>
                            Menu
                            <i class="right fas fa-angle-left"></i>
                        </p>
                    </a>
                    <?php
                    if ($_SESSION['akses'] == "admin") {
                    ?>
                    <ul class="nav nav-treeview">
                        <li class="nav-item">
                            <a href="dashboard_admin.php" class="nav-link">
                                <i class="fas fa-solid fas fa-th nav-icon"></i>
                                <p>Dashboard <span class="right badge badge-danger">Admin</span></p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="dokter.php" class="nav-link">
                                <i class="fas fa-solid fa-user-nurse nav-icon"></i>
                                <p>Dokter <span class="right badge badge-danger">Admin</span></p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="poli.php" class="nav-link">
                                <i class="fas fa-solid fa-hospital nav-icon"></i>
                                <p>Poli <span class="right badge badge-danger">Admin</span></p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="obat.php" class="nav-link">
                                <i class="fas fa-solid fa-tablets nav-icon"></i>
                                <p>Obat <span class="right badge badge-danger">Admin</span></p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="pasien.php" class="nav-link">
                                <i class="fas fa-solid fa-user nav-icon"></i>
                                <p>Pasien <span class="right badge badge-danger">Admin</span></p>
                            </a>
                        </li>
                    </ul>
                    <?php } else if($_SESSION['akses']=="dokter"){ ?>
                    <ul class="nav nav-treeview">
                    <li class="nav-item">
                            <a href="dashboard_dokter.php" class="nav-link">
                                <i class="fas fa-solid fas fa-th nav-icon"></i>
                                <p>Dashboard <span class="right badge badge-success">Dokter</span></p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="jadwalPeriksa.php" class="nav-link">
                                <i class="fas fa-solid fa-hospital-user nav-icon"></i>
                                <p>Jadwal Periksa <span class="right badge badge-success">Dokter</span></p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="periksaPasien.php" class="nav-link">
                                <i class="fas fa-solid fa-stethoscope nav-icon"></i>
                                <p>Memeriksa Pasien <span class="right badge badge-success">Dokter</span></p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="riwayatPasien.php" class="nav-link">
                                <i class="fas fa-solid fa-book-medical nav-icon"></i>
                                <p>Riwayat Pasien <span class="right badge badge-success">Dokter</span></p>
                            </a>
                        </li>
                    </ul>
                    <?php } else if($_SESSION['akses'] == "pasien"){?>
                    <ul class="nav nav-treeview">
                        <li class="nav-item">
                            <a href="dashboard_pasien.php" class="nav-link">
                                <i class="fas fa-solid fa-hospital-user nav-icon"></i>
                                <p>Dashboard <span class="right badge badge-info">Pasien</span></p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="daftarPoliklinik.php" class="nav-link">
                                <i class="fas fa-solid fa-stethoscope nav-icon"></i>
                                <p>Daftar Poli <span class="right badge badge-info">Pasien</span></p>
                            </a>
                        </li>
                    </ul>
                    <?php } ?>
                </li>
                <li class="nav-item">
                    <a href="pages/logout/logout.php" class="nav-link">
                        <i class="nav-icon fas fa-sign-out-alt"></i>
                        <p>
                            Logout
                        </p>
                    </a>
                </li>
            </ul>
        </nav>
        <!-- /.sidebar-menu -->
    </div>
    <!-- /.sidebar -->
</aside>
=======
    <a href="dashboard.php" class="brand-link">
      <img src="asset/images/logo_dinus.jpg" alt="AdminLTE Logo" class="brand-image img-circle elevation-3" style="opacity: .8">
      <span class="brand-text font-weight-light">Poliklinik Alexander</span>
    </a>

    <!-- Sidebar -->
    <div class="sidebar">
      <!-- Sidebar user panel (optional) -->
      <div class="user-panel mt-3 pb-3 mb-3 d-flex">
        <div class="image">
          <img src="assets/dist/img/user2-160x160.jpg" class="img-circle elevation-2" alt="User Image">
        </div>
        <div class="info">
          <a href="#" class="d-block">Alexander Pierce</a>
        </div>
      </div>

      <!-- SidebarSearch Form -->
      <div class="form-inline">
        <div class="input-group" data-widget="sidebar-search">
          <input class="form-control form-control-sidebar" type="search" placeholder="Search" aria-label="Search">
          <div class="input-group-append">
            <button class="btn btn-sidebar">
              <i class="fas fa-search fa-fw"></i>
            </button>
          </div>
        </div>
      </div>

      <!-- Sidebar Menu -->
      <nav class="mt-2">
        <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
        <?php if ($role_id === '1'): ?>
          <!-- Add icons to the links using the .nav-icon class
               with font-awesome or any other icon font library -->
          <li class="nav-item">
            <a href="dashboard.php" class="nav-link ">
              <i class="nav-icon fas fa-tachometer-alt"></i>
              <p>
                 Dashboard
                <!-- <span class="right badge badge-danger">New</span> -->
              </p>
            </a>
          </li>
          <li class="nav-item">
            <a href="home_dokter.php" class="nav-link">
              <i class="nav-icon fas fa-user-md"></i>
              <p>
                 Dokter
                <!-- <span class="right badge badge-danger">New</span> -->
              </p>
            </a>
          </li>
          <li class="nav-item menu-open">
            <a href="#" class="nav-link">
              <i class="nav-icon fas fa-user-injured"></i>
              <p>
                Pasien
                <i class="right fas fa-angle-left"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="home_pasien.php" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Daftar Pasien</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="#" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Pendaftaran Poli Pasien</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="#" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Pemeriksaan Poli Pasien</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="#" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Detail Periksa Pasien</p>
                </a>
              </li>
            </ul>
          </li>
          <li class="nav-item">
            <a href="home_poli.php" class="nav-link">
              <i class="nav-icon fas fas fa-clinic-medical"></i>
              <p>
                 Poli Klinik
                <!-- <span class="right badge badge-danger">New</span> -->
              </p>
            </a>
          </li>
          <li class="nav-item">
            <a href="home_obat.php" class="nav-link">
              <i class="nav-icon fas fa-capsules"></i>
              <p>
                 Obat
                <!-- <span class="right badge badge-danger">New</span> -->
              </p>
            </a>
          </li>
          <?php elseif ($role_id === '2'): ?>
            <!-- Menu untuk Dokter -->
            <li class="nav-item">
                <a href="index.php?page=periksa" class="nav-link">
                    <i class="nav-icon fas fa-notes-medical"></i>
                    <p>Periksa</p>
                </a>
            </li>
            <li class="nav-item">
                <a href="index.php?page=riwayatpasien" class="nav-link">
                    <i class="nav-icon fas fa-history"></i>
                    <p>Riwayat Pasien</p>
                </a>
            </li>
          <?php endif; ?>
        </ul>
      </nav>
      
      <!-- /.sidebar-menu -->
    </div>
    <!-- /.sidebar -->
  </aside>
>>>>>>> d31b5567ecfc76b5e7d17c1113fbd1c0d9db3cd1
