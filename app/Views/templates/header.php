<!DOCTYPE html>
<html lang="en" dir="ltr">

<head>
  <meta charset="utf-8">
  <!-- <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous"> -->
  <link rel="stylesheet" href="<?= base_url('ariska-panel/public'); ?>/assets/css/style.css">
  <title></title>
  <!-- Custom fonts for this template-->
  <link href="<?= base_url('ariska-panel'); ?>/vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
  <link href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet">

  <!-- Custom styles for this template-->
  <link href="<?= base_url('ariska-panel/public'); ?>/assets/css/sb-admin-2.min.css" rel="stylesheet">
  <link href="<?= base_url('ariska-panel'); ?>/vendor/datatables/dataTables.bootstrap4.min.css" rel="stylesheet">

</head>

<body>
  <?php
  $uri = service('uri');
  ?>

  <!-- Page Wrapper -->
  <div id="wrapper">
    <?php if (session()->get('isLoggedIn')) : ?>
      <!-- Sidebar -->
      <ul class="navbar-nav bg-gradient-primary sidebar sidebar-dark accordion" id="accordionSidebar">

        <!-- Sidebar - Brand -->
        <a class="sidebar-brand d-flex align-items-center justify-content-center" href="./">
          <div class="sidebar-brand-icon rotate-n-15">
            <!-- <i class="fas fa-laugh-wink"></i> -->
          </div>
          <div class="sidebar-brand-text mx-3">Ariska</div>
        </a>

        <!-- Divider -->
        <hr class="sidebar-divider my-0">

        <!-- Nav Item - Dashboard -->
        <li class="nav-item <?= ($uri->getSegment(1) == 'dashboard' ? 'active' : null) ?>">
          <a class="nav-link" href="<?= base_url('ariska-panel/public'); ?>/dashboard">
            <i class="fas fa-fw fa-tachometer-alt"></i>
            <span>Dashboard</span></a>
        </li>

        <!-- Divider -->
        <hr class="sidebar-divider">

        <!-- Heading -->
        <div class="sidebar-heading">
          Menu
        </div>

        <!-- Nav Item - Pages Collapse Menu -->
        <li class="nav-item">
          <div id="collapsePages" class="collapse" aria-labelledby="headingPages" data-parent="#accordionSidebar">
            <div class="bg-white py-2 collapse-inner rounded">
              <h6 class="collapse-header">Login Screens:</h6>
              <a class="collapse-item" href="login.html">Login</a>
              <a class="collapse-item" href="register.html">Register</a>
              <a class="collapse-item" href="forgot-password.html">Forgot Password</a>
              <div class="collapse-divider"></div>
              <h6 class="collapse-header">Other Pages:</h6>
              <a class="collapse-item" href="404.html">404 Page</a>
              <a class="collapse-item" href="blank.html">Blank Page</a>
            </div>
          </div>
        </li>

        <!-- Nav Item - Aplicants -->
        <li class="nav-item <?= ($uri->getSegment(1) == 'applicants' ? 'active' : null) ?>">
          <a class="nav-link" href="<?= base_url('ariska-panel/public'); ?>/applicants">
            <i class="fas fa-fw fa-user-tie"></i>
            <span>Pelamar</span></a>
        </li>

        <!-- Nav Item - Profile -->
        <li class="nav-item <?= ($uri->getSegment(1) == 'profile' ? 'active' : null) ?>">
          <a class="nav-link" href="<?= base_url('ariska-panel/public'); ?>/profile">
            <i class="fas fa-fw fa-user-edit"></i>
            <span>Update Profile</span></a>
        </li>

        <!-- Nav Item - Career -->
        <li class="nav-item <?= ($uri->getSegment(1) == 'career' ? 'active' : null) ?>">
          <a class="nav-link" href="<?= base_url('ariska-panel/public'); ?>/career">
            <i class="fas fa-fw fa-briefcase"></i>
            <span>Karir</span></a>
        </li>

        <!-- Divider -->
        <hr class="sidebar-divider d-none d-md-block">

        <!-- Sidebar Toggler (Sidebar) -->
        <div class="text-center d-none d-md-inline">
          <button class="rounded-circle border-0" id="sidebarToggle"></button>
        </div>

      </ul>
      <!-- End of Sidebar -->

      <!-- Content Wrapper -->
      <div id="content-wrapper" class="d-flex flex-column">

        <!-- Main Content -->
        <div id="content">

          <!-- Topbar -->
          <nav class="navbar navbar-expand navbar-light bg-white topbar mb-4 static-top shadow">

            <!-- Sidebar Toggle (Topbar) -->
            <button id="sidebarToggleTop" class="btn btn-link d-md-none rounded-circle mr-3">
              <i class="fa fa-bars"></i>
            </button>

            <!-- Topbar Search -->
            <!-- <form class="d-none d-sm-inline-block form-inline mr-auto ml-md-3 my-2 my-md-0 mw-100 navbar-search">
            <div class="input-group">
              <input type="text" class="form-control bg-light border-0 small" placeholder="Search for..." aria-label="Search" aria-describedby="basic-addon2">
              <div class="input-group-append">
                <button class="btn btn-primary" type="button">
                  <i class="fas fa-search fa-sm"></i>
                </button>
              </div>
            </div>
          </form> -->

            <!-- Topbar Navbar -->
            <ul class="navbar-nav ml-auto">

              <!-- Nav Item - User Information -->
              <li class="nav-item dropdown no-arrow">
                <a class="nav-link dropdown-toggle" href="#" id="userDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                  <span class="mr-2 d-none d-lg-inline text-gray-600 small"><?= session()->get('first_name') ?></span>
                  <img class="img-profile rounded-circle" src="https://source.unsplash.com/QAB-WJcbgJk/60x60">
                </a>
                <!-- Dropdown - User Information -->
                <div class="dropdown-menu dropdown-menu-right shadow animated--grow-in" aria-labelledby="userDropdown">
                  <a class="dropdown-item" href="#">
                    <i class="fas fa-user fa-sm fa-fw mr-2 text-gray-400"></i>
                    Profile
                  </a>
                  <a class="dropdown-item" href="#">
                    <i class="fas fa-cogs fa-sm fa-fw mr-2 text-gray-400"></i>
                    Settings
                  </a>
                  <a class="dropdown-item" href="#">
                    <i class="fas fa-list fa-sm fa-fw mr-2 text-gray-400"></i>
                    Activity Log
                  </a>
                  <div class="dropdown-divider"></div>
                  <a class="dropdown-item" href="./logout" data-toggle="modal" data-target="#logoutModal">
                    <i class="fas fa-sign-out-alt fa-sm fa-fw mr-2 text-gray-400"></i>
                    Logout
                  </a>
                </div>
              </li>

            </ul>

          </nav>
          <!-- End of Topbar -->
          <!-- Logout Modal-->
          <div class="modal fade" id="logoutModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog" role="document">
              <div class="modal-content">
                <div class="modal-header">
                  <h5 class="modal-title" id="exampleModalLabel">Ready to Leave?</h5>
                  <button class="close" type="button" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">×</span>
                  </button>
                </div>
                <div class="modal-footer">
                  <button class="btn btn-secondary" type="button" data-dismiss="modal">Cancel</button>
                  <a class="btn btn-primary" href="./logout">Logout</a>
                </div>
              </div>
            </div>
          </div>
        <?php endif; ?>