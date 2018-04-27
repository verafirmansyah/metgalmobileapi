<!DOCTYPE html>
<html lang="en">
<head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="description" content="">
        <meta name="author" content="">
        <title><?php echo $title; ?></title>
        <!-- FEVICON AND TOUCH ICON -->
        <link rel="shortcut icon" href="<?php echo site_url(); ?>assets/dist/img/ico/favicon.png" type="image/x-icon">
        <link rel="apple-touch-icon" type="image/x-icon" href="<?php echo site_url(); ?>assets/dist/img/ico/apple-touch-icon-57-precomposed.png">
        <link rel="apple-touch-icon" type="image/x-icon" sizes="72x72" href="<?php echo site_url(); ?>assets/dist/img/ico/apple-touch-icon-72-precomposed.png">
        <link rel="apple-touch-icon" type="image/x-icon" sizes="114x114" href="<?php echo site_url(); ?>assets/dist/img/ico/apple-touch-icon-114-precomposed.png">
        <link rel="apple-touch-icon" type="image/x-icon" sizes="144x144" href="<?php echo site_url(); ?>assets/dist/img/ico/apple-touch-icon-144-precomposed.png">
        <!-- STATRT GLOBAL MANDATORY STYLE -->
        <link href="<?php echo site_url(); ?>assets/dist/css/base.css" rel="stylesheet" type="text/css"/>
        <!-- START PAGE LABEL PLUGINS --> 
        <!-- START THEME LAYOUT STYLE -->
        <link href="<?php echo site_url(); ?>assets/dist/css/component_ui.min.css" rel="stylesheet" type="text/css"/>
        <link id="defaultTheme" href="<?php echo site_url(); ?>assets/dist/css/skins/skin-dark-1.min.css" rel="stylesheet" type="text/css"/>
        <link href="<?php echo site_url(); ?>assets/dist/css/custom.css" rel="stylesheet" type="text/css"/>
        <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
        <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
        <!--[if lt IE 9]>
            <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
            <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
        <![endif]-->
    </head>
    <body>
        <div id="wrapper" class="wrapper animsition">
            <!-- Navigation -->
            <nav class="navbar navbar-fixed-top" role="navigation">
                <div class="navbar-header">
                    <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                        <span class="sr-only">Toggle navigation</span>
                        <i class="material-icons">apps</i>
                    </button>
                    <a class="navbar-brand" href="index.html">
                        <img class="main-logo" src="<?php echo site_url(); ?>assets/dist/img/light-logo.png" alt="">
                        <!--<span>AdminPage</span>-->
                    </a>
                </div>
                <div class="nav-container">
                    <!-- /.navbar-header -->
                    <ul class="nav navbar-nav hidden-xs">
                        <li><a id="fullscreen" href="#"><i class="material-icons">fullscreen</i> </a></li>
                        <!-- /.Fullscreen -->
                        <li class="hidden-xs"> 
                            <a class="search-trigger" href="#">
                                <i class="material-icons">search</i>
                            </a>
                            <div class="fullscreen-search-overlay" id="search-overlay">
                                <a href="#" class="fullscreen-close" id="fullscreen-close-button"><i class="ti-close"></i></a>
                                <div id="fullscreen-search-wrapper">
                                    <form method="get" id="fullscreen-searchform" action="#">
                                        <input type="text" value="" placeholder="Type keyword(s) here" id="fullscreen-search-input">
                                        <i class="ti-search fullscreen-search-icon"><input value="" type="submit"></i>
                                    </form>
                                </div>
                            </div>
                        </li>
                        <!-- /.Full page search -->
                    </ul>
                    <ul class="nav navbar-top-links navbar-right">
                        <!-- /.Dropdown -->
                        <li class="dropdown">
                            <a class="dropdown-toggle" data-toggle="dropdown" href="#">
                                <i class="material-icons">person_add</i>
                            </a>
                            <ul class="dropdown-menu dropdown-user">
                                <li><a href="profile.html"><i class="ti-user"></i>&nbsp; Profile</a></li>
                                <li><a href="mailbox.html"><i class="ti-email"></i>&nbsp; My Messages</a></li>
                                <li><a href="lockscreen.html"><i class="ti-lock"></i>&nbsp; Lock Screen</a></li>
                                <li><a href="#"><i class="ti-settings"></i>&nbsp; Settings</a></li>
                                <li><a href="login.html"><i class="ti-layout-sidebar-left"></i>&nbsp; Logout</a></li>
                            </ul><!-- /.dropdown-user -->
                        </li><!-- /.Dropdown -->
                        <li class="log_out">
                            <a href="<?php echo site_url(); ?>logout">
                                <i class="material-icons">power_settings_new</i>
                            </a>
                        </li><!-- /.Log out -->
                    </ul> <!-- /.navbar-top-links -->
                </div>
            </nav>
            <!-- /.Navigation -->

            <div class="sidebar" role="navigation">
                <div class="sidebar-nav navbar-collapse">
    	
    	        <!-- =================================================MENU LEFT================================================================================= -->
                    <ul class="nav" id="side-menu">
                        <li class="nav-heading "> <span>Main Navigation</span></li>
	        			<?php echo $this->menu->build_menu(1); ?>
	        		</ul>	
<!-- 
                    <ul class="nav" id="side-menu">
                        <li class="nav-heading "> <span>Main Navigation&nbsp;&nbsp;&nbsp;&nbsp;------</span></li>
                        <li><a href="index.html" class="material-ripple"><i class="material-icons">home</i> Dashboard</a></li>
                        <li>
                            <a href="#" class="material-ripple"><i class="material-icons">bubble_chart</i> Charts<span class="fa arrow"></span></a>
                            <ul class="nav nav-second-level">
                                <li><a href="charts_flot.html">Flot Chart</a></li>
                                <li><a href="charts_Js.html">Chart js</a></li>
                                <li><a href="charts_morris.html">Morris Charts</a></li>
                                <li><a href="charts_sparkline.html">Sparkline Charts</a></li>
                                <li><a href="charts_am.html">Am Charts</a></li>
                            </ul>
                        </li>
                        <li>
                            <a href="#" class="material-ripple"><i class="material-icons">drafts</i> Mailbox<span class="fa arrow"></span></a>
                            <ul class="nav nav-second-level">
                                <li><a href="mailbox.html">Mailbox<span class="nav-tag green">3</span></a></li>
                                <li><a href="mailDetails.html">Mailbox Details<span class="nav-tag yellow">2</span></a></li>
                                <li><a href="compose.html">Compose<span class="nav-tag red">9</span></a></li>
                            </ul>
                        </li>
                        <li>
                            <a href="#" class="material-ripple"><i class="material-icons">business</i> Tables<span class="fa arrow"></span></a>
                            <ul class="nav nav-second-level">
                                <li><a href="table.html">Simple tables</a></li>
                                <li><a href="dataTables.html">Data tables</a></li>
                                <li><a href="footable.html">FooTable</a></li>
                                <li><a href="x-editable.html">X-editable</a></li>
                            </ul>
                        </li>
                        <li class="active">
                            <a href="#" class="material-ripple"><i class="material-icons">assignment</i> Forms<span class="fa arrow"></span></a>
                            <ul class="nav nav-second-level">
                                <li class="active"><a href="forms_basic.html">Basic Forms</a></li>
                                <li><a href="forms_validation.html">Validation Forms</a></li>
                                <li><a href="forms_cropper.html">Cropper</a></li>
                                <li><a href="form_file_upload.html">Forms File Upload</a></li>
                                <li><a href="forms_editor_ck.html">CK Editor</a></li>
                                <li><a href="forms_editor_summernote.html">Summernote</a></li>
                                <li><a href="form_wizard.html">Form Wizaed</a></li>
                                <li><a href="forms_editor_markdown.html">Markdown</a></li>
                                <li><a href="forms_editor_trumbowyg.html">Trumbowyg</a></li>
                                <li><a href="form_editor_wysihtml5.html">Wysihtml5</a></li>
                            </ul>
                        </li>
                        <li class="nav-heading "> <span>Components&nbsp;&nbsp;&nbsp;&nbsp;------</span></li>
                        <li>
                            <a href="#" class="material-ripple"><i class="material-icons">format_color_fill</i> UI Elements<span class="fa arrow"></span></a>
                            <ul class="nav nav-second-level">
                                <li><a href="buttons.html">Buttons</a></li>
                                <li><a href="tabs.html">Tab</a></li>
                                <li><a href="notification.html">Notification</a></li>
                                <li><a href="tree-view.html">Tree View</a></li>
                                <li><a href="progressbars.html">Progressber</a></li>
                                <li><a href="list.html">List View</a></li>
                                <li><a href="typography.html">Typography</a></li>
                                <li><a href="panels.html">Panels</a></li>
                                <li><a href="modals.html">Modals</a></li>
                                <li><a href="icheck_toggle_pagination.html">iCheck, Toggle, pagination</a></li>
                                <li><a href="labels-badges-alerts.html">labels, Badges, Alerts</a></li>
                            </ul>
                        </li>
                        <li>
                            <a href="#" class="material-ripple"><i class="material-icons">map</i> Maps<span class="fa arrow"></span></a>
                            <ul class="nav nav-second-level">
                                <li><a href="maps_amcharts.html">Amcharts Map</a></li>
                                <li><a href="maps_gmaps.html">gMaps</a></li>
                                <li><a href="maps_data.html">Data Maps</a></li>
                                <li><a href="maps_jvector.html">Jvector Maps</a></li>
                                <li><a href="maps_google.html">Google map</a></li>
                                <li><a href="maps_snazzy.html">Snazzy Map</a></li>
                            </ul>
                        </li>
                        <li>
                            <a href="#" class="material-ripple"><i class="material-icons">insert_emoticon</i> Icons<span class="fa arrow"></span></a>
                            <ul class="nav nav-second-level">
                                <li><a href="icons_bootstrap.html">Bootstrap Icons</a></li>
                                <li><a href="icons_fontawesome.html">Fontawesome Icon</a></li>
                                <li><a href="icons_flag.html">Flag Icons</a></li>
                                <li><a href="icons_material.html">Material Icons</a></li>
                                <li><a href="icons_weather.html">Weather Icons </a></li>
                                <li><a href="icons_line.html">Line Icons</a></li>
                                <li><a href="icons_pe.html">Pe Icons</a></li>
                                <li><a href="icon_socicon.html">Socicon Icons</a></li>
                            </ul>
                        </li>
                        <li><a href="widgets.html"><i class="material-icons">widgets</i>Widgets<span class="nav-tag green">new</span></a></li>
                        <li><a href="calender.html"><i class="material-icons">perm_contact_calendar</i>Calendar<span class="nav-tag red">3</span><span class="nav-tag green">5</span><span class="nav-tag yellow">8</span></a></li>
                        <li class="nav-heading "> <span>Extra&nbsp;&nbsp;&nbsp;&nbsp;------</span></li>
                        <li>
                            <a href="#" class="material-ripple"><i class="material-icons">stay_current_portrait</i>App Views<span class="fa arrow"></span></a>
                            <ul class="nav nav-second-level">
                                <li><a href="invoice.html">Invoice</a></li>
                                <li><a href="timeline.html">Vertical timeline</a></li>
                                <li><a href="horizontal_timeline.html">Horizontal timeline</a></li>
                                <li><a href="pricing.html">Pricing Table</a></li>
                                <li><a href="slider.html">Slider</a></li>
                                <li><a href="carousel.html">Carousel</a></li>
                                <li><a href="code_editor.html">Code editor</a></li>
                                <li><a href="gridSystem.html">Grid System</a></li>
                            </ul>
                        </li>
                        <li>
                            <a href="#" class="material-ripple"><i class="material-icons">devices_other</i>Other pags<span class="fa arrow"></span></a>
                            <ul class="nav nav-second-level">
                                <li><a href="login.html">Login</a></li>
                                <li><a href="register.html">Register</a></li>
                                <li><a href="profile.html">Profile</a></li>
                                <li><a href="forget_password.html">Forget password</a></li>
                                <li><a href="lockscreen.html">Lockscreen</a></li>
                                <li><a href="404.html">404 Error</a></li>
                                <li><a href="505.html">505 Error</a></li>
                            </ul>
                        </li>
                        <li>
                            <a href="#" class="material-ripple"><i class="material-icons">invert_colors</i> Multi-Level Dropdown<span class="fa arrow"></span></a>
                            <ul class="nav nav-second-level">
                                <li> <a href="#">Second Level Item</a></li>
                                <li><a href="#">Second Level Item</a></li>
                                <li>
                                    <a href="#">Third Level <span class="fa arrow"></span></a>
                                    <ul class="nav nav-third-level">
                                        <li><a href="#">Third Level Item</a></li>
                                        <li><a href="#">Third Level Item</a></li>
                                        <li><a href="#">Third Level Item</a></li>
                                        <li><a href="#">Third Level Item</a></li>
                                    </ul>
                                </li>
                            </ul>
                        </li>
                        <li><a href="blank.html" class="material-ripple"><i class="material-icons">check_box_outline_blank</i> Blank page</a></li>
                        <li><a href="http://adminpage.thememinister.com/preview_pages/documentation/index.html" class="material-ripple" target="_blank"><i class="material-icons">bookmark</i> Documentation</a></li>
                    </ul>
 -->	    
	            <!-- =================================================MENU LEFT================================================================================= -->
        
                </div>
                <!-- /.sidebar-collapse -->
            </div>
            <!-- /.Left Sidebar-->


            <!-- /.Navbar  Static Side -->
            <div class="control-sidebar-bg"></div>
            <!-- Page Content -->
            <div id="page-wrapper">
                <!-- main content -->
                <div class="content">

                <!-- =================================================CONTENT================================================================================= -->

                    <!-- Content Header (Page header) -->
                    <div class="content-header">
                        <div class="header-icon">
                            <i class="pe-7s-note2"></i>
                        </div>
                        <div class="header-title">
                            <h1>Basic Form</h1>
                            <small>Tabs styles and versions</small>
                            <ol class="breadcrumb">
                                <li><a href="index.html"><i class="pe-7s-home"></i> Home</a></li>
                                <li><a href="#">Forms</a></li>
                                <li class="active">Basic Form</li>
                            </ol>
                        </div>
                    </div> <!-- /. Content Header (Page header) -->
                    <div class="row">
                        <div class="col-sm-12">
                            <div class="panel panel-bd lobidrag">
                                <div class="panel-heading">
                                    <div class="panel-title">
                                        <h4>Validation</h4>
                                    </div>
                                </div>
                                <div class="panel-body">
                                    <div class="row">
                                        <div class="col-sm-6">
                                            <div class="bd-content">
                                                <h3>How it works</h3>
                                                <p>Here’s a rundown of how they work:</p>
                                                <ul>
                                                    <li>To use, add <code>.has-warning</code>, <code>.has-danger</code>, or <code>.has-success</code> to the parent element. Any <code>.col-form-label</code>, <code>.form-control</code>, or custom form element will receive the validation styles.</li>
                                                    <li>Contextual validation text, in addition to your usual form field help text, can be added with the use of <code>.form-feedback</code>. This text will adapt to the parent <code>.has-*</code> class. By default it only includes a bit of <code>margin</code> for spacing and a modified <code>color</code> for each state.</li>
                                                    <li>Validation icons are <code>url()</code>s configured via Sass variables that are applied to <code>background-image</code> declarations for each state.</li>
                                                    <li>You may use your own base64 PNGs or SVGs by updating the Sass variables and recompiling.</li>
                                                    <li>Icons can also be disabled entirely by setting the variables to <code>none</code> or commenting out the source Sass.</li>
                                                </ul>
                                            </div>
                                        </div>
                                        <div class="col-sm-6">
                                            <form>
                                                <div class="form-group has-success">
                                                    <label class="form-control-label" for="inputSuccess1">Input with success</label>
                                                    <input type="text" class="form-control form-control-success" id="inputSuccess1">
                                                    <div class="form-feedback">Success! You've done it.</div>
                                                    <small class="text-muted">Example help text that remains unchanged.</small>
                                                </div>
                                                <div class="form-group has-warning">
                                                    <label class="form-control-label" for="inputWarning1">Input with warning</label>
                                                    <input type="text" class="form-control form-control-warning" id="inputWarning1">
                                                    <div class="form-feedback">Shucks, check the formatting of that and try again.</div>
                                                    <small class="text-muted">Example help text that remains unchanged.</small>
                                                </div>
                                                <div class="form-group has-danger">
                                                    <label class="form-control-label" for="inputDanger1">Input with danger</label>
                                                    <input type="text" class="form-control form-control-danger" id="inputDanger1">
                                                    <div class="form-feedback">Sorry, that username's taken. Try another?</div>
                                                    <small class="text-muted">Example help text that remains unchanged.</small>
                                                </div>
                                            </form>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                <!-- =================================================CONTENT================================================================================= -->               
                </div> <!-- /.main content -->
            </div><!-- /#page-wrapper -->
        </div><!-- /#wrapper -->
        <!-- START CORE PLUGINS -->
        <script src="<?php echo site_url(); ?>assets/plugins/jQuery/jquery-1.12.4.min.js" type="text/javascript"></script>
        <script src="<?php echo site_url(); ?>assets/plugins/jquery-ui-1.12.1/jquery-ui.min.js" type="text/javascript"></script>
        <script src="<?php echo site_url(); ?>assets/bootstrap/js/bootstrap.min.js" type="text/javascript"></script>
        <script src="<?php echo site_url(); ?>assets/plugins/metisMenu/metisMenu.min.js" type="text/javascript"></script>
        <script src="<?php echo site_url(); ?>assets/plugins/lobipanel/lobipanel.min.js" type="text/javascript"></script>
        <script src="<?php echo site_url(); ?>assets/plugins/animsition/js/animsition.min.js" type="text/javascript"></script>
        <script src="<?php echo site_url(); ?>assets/plugins/fastclick/fastclick.min.js" type="text/javascript"></script>
        <script src="<?php echo site_url(); ?>assets/plugins/slimScroll/jquery.slimscroll.min.js" type="text/javascript"></script>
        <!-- STRAT PAGE LABEL PLUGINS -->
        <!-- START THEME LABEL SCRIPT -->
        <script src="<?php echo site_url(); ?>assets/dist/js/app.min.js" type="text/javascript"></script>
        <!-- <script src="<?php echo site_url(); ?>assets/dist/js/jQuery.style.switcher.min.js" type="text/javascript"></script> -->

        <script type="text/javascript">

	        $(document).ready(function () {
	            var url = window.location;
	            // Will only work if string in href matches with location
	            $('li a[href="' + url + '"]').parent().addClass('active');

	            // Will also work for relative and absolute hrefs
	            $('li a').filter(function () {
	                return this.href == url;
	            }).parent().addClass('active').parent().parent().addClass('active');
	        });
        	

        </script>

    </body>

</html>
