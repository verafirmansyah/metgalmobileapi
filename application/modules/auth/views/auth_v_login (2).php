<!DOCTYPE html>
<html lang="en">
    
<!-- Mirrored from adminpage.thememinister.com/preview_pages/theme/adminpage_v2.0/login.html by HTTrack Website Copier/3.x [XR&CO'2014], Sun, 30 Jul 2017 12:23:00 GMT -->
<head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
        <title><?php echo $title; ?></title>

        <!-- Favicon and touch icons -->
        <link rel="shortcut icon" href="<?php echo site_url(); ?>assets/dist/img/ico/favicon.png" type="image/x-icon">
        <link rel="apple-touch-icon" type="image/x-icon" href="<?php echo site_url(); ?>assets/dist/img/ico/apple-touch-icon-57-precomposed.png">
        <link rel="apple-touch-icon" type="image/x-icon" sizes="72x72" href="<?php echo site_url(); ?>assets/dist/img/ico/apple-touch-icon-72-precomposed.png">
        <link rel="apple-touch-icon" type="image/x-icon" sizes="114x114" href="<?php echo site_url(); ?>assets/dist/img/ico/apple-touch-icon-114-precomposed.png">
        <link rel="apple-touch-icon" type="image/x-icon" sizes="144x144" href="<?php echo site_url(); ?>assets/dist/img/ico/apple-touch-icon-144-precomposed.png">

        <!-- Bootstrap -->
        <link href="assets/bootstrap/css/bootstrap.min.css" rel="stylesheet" type="text/css"/>
        <!-- Bootstrap rtl -->
        <!--<link href="assets/bootstrap-rtl/bootstrap-rtl.min.css" rel="stylesheet" type="text/css"/>-->
        <!-- Pe-icon-7-stroke -->
        <link href="<?php echo site_url(); ?>assets/pe-icon-7-stroke/css/pe-icon-7-stroke.css" rel="stylesheet" type="text/css"/>
        <link href="<?php echo site_url(); ?>assets/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css"/>
        <!-- Theme style -->
        <link href="<?php echo site_url(); ?>assets/dist/css/component_ui.min.css" rel="stylesheet" type="text/css"/>
        <!-- Theme style rtl -->
        <!--<link href="<?php echo site_url(); ?>assets/dist/css/component_ui_rtl.css" rel="stylesheet" type="text/css"/>-->
        <!-- Custom css -->
        <link href="<?php echo site_url(); ?>assets/dist/css/custom.css" rel="stylesheet" type="text/css"/>

        <link href="<?php echo site_url(); ?>assets/plugins/toastr/toastr.min.css" rel="stylesheet" type="text/css"/>

        <link href="<?php echo site_url(); ?>assets/plugins/sweetalert/sweetalert.css" rel="stylesheet" type="text/css"/>

    </head>
    <body>
        <!-- Content Wrapper -->
        <div class="login-wrapper">
            <div class="container-center">
                <div class="panel panel-bd">
                    <div class="panel-heading">
                        <div class="view-header">
                            <div class="header-icon">
                                <i class="pe-7s-unlock"></i>
                            </div>
                            <div class="header-title">
                                <h3>Login</h3>
                                <small><strong><br>Isi dengan email yang telah diaktivasi.</strong></small>
                            </div>
                        </div>
                    </div>
                    <div class="panel-body">
                        <form action="<?php echo site_url('auth'); ?>" id="loginForm" data-toggle="validator">
                            <div class="form-group">
                                <label class="control-label">Email</label>
                                <input type="email" class="form-control" name="user_email" id="user_email" placeholder="Diisi dengan alamat email">
                            </div>
                            <div class="form-group">
                                <label class="control-label">Password</label>
                                <input type="password" class="form-control" name="user_pass" id="user_pass" placeholder="******">
                            </div>
                            <div>
                                <button type="submit" id="btnLogin" class="btn btn-primary pull-right" data-loading-text="<i class='fa fa-circle-o-notch fa-spin'></i> Login Proses">Login</button>
                                <div class="checkbox checkbox-success">
                                    <input id="checkbox3" type="checkbox" name="remember" value="yes">
                                    <label for="checkbox3">Login otomatis</label>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
                <div id="bottom_text">
                    Don't have an account? <a href="<?php echo site_url(); ?>auth/daftar">Sign Up</a><br>
                    Remind <a href="forget_password.html">Password</a>
                </div>

            </div>
        </div>
        <!-- /.content-wrapper -->
        <!-- jQuery -->
        <script src="<?php echo site_url(); ?>assets/plugins/jQuery/jquery-1.12.4.min.js" type="text/javascript"></script>
        <!-- bootstrap js -->
        <script src="<?php echo site_url(); ?>assets/bootstrap/js/bootstrap.min.js" type="text/javascript"></script>

        <!-- Toastr js -->
        <script src="<?php echo site_url(); ?>assets/plugins/toastr/toastr.min.js" type="text/javascript"></script>

        <script src="<?php echo site_url(); ?>assets/plugins/jquery-validate/jquery.validate.min.js"></script>

        <script src="<?php echo site_url(); ?>assets/plugins/sweetalert/sweetalert.min.js" type="text/javascript"></script>
        
        <script src="<?php echo site_url(); ?>assets/plugins/cookie/js.cookie.js" type="text/javascript"></script>

        <!-- Ditmet/notif js -->
        <script src="<?php echo site_url(); ?>assets/ditmet/notif.js"></script>

        <script type="text/javascript">

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
                            email: "Email tidak valid",
                            remote: jQuery.validator.format("Email {0} belum diaktivasi")
                        },
                        user_pass: {
                            required: "Passowrd tidak boleh kosong",
                            minlength: "Password minimal <?php echo $this->config->item("min_password"); ?> karakter"
                        }
                    },
                    // onkeyup: false,
                    errorElement: "div",
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

                        alert(element);

                        // Add the span element, if doesn't exists, and apply the icon classes to it.
                        if ( !element.next( "span" )[ 0 ] ) {
                            $( "<span class='glyphicon glyphicon-remove form-control-feedback'></span>" ).insertAfter( element );
                        }
                    },
                    success: function ( label, element ) {
                        // Add the span element, if doesn't exists, and apply the icon classes to it.
                        if ( !$( element ).next( "span" )[ 0 ] ) {
                            $( "<span class='glyphicon glyphicon-ok form-control-feedback'></span>" ).insertAfter( $( element ) );
                        }
                    },
                    highlight: function ( element, errorClass, validClass ) {
                        $( element ).parents( ".form-group" ).addClass( "has-error" ).removeClass( "has-success" );
                        $( element ).next( "span" ).addClass( "glyphicon-remove" ).removeClass( "glyphicon-ok" );
                    },
                    unhighlight: function ( element, errorClass, validClass ) {
                        $( element ).parents( ".form-group" ).addClass( "has-success" ).removeClass( "has-error" );
                        $( element ).next( "span" ).addClass( "glyphicon-ok" ).removeClass( "glyphicon-remove" );
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
                                    notif_swal(data.message, "Gagal masuk", "error");   
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