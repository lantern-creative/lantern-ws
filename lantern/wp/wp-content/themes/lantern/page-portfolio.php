 <?php get_header(); ?>
 <div class="page-header">
 </div>
<div class="portfolio container-fluid">
  <div class="row">
  
        <?php 

        $args = array(

          'post_type' => 'portfolio',

          'posts_per_page' => 12

          );



        $the_query = new WP_query( $args );



        ?>
        <?php if ( have_posts() ) : while ( $the_query->have_posts() ) : $the_query->the_post();
        $cover = get_field('cover_image');
        $background = get_field('background_image');

         ?>
         <div class=" col-md-4 col-sm-6 portfolio-cube">
        <div class="cover" style=background-image:url("<?php echo $cover['url']; ?>");></div>
        <div class="content">
      <?php get_template_part( 'content', get_post_type($post) ); ?> 
          </div>
      </div>
        <?php endwhile; else: ?>
        <div class="page-header">
          <h1>Woops!</h1>
          </div>
          <p>Nothing found here.</p>
          <?php endif; ?>
        </div>
      </div>

    <?php get_footer(); ?>
