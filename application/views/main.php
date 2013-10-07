<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" dir="ltr" lang="en-US"><head>
	<title>Premium CSS template by ChocoTemplates.com</title>
	<meta http-equiv="Content-type" content="text/html; charset=UTF-8">
	<link rel="shortcut icon" href="<?php echo base_url();?>assets/css/images/favicon.ico?cb=1">
	<link rel="stylesheet" href="<?php echo base_url();?>assets/css/style.css" type="text/css" media="all">
	<link rel="stylesheet" href="<?php echo base_url();?>assets/js/fancybox/jquery.fancybox-1.3.2.css" type="text/css" media="all">
	<!--[if IE 6]>
		<link rel="stylesheet" href="css/ie6.css" type="text/css" media="all" />
		<script src="js/png-fix.js" type="text/javascript" charset="utf-8"></script>
	<![endif]-->
	<script src="<?php echo base_url();?>assets/js/jquery-1.4.2.js" type="text/javascript" charset="utf-8"></script>
	<script src="<?php echo base_url();?>assets/js/jquery.tweet.js" type="text/javascript" charset="utf-8"></script>
	<script src="<?php echo base_url();?>assets/js/jquery.easing.1.3.js" type="text/javascript" charset="utf-8"></script>
	<script src="<?php echo base_url();?>assets/js/fancybox/jquery.fancybox-1.3.2.js" type="text/javascript" charset="utf-8"></script>
	<script src="<?php echo base_url();?>assets/js/fancybox/jquery.mousewheel-3.0.2.pack.js" type="text/javascript" charset="utf-8"></script>
	<script src="<?php echo base_url();?>assets/js/easySlider1.5.js" type="text/javascript" charset="utf-8"></script>
	<script src="<?php echo base_url();?>assets/js/jquery.jcarousel.js" type="text/javascript" charset="utf-8"></script>
	<script src="<?php echo base_url();?>assets/js/functions.js" type="text/javascript" charset="utf-8"></script>
</head>
<body>
<!-- wrapper -->
<div id="wrapper">
	
<!-- header -->
<?php $this->load->view('part/header'); ?>
<!-- end header -->
	

<?php $this->load->view($page); ?>

		<!-- footer push -->
		<div id="footer-push" class="notext">&nbsp;</div>
		<!-- end footer push -->
</div>
<!-- end wrapper -->
<!-- footer -->
<?php $this->load->view('part/footer'); ?>
<!-- end footer -->
<!-- login popup -->
<?php $this->load->view('part/login'); ?>
</html>