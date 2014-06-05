   <?php get_header(); ?>
    <div class="page-header">
</div>

    <div class="container">
      <div class="row">
        <div class="col-sm-12">

        <?php if (have_posts() ) : while ( have_posts() ) : the_post(); ?>

        <h1><?php the_title(); ?></h1>
        
        <?php get_template_part( 'content', get_post_type($post) ); ?> 
        
    <?php endwhile; else: ?>

    	 <div class="page-header">
        <h1>Woops!</h1>
        </div>
        <p>Nothing found here.</p>
         <?php endif; ?>



        </div>
      </div>
      </div>  
     
     <?php get_footer(); ?>
