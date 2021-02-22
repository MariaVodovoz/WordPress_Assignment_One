<?php

/**
 * The header
 */
?>

<!DOCTYPE html>
<html <?php language_attributes() ?> >
<head>
<meta charset="<?php bloginfo() ?>">
<meta name="viewport" content="width=device-width, initial-scale=1">
<!--add our CSS file -->
<link rel="stylesheet" type= "text/css" href="<?php echo_esc_url(home_url('
wp-content/themes/classtheme/assets/css/custom-style.css')) ?>" />

<!--google font -->
<link rel="preconnect" href="https://fonts.gstatic.com">
<link href="https://fonts.googleapis.com/css2?family=Roboto:wght@100&display=swap" rel="stylesheet">

<?php wp_head(); ?>

</head>

<body <?php body_class(); ?>>

<header>
		<a href="<?php echo_esc_url(home_url()); ?>">
		<img src = "<?php echo_esc_url(home_url('wp-content/uploads/2021/01/logo.png')) ?>" alt="logo"> 
		</a>
	<article></article>
	<nav>
	<?php 
	wp_nav_menu(array(
			'menu' => 'main', 
			'theme_location' => '',
			'depth' => 2,
			'fallback_cb' => false


	));
	?>
	</nav>
</header>