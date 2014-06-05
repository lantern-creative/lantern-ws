 <?php get_header(); ?>
 <div class="page-header">
</div>
<div class="services-banner">
<h6 class="text-center"> <a href="#">Creative</a> | <a href="#">Technical</a> | <a href="#">Proccess</a></h6>
</div>
<div class="services-design">
	<div class="container-fluid">
		<div class="row">
			<div class='col-sm-5 alpha'>
			 <div class="icon-lg"><span class="flaticon-painter11" ></span></div>
				<h2>Creative</h2>
				<p>By staying informed and using the newest standards we leverage some of the brightest minds in the industry. This means more efficient code, less code, faster response times, woo.</p>
			</div>
			
				<div class="col-sm-7 beta">
					<h3 class="text-muted">Creative Services</h3>
					<?php if( have_rows('service-creative') ): ?>
					 <?php while( have_rows('service-creative') ): the_row(); ?>

					<span class="tag"  data-container="body" rel="popover" data-toggle="popover" data-placement="bottom" data-content="<?php the_sub_field('description'); ?>" data-trigger="hover"><?php the_sub_field('name'); ?></span>
					    <?php endwhile; endif; ?>
				
			</div>
			</div>
		</div>
	</div>
	<div class="services-development">
	<div class="container">
		<div class="row">
			<div class="col-sm-7 beta text-right">
			<h3 class="text-muted">Technical Services</h3>
					<span class="tag">SASS</span>
					<span class="tag">HTML5</span>
					<span class="tag">CSS 3</span>
					<span class="tag">Responsive</span>
					<span class="tag">wordpress</span>
					<span class="tag">Secure shopping</span>
					<span class="tag">SEO</span>
					<span class="tag">Google maps</span>
			</div>
			<div class='col-sm-5 alpha'>
			 <div class="icon-lg"><span class="flaticon-draw" ></span></div>
				<h2>Development</h2>
				<p>By staying informed and using the newest standards we leverage some of the brightest minds in the industry. This means more efficient code, less code, faster response times, woo.</p>
			</div>
			</div>
		</div>
	</div>
	<div class="services-process">
	<div class="container">
		<div class="row">
		<div class="col-sm-8 ">
		<h4>1. collect</h4>
				<p>By staying informed and using the newest standards we leverage some of the brightest minds in the industry. This means more efficient code, less code, faster response times, woo.By staying informed and using the newest standards we leverage some of the brightest minds in the industry. This means more efficient code, less code, faster response times, woo.</p>
		</div>
		<div class="col-sm-4 wow fadeInDown">
			<div class="icon-lg">
			</div>
		</div>
		</div>
		<div class="row">
		<div class="col-sm-4 wow fadeInLeft ">
			<div class="icon-lg">
			</div>
		</div>
		<div class="col-sm-8">
		<h4>2. comtemplate</h4>
				<p>By staying informed and using the newest standards we leverage some of the brightest minds in the industry. This means more efficient code, less code, faster response times, woo By staying informed and using the newest standards we leverage some of the brightest minds in the industry. This means more efficient code, less code, faster response times, woo..</p>
		</div>
		</div>
		<div class="row">
		<div class="col-sm-8">
		<h4>3. craft</h4>
				<p>By staying informed and using the newest standards we leverage some of the brightest minds in the industry. This means more efficient code, less code, faster response times, woo. By staying informed and using the newest standards we leverage some of the brightest minds in the industry. This means more efficient code, less code, faster response times, woo.</p>
		</div>
		<div class="col-sm-4">
			<div class="icon-lg wow fadeInRight">
			</div>
		</div>
		</div>
		<div class="row">
		<div class="col-sm-4 wow tada">
			<div class="icon-lg">
			</div>
		</div>
		<div class="col-sm-8">
		<h4>4. capitulate</h4>
				<p>By staying informed and using the newest standards we leverage some of the brightest minds in the industry. This means more efficient code, less code, faster response times, woo. By staying informed and using the newest standards we leverage some of the brightest minds in the industry. This means more efficient code, less code, faster response times, woo.</p>
		</div>
		</div>
	</div>
	</div>
</div>
 <?php get_footer(); ?>