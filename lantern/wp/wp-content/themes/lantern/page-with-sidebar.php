   <?php
    /*
    Template Name: Page With Sidebar
    */ 
      ?>

   <?php get_header(); ?>
    <div class="container">
      <div class="row">
        <div class="col-sm-9">

        <?php if (have_posts() ) : while ( have_posts() ) : the_post(); ?>

        <div class="page-header">
        <h1><?php the_title(); ?></h1>
        </div>
        <?php the_content() ?>
    <?php endwhile; else: ?>

    	 <div class="page-header">
        <h1>Woops!</h1>
        </div>
        <p>Nothing found here.</p>
         <?php endif; ?>



        </div>

       
       

      
       <?php get_sidebar() ?>
     </div>
    
     <?php get_footer(); ?>
