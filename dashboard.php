<!DOCTYPE html>
<?php
    session_start();
    $username = $_SESSION['username'];

<<<<<<< HEAD
    if ($username == "") {
        header("location:login.php");
    }
?>
<!--
This is a starter template page. Use this page to start your new project from
scratch. This page gets rid of all links and provides the needed markup only.
-->
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Poliklinik Alexander</title>

    <!-- Google Font: Source Sans Pro -->
    <link rel="stylesheet"
        href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
    <!-- Font Awesome Icons -->
    <link rel="stylesheet" href="assets/plugins/fontawesome-free/css/all.min.css">
    <!-- Theme style -->
    <link rel="stylesheet" href="assets/dist/css/adminlte.min.css">
</head>

<body class="hold-transition sidebar-mini">
    <div class="wrapper">

        <!-- Navbar -->
        <?php include ('components/navbar.php') ?>
        <!-- /.navbar -->

        <!-- Main Sidebar Container -->
        <?php include ('components/sidebar.php') ?>
        <!-- Content Wrapper. Contains page content -->
        <div class="content-wrapper">
            <!-- Content Header (Page header) -->
            <?php include ('pages/dashboard/index.php') ?>
            <!-- /.content -->
        </div>
        <!-- /.content-wrapper -->

        <!-- Control Sidebar -->
        <aside class="control-sidebar control-sidebar-dark">
            <!-- Control sidebar content goes here -->
            <div class="p-3">
                <h5>Title</h5>
                <p>Halo</p>
            </div>
        </aside>
        <!-- /.control-sidebar -->

        <!-- Main Footer -->
    </div>
    <!-- ./wrapper -->

    <!-- REQUIRED SCRIPTS -->

    <!-- jQuery -->
    <script src="assets/plugins/jquery/jquery.min.js"></script>
    <!-- Bootstrap 4 -->
    <script src="assets/plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
    <!-- AdminLTE App -->
    <script src="assets/dist/js/adminlte.min.js"></script>
</body>

</html>
=======
// Mendapatkan role dari session atau dari tempat lain sesuai kebutuhan
if (isset($_SESSION['role_id'])) {
    $role = $_SESSION['role_id'];

    // Tentukan file sidebar yang akan dimuat berdasarkan role
    if ($role === 1) {
        $sidebar_file = 'components/sidebar_admin.php';
    } elseif ($role === 2) {
        $sidebar_file = 'components/sidebar_dokter.php';
    } else {
        // Atur default jika $_SESSION['role_id'] tidak terdefinisi atau tidak sesuai
        $sidebar_file = 'components/sidebar_pasien.php';
    }
} else {
    // Atur default jika $_SESSION['role_id'] belum terdefinisi
    $sidebar_file = 'components/sidebar_pasien.php';
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <?php include('components/head.php'); ?>
</head>
<body class="hold-transition sidebar-mini">
<div class="wrapper">
    <!-- Navbar -->
    <?php include('components/navbar.php'); ?>
    <!-- /.navbar -->

    <!-- Main Sidebar Container -->
    <?php include($sidebar_file); ?>
    <!-- /.sidebar -->

    <!-- Content Wrapper. Contains page content -->
    <div class="content-wrapper">
        <!-- Main content -->
        <?php include('pages/home.php'); ?>
        <!-- /.content -->
    </div>
    <!-- /.content-wrapper -->

    <!-- Main Footer -->
    <?php include('components/footer.php'); ?>
</div>
<!-- ./wrapper -->

<!-- REQUIRED SCRIPTS -->
<!-- ... -->
</body>
</html>
>>>>>>> d31b5567ecfc76b5e7d17c1113fbd1c0d9db3cd1
