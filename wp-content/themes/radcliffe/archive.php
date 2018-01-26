<?php get_header(); ?>

<div class="content">
			
		<div class="posts">
		
			<div class="page-title section light-padding">

				
			</div><!-- .page-title -->
			
			<div class="clear"></div>
	
			<?php if ( have_posts() ) : ?>
			
				<?php while ( have_posts() ) : the_post(); ?>
				
					<div id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
			
						<?php get_template_part( 'content', get_post_format() ); ?>
												
					</div><!-- .post -->
					
				<?php endwhile; ?>
							
		</div><!-- .posts -->
					
		<?php if ( $wp_query->max_num_pages > 1 ) : ?>
			
			<div class="archive-nav">
			
				<?php echo get_next_posts_link( '&laquo; ' . __( 'Older posts', 'radcliffe' ) ); ?>
						
				<?php echo get_previous_posts_link( __( 'Newer posts', 'radcliffe' ) . ' &raquo;' ); ?>
				
				<div class="clear"></div>
				
			</div><!-- .post-nav archive-nav -->
							
		<?php endif; ?>
				
	<?php endif; ?>

</div><!-- .content -->

<?php get_footer(); ?>