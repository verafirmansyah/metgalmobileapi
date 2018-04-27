<!DOCTYPE html>
<html lang="en">
    
<!-- Mirrored from adminpage.thememinister.com/preview_pages/theme/adminpage_v2.0/register.html by HTTrack Website Copier/3.x [XR&CO'2014], Sun, 30 Jul 2017 12:23:24 GMT -->
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
        <link href="<?php echo site_url(); ?>assets/bootstrap/css/bootstrap.min.css" rel="stylesheet" type="text/css"/>
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

        <link rel="stylesheet" type="text/css" href="<?php echo site_url(); ?>assets/plugins/pwstrength/demo/style.css">

    </head>
    <body>
        <!-- Content Wrapper -->
        <div class="register-wrapper">
            <div class="container-center lg">
                <div class="panel panel-bd">
                    <div class="panel-heading">
                        <div class="view-header">
                            <div class="header-icon">
                                <i class="pe-7s-pen"></i>
                            </div>
                            <div class="header-title">
                                <h3>Pendaftaran</h3>
                                <small><strong><br>Isi data dengan lengkap dan benar.</strong></small>
                            </div>
                        </div>
                    </div>
                    <div class="panel-body">
                        <form action="<?php echo site_url('auth/daftar'); ?>" id="regForm" data-toggle="validator">
                            <div class="form-group">
                                <label class="control-label">Nama Lengkap</label>
                                <input type="text" class="form-control" name="user_fullname" id="user_fullname" placeholder="Diisi dengan Nama Lengkap">
                            </div>
                            <div class="form-group">
                                <label class="control-label">Email</label>
                                <input type="email" class="form-control" name="user_email" id="user_email" placeholder="Diisi dengan alamat email">
                            </div>
                            <div class="form-group">
                                <label class="control-label">Password</label>
                                <input type="password" class="form-control" name="user_pass" id="user_pass" placeholder="******" data-indicator="pwindicator">
                                <div id="pwindicator">
                                    <div class="bar"></div>
                                    <div class="label"></div>
                                </div>                            
                            </div>
                            <div class="form-group">
                                <label class="control-label">Repeat Password</label>
                                <input type="password" class="form-control" name="user_rpass" id="user_rpass" placeholder="******">
                            </div>
<!-- 
                            <div class="form-group">
                                <label control-label" id="captchaOperation"></label>
                                <input type="text" class="form-control" name="captcha" />
                            </div>
 -->

<!--                             <div class="g-recaptcha" data-sitekey="6Lc_LS4UAAAAAB-SmEQOFuvzwcZEdGOSn8sN50Vw"></div>
                            <input type="hidden" class="hiddenRecaptcha required" name="hiddenRecaptcha" id="hiddenRecaptcha">
 -->
                            <div class="form-group">
                                <label>
                                    <input type="checkbox" class="form-check-input" name="agree" value="agree">
                                    Syarat dan ketentuan berlaku
                                </label>
                            </div>

                            <div>
                                <button type="submit" id="btnSimpan" class="btn btn-primary pull-right" data-loading-text="<i class='fa fa-circle-o-notch fa-spin'></i> Sedang Proses">Register</button>
                                <a href="<?php echo site_url(); ?>auth" class="btn btn-success pull-right m-r-5">Login</a>
                            </div>
                        </form>
                    </div>
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

        <script src="<?php echo site_url(); ?>assets/plugins/pwstrength/jquery.pwstrength.js"></script>
        
        <!-- Ditmet/notif js -->
        <script src="<?php echo site_url(); ?>assets/ditmet/notif.js"></script>
        
        <!-- <script src="https://www.google.com/recaptcha/api.js" async defer></script> -->

        <script type="text/javascript">

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
                        agree: " "
                    },
                    // onkeyup: false,
                    errorElement: "em",
                    errorPlacement: function ( error, element ) {
                        // Add the `help-block` class to the error element
                        error.addClass( "help-block" );

                        // Add `has-feedback` class to the parent div.form-group
                        // in order to add icons to inputs
                        element.parents( ".form-group" ).addClass( "has-feedback" );

                        if ( element.prop( "type" ) === "checkbox" ) {
                            error.insertAfter( element.parent( "label" ) );
                        } else {
                            error.insertAfter( element );
                        }

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

            // function recaptchaCallback() {
            //     $('#hiddenRecaptcha').valid();
            // };

            // $(document).ready(function(){
            //     $('input[name="user_email"]').blur(function(){
            //         var txt = $(this);
            //         var user_email = txt.val();
            //         $.ajax({
            //             type: "POST",
            //             url: "<?php echo site_url(); ?>api/daftar_cek_email",
            //             data: { user_email: user_email },

            //         }).done(function(res) {
            //             // alert(res);
            //             if (res.status === true){
            //                 notif_toast(res.message, "Daftar Akun", "warning");
            //             //     txt.removeClass("valid").addClass("invalid");
            //             // } else {
            //             //     txt.removeClass("invalid").addClass("valid");

            //                 $('input[name="user_email"]').parents(".form-group").addClass("has-error").removeClass("has-success");
            //                 $('input[name="user_email"]').next("span").addClass("glyphicon-remove").removeClass("glyphicon-ok");
            //             }

            //         }).fail(function(res) {


            //         });
            //     });
            // });


        </script>

    </body>

<!-- Mirrored from adminpage.thememinister.com/preview_pages/theme/adminpage_v2.0/register.html by HTTrack Website Copier/3.x [XR&CO'2014], Sun, 30 Jul 2017 12:23:24 GMT -->
</html>