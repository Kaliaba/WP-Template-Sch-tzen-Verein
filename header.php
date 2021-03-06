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
	<link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">
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
	    <h1 id="site-title"><a class="heading" href="<?php echo get_bloginfo('wpurl');?>"><?php echo get_bloginfo('name'); ?></a></h1>

  <nav id="main-nav">
			<li class="burger-menu-icon"><i class="material-icons">menu</i></li>
      <?php wp_nav_menu(array( 'theme_location' => 'main-menu' )); ?>
			<?php
				$section_id = empty($post->ancestors) ? $post->ID : end($post->ancestors);
				$locations = get_nav_menu_locations();
				$menu = wp_get_nav_menu_object($locations[ 'main-menu' ]);
				$menu_items = wp_get_nav_menu_items($menu->term_id, array( 'post_parent' => $section_id ));
				if (!empty($menu_items)) {
				    echo '<ul class="section-submenu">';
				    foreach ($menu_items as $menu_item) {
				        echo '<li><a href="' . $menu_item->url . '">' . $menu_item->title . '</a></li>';
				    }
				    echo '</ul>';
				}
			?>
  </nav>
</header>
