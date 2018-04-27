<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title><?php echo $title;?></title>
  <!-- Tell the browser to be responsive to screen width -->
  <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">

  <!-- Bootstrap 3.3.7 -->
  <!-- <link rel="stylesheet" href="<?php echo site_url();?>assets/AdminLTE/bootstrap/css/bootstrap.min.css"> -->
  <!-- Font Awesome -->
  <!-- <link rel="stylesheet" href="<?php echo site_url();?>assets/AdminLTE/font-awesome/css/font-awesome.min.css"> -->
  <!-- Theme style -->
  <!-- <link rel="stylesheet" href="<?php echo site_url();?>assets/AdminLTE/dist/css/AdminLTE.min.css"> -->
  <!-- <link rel="stylesheet" href="<?php echo site_url();?>assets/AdminLTE/dist/css/skins/_all-skins.min.css"> -->
  <!-- <link rel="stylesheet" href="<?php echo site_url();?>assets/AdminLTE/dist/css/skins/skin-blue.min.css"> -->
  <!-- iCheck -->
  <!-- <link rel="stylesheet" href="<?php echo site_url();?>assets/AdminLTE/plugins/iCheck/square/blue.css"> -->

  <!-- Bootstrap 3.3.7 -->
  <link rel="stylesheet" href="<?php echo site_url();?>assets/<?php echo $this->config->item('template_version');?>/bower_components/bootstrap/dist/css/bootstrap.min.css">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="<?php echo site_url();?>assets/<?php echo $this->config->item('template_version');?>/bower_components/font-awesome/css/font-awesome.min.css">
  <!-- Theme style -->
  <link rel="stylesheet" href="<?php echo site_url();?>assets/<?php echo $this->config->item('template_version');?>/dist/css/AdminLTE.min.css">

  <link rel="stylesheet" href="<?php echo site_url();?>assets/<?php echo $this->config->item('template_version');?>/dist/css/skins/_all-skins.min.css">

  <link href="<?php echo site_url();?>assets/plugins/toastr/toastr.min.css" rel="stylesheet" type="text/css"/>

  <link href="<?php echo site_url();?>assets/plugins/sweetalert/sweetalert.css" rel="stylesheet" type="text/css"/>

  <link href="<?php echo site_url();?>assets/plugins/animsition/css/animsition.min.css" rel="stylesheet" type="text/css"/>

  <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
  <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
  <!--[if lt IE 9]>
  <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
  <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
  <![endif]-->

  <!-- Google Font -->
  <!-- <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,600,700,300italic,400italic,600italic"> -->

<?php if ($template_atas) {$this->load->view($template_atas);}?>


</head>
<body class="hold-transition skin-blue sidebar-mini">
<div class="wrapper animsition">

  <header class="main-header">
    <!-- Logo -->
    <a href="<?php echo site_url('home');?>" class="logo">
      <!-- mini logo for sidebar mini 50x50 pixels -->
      <span class="logo-mini"><b>A</b>LT</span>
      <!-- logo for regular state and mobile devices -->
      <span class="logo-lg"><b>DITMET</b></span>
    </a>
    <!-- Header Navbar: style can be found in header.less -->
    <nav class="navbar navbar-static-top">
      <!-- Sidebar toggle button-->
      <a href="#" class="sidebar-toggle" data-toggle="push-menu" role="button">
        <span class="sr-only">Toggle navigation</span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
      </a>

      <div class="navbar-custom-menu">
        <ul class="nav navbar-nav">
          <!-- User Account: style can be found in dropdown.less -->
          <li class="dropdown user user-menu">
            <a href="#" class="dropdown-toggle" data-toggle="dropdown">
              <img src="<?php echo site_url();?>assets/<?php echo $this->config->item('template_version');?>/dist/img/user2-160x160.jpg" class="user-image" alt="User Image">
              <span class="hidden-xs"><?php echo $user_fullname;?></span>
            </a>
            <ul class="dropdown-menu">
              <!-- User image -->
              <li class="user-header">
                <img src="<?php echo site_url();?>assets/<?php echo $this->config->item('template_version');?>/dist/img/user2-160x160.jpg" class="img-circle" alt="User Image">

                <p>
<?php echo $user_email;?>
                  <small>Member since Nov. 2012</small>
                </p>
              </li>
              <!-- Menu Footer-->
              <li class="user-footer">
                <div class="pull-left">
                  <a href="#" class="btn btn-default btn-flat">Profile</a>
                </div>
                <div class="pull-right">
                  <a href="<?php echo site_url('logout');?>" class="btn btn-default btn-flat">Sign out</a>
                </div>
              </li>
            </ul>
          </li>
        </ul>
      </div>
    </nav>
  </header>
  <!-- Left side column. contains the logo and sidebar -->
  <aside class="main-sidebar">
    <!-- sidebar: style can be found in sidebar.less -->
    <section class="sidebar">
      <!-- search form -->
      <form action="#" method="get" class="sidebar-form">
        <div class="input-group">
          <input type="text" name="q" class="form-control" placeholder="Search...">
          <span class="input-group-btn">
                <button type="submit" name="search" id="search-btn" class="btn btn-flat"><i class="fa fa-search"></i>
                </button>
              </span>
        </div>
      </form>
      <!-- /.search form -->
      <!-- sidebar menu: : style can be found in sidebar.less -->
      <ul class="sidebar-menu" data-widget="tree">
        <li class="header">MAIN NAVIGATION</li>
        <li><a href="<?php echo site_url('home');?>"><i class="fa fa-dashboard text-aqua"></i> <span>Dashboard</span></a></li>

        <!-- ====================================================== LEFT MENU ========================================= -->

<?php echo $this->menu->build_menu($group_id);?>

<?php if ($group_id == 1) {?>

				        <li class="header">SETTINGS</li>
				        <li><a href="<?php echo site_url('setting/users');?>"><i class="fa fa-user text-aqua"></i> <span>Daftar User</span></a></li>
				        <li><a href="<?php echo site_url('setting/groups');?>"><i class="fa fa-users text-yellow"></i> <span>Daftar Group</span></a></li>
				        <li><a href="<?php echo site_url('setting/menu');?>"><i class="fa fa-list text-red"></i> <span>Daftar Menu</span></a></li>

	<?php }?>

        <li class="header">MY DESK</li>
        <!-- <li><a href="#"><i class="fa fa-user text-aqua"></i> <span>Profil</span></a></li> -->
        <li><a href="<?php echo site_url('mydesk/changepass');?>"><i class="fa fa-circle-o text-red"></i> <span>Ganti Password</span></a></li>
        <li><a href="<?php echo site_url('logout');?>"><i class="fa fa-power-off text-yellow"></i> <span>Sign Out</span></a></li>
        <li class="header">HELPDESK</li>
        <li><a href="#"><i class="fa fa-book"></i> <span>Panduan Aplikasi</span></a></li>
        <li><a href="#"><i class="fa fa-circle-o text-red"></i> <span>Important</span></a></li>
        <li><a href="#"><i class="fa fa-circle-o text-yellow"></i> <span>Warning</span></a></li>
        <li><a href="#"><i class="fa fa-circle-o text-aqua"></i> <span>Information</span></a></li>

        <!-- ====================================================== LEFT MENU ========================================= -->

      </ul>
    </section>
    <!-- /.sidebar -->
  </aside>

  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">

<?php if ($isi) {$this->load->view($isi);}?>

  </div>
  <!-- /.content-wrapper -->
  <footer class="main-footer">
    <div class="pull-right hidden-xs">
      <b>Version</b> 1.0
    </div>
    <strong>Copyright &copy; 2017-1018 Designed and Developed By Vera Firmansyah.</strong> All rights
    reserved.
  </footer>


</div>
<!-- ./wrapper -->

<!-- <script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.6.4/jquery.min.js"></script> -->
<!-- <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script> -->
<!-- <script src="<?php echo site_url();?>assets/plugins/jQuery/jquery-1.12.4.min.js"></script> -->

<!-- jQuery 3 -->
<script src="<?php echo site_url();?>assets/<?php echo $this->config->item('template_version');?>/bower_components/jquery/dist/jquery.min.js"></script>
<!-- Bootstrap 3.3.7 -->
<script src="<?php echo site_url();?>assets/<?php echo $this->config->item('template_version');?>/bower_components/bootstrap/dist/js/bootstrap.min.js"></script>

<!-- <script src="<?php echo site_url();?>assets/plugins/metisMenu/metisMenu.min.js"></script> -->

<script src="<?php echo site_url();?>assets/<?php echo $this->config->item('template_version');?>/bower_components/jquery-slimscroll/jquery.slimscroll.min.js"></script>

<script src="<?php echo site_url();?>assets/<?php echo $this->config->item('template_version');?>/bower_components/fastclick/lib/fastclick.js"></script>

<script src="<?php echo site_url();?>assets/<?php echo $this->config->item('template_version');?>/dist/js/adminlte.min.js"></script>

<!-- jQuery 3 -->
<!-- <script src="<?php echo site_url();?>assets/AdminLTE/plugins/jQuery/jQuery-2.1.4.min.js"></script> -->
<!-- Bootstrap 3.3.7 -->
<!-- <script src="<?php echo site_url();?>assets/AdminLTE/bootstrap/js/bootstrap.min.js"></script> -->
<!-- SlimScroll -->
<!-- <script src="<?php echo site_url();?>assets/AdminLTE/plugins/slimScroll/jquery.slimscroll.min.js"></script> -->
<!-- FastClick -->
<!-- <script src="<?php echo site_url();?>assets/AdminLTE/plugins/fastclick/fastclick.min.js"></script> -->
<!-- animsition js -->
<!-- AdminLTE App -->
<!-- <script src="<?php echo site_url();?>assets/AdminLTE/dist/js/app.min.js"></script> -->

<script src="<?php echo site_url();?>assets/plugins/animsition/js/animsition.min.js" type="text/javascript"></script>

<!-- Toastr js -->
<script src="<?php echo site_url();?>assets/plugins/toastr/toastr.min.js" type="text/javascript"></script>

<script src="<?php echo site_url();?>assets/plugins/sweetalert/sweetalert.min.js" type="text/javascript"></script>

<script src="<?php echo site_url();?>assets/plugins/cookie/js.cookie.js" type="text/javascript"></script>

<!-- Ditmet js -->
<script src="<?php echo site_url();?>assets/ditmet/ditmet.js"></script>

<!-- <script src="<?php echo site_url();?>assets/plugins/styleSwitcher/jQuery.style.switcher.min.js"></script> -->

<?php if ($template_bawah) {$this->load->view($template_bawah);}?>
</body>
</html>
