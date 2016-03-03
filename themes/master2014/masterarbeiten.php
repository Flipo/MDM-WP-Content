<?php /* Template Name: Masterarbeiten */ get_header(); ?>

<?php

$attachment_id = get_field('page-header-bild');
$size = "pageheader";
$image = wp_get_attachment_image_src( $attachment_id, $size ); ?>


<section class="full cover-orange" style="background-image: url('<?php echo $image[0]; ?>');"></section>


<section class="content-container">
  <div class="container">
	  <div class="main-container clearfix">
		  <div class="main-content">
			  <div class="title-container">
			  	<h2>Masterarbeiten</h2>
			  </div>
			  <div class="row projects-container">

				  <?php $paged = ( get_query_var('paged') ) ? get_query_var('paged') : 1; query_posts(
				  array( 'post_type' => 'masterarbeit', 'posts_per_page' => 12, 'caller_get_posts' => 1, 'paged' => $paged ) ); ?>

				  <?php if (have_posts()) : ?>
				  <?php while (have_posts()) : the_post(); ?>

			  	<div class="work-item col-sm-6 col-md-4">

				  	<div class="work-img">
							<a href="<?php the_permalink(); ?>">
									<?php $thumbL = wp_get_attachment_image_src( get_post_thumbnail_id(),'blog');$thumbL = $thumbL[0];
									$thumbxs = wp_get_attachment_image_src( get_post_thumbnail_id(),'blog-small');$thumbxs = $thumbxs[0];
									$thumbxxs = wp_get_attachment_image_src( get_post_thumbnail_id(),'blog-super-small');$thumbxxs = $thumbxxs[0]; ?>
									<img class="unveil" src="<?php echo $thumbxxs ?>"
									data-src="<?php echo $thumbxs ?>" data-src-retina="<?php echo $thumbL ?>" alt="<?php the_title(); ?>"
									width="270" height="180">
							</a>
				  	</div>
				  	<div class="work-text">
					  	<span class="work-person"><?php the_field('arbeiten-ersteller'); ?></span>
					  	<h5 class="work-title"><?php the_title(); ?></h5>
					  	<p class="work-excerpt"><?php html5wp_excerpt('html5wp_index'); ?></p>
				  	</div>
				  	<a href="<?php the_permalink(); ?>" class="work-link">weiterlesen</a>
			  	</div> <!--  ENDE ARBEIT -->

				<?php endwhile; ?>
			 </div>
			 <div class="pagination">
				 	<?php if(function_exists('html5wp_pagination')) { html5wp_pagination(); } ?>
				 <?php endif; ?>
			 </div>
		  </div>
		  <?php get_sidebar('masterarbeiten'); ?>
	  </div>
  </div>
</section>

<?php get_footer(); ?>
