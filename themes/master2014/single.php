<?php get_header(); ?>

<section class="full cover-orange"></section>


<section class="content-container">
  <div class="container">
	  <div class="main-container clearfix">
	  	  <?php if (have_posts()): while (have_posts()) : the_post(); ?>

		  <div class="main-content page-content">
			  <div class="title-container project-title">
			  	<h3><?php echo get_the_date(); ?></h3>
			  	<h1><?php the_title(); ?></h1>
			  </div>
			  <div class="row news-teaser-container">
				  <article class="col-md-12">
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
							   $prev_date = mysql2date('j. F Y', $prev_post->post_date);
							   echo "\t" . '<span>&laquo; Vorheriger Beitrag</span>' . '<a rel="prev" href="' . get_permalink($prev_post->ID) . '" title="' . $prev_title. '" class="news-last-post">'. get_the_post_thumbnail($prev_post->ID, 'thumbnail') . '<em>' . $prev_date . '</em>' . '<p>' .$prev_title . '</p></a>' . "\n";
							                }
							?>
						</div>
						<div class="next-link">
							<?php
							$next_post = get_next_post();
							if($next_post) {
							   $next_title = strip_tags(str_replace('"', '', $next_post->post_title));
							    $next_id = strip_tags(str_replace('"', '', $next_post->post_id));
							    $next_date = mysql2date('j. F Y', $next_post->post_date);
							   echo "\t" . '<span>Nächster Beitrag &raquo;</span>' . '<a rel="prev" href="' . get_permalink($next_post->ID) . '" title="' . $next_title. '" class="news-last-post">' . get_the_post_thumbnail($next_post->ID, 'thumbnail') . '<em>' . $next_date . '</em>' . '<p>' .$next_title . '</p></a>' . "\n";
							                }
							?>
						</div>
					</div>
			 </div>
		  </div>

		  <?php endwhile; ?>
		  <?php endif; ?>

		  <?php get_sidebar('news'); ?>
	  </div>
  </div>
</section>
<?php get_footer(); ?>

