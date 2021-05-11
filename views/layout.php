<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Tareas</title>

  
  <!-- Google Font: Source Sans Pro -->
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
  <!-- Font Awesome Icons -->
  <link rel="stylesheet" href="plugins/fontawesome-free/css/all.min.css">
  <!-- overlayScrollbars -->
  <link rel="stylesheet" href="plugins/overlayScrollbars/css/OverlayScrollbars.min.css">
  <!-- Theme style -->
  <link rel="stylesheet" href="dist/css/adminlte.min.css">
</head>
<body class="hold-transition sidebar-mini layout-fixed layout-navbar-fixed layout-footer-fixed">


<?php
    if ($_SESSION['user']->idCargo == 1) {
?>

<div>
  <!-- Navbar -->
  <nav class="main-header navbar navbar-expand navbar-white navbar-light">
    <!-- Left navbar links -->
    <ul class="navbar-nav">
      <li class="nav-item">
        <a class="nav-link" data-widget="pushmenu" href="#" role="button"><i class="fas fa-bars"></i></a>
      </li>
     
      <li class="nav-item d-none d-sm-inline-block">
        <a href="?controller=login&method=logout" class="nav-link">Cerrar Sesión</a>
      </li>
    </ul>

    <!-- Right navbar links -->
    <ul class="navbar-nav ml-auto">
      <!-- Navbar Search -->
      

      <!-- Messages Dropdown Menu -->
      <li class="nav-item dropdown">
        <a class="nav-link" data-toggle="dropdown" href="#">
          <i class="far fa-comments"></i>
          <span class="badge badge-danger navbar-badge">3</span>
        </a>
        <div class="dropdown-menu dropdown-menu-lg dropdown-menu-right">
          <a href="#" class="dropdown-item">
            <!-- Message Start -->
            <div class="media">
              <img src="dist/img/user1-128x128.jpg" alt="User Avatar" class="img-size-50 mr-3 img-circle">
              <div class="media-body">
                <h3 class="dropdown-item-title">
                  Brad Diesel
                  <span class="float-right text-sm text-danger"><i class="fas fa-star"></i></span>
                </h3>
                <p class="text-sm">Call me whenever you can...</p>
                <p class="text-sm text-muted"><i class="far fa-clock mr-1"></i> 4 Hours Ago</p>
              </div>
            </div>
            <!-- Message End -->
          </a>
          <div class="dropdown-divider"></div>
          <a href="#" class="dropdown-item">
            <!-- Message Start -->
            <div class="media">
              <img src="dist/img/user8-128x128.jpg" alt="User Avatar" class="img-size-50 img-circle mr-3">
              <div class="media-body">
                <h3 class="dropdown-item-title">
                  John Pierce
                  <span class="float-right text-sm text-muted"><i class="fas fa-star"></i></span>
                </h3>
                <p class="text-sm">I got your message bro</p>
                <p class="text-sm text-muted"><i class="far fa-clock mr-1"></i> 4 Hours Ago</p>
              </div>
            </div>
            <!-- Message End -->
          </a>
          <div class="dropdown-divider"></div>
          <a href="#" class="dropdown-item">
            <!-- Message Start -->
            <div class="media">
              <img src="dist/img/user3-128x128.jpg" alt="User Avatar" class="img-size-50 img-circle mr-3">
              <div class="media-body">
                <h3 class="dropdown-item-title">
                  Nora Silvester
                  <span class="float-right text-sm text-warning"><i class="fas fa-star"></i></span>
                </h3>
                <p class="text-sm">The subject goes here</p>
                <p class="text-sm text-muted"><i class="far fa-clock mr-1"></i> 4 Hours Ago</p>
              </div>
            </div>
            <!-- Message End -->
          </a>
          <div class="dropdown-divider"></div>
          <a href="#" class="dropdown-item dropdown-footer">See All Messages</a>
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
      <li class="nav-item">
        <a class="nav-link" data-widget="control-sidebar" data-slide="true" href="#" role="button">
          <i class="fas fa-th-large"></i>
        </a>
      </li>
    </ul>
  </nav>
  <!-- /.navbar -->
  

  <!-- Main Sidebar Container -->
  <aside class="main-sidebar sidebar-dark-primary elevation-4">
    <!-- Brand Logo -->
    <a href="#" class="brand-link">
      <img src="img/logo.png" class="brand-image img-circle elevation-3" style="opacity: .8">
      <span class="brand-text font-weight-light"><?php echo $_SESSION['user']->correoUsuario?></span>
    </a>

    <!-- Sidebar -->
    <div class="sidebar">
      <!-- Sidebar user panel (optional) -->
      <div class="user-panel mt-3 pb-3 mb-3 d-flex">
        <div class="image">
          <img src="dist/img/us.png" class="img-circle elevation-2" alt="User Image">
        </div>
        <div class="info">
          <a href="#" class="d-block"><?php echo $_SESSION['user']->cargo?></a>
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
          <li class="nav-item">
            <a href="#" class="nav-link active">
              <i class="nav-icon fas fa-tasks"></i>
              <p>
                MSAN
                <i class="right fas fa-angle-left"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="?controller=eneM1" class="nav-link active">
                  <i class="far fa-circle nav-icon"></i>
                  <p>MSAN ENE 04 AL 18</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="?controller=eneM2" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>MSAN ENE 19 AL 29</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="?controller=FebM1" class="nav-link ">
                  <i class="far fa-circle nav-icon"></i>
                  <p>MSAN FEB 01 AL 12</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="?controller=FebM2" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>MSAN FEB 15 AL 26</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="?controller=MarM1" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>MSAN MAR 01 AL 15</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="?controller=MarM2" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>MSAN MAR 16 AL 31</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="?controller=AbriM1" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>MSAN ABRI 05 AL 16</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="?controller=AbriM2" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>MSAN ABRI 19 AL 29</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="?controller=MayM1" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>MSAN MAY 03 AL 14</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="?controller=MayM2" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>MSAN MAY 18 AL 31</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="?controller=JunM1" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>MSAN JUN 01 AL 15</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="?controller=JunM2" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>MSAN JUN 16 AL 30</p>
                </a>
              </li>
            </ul>
          </li>

          <li class="nav-item ">
            <a href="#" class="nav-link active">
              <i class="nav-icon fab fa-stack-overflow"></i>
              <p>
                 URBAS
                <i class="right fas fa-angle-left"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="?controller=EneU1" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>URBA ENE 04 AL 18</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="?controller=EneU2" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>URBA ENE 19 AL 29</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="?controller=FebU1" class="nav-link ">
                  <i class="far fa-circle nav-icon"></i>
                  <p>URBA FEB 01 AL 12</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="?controller=FebU2" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>URBA FEB 15 AL 26</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="?controller=MarU1" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>URBA MAR 01 AL 15</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="?controller=MarU2" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>URBA MAR 16 AL 31</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="?controller=AbriU1" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>URBA ABRI 05 AL 15</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="?controller=AbriU2" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>URBA ABRI 19 AL 29</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="?controller=MayU1" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>URBA MAY 03 AL 14</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="?controller=MayU2" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>URBA MAY 18 AL 31</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="?controller=JunU1" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>URBA JUN 01 AL 15</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="?controller=JunU2" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>URBA JUN 16 AL 30</p>
                </a>
              </li>
            </ul>
          </li>
          
          
          <li class="nav-item">
            <a href="#" class="nav-link">
              <i class="nav-icon fas fa-edit"></i>
              <p>
                Tareas
                <i class="fas fa-angle-left right"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="?controller=tarea" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Consultar Tareas</p>
                </a>
              </li>
              
            </ul>
          </li>
          <li class="nav-item">
            <a href="#" class="nav-link">
              <i class="nav-icon fas fa-table"></i>
              <p>
                Cambios
                <i class="fas fa-angle-left right"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="?controller=cambio" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Consultar Cambios</p>
                </a>
              </li>
              
            </ul>
          </li>
          <li class="nav-item">
            <a href="#" class="nav-link">
              <i class="nav-icon fas fa-users"></i>
              
              <p>
                Usuarios
                <i class="fas fa-angle-left right"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="?controller=user" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Consultar Usuarios</p>
                </a>
              </li>
              
      
            </ul>
          </li>
          <li class="nav-item">
            <a href="#" class="nav-link">
              <i class="nav-icon fas fa-toggle-on"></i>
              
              <p>
                Estados
                <i class="fas fa-angle-left right"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="?controller=estado" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Consultar Estados</p>
                </a>
              </li>
              
            </ul>
          </li>
          <li class="nav-header">INFRAESTRUCTURA</li>
          <li class="nav-item">
            <a href="pages/calendar.html" class="nav-link">
              <i class="nav-icon fas fa-calendar-alt"></i>
              <p>
                Fechas del Servicio
                <span class="badge badge-info right">2</span>
              </p>
            </a>
          </li>

          
          <li class="nav-header">INFRAESTRUCTURA</li>
          <li class="nav-item">
            <a href="pages/calendar.html" class="nav-link">
              <i class="nav-icon fas fa-calendar-alt"></i>
              <p>
                Fechas del Servicio
                <span class="badge badge-info right">2</span>
              </p>
            </a>
          </li>
          <li class="nav-item">
            <a href="pages/gallery.html" class="nav-link">
              <i class="nav-icon far fa-image"></i>
              <p>
                Img Mantenimiento
              </p>
            </a>
          </li>
          <li class="nav-item">
            <a href="pages/kanban.html" class="nav-link">
              <i class="nav-icon fas fa-users"></i>
              
              <p>
                Equipo De Trabajo
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
  
        <!-- /.row -->
        
        
        <!-- /.row -->

        <!-- Main row -->
       
        <!-- /.row -->
      </div><!--/. container-fluid -->
    </section>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->

  <!-- Control Sidebar -->
  
  <!-- /.control-sidebar -->

  <!-- Main Footer -->
  
</div>

<?php
    }elseif($_SESSION['user']->idCargo == 2) {
?>
    <div>
  <!-- Navbar -->
  <nav class="main-header navbar navbar-expand navbar-white navbar-light">
    <!-- Left navbar links -->
    <ul class="navbar-nav">
      <li class="nav-item">
        <a class="nav-link" data-widget="pushmenu" href="#" role="button"><i class="fas fa-bars"></i></a>
      </li>
     
      <li class="nav-item d-none d-sm-inline-block">
        <a href="?controller=login&method=logout" class="nav-link">Cerrar Sesión</a>
      </li>
    </ul>

    <!-- Right navbar links -->
    <ul class="navbar-nav ml-auto">
      <!-- Navbar Search -->
      

      <!-- Messages Dropdown Menu -->
      <li class="nav-item dropdown">
        <a class="nav-link" data-toggle="dropdown" href="#">
          <i class="far fa-comments"></i>
          <span class="badge badge-danger navbar-badge">3</span>
        </a>
        <div class="dropdown-menu dropdown-menu-lg dropdown-menu-right">
          <a href="#" class="dropdown-item">
            <!-- Message Start -->
            <div class="media">
              <img src="dist/img/user1-128x128.jpg" alt="User Avatar" class="img-size-50 mr-3 img-circle">
              <div class="media-body">
                <h3 class="dropdown-item-title">
                  Brad Diesel
                  <span class="float-right text-sm text-danger"><i class="fas fa-star"></i></span>
                </h3>
                <p class="text-sm">Call me whenever you can...</p>
                <p class="text-sm text-muted"><i class="far fa-clock mr-1"></i> 4 Hours Ago</p>
              </div>
            </div>
            <!-- Message End -->
          </a>
          <div class="dropdown-divider"></div>
          <a href="#" class="dropdown-item">
            <!-- Message Start -->
            <div class="media">
              <img src="dist/img/user8-128x128.jpg" alt="User Avatar" class="img-size-50 img-circle mr-3">
              <div class="media-body">
                <h3 class="dropdown-item-title">
                  John Pierce
                  <span class="float-right text-sm text-muted"><i class="fas fa-star"></i></span>
                </h3>
                <p class="text-sm">I got your message bro</p>
                <p class="text-sm text-muted"><i class="far fa-clock mr-1"></i> 4 Hours Ago</p>
              </div>
            </div>
            <!-- Message End -->
          </a>
          <div class="dropdown-divider"></div>
          <a href="#" class="dropdown-item">
            <!-- Message Start -->
            <div class="media">
              <img src="dist/img/user3-128x128.jpg" alt="User Avatar" class="img-size-50 img-circle mr-3">
              <div class="media-body">
                <h3 class="dropdown-item-title">
                  Nora Silvester
                  <span class="float-right text-sm text-warning"><i class="fas fa-star"></i></span>
                </h3>
                <p class="text-sm">The subject goes here</p>
                <p class="text-sm text-muted"><i class="far fa-clock mr-1"></i> 4 Hours Ago</p>
              </div>
            </div>
            <!-- Message End -->
          </a>
          <div class="dropdown-divider"></div>
          <a href="#" class="dropdown-item dropdown-footer">See All Messages</a>
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
      <li class="nav-item">
        <a class="nav-link" data-widget="control-sidebar" data-slide="true" href="#" role="button">
          <i class="fas fa-th-large"></i>
        </a>
      </li>
    </ul>
  </nav>
  <!-- /.navbar -->
  

  <!-- Main Sidebar Container -->
  <aside class="main-sidebar sidebar-dark-primary elevation-4">
    <!-- Brand Logo -->
    <a href="#" class="brand-link">
      <img src="img/logo.png" class="brand-image img-circle elevation-3" style="opacity: .8">
      <span class="brand-text font-weight-light"><?php echo $_SESSION['user']->correoUsuario?></span>
    </a>

    <!-- Sidebar -->
    <div class="sidebar">
      <!-- Sidebar user panel (optional) -->
      <div class="user-panel mt-3 pb-3 mb-3 d-flex">
        <div class="image">
          <img src="dist/img/us.png" class="img-circle elevation-2" alt="User Image">
        </div>
        <div class="info">
          <a href="#" class="d-block"><?php echo $_SESSION['user']->cargo?></a>
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
          <li class="nav-item">
            <a href="#" class="nav-link active">
              <i class="nav-icon fas fa-tasks"></i>
              <p>
                MSAN
                <i class="right fas fa-angle-left"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="?controller=eneM1" class="nav-link active">
                  <i class="far fa-circle nav-icon"></i>
                  <p>MSAN ENE 04 AL 18</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="?controller=eneM2" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>MSAN ENE 19 AL 29</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="?controller=FebM1" class="nav-link ">
                  <i class="far fa-circle nav-icon"></i>
                  <p>MSAN FEB 01 AL 12</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="?controller=FebM2" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>MSAN FEB 15 AL 26</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="?controller=MarM1" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>MSAN MAR 01 AL 15</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="?controller=MarM2" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>MSAN MAR 16 AL 31</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="?controller=AbriM1" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>MSAN ABRI 05 AL 16</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="?controller=AbriM2" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>MSAN ABRI 19 AL 29</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="?controller=MayM1" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>MSAN MAY 03 AL 14</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="?controller=MayM2" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>MSAN MAY 18 AL 31</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="?controller=JunM1" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>MSAN JUN 01 AL 15</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="?controller=JunM2" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>MSAN JUN 16 AL 30</p>
                </a>
              </li>
            </ul>
          </li>

          <li class="nav-item ">
            <a href="#" class="nav-link active">
              <i class="nav-icon fab fa-stack-overflow"></i>
              <p>
                 URBAS
                <i class="right fas fa-angle-left"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="?controller=EneU1" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>URBA ENE 04 AL 18</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="?controller=EneU2" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>URBA ENE 19 AL 29</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="?controller=FebU1" class="nav-link ">
                  <i class="far fa-circle nav-icon"></i>
                  <p>URBA FEB 01 AL 12</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="?controller=FebU2" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>URBA FEB 15 AL 26</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="?controller=MarU1" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>URBA MAR 01 AL 15</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="?controller=MarU2" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>URBA MAR 16 AL 31</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="?controller=AbriU1" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>URBA ABRI 05 AL 15</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="?controller=AbriU2" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>URBA ABRI 19 AL 29</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="?controller=MayU1" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>URBA MAY 03 AL 14</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="?controller=MayU2" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>URBA MAY 18 AL 31</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="?controller=JunU1" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>URBA JUN 01 AL 15</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="?controller=JunU2" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>URBA JUN 16 AL 30</p>
                </a>
              </li>
            </ul>
          </li>
          
          
          <li class="nav-item">
            <a href="#" class="nav-link">
              <i class="nav-icon fas fa-edit"></i>
              <p>
                Tareas
                <i class="fas fa-angle-left right"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="?controller=tarea" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Consultar Tareas</p>
                </a>
              </li>
              
            </ul>
          </li>
          <li class="nav-item">
            <a href="#" class="nav-link">
              <i class="nav-icon fas fa-table"></i>
              <p>
                Cambios
                <i class="fas fa-angle-left right"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="?controller=cambio" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Consultar Cambios</p>
                </a>
              </li>
              
            </ul>
          </li>
          
          <li class="nav-item">
            <a href="#" class="nav-link">
              <i class="nav-icon fas fa-toggle-on"></i>
              
              <p>
                Estados
                <i class="fas fa-angle-left right"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="?controller=estado" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Consultar Estados</p>
                </a>
              </li>
              
            </ul>
          </li>
          <li class="nav-header">INFRAESTRUCTURA</li>
          <li class="nav-item">
            <a href="pages/calendar.html" class="nav-link">
              <i class="nav-icon fas fa-calendar-alt"></i>
              <p>
                Fechas del Servicio
                <span class="badge badge-info right">2</span>
              </p>
            </a>
          </li>

          
          <li class="nav-header">INFRAESTRUCTURA</li>
          <li class="nav-item">
            <a href="pages/calendar.html" class="nav-link">
              <i class="nav-icon fas fa-calendar-alt"></i>
              <p>
                Fechas del Servicio
                <span class="badge badge-info right">2</span>
              </p>
            </a>
          </li>
          <li class="nav-item">
            <a href="pages/gallery.html" class="nav-link">
              <i class="nav-icon far fa-image"></i>
              <p>
                Img Mantenimiento
              </p>
            </a>
          </li>
          <li class="nav-item">
            <a href="pages/kanban.html" class="nav-link">
              <i class="nav-icon fas fa-users"></i>
              
              <p>
                Equipo De Trabajo
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
  
        <!-- /.row -->
        
        
        <!-- /.row -->

        <!-- Main row -->
       
        <!-- /.row -->
      </div><!--/. container-fluid -->
    </section>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->

  <!-- Control Sidebar -->
  
  <!-- /.control-sidebar -->

  <!-- Main Footer -->
  
</div>

<?php
    }elseif($_SESSION['user']->idCargo == 3  || $_SESSION['user']->idCargo == 4) {
?>
    <div>
  <!-- Navbar -->
  <nav class="main-header navbar navbar-expand navbar-white navbar-light">
    <!-- Left navbar links -->
    <ul class="navbar-nav">
      <li class="nav-item">
        <a class="nav-link" data-widget="pushmenu" href="#" role="button"><i class="fas fa-bars"></i></a>
      </li>
     
      <li class="nav-item d-none d-sm-inline-block">
        <a href="?controller=login&method=logout" class="nav-link">Cerrar Sesión</a>
      </li>
    </ul>

    <!-- Right navbar links -->
    <ul class="navbar-nav ml-auto">
      <!-- Navbar Search -->
      

      <!-- Messages Dropdown Menu -->
      <li class="nav-item dropdown">
        <a class="nav-link" data-toggle="dropdown" href="#">
          <i class="far fa-comments"></i>
          <span class="badge badge-danger navbar-badge">3</span>
        </a>
        <div class="dropdown-menu dropdown-menu-lg dropdown-menu-right">
          <a href="#" class="dropdown-item">
            <!-- Message Start -->
            <div class="media">
              <img src="dist/img/user1-128x128.jpg" alt="User Avatar" class="img-size-50 mr-3 img-circle">
              <div class="media-body">
                <h3 class="dropdown-item-title">
                  Brad Diesel
                  <span class="float-right text-sm text-danger"><i class="fas fa-star"></i></span>
                </h3>
                <p class="text-sm">Call me whenever you can...</p>
                <p class="text-sm text-muted"><i class="far fa-clock mr-1"></i> 4 Hours Ago</p>
              </div>
            </div>
            <!-- Message End -->
          </a>
          <div class="dropdown-divider"></div>
          <a href="#" class="dropdown-item">
            <!-- Message Start -->
            <div class="media">
              <img src="dist/img/user8-128x128.jpg" alt="User Avatar" class="img-size-50 img-circle mr-3">
              <div class="media-body">
                <h3 class="dropdown-item-title">
                  John Pierce
                  <span class="float-right text-sm text-muted"><i class="fas fa-star"></i></span>
                </h3>
                <p class="text-sm">I got your message bro</p>
                <p class="text-sm text-muted"><i class="far fa-clock mr-1"></i> 4 Hours Ago</p>
              </div>
            </div>
            <!-- Message End -->
          </a>
          <div class="dropdown-divider"></div>
          <a href="#" class="dropdown-item">
            <!-- Message Start -->
            <div class="media">
              <img src="dist/img/user3-128x128.jpg" alt="User Avatar" class="img-size-50 img-circle mr-3">
              <div class="media-body">
                <h3 class="dropdown-item-title">
                  Nora Silvester
                  <span class="float-right text-sm text-warning"><i class="fas fa-star"></i></span>
                </h3>
                <p class="text-sm">The subject goes here</p>
                <p class="text-sm text-muted"><i class="far fa-clock mr-1"></i> 4 Hours Ago</p>
              </div>
            </div>
            <!-- Message End -->
          </a>
          <div class="dropdown-divider"></div>
          <a href="#" class="dropdown-item dropdown-footer">See All Messages</a>
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
      <li class="nav-item">
        <a class="nav-link" data-widget="control-sidebar" data-slide="true" href="#" role="button">
          <i class="fas fa-th-large"></i>
        </a>
      </li>
    </ul>
  </nav>
  <!-- /.navbar -->
  

  <!-- Main Sidebar Container -->
  <aside class="main-sidebar sidebar-dark-primary elevation-4">
    <!-- Brand Logo -->
    <a href="#" class="brand-link">
      <img src="img/logo.png" class="brand-image img-circle elevation-3" style="opacity: .8">
      <span class="brand-text font-weight-light"><?php echo $_SESSION['user']->correoUsuario?></span>
    </a>

    <!-- Sidebar -->
    <div class="sidebar">
      <!-- Sidebar user panel (optional) -->
      <div class="user-panel mt-3 pb-3 mb-3 d-flex">
        <div class="image">
          <img src="dist/img/us.png" class="img-circle elevation-2" alt="User Image">
        </div>
        <div class="info">
          <a href="#" class="d-block"><?php echo $_SESSION['user']->cargo?></a>
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
          <li class="nav-item">
            <a href="#" class="nav-link active">
              <i class="nav-icon fas fa-tasks"></i>
              <p>
                MSAN
                <i class="right fas fa-angle-left"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="?controller=eneM1" class="nav-link active">
                  <i class="far fa-circle nav-icon"></i>
                  <p>MSAN ENE 04 AL 18</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="?controller=eneM2" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>MSAN ENE 19 AL 29</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="?controller=FebM1" class="nav-link ">
                  <i class="far fa-circle nav-icon"></i>
                  <p>MSAN FEB 01 AL 12</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="?controller=FebM2" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>MSAN FEB 15 AL 26</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="?controller=MarM1" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>MSAN MAR 01 AL 15</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="?controller=MarM2" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>MSAN MAR 16 AL 31</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="?controller=AbriM1" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>MSAN ABRI 05 AL 16</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="?controller=AbriM2" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>MSAN ABRI 19 AL 29</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="?controller=MayM1" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>MSAN MAY 03 AL 14</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="?controller=MayM2" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>MSAN MAY 18 AL 31</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="?controller=JunM1" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>MSAN JUN 01 AL 15</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="?controller=JunM2" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>MSAN JUN 16 AL 30</p>
                </a>
              </li>
            </ul>
          </li>

          <li class="nav-item ">
            <a href="#" class="nav-link active">
              <i class="nav-icon fab fa-stack-overflow"></i>
              <p>
                 URBAS
                <i class="right fas fa-angle-left"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="?controller=EneU1" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>URBA ENE 04 AL 18</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="?controller=EneU2" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>URBA ENE 19 AL 29</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="?controller=FebU1" class="nav-link ">
                  <i class="far fa-circle nav-icon"></i>
                  <p>URBA FEB 01 AL 12</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="?controller=FebU2" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>URBA FEB 15 AL 26</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="?controller=MarU1" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>URBA MAR 01 AL 15</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="?controller=MarU2" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>URBA MAR 16 AL 31</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="?controller=AbriU1" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>URBA ABRI 05 AL 15</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="?controller=AbriU2" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>URBA ABRI 19 AL 29</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="?controller=MayU1" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>URBA MAY 03 AL 14</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="?controller=MayU2" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>URBA MAY 18 AL 31</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="?controller=JunU1" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>URBA JUN 01 AL 15</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="?controller=JunU2" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>URBA JUN 16 AL 30</p>
                </a>
              </li>
            </ul>
          </li>
          
          
          <li class="nav-item">
            <a href="#" class="nav-link">
              <i class="nav-icon fas fa-edit"></i>
              <p>
                Tareas
                <i class="fas fa-angle-left right"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="?controller=tarea" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Consultar Tareas</p>
                </a>
              </li>
              
            </ul>
          </li>
          <li class="nav-item">
            <a href="#" class="nav-link">
              <i class="nav-icon fas fa-table"></i>
              <p>
                Cambios
                <i class="fas fa-angle-left right"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="?controller=cambio" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Consultar Cambios</p>
                </a>
              </li>
              
            </ul>
          </li>
          
          
          <li class="nav-header">INFRAESTRUCTURA</li>
          <li class="nav-item">
            <a href="pages/calendar.html" class="nav-link">
              <i class="nav-icon fas fa-calendar-alt"></i>
              <p>
                Fechas del Servicio
                <span class="badge badge-info right">2</span>
              </p>
            </a>
          </li>

          
          <li class="nav-header">INFRAESTRUCTURA</li>
          <li class="nav-item">
            <a href="pages/calendar.html" class="nav-link">
              <i class="nav-icon fas fa-calendar-alt"></i>
              <p>
                Fechas del Servicio
                <span class="badge badge-info right">2</span>
              </p>
            </a>
          </li>
          <li class="nav-item">
            <a href="pages/gallery.html" class="nav-link">
              <i class="nav-icon far fa-image"></i>
              <p>
                Img Mantenimiento
              </p>
            </a>
          </li>
          <li class="nav-item">
            <a href="pages/kanban.html" class="nav-link">
              <i class="nav-icon fas fa-users"></i>
              
              <p>
                Equipo De Trabajo
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
  
        <!-- /.row -->
        
        
        <!-- /.row -->

        <!-- Main row -->
       
        <!-- /.row -->
      </div><!--/. container-fluid -->
    </section>
    <!-- /.content -->
  </div>

    
<?php
    }
?>

<script src="plugins/jquery/jquery.min.js"></script>
<!-- Bootstrap -->
<script src="plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
<!-- overlayScrollbars -->
<script src="plugins/overlayScrollbars/js/jquery.overlayScrollbars.min.js"></script>
<!-- AdminLTE App -->
<script src="dist/js/adminlte.js"></script>

<!-- PAGE PLUGINS -->
<!-- jQuery Mapael -->
<script src="plugins/jquery-mousewheel/jquery.mousewheel.js"></script>
<script src="plugins/raphael/raphael.min.js"></script>
<script src="plugins/jquery-mapael/jquery.mapael.min.js"></script>
<script src="plugins/jquery-mapael/maps/usa_states.min.js"></script>
<!-- ChartJS -->
<script src="plugins/chart.js/Chart.min.js"></script>

<!-- AdminLTE for demo purposes -->
<script src="dist/js/demo.js"></script>
<!-- AdminLTE dashboard demo (This is only for demo purposes) -->
<script src="dist/js/pages/dashboard2.js"></script>

</body>
</html>
