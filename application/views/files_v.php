<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?><!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<title><?php echo $title; ?></title>

	<style type="text/css">

		.pdfobject-container { height: 800px;}
		.pdfobject { border: 1px solid #666; }

	</style>
</head>
<body>

<div id="container">

	<div id="example1"></div>

</div>

</body>

<script src="<?php echo site_url(); ?>assets/plugins/PDFObject/pdfobject.js"></script>

<script type="text/javascript">

	var options = {
	    height: "1000px",
	    pdfOpenParams: { view: 'FitV', page: '1', pagemode: 'thumbs' },
	    fallbackLink: "<p>This is a <a href='[url]'>fallback link</a></p>"
	};

	PDFObject.embed("<?php echo site_url().$this->config->item('dir_uploads_uml').$file; ?>", "#example1", options);
	// PDFObject.embed("http://localhost/pdf_object/file/2_2_SK_JABATAN_2017_09_23_15_22_19", "#example1", options);

</script>
</html>