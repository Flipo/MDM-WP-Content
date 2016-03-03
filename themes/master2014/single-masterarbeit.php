<?php get_header(); ?>

<section class="full cover-orange"></section>


<section class="content-container">
  <div class="container">
	  <div class="main-container clearfix">
	  	  <?php if (have_posts()): while (have_posts()) : the_post(); ?>

		  <div class="main-content page-content">
			  <div class="title-container project-title">
			  	<h3><?php the_field('arbeiten-ersteller'); ?></h3>
			  	<h1><?php the_title(); ?></h1>
			  </div>
			  <div class="row news-teaser-container">
				  <article class="col-md-12 master-project-single">
				  	  <div class="project-gallery">
						<?php  $images = get_field('arbeiten-bilder'); if( $images ): ?>

						<div class="project-slider">

							<?php foreach( $images as $image ): ?>

								<div class="slide-item">
									<img src="<?php echo $image['sizes']['large']; ?>" />
								</div>

							<?php endforeach; ?>

						</div>

						<?php endif; ?>
				  	  </div>
				  	  <div class="project-meta">
					  	  <div class="project-meta-title">
						  	  <strong>Name des/der Masterstudenten/in:</strong>
						  	  <span><?php the_field('arbeiten-ersteller'); ?></span>
					  	  </div>
					  	  <div class="project-meta-title">
						  	  <strong>Abschlusssemester:</strong>
						  	  <span><?php the_terms( $post->ID, 'abschlusssemester', '', '' ); ?></span>
					  	  </div>
					  	  <div class="project-meta-title">
						  	  <strong>Schwerpunkt/e der Arbeit:</strong>
						  	  <span><?php the_terms( $post->ID, 'schwerpunkte', '', ' , ' ); ?></span>
					  	  </div>
					  	  <div class="project-meta-title">
						  	  <strong>Erstprüfer:</strong>
						  	  <span><?php the_field('arbeiten-erstprufer'); ?></span>
					  	  </div>
					  	  <div class="project-meta-title">
						  	  <strong>Zweitprüfer:</strong>
						  	  <span><?php the_field('arbeiten-zweitprufer'); ?></span>
					  	  </div>
				  	  </div>


					  <?php the_content(); ?>
				  </article>
			 </div>
			 <div class="row">
				  <div class="nav-links clearfix">
						<div class="prev-link">
							<?php
							$prev_post = get_previous_post();
							if($prev_post) {
							   $prev_title = strip_tags(str_replace('"', '', $prev_post->post_title));
							   $prev_ersteller = get_field('arbeiten-ersteller', $prev_post->ID );
							   echo "\t" . '<span>&laquo; Vorherige Arbeit</span>' . '<a rel="prev" href="' . get_permalink($prev_post->ID) . '" title="' . $prev_title. '" class="news-last-post">'. get_the_post_thumbnail($prev_post->ID, 'thumbnail') . '<em>' . $prev_ersteller . '</em>' . '<p>' .$prev_title . '</p></a>' . "\n";
							                }
							?>
						</div>
						<div class="next-link">
							<?php
							$next_post = get_next_post();
							if($next_post) {
							   $next_title = strip_tags(str_replace('"', '', $next_post->post_title));
							    $next_id = strip_tags(str_replace('"', '', $next_post->post_id));
							    $next_ersteller = get_field('arbeiten-ersteller', $next_post->ID );
							   echo "\t" . '<span>Nächste Arbeit &raquo;</span>' . '<a rel="prev" href="' . get_permalink($next_post->ID) . '" title="' . $prev_title. '" class="news-last-post">' . get_the_post_thumbnail($next_post->ID, 'thumbnail') . '<em>' . $next_ersteller . '</em>' . '<p>' .$next_title . '</p></a>' . "\n";
							                }
							?>
						</div>
					</div>
			 </div>
		  </div>

		  <?php endwhile; ?>
		  <?php endif; ?>

		  <?php get_sidebar('masterarbeit'); ?>
	  </div>
  </div>
</section>
<?php get_footer(); ?>

