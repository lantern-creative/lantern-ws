<?php get_header(); ?>

   <div class='jumbotron jumbotron-splash stretch-container'>
      <div class='splash-content'>
       	<h1>This element is fully stretched.</h1>
      </div>
    </div>
    <div class="services">
		<div class="container">
			<div class="row">
			<div class="col-sm-6 services-left">
				 <div class="icon-lg"><span class="flaticon-painter11" ></span></div>
				<h4>Were Technologists</h4>
				<p>By staying informed and using the newest standards we leverage some of the brightest minds in the industry. This means more efficient code, less code, faster response times, woo.</p>
				


			</div>
			<div class="col-sm-6 services-right">
				 <div class="icon-lg "><span class="flaticon-draw" ></span></div>
				<h4>This is a heading</h4>
				<p>Great design isnt just aesthetically please, its meaningful. We strive for the perfect balance. somewhere between minimal and intricately detailed lies the land of just right.</p>
				
			</div>

			</div>
			<button class="btn btn-lg btn-primary">Learn More</button>
		</div>
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
	<div class="blog">
	<div class="container">
		<div class="blog-inner">
				<h1>It's Alive!<span class='text-muted'> a creative blog</span></h1>
				<h4>How to code really well from the smartest man alive</h4>
				<h6 class="text-muted">Written By <a>Hatem Zayed</a> on May 28th 2014</h6>
				<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. In quis faucibus urna. Nam et ligula tristique, pellentesque nulla eu, tincidunt justo. Morbi aliquam velit tellus, sit amet elementum mi varius eu. Nulla dapibus nisi tortor. Donec sit amet justo lorem. Nam nec sapien eget nisi blandit sagittis. Proin lobortis congue tortor eu elementum. Nam libero leo, tempus a ullamcorper eget, scelerisque in massa. Maecenas vulputate nisi lacus, non scelerisque diam venenatis ac. In accumsan sed magna id bibendum. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aliquam erat volutpat. In hac habitasse platea dictumst. Sed dignissim quam congue nisi tempor ultrices. Integer sapien arcu, suscipit et vulputate sodales, elementum at orci. Quisque at egestas nisi.</p>

<p>Nullam interdum consectetur lectus, sit amet elementum dolor elementum vitae. Nunc vitae placerat eros, auctor malesuada lorem. Duis bibendum facilisis vulputate. Mauris sed pellentesque urna, nec eleifend eros. Maecenas facilisis vel arcu ullamcorper accumsan. Ut luctus aliquam metus, id tincidunt augue placerat id. Donec bibendum enim vel odio blandit scelerisque. Ut venenatis augue nulla, mollis viverra leo porta et. Curabitur sodales fringilla venenatis.</p>

<p>Praesent mattis porttitor tellus, quis porttitor lectus elementum ut. Nunc faucibus nisi diam, vitae porta metus bibendum ut. Vestibulum justo elit, egestas varius dui non, viverra consequat justo. In et euismod ante, id vestibulum nulla. Quisque in lectus tempus libero dignissim malesuada non a justo. Proin at fermentum purus. Interdum et malesuada fames ac ante ipsum primis in faucibus. Pellentesque in fermentum leo. Fusce vel erat risus. Aliquam erat volutpat.</p>

<p>Phasellus ut elit purus. Nulla a sem elit. Nam molestie vulputate lorem, tristique iaculis ligula accumsan a. Sed ut commodo nisl, ut rhoncus nulla. Mauris turpis lorem, sagittis sit amet convallis vitae, commodo ut mi. Donec dignissim ante purus, sed suscipit dui consectetur id. Vivamus nec consequat enim. Donec aliquam suscipit lorem, in scelerisque orci ornare ac. Nulla id quam eu urna vehicula tempor sed in urna. Vestibulum viverra, ligula sit amet volutpat consequat, tellus libero ornare diam, at porttitor neque arcu sit amet quam. Nullam et condimentum enim, vel posuere risus.</p>
			</div>	
		</div>
	</div>




	



















<?php get_footer(); ?>