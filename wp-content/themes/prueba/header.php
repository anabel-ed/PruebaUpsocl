<!DOCTYPE html>
<html <?php language_attributes(); ?>>

<head>
	<meta charset=	<?php bloginfo( 'charset' ); ?>">
	<title><?php wp_title(); ?></title>

	<!-- Definir viewport para dispositivos web móviles -->
	<meta name="viewport" content="width=device-width, minimum-scale=1">

	<link rel="shortcut icon" href="<?php echo get_stylesheet_directory_uri(); ?>/favicon.ico" />
	<link rel="stylesheet" media="all" href="<?php bloginfo( 'stylesheet_url' ); ?>" />

	<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>" />
	<?php wp_head(); ?>
</head>
<body <?php body_class(); ?> >
<div id="page" class="site">
	<div class="site-branding">
		<header class="site-header">
			<img src="<?php echo get_template_directory_uri() . '/images/nueva.png'; ?>" />
		</header><!-- #masthead -->
		<div class="wrap">
			<div class="page-title">&iquest;QUE BUSCAS EN LA PLATAFORMAS SOCIALES&#63;</div>
			<?php wp_nav_menu( array('menu' => 'Main', 'container' => 'nav' )); ?>
	    </div><!-- .wrap -->
	</div><!-- .site-branding -->
<div class="wrapper">
<?php include_once('labs.php');?>
