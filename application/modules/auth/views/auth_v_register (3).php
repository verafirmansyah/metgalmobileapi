<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title><?php echo $this->config->item('dir_template'); ?></title>
  <!-- Tell the browser to be responsive to screen width -->
  <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
  <!-- Bootstrap 3.3.7 -->
  <!-- <link rel="stylesheet" href="<?php echo $this->config->item('dir_template'); ?>bootstrap/css/bootstrap.min.css"> -->
  <!-- Font Awesome -->
  <!-- <link rel="stylesheet" href="<?php echo site_url(); ?>assets/AdminLTE/font-awesome/css/font-awesome.min.css"> -->
  <!-- Theme style -->
  <!-- <link rel="stylesheet" href="<?php echo site_url(); ?>assets/AdminLTE/dist/css/AdminLTE.min.css"> -->
  <!-- iCheck -->
  <!-- <link rel="stylesheet" href="<?php echo site_url(); ?>assets/AdminLTE/plugins/iCheck/square/blue.css"> -->

  <!-- Bootstrap 3.3.7 -->
  <link rel="stylesheet" href="<?php echo site_url(); ?>assets/<?php echo $this->config->item('template_version'); ?>/bower_components/bootstrap/dist/css/bootstrap.min.css">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="<?php echo site_url(); ?>assets/<?php echo $this->config->item('template_version'); ?>/bower_components/font-awesome/css/font-awesome.min.css">
  <!-- Theme style -->
  <link rel="stylesheet" href="<?php echo site_url(); ?>assets/<?php echo $this->config->item('template_version'); ?>/dist/css/AdminLTE.min.css">
  <!-- iCheck -->
  <link rel="stylesheet" href="<?php echo site_url(); ?>assets/<?php echo $this->config->item('template_version'); ?>/plugins/iCheck/square/_all.css">

  <link href="<?php echo site_url(); ?>assets/plugins/toastr/toastr.min.css" rel="stylesheet" type="text/css"/>

  <link href="<?php echo site_url(); ?>assets/plugins/sweetalert/sweetalert.css" rel="stylesheet" type="text/css"/>

  <link rel="stylesheet" type="text/css" href="<?php echo site_url(); ?>assets/plugins/pwstrength/demo/style.css">

  <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
  <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
  <!--[if lt IE 9]>
  <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
  <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
  <![endif]-->

  <!-- Google Font -->
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,600,700,300italic,400italic,600italic">
</head>
<body class="hold-transition register-page">
<div class="register-box">
  <div class="register-logo">
    <a href="<?php echo site_url(); ?>"><b>Admin</b>LTE</a>
  </div>

  <div class="register-box-body">
    <p class="login-box-msg">Register a new membership</p>

    <form action="#" method="post" id="regForm" data-toggle="validator">
      <div class="form-group has-feedback">
        <input type="text" class="form-control" placeholder="Full name" name="user_fullname" id="user_fullname">
        <span class="glyphicon glyphicon-user form-control-feedback"></span>
      </div>
      <div class="form-group has-feedback">
        <input type="email" class="form-control" placeholder="Email" name="user_email" id="user_email">
        <span class="glyphicon glyphicon-envelope form-control-feedback"></span>
      </div>
      <div class="form-group has-feedback">
        <input type="password" class="form-control" placeholder="Password" name="user_pass" id="user_pass" data-indicator="pwindicator">
        <span class="glyphicon glyphicon-lock form-control-feedback"></span>
      </div>
      <div id="pwindicator">
          <div class="bar"></div>
          <div class="label"></div>
      </div>                            

      <div class="form-group has-feedback">
        <input type="password" class="form-control" placeholder="Retype password" name="user_rpass" id="user_rpass">
        <span class="glyphicon glyphicon-log-in form-control-feedback"></span>
      </div>
      <div class="row form-group has-feedback">
        <div class="col-xs-8">
          <div class="checkbox icheck">
            <label>
              <input type="checkbox" name="agree" value="agree"> I agree to the <a href="#">terms</a>
            </label>
          </div>
        </div>
        <!-- /.col -->
        <div class="col-xs-4">
          <button type="submit" id="btnSimpan" class="btn btn-primary btn-block btn-flat pull-right"  data-loading-text="<i class='fa fa-circle-o fa-spin'></i> .......">Register</button>
        </div>
        <!-- /.col -->
      </div>
    </form>

    <a href="<?php echo site_url('auth'); ?>" class="text-center">I already have a membership</a>
  </div>
  <!-- /.form-box -->
</div>
<!-- /.register-box -->

<!-- jQuery 3 -->
<!-- <script src="<?php echo site_url(); ?>assets/AdminLTE/plugins/jQuery/jQuery-2.1.4.min.js"></script> -->
<!-- Bootstrap 3.3.7 -->
<!-- <script src="<?php echo site_url(); ?>assets/AdminLTE/bootstrap/js/bootstrap.min.js"></script> -->
<!-- iCheck -->
<!-- <script src="<?php echo site_url(); ?>assets/AdminLTE/plugins/iCheck/icheck.min.js"></script> -->

<!-- jQuery 3 -->
<script src="<?php echo site_url(); ?>assets/<?php echo $this->config->item('template_version'); ?>/bower_components/jquery/dist/jquery.min.js"></script>
<!-- Bootstrap 3.3.7 -->
<script src="<?php echo site_url(); ?>assets/<?php echo $this->config->item('template_version'); ?>/bower_components/bootstrap/dist/js/bootstrap.min.js"></script>
<!-- iCheck -->
<script src="<?php echo site_url(); ?>assets/<?php echo $this->config->item('template_version'); ?>/plugins/iCheck/icheck.min.js"></script>


<script src="<?php echo site_url(); ?>assets/plugins/jquery-validate/jquery.validate.min.js"></script>

<!-- Toastr js -->
<script src="<?php echo site_url(); ?>assets/plugins/toastr/toastr.min.js" type="text/javascript"></script>

<script src="<?php echo site_url(); ?>assets/plugins/sweetalert/sweetalert.min.js" type="text/javascript"></script>

<script src="<?php echo site_url(); ?>assets/plugins/cookie/js.cookie.js" type="text/javascript"></script>

<script src="<?php echo site_url(); ?>assets/plugins/pwstrength/jquery.pwstrength.js"></script>

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

      // function randomNumber(min, max) {
      //     return Math.floor(Math.random() * (max - min + 1) + min);
      // }
      // $('#captchaOperation').html([randomNumber(1, 100), '+', randomNumber(1, 200), '='].join(' '));

      $('#user_pass').pwstrength();
      // $('#user_pass').tooltip({'trigger':'focus', 'title': 'minimal : <?php echo $this->config->item("min_password"); ?> karakter, 1 huruf kecil, 1 huruf kapital dan 1 angka.'});

      jQuery.validator.addMethod("strictemail", function(value, element) {
              var valid = /^((([a-z]|\d|[!#\$%&'\*\+\-\/=\?\^_`{\|}~]|[\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF])+(\.([a-z]|\d|[!#\$%&'\*\+\-\/=\?\^_`{\|}~]|[\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF])+)*)|((\x22)((((\x20|\x09)*(\x0d\x0a))?(\x20|\x09)+)?(([\x01-\x08\x0b\x0c\x0e-\x1f\x7f]|\x21|[\x23-\x5b]|[\x5d-\x7e]|[\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF])|(\\([\x01-\x09\x0b\x0c\x0d-\x7f]|[\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF]))))*(((\x20|\x09)*(\x0d\x0a))?(\x20|\x09)+)?(\x22)))@((([a-z]|\d|[\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF])|(([a-z]|\d|[\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF])([a-z]|\d|-|\.|_|~|[\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF])*([a-z]|\d|[\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF])))\.)+(([a-z]|[\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF])|(([a-z]|[\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF])([a-z]|\d|-|\.|_|~|[\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF])*([a-z]|[\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF])))$/i.test(value);
              return valid;
          }, "Email tidak valid"
      );

      jQuery.validator.addMethod("strictpassword", function(value, element) {
              return this.optional(element) || /^(?=.*\d)(?=.*[a-z])(?=.*[A-Z]).{<?php echo $this->config->item("min_password"); ?>,20}$/i.test(value);
          }, "Password min. 1 kapital, 1 hurup kecil dan 1 angka"
      );

      $( "#regForm" ).validate( {
          // ignore: ".ignore",
          rules: {
              user_fullname: "required",
              user_pass: {
                  required: true,
                  minlength: <?php echo $this->config->item("min_password"); ?>,
                  strictpassword: true
              },
              user_rpass: {
                  required: true,
                  minlength: <?php echo $this->config->item("min_password"); ?>,
                  strictpassword: true,
                  equalTo: "#user_pass"
              },
              user_email: {
                  required: true,
                  email: true,
                  strictemail: true,
                  remote: {
                      url: "<?php echo site_url(); ?>api/daftar_cek_email",
                      type: "post"
                  }
              },
              // hiddenRecaptcha: {
              //     required: function () {
              //         if (grecaptcha.getResponse() == '') {
              //             return true;
              //         } else {
              //             return false;
              //         }
              //     }
              // },

              agree: "required"
          },
          messages: {
              user_fullname: "Nama lengkap tidak boleh kosong",
              user_email: {
                  required: "Email tidak boleh kosong",
                  email: "Email tidak valid",
                  remote: jQuery.validator.format("Email {0} telah terdaftar")
              },
              user_pass: {
                  required: "Passowrd tidak boleh kosong",
                  minlength: "Password minimal <?php echo $this->config->item("min_password"); ?> karakter"
              },
              user_rpass: {
                  required: "Password tidak boleh kosong",
                  minlength: "Password minimal <?php echo $this->config->item("min_password"); ?> karakter",
                  equalTo: "Password tidak sama"
              },
              agree: ""
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
              //     // error.insertAfter( element.parent( "label" ) );
              //     error.insertAfter( element.parent( ".checkbox" ) );
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
              var formData = new FormData($('#regForm')[0]);
              $.ajax({
                  url : '<?php echo site_url(); ?>api/daftar',
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
                      notif_swal(data.message, "Periksa email untuk mengaktifasikan akun", "success");
                      $("#regForm")[0].reset();
                  },
                  error: function (jqXHR, textStatus, errorThrown)
                  {

                  }
              });

          }                    
      } );

  });

  $('#btnSimpan').on('click', function() {
      var $this = $(this);
      $this.button('loading');
      setTimeout(function() {
         $this.button('reset');
     }, 1500);
  });

</script>
</body>
</html>
