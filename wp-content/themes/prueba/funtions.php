<?
function leer_scripts(){
    wp_register_script( 'js', get_template_directory_uri() . 'js/js.js', array( 'jquery' ), false, true );
     
    wp_enqueue_script( 'js' );
}
 
add_action( 'wp_enqueue_scripts', 'leer_scripts' );

// Registro del menú de WordPress

add_theme_support( 'page-title' );

if ( function_exists( 'register_nav_menus' ) ) {
    register_nav_menus(
        array(
          'main' => 'Main'
        )
    );
}


// Permitir comentarios encadenados
function enable_threaded_comments(){
    if (is_singular() AND comments_open() AND (get_option('thread_comments') == 1)) {
       wp_enqueue_script('comment-reply');
    }
}
add_action('get_header', 'enable_threaded_comments');


$tags = wp_get_post_tags($post->ID);
if ($tags) {
	$tag_ids = array();
	foreach($tags as $individual_tag) $tag_ids[] = $individual_tag->term_id;
	$args=array(
	'tag__in' => $tag_ids,
	'post__not_in' => array($post->ID),
	'showposts'=>5, // Number of related posts that will be shown.
	'caller_get_posts'=>1
	);
$my_query = new wp_query($args);
	if( $my_query->have_posts() ) {
		echo '<h3>Artículos relacionados</h3><ul>';
		while ($my_query->have_posts()) {
			$my_query->the_post();
			?>
			<li><a href="<?php the_permalink() ?>" rel="bookmark" title="Permanent Link to <?php the_title_attribute(); ?>"><?php the_title(); ?></a></li>
		<?php
		}
		echo '</ul>';
	}
     wp_reset_query(); 
}
?>

