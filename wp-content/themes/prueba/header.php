<!DOCTYPE html>
<html <?php language_attributes(); ?>>

<head>
	<meta charset=	<?php bloginfo( 'charset' ); ?>">
	<title><?php wp_title(); ?></title>

	<meta name="viewport" content="width=device-width, minimum-scale=1">

	<link rel="shortcut icon" href="<?php echo get_stylesheet_directory_uri(); ?>/favicon.ico" />
	<link rel="stylesheet" media="all" href="<?php bloginfo( 'stylesheet_url' ); ?>" />

	<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>" />
	<?php wp_head(); ?>
</head>
<body <?php body_class(); ?> >
<div class="contenedor">
	<div class="one">
		<div class="cintillo">
		</div>	
	<div class="imagenfondo">
		<div class="Lcentro">&iquest;QUE BUSCAS EN LA PLATAFORMAS SOCIALES&#63;</div>
	<?php wp_nav_menu( array('menu' => 'Main', 'container' => 'nav' )); ?>
		
	</div>
</div><!--onecelda-->

<?php include_once('labs.php');?>
