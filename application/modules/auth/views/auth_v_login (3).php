<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title><?php echo $title; ?></title>
  <!-- Tell the browser to be responsive to screen width -->
  <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
  <!-- Bootstrap 3.3.7 -->
  <link rel="stylesheet" href="<?php echo site_url(); ?>assets/bower_components/bootstrap/dist/css/bootstrap.min.css">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="<?php echo site_url(); ?>assets/bower_components/font-awesome/css/font-awesome.min.css">
  <!-- Ionicons -->
  <link rel="stylesheet" href="<?php echo site_url(); ?>assets/bower_components/Ionicons/css/ionicons.min.css">
  <!-- Theme style -->
  <link rel="stylesheet" href="<?php echo site_url(); ?>assets/adminlte/css/AdminLTE.min.css">
  <!-- iCheck -->
  <link rel="stylesheet" href="<?php echo site_url(); ?>assets/plugins/iCheck/square/blue.css">

  <link href="<?php echo site_url(); ?>assets/bower_components/toastr/toastr.min.css" rel="stylesheet" type="text/css"/>

  <link href="<?php echo site_url(); ?>assets/bower_components/sweetalert/sweetalert.css" rel="stylesheet" type="text/css"/>

  <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
  <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
  <!--[if lt IE 9]>
  <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
  <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
  <![endif]-->

  <!-- Google Font -->
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,600,700,300italic,400italic,600italic">
</head>
<body class="hold-transition login-page">
<div class="login-box">
  <div class="login-logo">
    <a href="../../index2.html"><b>Admin</b>LTE</a>
  </div>
  <!-- /.login-logo -->
  <div class="login-box-body">
    <p class="login-box-msg">Sign in to start your session</p>

    <form action="#" method="post" id="loginForm" data-toggle="validator">
      <div class="form-group has-feedback">
        <input type="email" class="form-control" placeholder="Email" id="user_email" name="user_email">
        <span class="glyphicon glyphicon-envelope form-control-feedback"></span>
      </div>
      <div class="form-group has-feedback">
        <input type="password" class="form-control" placeholder="Password" id="user_pass" name="user_pass">
        <span class="glyphicon glyphicon-lock form-control-feedback"></span>
      </div>
      <div class="row">
        <div class="col-xs-8">
          <div class="checkbox icheck">
            <label>
              <input type="checkbox" name="remember" value="yes"> Remember Me
            </label>
          </div>
        </div>
        <!-- /.col -->
        <div class="col-xs-4">
          <button type="submit" id="btnLogin" class="btn btn-primary btn-block btn-flat" data-loading-text="<i class='fa fa-circle-o fa-spin'></i> .......">Sign In</button>
        </div>
        <!-- /.col -->
      </div>
    </form>

    <a href="#">I forgot my password</a><br>
    <a href="<?php echo site_url('auth/daftar'); ?>" class="text-center">Register a new membership</a>

  </div>
  <!-- /.login-box-body -->
</div>
<!-- /.login-box -->

<!-- jQuery 3 -->
<script src="<?php echo site_url(); ?>assets/bower_components/jquery/dist/jquery.min.js"></script>
<!-- Bootstrap 3.3.7 -->
<script src="<?php echo site_url(); ?>assets/bower_components/bootstrap/dist/js/bootstrap.min.js"></script>
<!-- iCheck -->
<script src="<?php echo site_url(); ?>assets/plugins/iCheck/icheck.min.js"></script>

<script src="<?php echo site_url(); ?>assets/bower_components/jquery-validate/jquery.validate.min.js"></script>

<!-- Toastr js -->
<script src="<?php echo site_url(); ?>assets/bower_components/toastr/toastr.min.js" type="text/javascript"></script>

<script src="<?php echo site_url(); ?>assets/bower_components/sweetalert/sweetalert.min.js" type="text/javascript"></script>

<script src="<?php echo site_url(); ?>assets/bower_components/cookie/js.cookie.js" type="text/javascript"></script>

<!-- Ditmet js -->
<script src="<?php echo site_url(); ?>assets/ditmet/ditmet.js"></script>

<script>
  $(function () {
    $('input').iCheck({
      checkboxClass: 'icheckbox_square-blue',
      radioClass: 'iradio_square-blue',
      increaseArea: '20%' // optional
    });
  });

  $(document).ready(function () {
      "use strict"; // Start of use strict

      jQuery.validator.addMethod("strictemail", function(value, element) {
              var valid = /^((([a-z]|\d|[!#\$%&'\*\+\-\/=\?\^_`{\|}~]|[\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF])+(\.([a-z]|\d|[!#\$%&'\*\+\-\/=\?\^_`{\|}~]|[\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF])+)*)|((\x22)((((\x20|\x09)*(\x0d\x0a))?(\x20|\x09)+)?(([\x01-\x08\x0b\x0c\x0e-\x1f\x7f]|\x21|[\x23-\x5b]|[\x5d-\x7e]|[\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF])|(\\([\x01-\x09\x0b\x0c\x0d-\x7f]|[\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF]))))*(((\x20|\x09)*(\x0d\x0a))?(\x20|\x09)+)?(\x22)))@((([a-z]|\d|[\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF])|(([a-z]|\d|[\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF])([a-z]|\d|-|\.|_|~|[\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF])*([a-z]|\d|[\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF])))\.)+(([a-z]|[\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF])|(([a-z]|[\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF])([a-z]|\d|-|\.|_|~|[\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF])*([a-z]|[\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF])))$/i.test(value);
              return valid;
          }, "Email tidak valid"
      );

      $( "#loginForm" ).validate( {
          // ignore: ".ignore",
          rules: {
              user_pass: {
                  required: true,
              },
              user_email: {
                  required: true,
                  email: true,
                  strictemail: true
              }
          },
          messages: {
              user_email: {
                  required: "Email tidak boleh kosong",
                  email: "Email tidak valid"
              },
              user_pass: {
                  required: "Passowrd tidak boleh kosong"
              }
          },
          tooltip_options: {
              user_email: { placement: 'left' }
          },
          // onkeyup: false,
          errorElement: "em",
          errorPlacement: function ( error, element ) {
              // Add the `help-block` class to the error element
              error.addClass( "help-block" );

              // Add `has-feedback` class to the parent div.form-group
              // in order to add icons to inputs
              element.parents( ".form-group" ).addClass( "has-feedback" );

              // if ( element.prop( "type" ) === "checkbox" ) {
              //     error.insertAfter( element.parent( "label" ) );
              // } else {
                  error.insertAfter( element );
              // }

              // Add the span element, if doesn't exists, and apply the icon classes to it.
              // if ( !element.next( "span" )[ 0 ] ) {
              //     $( "<span class='glyphicon glyphicon-remove form-control-feedback'></span>" ).insertAfter( element );
              // }
          },
          // success: function ( label, element ) {
          //     // Add the span element, if doesn't exists, and apply the icon classes to it.
          //     if ( !$( element ).next( "span" )[ 0 ] ) {
          //         $( "<span class='glyphicon glyphicon-ok form-control-feedback'></span>" ).insertAfter( $( element ) );
          //     }
          // },
          highlight: function ( element, errorClass, validClass ) {
              $( element ).parents( ".form-group" ).addClass( "has-error" ).removeClass( "has-success" );
              // $( element ).next( "span" ).addClass( "glyphicon-remove" ).removeClass( "glyphicon-ok" );
          },
          unhighlight: function ( element, errorClass, validClass ) {
              $( element ).parents( ".form-group" ).addClass( "has-success" ).removeClass( "has-error" );
              // $( element ).next( "span" ).addClass( "glyphicon-ok" ).removeClass( "glyphicon-remove" );
          },
          submitHandler: function () {
              // alert( "submitted!" );
              var formData = new FormData($('#loginForm')[0]);
              $.ajax({
                  url : '<?php echo site_url(); ?>api/login',
                  type: "POST",
                  data: formData,
                  contentType: false,
                  processData: false,
                  dataType: "JSON",
                  beforeSend:function(data)
                  {
                  },
                  success: function(data)
                  {

                      if (data.status === true) {

                          Cookies.set('token',data.data.token,{ expires: 30*30 });                //habis dalam 1 hari

                          notif_toast("Selamat Datang "+data.data.user_fullname, "Berhasil, redirect ...", "success");

                          $("#loginForm")[0].reset();

                          setTimeout(function() {
                              // xhr.setRequestHeader("Authorization", data.data.token);
                              location.href = '<?php echo site_url(); ?>home';
                          }, 2000);

                      } else {
                          notif_swal("Gagal masuk", data.message, "error");   
                      }

                  },
                  error: function (jqXHR, textStatus, errorThrown)
                  {

                  }
              });

          }                    
      } );

  });

  $('#btnLogin').on('click', function() {
      var $this = $(this);
      $this.button('loading');
      setTimeout(function() {
         $this.button('reset');
     }, 1500);
  });

</script>
</body>
</html>
