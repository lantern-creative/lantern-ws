<!DOCTYPE html>

<html>

	<head>

	<meta charset="utf-8">

    <meta name="viewport" content="width=device-width, initial-scale=1.0">
   
		<title>

			<?php



				wp_title( '-', true, 'right' );



				bloginfo( 'name' );

			?>

		</title>

		<?php wp_head(); ?>



	</head>

	<body>



	<nav class="scroll-menu navbar navbar-fixed-top navbar-inverse " role="navigation" data-spy="affix" data-offset-top="155">

		<div class="container">

			<div class="navbar-header">

            	<button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-ex1-collapse">

	                <span class="sr-only">Toggle navigation</span>

	                <span class="icon-bar"></span>

	                <span class="icon-bar"></span>

	                <span class="icon-bar"></span>

            	</button>



            <a class="navbar-brand" href="<?php echo home_url(); ?>">
            	<?php bloginfo( 'name' );?>
            </a>

        </div>
        <div class=" navbar-inverse collapse navbar-collapse navbar-ex1-collapse">

		<?php

			

			wp_nav_menu( array(

				 'menu' => 'primary',

       			 'theme_location' => 'lantern', 

				 'depth'             => 2,

				  'container'         => 'false',

        		 'menu_class'        => 'nav navbar-nav navbar-right ',

   			     'fallback_cb'       => 'wp_bootstrap_navwalker::fallback',

       			 'walker'            => new wp_bootstrap_navwalker())

				);

		?>
	

</div>
		</div>
		

		</nav>





