<?php 
session_start();

if ($_GET["c"] != ""){
	$_SESSION["cliente"] = $_GET["c"];
}

?>
<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
<?php if ($_SESSION["cliente"]=="c") { ?>
    <title>CAMARGO | DS Netwish</title>
<?php }else if ($_SESSION["cliente"]=="s") { ?>
    <title>Pedido Online | Sephora</title>
<?php }else{ ?>
    <title>Pedido Online - Netwish</title>
<?php } ?>

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
    <link rel="stylesheet" href="plugins/datatables/dataTables.bootstrap.css">
    <link rel="stylesheet" href="plugins/bootstrap-wysihtml5/bootstrap3-wysihtml5.min.css">

    <link rel="stylesheet" href="style.css">

        <script src="plugins/jQuery/jQuery-2.1.4.min.js"></script>
    <script src="https://code.jquery.com/ui/1.11.4/jquery-ui.min.js"></script>


  </head>

<?php if ($_SESSION["cliente"]=="c") { ?>
  <body class="hold-transition skin-blue sidebar-mini sidebar-collapse">
<?php }else if ($_SESSION["cliente"]=="s") { ?>
  <body class="skin-blue sidebar-mini"> 
<?php }else{ ?>
  <body class="sidebar-mini skin-red-light sidebar-collapse">
<?php } ?>
  
  
    <div class="wrapper">

<header class="main-header">
		<?php if ($_SESSION["cliente"]=="c") { ?>
            <!-- Logo Camargo -->
            <a href="index.php" class="logo">
              <span class="logo-mini"><img src="logos/Camargo_logo_icon.png" style="width: 70%; "/></span>
              <span class="logo-lg"><img src="logos/Camargo_logo.png" style="height: 35px;"/></span>
            </a>
    <?php }else if ($_SESSION["cliente"]=="s") { ?>
            <!-- Logo Camargo -->
            <a href="index.php" class="logo">
              <span class="logo-mini"><img src="logos/sephora_icon.png" style="height: 40px; "/></span>
              <span class="logo-lg"><img src="logos/sephora_logo.png" style="height: 20px;"/></span>
            </a>
		<?php }else{ ?>
            <!-- Logo Netwish -->
            <a href="index.php" class="logo">
              <span class="logo-mini"><img src="logos/netwish_icon.png" style="width: 70%; "/></span>
              <span class="logo-lg"><img src="logos/netwish.png" style="height: 35px;"/></span>
            </a>
		<?php } ?>
        
        <!-- Header Navbar: style can be found in header.less -->
        <nav class="navbar navbar-static-top" role="navigation">
          <!-- Sidebar toggle button-->
          <a href="#" class="sidebar-toggle" data-toggle="offcanvas" role="button">
            <span class="sr-only">Toggle navigation</span>
          </a>
          <div class="navbar-custom-menu">
            <ul class="nav navbar-nav">
              <!-- Messages: style can be found in dropdown.less-->
              <!-- User Account: style can be found in dropdown.less -->
              <li class="dropdown user user-menu">
                <a href="#" >
                  <img src="logos/fotosfera_logo.png" alt="Fotosfera" style="height:15px;">
                </a>
                <ul class="dropdown-menu">
                  <!-- User image -->
                  <li class="user-header">
                    <img src="dist/img/user2-160x160.jpg" class="img-circle" alt="User Image">
                    <p>
                      Vinicius Pinto - Desenvolvedor Web
                      <small>Membro desde Nov. 2015</small>
                    </p>
                  </li>
                  <!-- Menu Body -->
                  <li class="user-body">
                    <div class="col-xs-4 text-center">
                      <a href="#">Seguidores</a>
                    </div>
                    <div class="col-xs-4 text-center">
                      <a href="#">Vendas</a>
                    </div>
                    <div class="col-xs-4 text-center">
                      <a href="#">Amigos</a>
                    </div>
                  </li>
                  <!-- Menu Footer-->
                  <li class="user-footer">
                    <div class="pull-left">
                      <a href="#" class="btn btn-default btn-flat">Perfil</a>
                    </div>
                    <div class="pull-right">
                      <a href="#" class="btn btn-default btn-flat">Sair</a>
                    </div>
                  </li>
                </ul>
              </li>
            </ul>
          </div>
        </nav>
</header>

<?php include 'inc_menu_lateral.php' ?>
