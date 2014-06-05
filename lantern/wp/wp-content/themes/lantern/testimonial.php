<div class="testimonial">
      <div class="container">
        <div class="testimonial-inner">
        <blockquote>

           <?php 

        $args = array(

          'post_type' => 'testimonial',

          'posts_per_page' => 1,

          'orderby' => 'rand'

          );

        $the_query = new WP_query( $args );?>

        <?php if ( have_posts() ) : while ( $the_query->have_posts() ) : $the_query->the_post(); ?>

           <p><?php the_content(); ?></p>
        <footer><?php the_field('name'); ?><br><span class="small"><?php the_field('position'); ?></span></footer>




       
        <?php endwhile; else: ?>
          <p>Excellence is an art won by training and habituation. We do not act rightly because we have virtue or excellence, but we rather have those because we have acted rightly. We are what we repeatedly do. Excellence, then, is not an act but a habit.</p>
        <footer>Aristotle</footer>
      
         
          <?php endif; ?>

     
        </blockquote>
        </div>
      </div>
  </div>