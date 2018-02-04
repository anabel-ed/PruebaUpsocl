<!DOCTYPE html>
<html <?php language_attributes(); ?>>

<head>
	<meta charset=	<?php bloginfo( 'charset' ); ?>">
	<title><?php wp_title(); ?></title>

	<meta name="viewport" content="width=device-width, minimum-scale=1.0">

	<link rel="shortcut icon" href="<?php echo get_stylesheet_directory_uri(); ?>/favicon.ico" />
	<link rel="stylesheet" media="all" href="<?php bloginfo( 'stylesheet_url' ); ?>" />
	<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>" />
	<?php wp_head(); ?>
</head>
<body <?php body_class(); ?> >
<div class="contenedor">
<div class="one">
<div class="cintillo"></div>
<div class="Lcentro">
		<img src="<?php echo get_template_directory_uri() . '/images/nueva.png'; ?>" />
	<div class="letra"><h2>&iquest;QU&Eacute; BUSCAS EN LA PLATAFORMAS SOCIALES&#63;</h2></div>
		<div class="Ldescrip"><strong>&iquest;QU&Eacute; LLAMA TU ATENCI&Oacute;N&#63;&iquest;QU&Eacute; QUIERES Y ESPERAS QUE TE APORTE EL CONTENIDO&#63;</strong>
			<P>Si empezamos a pensar como usuarios antes que como anunciantes, dejaremos de interrumpir a las personas en sus intereses y comenzaremos a ser,justamente, aquello que les interesa.</P>
		</div>
</div>	

</div><!--onecelda-->

<?php include_once('labs.php');?>