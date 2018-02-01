<?php get_header(); ?>
<div class="eigth">
    <article id="single">
        <?php if(have_posts()) : ?><?php while(have_posts()) : the_post(); ?>

          <div class="post">

             <?php the_content(); ?>
         </div>
     <?php endwhile; ?>
 <?php endif; ?>
</article> <!-- Fin de single -->
</div>
<?php  get_sidebar()?>

<?php get_footer(); ?>
