<div class="nameimage">
	<div class="separador">
		<hr class="lefthr">
		<img src="<?php echo get_template_directory_uri() . '/images/COMUNIDAD.png'; ?>" />
		<hr class="righthr">
	</div>
</div>
<section id="sidebar">
	<?php if ( !function_exists('dynamic_sidebar') || !dynamic_sidebar('Main Sidebar') ) : ?>
	<?php endif; ?>
</section>

