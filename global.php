<?php
  session_start();
  include 'inc/db_connect.php';
  include 'inc/sql-send-message.php';
?>
<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">  
  <title>HDB Chat IT | Global</title>
  <!-- Tell the browser to be responsive to screen width -->
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="plugins/font-awesome/css/font-awesome.min.css">
  <!-- Ionicons -->
  <link rel="stylesheet" href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">
  <!-- Theme style -->
  <link rel="stylesheet" href="dist/css/adminlte.min.css">
  <!-- iCheck -->
  <link rel="stylesheet" href="plugins/iCheck/flat/blue.css">
  <!-- Morris chart -->
  <link rel="stylesheet" href="plugins/morris/morris.css">
  <!-- jvectormap -->
  <link rel="stylesheet" href="plugins/jvectormap/jquery-jvectormap-1.2.2.css">
  <!-- Date Picker -->
  <link rel="stylesheet" href="plugins/datepicker/datepicker3.css">
  <!-- Daterange picker -->
  <link rel="stylesheet" href="plugins/daterangepicker/daterangepicker-bs3.css">
  <!-- bootstrap wysihtml5 - text editor -->
  <link rel="stylesheet" href="plugins/bootstrap-wysihtml5/bootstrap3-wysihtml5.min.css">
  <!-- Google Font: Source Sans Pro -->
  <link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700" rel="stylesheet">
</head>
<body class="hold-transition sidebar-mini">
<div class="wrapper">
  <!-- Navbar -->
  <nav class="main-header navbar navbar-expand bg-white navbar-light border-bottom">
      <!-- Left navbar links -->
      <ul class="navbar-nav">
        <li class="nav-item">
          <a class="nav-link" data-widget="pushmenu" href="#"><i class="fa fa-bars"></i></a>
        </li>
      </ul>

  </nav>
  <!-- /.navbar -->

  <!-- Main Sidebar Container -->
  <aside class="main-sidebar sidebar-dark-primary elevation-4">
    <!-- Brand Logo -->
    <a href="#" class="brand-link">
      <img src="dist/img/logo.jpg" alt="HDB Chat IT Logo" class="brand-image img-circle elevation-3" style="opacity: .8">
      <span class="brand-text font-weight-light">HDB Chat IT</span>
    </a>

    <!-- Sidebar -->
    <div class="sidebar">
      <!-- Sidebar user panel (optional) -->
      <div class="user-panel mt-3 pb-3 mb-3 d-flex">
        <div class="image">
          <img src="dist/img/profil1.png" class="img-circle elevation-2" alt="User Image">
        </div>
        <div class="info">
          <a href="#" class="d-block"><?php echo $_GET['username']; ?></a>
        </div>
      </div>

      <!-- Sidebar Menu -->
      <nav class="mt-2">
        <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
          <!-- Add icons to the links using the .nav-icon class
               with font-awesome or any other icon font library -->
          <li class="nav-item has-treeview menu-open">
            <a href="/index.php?id=<?php echo $_GET['id']; ?>&username=<?php echo $_GET['username']; ?>" class="nav-link">
              <i class="nav-icon fa fa-dashboard"></i>
              <p>
                Accueil 
              </p>
            </a>
          </li>
          <li class="nav-item has-treeview menu-open">
            <a href="/global.php?id=<?php echo $_GET['id']; ?>&username=<?php echo $_GET['username']; ?>" class="nav-link active">
              <i class="nav-icon fa fa-th"></i>
              <p>
                Global
              </p>
            </a>
          </li>
          <li class="nav-item has-treeview menu-open">
            <a href="logout.php" class="nav-link">
              <i class="nav-icon fa fa-sign-out"></i>
              <p>
                Déconnexion
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
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
        </div>
      </div><!-- /.container-fluid -->
    </section>

    <!-- Main content -->
    <section class="content">
      <div class="row">
        <div class="col-md-1">
        </div>
        <!-- /.col -->
        <div class="col-md-10">
          <div class="card direct-chat direct-chat-primary">
                <div class="card-header ui-sortable-handle" style="cursor: move;">
                  <h3 class="card-title">Discussion instantanée</h3>
                </div>
                <!-- /.card-header -->
                <div class="card-body">
                  <!-- Conversations are loaded here -->
                <div class="direct-chat-messages">

                  <?php
                    $i = 0;
                    foreach($aMessage as $key => $val){
                      if ($val['nom'] != $_GET['username']) {
                      ?>
                        <!-- Message. Default to the left -->
                        <div class="direct-chat-msg right">
                          <div class="direct-chat-info clearfix">
                            <span class="direct-chat-name float-right"><?php echo $val['nom'] ?></span>
                          </div>
                          <!-- /.direct-chat-info -->
                          <img class="direct-chat-img" src="dist/img/profil1.png" alt="message user image">
                          <!-- /.direct-chat-img -->
                          <div class="direct-chat-text">
                            <?php echo $val['message'] ?>
                          </div>
                          <!-- /.direct-chat-text -->
                        </div>
                        <!-- /.direct-chat-msg -->
                      <?php
                      } else {
                        ?>
                          <!-- Message to the left -->
                          <div class="direct-chat-msg left">
                            <div class="direct-chat-info clearfix">
                              <span class="direct-chat-name float-left"><?php echo $val['nom'] ?></span>
                            </div>
                            <!-- /.direct-chat-info -->
                            <img class="direct-chat-img" src="dist/img/profil2.png" alt="message user image">
                            <!-- /.direct-chat-img -->
                            <div class="direct-chat-text">
                            <?php echo $val['message'] ?>
                            </div>
                            <!-- /.direct-chat-text -->
                          </div>
                          <!-- /.direct-chat-msg -->
                        <?php
                      }
                      $i++;
                    }
                  ?>

                </div>
                <!--/.direct-chat-messages-->
                  <!--/.direct-chat-messages-->
                </div>
                <!-- /.card-body -->
                <div class="card-footer">
                 <form action="inc/sendmessage.php" method="post">
                    <div class="input-group">
                      <input type="hidden" name="user_id" value="<?php echo $_GET['id'] ?>"> 
                      <input type="hidden" name="name" value="<?php echo $_GET['username'] ?>">
                      <input name="message" placeholder="Ecrire le message ..." class="form-control" type="text">
                      <span class="input-group-append">
                        <button type="submit" class="btn btn-primary">Envoyer</button>
                      </span>
                    </div>
                  </form>
                </div>
                <!-- /.card-footer-->
              </div>
            <!-- /. box -->
          </div>
        
        
        
        <!-- /.col -->
        <div class="col-md-1">
        </div>
      </div>
      <!-- /.row -->
    </section>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->

  <!-- Control Sidebar -->
  <aside class="control-sidebar control-sidebar-dark">
    <!-- Control sidebar content goes here -->
  </aside>
  <!-- /.control-sidebar -->
</div>
<!-- ./wrapper -->

<!-- jQuery -->
<script src="plugins/jquery/jquery.min.js"></script>
<!-- jQuery UI 1.11.4 -->
<script src="https://code.jquery.com/ui/1.12.1/jquery-ui.min.js"></script>
<!-- Resolve conflict in jQuery UI tooltip with Bootstrap tooltip -->
<script>
  $.widget.bridge('uibutton', $.ui.button)
</script>
<!-- Bootstrap 4 -->
<script src="plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
<!-- Morris.js charts -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/raphael/2.1.0/raphael-min.js"></script>
<script src="plugins/morris/morris.min.js"></script>
<!-- Sparkline -->
<script src="plugins/sparkline/jquery.sparkline.min.js"></script>
<!-- jvectormap -->
<script src="plugins/jvectormap/jquery-jvectormap-1.2.2.min.js"></script>
<script src="plugins/jvectormap/jquery-jvectormap-world-mill-en.js"></script>
<!-- jQuery Knob Chart -->
<script src="plugins/knob/jquery.knob.js"></script>
<!-- daterangepicker -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/moment.js/2.10.2/moment.min.js"></script>
<script src="plugins/daterangepicker/daterangepicker.js"></script>
<!-- datepicker -->
<script src="plugins/datepicker/bootstrap-datepicker.js"></script>
<!-- Bootstrap WYSIHTML5 -->
<script src="plugins/bootstrap-wysihtml5/bootstrap3-wysihtml5.all.min.js"></script>
<!-- Slimscroll -->
<script src="plugins/slimScroll/jquery.slimscroll.min.js"></script>
<!-- FastClick -->
<script src="plugins/fastclick/fastclick.js"></script>
<!-- AdminLTE App -->
<script src="dist/js/adminlte.js"></script>
<!-- AdminLTE dashboard demo (This is only for demo purposes) -->
<script src="dist/js/pages/dashboard.js"></script>
<!-- AdminLTE for demo purposes -->
<script src="dist/js/demo.js"></script>
</body>
</html>
