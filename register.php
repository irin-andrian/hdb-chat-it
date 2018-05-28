<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>HDB Chat IT | Registration Page</title>
  <!-- Tell the browser to be responsive to screen width -->
  <meta name="viewport" content="width=device-width, initial-scale=1">

  <!-- Font Awesome -->
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.4.0/css/font-awesome.min.css">
  <!-- Ionicons -->
  <link rel="stylesheet" href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">
  <!-- Theme style -->
  <link rel="stylesheet" href="../../dist/css/adminlte.min.css">
  <!-- iCheck -->
  <link rel="stylesheet" href="../../plugins/iCheck/square/blue.css">
  <!-- Google Font: Source Sans Pro -->
  <link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700" rel="stylesheet">
</head>
<body class="hold-transition register-page">
<div class="register-box">
  <div class="register-logo">
    <b>HDB-Chat</b>-IT
  </div>  
  <div class="col-md-12 card">
    <div class="card-body register-card-body">

      <p class="login-box-msg">Créer un nouveau compte</p>
      <form action="../../index.html" method="post">
        <div class="row">
          <div class="col-md-10 form-group has-feedback">
            <input type="text" name="username" class="form-control" placeholder="Nom complet">            
          </div>
          <div class="col-md-2">
            <span class="fa fa-user form-control-feedback"></span>
          </div>
        </div>
        
        <div class="row">
          <div class="col-md-10 form-group has-feedback">
          <input type="password" name="pwd" class="form-control" placeholder="Mot de passe">
          </div>
          <div class="col-md-2">
          <span class="fa fa-lock form-control-feedback"></span>
          </div>

        </div>
       
       
        <div class="card-footer">
          <a href="/index.php" class="btn btn-default">Accueil</a>
          <button type="submit" class="btn btn-primary float-right" onclick="">S'inscrire</button>
        </div>
        </div>
      </form>
    </div>
    <!-- /.form-box -->
  </div><!-- /.card -->
</div>
<!-- /.register-box -->

<!-- jQuery -->
<script src="../../plugins/jquery/jquery.min.js"></script>
<!-- Bootstrap 4 -->
<script src="../../plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
<!-- iCheck -->
<script src="../../plugins/iCheck/icheck.min.js"></script>
<script>
  $(function () {
    $('input').iCheck({
      checkboxClass: 'icheckbox_square-blue',
      radioClass   : 'iradio_square-blue',
      increaseArea : '20%' // optional
    })
  })
</script>
</body>
</html>
