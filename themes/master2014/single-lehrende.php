<?php get_header(); ?>

<section class="full cover-orange"></section>


<section class="content-container">
  <div class="container">
	  <div class="main-container clearfix">
	  	  <?php if (have_posts()): while (have_posts()) : the_post(); ?>

		  <div class="main-content page-content">
			  <div class="title-container project-title">
			  	<h2><?php the_title(); ?></h2>
			  	<a href="/personen/" class="link-more pull-right visible-xs"><i class="fa fa-long-arrow-right"></i> Übersicht</a>
			  	<a href="/personen/" class="link-more pull-right hidden-xs"><i class="fa fa-long-arrow-right"></i> Zur Übersicht</a>
			  </div>
			  <div class="row news-teaser-container">
				  <article class="lehrender-single-info col-md-12">
				  	<aside>
					  	<div class="col-sm-6">
								<?php 	$thumbL = wp_get_attachment_image_src( get_post_thumbnail_id(),'large');$thumbL = $thumbL[0];
										$thumbxs = wp_get_attachment_image_src( get_post_thumbnail_id(),'person-single');$thumbxs = $thumbxs[0];
										$thumbxxs = wp_get_attachment_image_src( get_post_thumbnail_id(),'small');$thumbxxs = $thumbxxs[0]; ?>
								<img class="unveil"  src="<?php echo $thumbxxs ?>" data-src="<?php echo $thumbxs ?>"
								data-src-retina="<?php echo $thumbL ?>" alt="<?php the_title(); ?>">
					  	</div>
					  	<div class="col-sm-6">
						  	<div class="person-lehrgebiet">
							  	<h6>Lehrgebiet</h6>
							  	<?php the_field('lehrender-lehrgebiet'); ?>
							</div>
							<div class="person-kontakt">
								<h6>Kontakt</h6>
								<?php $text = get_field('lehrender-email'); if( !empty($text) ): ?>
								<span><i class="fa fa-envelope"></i> <a href="mailto:<?php echo $text; ?>">
									<?php echo $text; ?></a></span>
								<?php endif; ?>


								<?php  if( get_field('lehrender-telefon') ): ?>
									<?php while( has_sub_field('lehrender-telefon') ): ?>
										<?php $textmail = get_sub_field('lehrender-telefonnummer'); if( !empty($textmail) ): ?>
										<span><i class="fa fa-phone"></i> <?php echo $textmail; ?></span>
										<?php endif; ?>
									<?php endwhile; ?>
								<?php endif; ?>
							</div>
					  	</div>
				  	</aside>
				  	<main>
				  		<div class="col-md-12">
				  			<hr>
				  			<?php the_field('lehrender-text'); ?>
				  		</div>
				  	</main>
				  </article>
			 </div>

		  <?php endwhile; ?>
		  <?php endif; ?>

			 <div class="row">
				  <div class="nav-links studieninhalte-nav-links clearfix">
						<div class="prev-link">
							<?php
							$prev_post = get_previous_post();
							if($prev_post) {
							   $prev_title = strip_tags(str_replace('"', '', $prev_post->post_title));
							   $prev_date = mysql2date('j. F Y', $prev_post->post_date);
							   echo "\t" . '<span>&laquo; Zurück</span>' . '<a rel="prev" href="' . get_permalink($prev_post->ID) . '" title="' . $prev_title. '" class="news-last-post">'. '<p>' .$prev_title . '</p></a>' . "\n";
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
							   echo "\t" . '<span>Weiter &raquo;</span>' . '<a rel="prev" href="' . get_permalink($next_post->ID) . '" title="' . $next_title. '" class="news-last-post">' . '<p>' .$next_title . '</p></a>' . "\n";
							                }
							?>
						</div>
					</div>
			 </div>
		  </div>

		  <?php get_sidebar('lehrende'); ?>
	  </div>
  </div>
</section>
<?php get_footer(); ?>

