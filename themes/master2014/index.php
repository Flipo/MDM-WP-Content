<?php get_header(); ?>

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
			  	<h2>Alle Neuigkeiten</h2>
			  </div>
			  <div class="row news-teaser-container">

				<?php if (have_posts()): while (have_posts()) : the_post(); ?>
					<article class="news-item">
					  	<div class="row">
					  		<div class="news-img">
								<a href="<?php the_permalink(); ?>">
									<?php $thumbL = wp_get_attachment_image_src( get_post_thumbnail_id(),'blog');$thumbL = $thumbL[0];
									$thumbxs = wp_get_attachment_image_src( get_post_thumbnail_id(),'blog-small');$thumbxs = $thumbxs[0]; ?>
									<img class="unveil"  src="<?php echo get_template_directory_uri(); ?>/img/place-lehrende.png"
									data-src="<?php echo $thumbxs ?>" data-src-retina="<?php echo $thumbL ?>" alt="<?php the_title(); ?>"
									width="270" height="180">
								</a>
							</div>
							<div class="news-text">
								<div class="news-meta">
									<span><?php echo get_the_date(); ?></span>
								</div>
								<div class="news-title">
									<h3><?php the_title(); ?></h3>
								</div>
								<div class="news-excerpt">
									 <p><?php html5wp_excerpt('html5wp_index'); ?></p>
								</div>
								<div class="news-link-more">
									<a href="<?php the_permalink(); ?>"><i class="fa fa-long-arrow-right"></i>  Weiterlesen</a>
								</div>
							 </div>
						</div>
					</article> <!-- Ende News-Item -->
				 <?php endwhile; ?>
				 <?php endif; ?>
			 </div>
			 <div class="row">
				  <div class="pagination clearfix">
					  <?php html5wp_pagination(); ?>
				  </div>
			 </div>
		  </div>

		  <?php get_sidebar('blog'); ?>
	  </div>
  </div>
</section>
<?php get_footer(); ?>
