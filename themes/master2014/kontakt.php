<?php /* Template Name: Kontakt */ get_header(); ?>

<?php

$attachment_id = get_field('page-header-bild');
$size = "pageheader";
$image = wp_get_attachment_image_src( $attachment_id, $size ); ?>


<section class="full cover-orange" style="background-image: url('<?php echo $image[0]; ?>');"></section>


<section class="content-container">
  <div class="container">
	  <div class="main-container clearfix">
		  <div class="main-content termin-content">
			  <div class="title-container">
			  	<h2><?php the_title(); ?></h2>
			  </div>
			  <div class="row news-teaser-container">
			  	<div class="termine-container">
			  		<?php if (have_posts()): while (have_posts()) : the_post(); ?>
					  	<div>
					  		<?php the_content(); ?>
					  	</div>

						<div class="kontakt-form">
							 <?php echo do_shortcode('[contact-form-7 id="155" title="Kontaktformular 1"]');?>

						</div>

					 <?php endwhile; ?>
					 <?php endif; ?>
				</div>
			 </div>
		  </div>

		  <?php get_sidebar('kontakt'); ?>
	  </div>
  </div>
</section>
<?php get_footer(); ?>
