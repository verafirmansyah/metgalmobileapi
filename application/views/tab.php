
  <link rel="stylesheet" href="<?php echo site_url();?>assets/<?php echo $this->config->item('template_version');?>/bower_components/bootstrap/dist/css/bootstrap.min.css">

<h3>Twitter Bootstrap</h3>


<div id="twitter-bootstrap-tabs">
 <ul class="nav nav-tabs">
  <li><a href="#twitter-home">Home</a></li>
  <li><a href="#twitter-profile">Profile</a></li>
  <li><a href="#twitter-messages">Messages</a></li>
  <li><a href="#twitter-settings">Settings</a></li>
  <li><a href="#twitter-contact">Contact</a></li>
 </ul>
 <div class="panels">
  <div id="twitter-home">
   <p>Works out of the box with Twitter Bootstrap markup and styles.</p>
  </div>
  <div id="twitter-profile">
   <p>twitter-profile</p>
  </div>
  <div id="twitter-messages">
   <p>twitter-messages</p>
  </div>
  <div id="twitter-settings">
   <p>twitter-settings</p>
  </div>
  <div id="twitter-contact">
   <p>twitter-contact</p>
  </div>
 </div>
</div>


<script src="<?php echo site_url();?>assets/<?php echo $this->config->item('template_version');?>/bower_components/jquery/dist/jquery.min.js"></script>
<script type='text/javascript' src='<?php echo site_url();?>assets/plugins/jQuery-EasyTabs/vendor/jquery.hashchange.min.js'></script>
<script type='text/javascript' src='<?php echo site_url();?>assets/plugins/jQuery-EasyTabs/lib/jquery.easytabs.min.js'></script>

<script type="text/javascript">
$('#twitter-bootstrap-tabs').easytabs();
</script>