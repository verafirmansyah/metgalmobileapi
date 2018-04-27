<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?><!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<title>PDF Object</title>

	<style type="text/css">

		.pdfobject-container { height: 800px;}
		.pdfobject { border: 1px solid #666; }

	</style>
</head>
<body>

<div id="container">
	<h1>Welcome to CodeIgniter!</h1>

	<div id="body">
		<p>The page you are looking at is being generated dynamically by CodeIgniter.</p>

		<p>If you would like to edit this page you'll find it located at:</p>
		<code>application/views/welcome_message.php</code>

		<p>The corresponding controller for this page is found at:</p>
		<code>application/controllers/Welcome.php</code>

		<p>If you are exploring CodeIgniter for the very first time, you should start by reading the <a href="user_guide/">User Guide</a>.</p>
	</div>

	<div id="example1"></div>


</div>

</body>

<script src="<?php echo site_url(); ?>assets/plugins/PDFObject/pdfobject.js"></script>

<script type="text/javascript">

	var options = {
	    height: "400px",
	    pdfOpenParams: { view: 'FitV', page: '1', pagemode: 'thumbs' },
	    fallbackLink: "<p>This is a <a href='[url]'>fallback link</a></p>"
	};

	// PDFObject.embed("<?php echo site_url(); ?>uploads/uml/2_2_SK_JABATAN_2017_09_23_15_22_19.pdf", "#example1", options);
	PDFObject.embed("http://localhost/pdf_object/file/2_2_SK_JABATAN_2017_09_23_15_22_19", "#example1", options);

</script>
</html>