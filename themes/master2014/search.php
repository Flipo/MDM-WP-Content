<?php get_header(); ?>

<section class="full cover-orange"></section>


<section class="content-container">
  <div class="container">
	 <div class="main-container clearfix">

			  <div class="main-content page-content">
				  <div class="title-container">
				  	<h2><?php echo sprintf( __( '%s Search Results for ', 'html5blank' ), $wp_query->found_posts ); echo get_search_query(); ?></h2>
				  </div>
				  <div class="row news-teaser-container">
					<?php if (have_posts()): while (have_posts()) : the_post(); ?>

						<!-- article -->
						<article id="post-<?php the_ID(); ?>" <?php post_class('col-md-12'); ?>>

							<!-- post title -->
							<h3>
								<a href="<?php the_permalink(); ?>" title="<?php the_title(); ?>"><?php the_title(); ?></a>
							</h3>
							<!-- /post title -->

							<?php html5wp_excerpt('html5wp_index'); // Build your custom callback length in functions.php ?>

						</article>
						<!-- /article -->

					<?php endwhile; ?>

					<?php else: ?>

						<!-- article -->
						<article>
							<h2><?php _e( 'Sorry, nothing to display.', 'html5blank' ); ?></h2>
						</article>
						<!-- /article -->

					<?php endif; ?>

				 </div>
			  </div>




			  <?php get_sidebar(); ?>
	  </div>
  </div>
</section>
<?php get_footer(); ?>
