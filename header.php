<!DOCTYPE html>
<html lang="de">
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta name="description" content="">
	<meta name="author" content="">

	<title>SVAurich</title>

  <link href="https://fonts.googleapis.com/css?family=Spectral" rel="stylesheet">
	<link href="<?php echo get_bloginfo('template_directory');?>/style.css" rel="stylesheet">
	<!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
	<!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
<?php wp_head();?>
</head>
<body>
<div class="container">
	<header id="site-header">
			<img id="logo" src="<?php echo get_bloginfo('template_directory');?>/assets/images/sv-aurich_Farbe.png">
	    <h1><a id="site-title" class="heading" href="<?php echo get_bloginfo('wpurl');?>"><?php echo get_bloginfo('name'); ?></a></h1>
	    <p id="site-description" class="lead blog-description"><?php echo get_bloginfo('description'); ?></p>

  <nav id="main-nav">
      <?php wp_list_pages('&title_li='); ?>
  </nav>
</header>