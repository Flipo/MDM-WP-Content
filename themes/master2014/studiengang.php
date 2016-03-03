<?php /* Template Name: Studiengang */ get_header(); ?>

<?php

$attachment_id = get_field('page-header-bild');
$size = "pageheader";
$image = wp_get_attachment_image_src( $attachment_id, $size ); ?>


<section class="full cover-orange" style="background-image: url('<?php echo $image[0]; ?>');"></section>


<section class="content-container">
  <div class="container">
	 <div class="main-container clearfix">
	  	  <?php if (have_posts()): while (have_posts()) : the_post(); ?>
			  <div class="main-content page-content">
				  <div class="title-container">
				  	<h2><?php the_title(); ?></h2>
				  </div>
				  <div class="row news-teaser-container">
					  <article class="col-md-12">
						  <?php the_content(); ?>
					  </article>
				 </div>
			  </div>

			  <?php endwhile; ?>
			  <?php endif; ?>


			  <?php get_sidebar('studium'); ?>
	  </div>
  </div>
</section>
<?php get_footer(); ?>
