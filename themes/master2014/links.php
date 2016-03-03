<?php /* Template Name: Links */ get_header(); ?>

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

						  <div class="link-container">
							<?php  if( get_field('link-kategorie') ): ?>
								<?php while( has_sub_field('link-kategorie') ): ?>
									<div class="link-category">
										<h3><?php the_sub_field('link-kategoriename'); ?></h3>
										<?php  if( get_sub_field('link-link-container') ): ?>
											<?php while( has_sub_field('link-link-container') ): ?>
												<div class="link-item">
													<h4>
														<a href="http://<?php the_sub_field('link-url'); ?>">
															<i class="fa fa-long-arrow-right"></i> <?php the_sub_field('link-titel'); ?>
														</a>
													</h4>
													<p><?php the_sub_field('link-beschreibung'); ?></p>
												</div>
											<?php endwhile; ?>
										<?php endif; ?>
									</div>
								<?php endwhile; ?>
							<?php endif; ?>
						  </div>
					  </article>
				 </div>
			  </div>

			  <?php endwhile; ?>
			  <?php endif; ?>


			  <?php get_sidebar('termine'); ?>
	  </div>
  </div>
</section>
<?php get_footer(); ?>
