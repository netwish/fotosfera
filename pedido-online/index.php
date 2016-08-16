<?php 
session_start();

if ($_GET["c"] != ""){
  $_SESSION["cliente"] = $_GET["c"];
}

$_SESSION["cliente"] = "s";

?>
<!DOCTYPE html>
<html><head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Pedido Online | Sephora</title>

<meta name="theme-color" content="#3c8dbc">
<meta name="msapplication-navbutton-color" content="#3c8dbc">
<meta name="apple-mobile-web-app-status-bar-style" content="#3c8dbc">

    <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
    <link rel="stylesheet" href="bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.4.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">
    <link rel="stylesheet" href="dist/css/AdminLTE.min.css">
    <link rel="stylesheet" href="dist/css/skins/_all-skins.min.css">
    <link rel="stylesheet" href="plugins/iCheck/flat/blue.css">
    <link rel="stylesheet" href="plugins/jvectormap/jquery-jvectormap-1.2.2.css">
    <link rel="stylesheet" href="plugins/datepicker/datepicker3.css">
    <link rel="stylesheet" href="plugins/daterangepicker/daterangepicker-bs3.css">
    <link rel="stylesheet" href="plugins/bootstrap-wysihtml5/bootstrap3-wysihtml5.min.css">

    <link rel="stylesheet" href="style.css">

        <script src="plugins/jQuery/jQuery-2.1.4.min.js"></script>
    <script src="https://code.jquery.com/ui/1.11.4/jquery-ui.min.js"></script>


  </head>

  <body class="hold-transition login-page" style="background: #000000;">

  
  
<div class="login-box">
  <div class="login-logo">
    <img src="logos/sephora_logo.png" style="height: 20px;">
  </div>
  <!-- /.login-logo -->
  <div class="login-box-body">
    <p class="login-box-msg">Acesso ao Pedido Online</p>

    <form action="home.php?c=s" method="post">
      <div class="form-group has-feedback">
        <input type="email" class="form-control" placeholder="E-mail">
        <span class="glyphicon glyphicon-envelope form-control-feedback"></span>
      </div>
      <div class="form-group has-feedback">
        <input type="password" class="form-control" placeholder="Senha">
        <span class="glyphicon glyphicon-lock form-control-feedback"></span>
      </div>
      <div class="row">
        <div class="col-xs-8">
          <div class="checkbox icheck">
                <a href="#">Recuperar senha</a><br>
          </div>
        </div>
        <!-- /.col -->
        <div class="col-xs-4">
          <button type="submit" class="btn bg-orange pull-right">ENTRAR</button>
        </div>
        <!-- /.col -->
      </div>
    </form>

    
    <!-- /.social-auth-links -->


    

  </div><!-- /.login-box-body -->

  <div class="login-logo">
    <img src="logos/fotosfera_logo.png" alt="Fotosfera" style="height:15px;">
  </div>
  
</div>
<!-- /.login-box --><div role="log" aria-live="assertive" aria-relevant="additions" class="ui-helper-hidden-accessible"></div></body></html>