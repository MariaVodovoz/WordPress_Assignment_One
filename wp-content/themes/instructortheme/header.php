<?php
/**
 * The header.
 */

?>
<!doctype html>
<html <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>" />
	<meta name="viewport" content="width=device-width, initial-scale=1" />
	<!-- add our custom CSS file -->
	<link rel="stylesheet" type="text/css" href="<?php echo esc_url( home_url( 'wp-content/themes/instructortheme/assets/css/custom-style.css' ) );?>" />
	<!-- I am going to add my Google Fonts here -->
	<link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@400;500;600;700&family=Roboto:wght@400;500;700&display=swap" rel="stylesheet">
	<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
<!-- Notice that we have opened the body element in the header file. We will close it off in the footer template -->
	<header>
		<!-- this will hold our logo -->
		<article>
			<!-- this is how you get your domain to be dynamic "echo esc_url( home_url() );" -->
			<a href="<?php echo esc_url( home_url() );?>">
				<img src="<?php echo esc_url( home_url( 'wp-content/uploads/2021/01/logo.png' ) );?>" alt="our logo">
			</a>
		</article>
		<!-- this will hold our main navigation -->
		<nav>
			<!-- here we will add our navigation. By using this function our menu update as we add pages through the backend of wordpress -->
			<?php
				wp_nav_menu(array(
					'menu' => 'main', //this is the name that we gave our menu when we made it
					'theme_location' => '', // we will leave this empty
					'depth' => 2, // we will just set this for one drop down layer not a mega menu
					'fallback_cb' => false // we don't want to set a fall back so just set to false
				));
			?>
		</nav>
	</header>
