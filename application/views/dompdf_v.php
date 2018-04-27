<!DOCTYPE html>
<html>
<head>
  <title>Report Table</title>


</head>
<body>
<!-- <img src="<?php echo $_SERVER['DOCUMENT_ROOT'];?>/assets/images/no-signal.png" alt=""> -->
<!-- <img src="<?php echo site_url();?>/assets/images/no-signal.png" alt=""> -->
<?php

// echo $_SERVER['DOCUMENT_ROOT'];
// echo site_url();

?>
<div id="outtable">
	  <table>
	  	<thead>
	  		<tr>
	  			<th class="short">#</th>
	  			<th class="normal">First Name</th>
	  			<th class="normal">Last Name</th>
	  			<th class="normal">Username</th>
	  		</tr>
	  	</thead>
	  	<tbody>
<?php $no = 1;?>
	  		<?php foreach ($users as $user):?>
	  		  <tr>
	  			<td><?php echo $no;?></td>
	  			<td><?php echo $user['firstname'];?></td>
	  			<td><?php echo $user['lastname'];?></td>
	  			<td><?php echo $user['email'];?></td>
	  		  </tr>
<?php $no++;?>
	  		<?php endforeach;?>
</tbody>
	  </table>
	 </div>
</body>
</html>
