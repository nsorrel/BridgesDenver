<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
 	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta name="description" content="<?php echo html($site->description()) ?>" />
	<meta name="keywords" content="<?php echo html($site->keywords()) ?>" />
	<meta name="author" content="<?php echo html($site->author()) ?>">

	<title><?php echo html($site->title()) ?></title>
	
	<!-- Favicon -->
	<link rel="shortcut icon" href=<?php echo url('assets/images/favicon.ico')?>>

  <!--Google Fonts-->
  <link href='http://fonts.googleapis.com/css?family=Gentium+Basic' rel='stylesheet'>

  <!-- CSS -->
  <?php echo css('assets/styles/style.css') ?>
	<link rel="stylesheet" href="//netdna.bootstrapcdn.com/font-awesome/4.0.3/css/font-awesome.min.css">

	<!--[if lt IE 9]>
		<script src="//oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
		<script src="//oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
	<![endif]-->
	

	
</head>

<body id="page-top" data-spy="scroll" data-target=".navbar-fixed-top">

