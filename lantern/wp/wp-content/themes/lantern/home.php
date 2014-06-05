   <?php get_header(); ?>
    <div class="container">
      <div class="row">
        <div class="col-sm-9">

        <div class="page-header">
        <h1><?php wp_title(''); ?></h1>
        </div>

        <?php if (have_posts() ) : while ( have_posts() ) : the_post(); ?>

        <?php get_template_part( 'content', get_post_type($post) ); ?> 

    <?php endwhile; else: ?>

    	 <div class="page-header">
        <h1>Woops!</h1>
        <div>
        <p>Nothing found here.</p>
         <?php endif; ?>



        </div>

       
        <?php get_sidebar() ?>
        </div>
      </div>
   
     <?php get_footer(); ?>
