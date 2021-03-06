<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>HDB Chat IT | Log in</title>
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
<body class="hold-transition login-page">
<div class="login-box">
    <div class="login-logo">
        <a href="#"><b>HDB Chat</b> IT</a>
    </div>
    <!-- /.login-logo -->
    <div class="card">
        <div class="card-body login-card-body">
            <p class="login-box-msg">
                Authentification</p>
            <?php
            if(isset($_GET['loginfailed'])) {
            ?>
            <div class="alert alert-danger">
                <strong>Mauvais Username ou Mot de passe</strong>
            </div>
            <?php
            }
            ?>
            <form action="inc/login_action.php" method="post">
                <div class="row">
                    <div class="col-md-10">
                        <div class="form-group has-feedback">

                            <input type="text" name="username" class="form-control" placeholder="Username" required="required">

                        </div>
                    </div>
                    <div class="col-md-2">
                        <span class="fa fa-user form-control-feedback"></span>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-10">
                        <div class="form-group has-feedback">

                            <input type="password" name="pwd" class="form-control" placeholder="Mot de passe" required="required"  pattern="(?=.*\d)(?=.*[a-z])(?=.*[A-Z]).{5,}">

                        </div>
                    </div>
                    <div class="col-md-2">
                        <div class="form-group has-feedback">                            
                            <span class="fa fa-lock form-control-feedback"></span>
                        </div>
                    </div>
                </div>
                <div class="card-footer">
                    <button type="submit" class="btn btn-primary" onclick="">Se connecter</button>
                    <a href="/index.php" class="btn btn-default float-right">Retour</a>
                </div>
                <div class="row">
                    <div class="col-md-3">

                    </div>
                    <div class="col-md-6">
                        <div><span class="form-control-feedback">Pas encore membre?</span></div>
                        <div><a href="/register.php">Créer un compte</a></div>
                    </div>
                    <div class="col-md-3">
                    </div>
                </div>
            </form>


            <!-- /.social-auth-links -->

        </div>
        <!-- /.login-card-body -->
    </div>
</div>
<!-- /.login-box -->

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
