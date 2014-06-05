<?php



require_once('wp_bootstrap_navwalker.php');


if (!is_admin()) add_action( 'wp_enqueue_scripts' , 'no_more_jquery' );

function no_more_jquery(){

    wp_deregister_script('jquery');

    wp_register_script('jquery', "http" . 

    ($_SERVER['SERVER_PORT'] == 443 ? "s" : "") . 

    "://ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.min.js", false, null);

    wp_enqueue_script('jquery');

}


function theme_styles() {



		wp_enqueue_style( 'bootstrap', '//netdna.bootstrapcdn.com/bootstrap/3.0.3/css/bootstrap.min.css' );

		wp_enqueue_style( 'fonts', 'http://fonts.googleapis.com/css?family=Passion+One:400,700' );	

        wp_enqueue_style( 'icons', '//netdna.bootstrapcdn.com/font-awesome/4.0.3/css/font-awesome.css' );

        wp_enqueue_style( 'lantern-style', get_stylesheet_uri(), array( 'icons' ) );

		wp_enqueue_script( 'bootstrap-js', '//netdna.bootstrapcdn.com/bootstrap/3.0.3/js/bootstrap.min.js', array( 'jquery'), '3.0.3', true );



		if ( is_singular() && comments_open() && get_option( 'thread_comments' ) ) {

		wp_enqueue_script( 'comment-reply' );

	}



}



add_action( 'wp_enqueue_scripts' , 'theme_styles' );





// Enable custom menus

add_theme_support( 'menus' );



// Enable Comments and search

add_theme_support( 'html5', array(

		'search-form', 'comment-form', 'comment-list',

	) );





function create_widget( $name, $id, $description ) {

 $args = array(

	'name'          => __( $name ),

	'id'            => $id,

	'description'   => $description,	

	'before_widget' => '<div id="%1$s" class="widget %2$s">',

	'after_widget'  => '</div>',

	'before_title'  => '<h2 class="widget-title">',

	'after_title'   => '</h2>'

	 ); 



 register_sidebar( $args );

}



  if ( $tag_list ) 

     {

        $utility_text = __( '

        <span class="posted-author">%4$s</span>

        <span class="posted-category">%1$s</span>       

        <span class="posted-date">%3$s</span>.', 'twentytwelve' );

 

    } elseif ( $categories_list ) 

   {

        $utility_text = __( '

        <span class="posted-author">%4$s</span>

        <span class="posted-category">%1$s</span>

        <span class="posted-date">%3$s</span>.', 'lantern' );

    } else 

   {

        $utility_text = __( '

        <span class="posted-author">%4$s</span>

        <span class="posted-date">%3$s</span>.', 'lantern' );

 	}



register_nav_menus( array(

    'primary' => __( 'primary', 'lantern' ),

) );




create_widget( '1st Widget', 'widget_one', 'the first widget' );

create_widget( '2nd Widget', 'widget_two', 'the first widget' );

create_widget( '3rd Widget', 'widget_three', 'the first widget' );

create_widget( 'Page Sidebar', 'sidebar', 'Displays the sidebar widget' );



function new_excerpt_more( $more ) {

	return '... <a class="read-more" href="'. get_permalink( get_the_ID() ) . '">Read More</a>';

}



add_filter( 'use_default_gallery_style', '__return_false' );


?>