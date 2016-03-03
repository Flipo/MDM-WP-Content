<?php /* Template Name: Personen */ get_header(); ?>

<?php

$attachment_id = get_field('page-header-bild');
$size = "pageheader";
$image = wp_get_attachment_image_src( $attachment_id, $size ); ?>


<section class="full cover-orange" style="background-image: url('<?php echo $image[0]; ?>');"></section>


<section class="content-container">
  <div class="container">
	  <div class="main-container no-sidebar clearfix">
		  <div class="main-content">
			  <div class="title-container">
			  	<h2>Lehrende</h2>
			  </div>
			  <div class="row personen-container">

				<?php $loop = new WP_Query( array( 'post_type' => 'lehrende', 'posts_per_page' => 100 ) ); ?>
				<?php while ( $loop->have_posts() ) : $loop->the_post(); ?>

				<div class="person-item">
				  	<div class="row">
				  		<div class="person-img">
								<span>
									<?php 	$thumbL = wp_get_attachment_image_src( get_post_thumbnail_id(),'blog');$thumbL = $thumbL[0];
											$thumbxs = wp_get_attachment_image_src( get_post_thumbnail_id(),'blog-small');$thumbxs = $thumbxs[0];
											$thumbxxs = wp_get_attachment_image_src( get_post_thumbnail_id(),'blog-super-small');$thumbxxs = $thumbxxs[0]; ?>
									<img class="unveil"  src="<?php echo $thumbxxs ?>" data-src="<?php echo $thumbxs ?>"
									data-src-retina="<?php echo $thumbL ?>" alt="<?php the_title(); ?>" width="270" height="180">
								</span>
						</div>
						<div class="person-text">
							<div class="person-name">
								<h5><?php the_title(); ?></h5>
							</div>
							<div class="person-lehrgebiet">
								<p>Lehrgebiet: <?php the_field('lehrender-lehrgebiet'); ?></p>
							</div>
							<div class="person-kontakt">
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
							<hr>
							<a href="<?php the_permalink(); ?>" title="mehr Informationen zu <?php the_title(); ?>" class="lehrender-mehr-link"><i class="fa fa-long-arrow-right"></i> mehr Informationen</a>

						 </div>
					</div>
				</div> <!-- Ende News-Item -->

				<?php endwhile; ?>

			 </div>
		  </div>
	  </div>
  </div>
 <div class="container">
	  <div class="main-container no-sidebar clearfix">
		  <div class="main-content">
			  <div class="title-container">
			  	<h2>Alumni</h2>
			  </div>
			  <div class="row alumni-container">

				<?php $loop = new WP_Query( array( 'post_type' => 'alumni', 'posts_per_page' => 100 ) ); ?>
				<?php while ( $loop->have_posts() ) : $loop->the_post(); ?>

					<div class="alumni-item">
					  	<div class="row">
					  		<div class="alumni-img">
								<span>
									<?php 	$thumbL = wp_get_attachment_image_src( get_post_thumbnail_id(),'alumni');$thumbL = $thumbL[0];
											$thumbxs = wp_get_attachment_image_src( get_post_thumbnail_id(),'alumni-small');$thumbxs = $thumbxs[0];
											$thumbxxs = wp_get_attachment_image_src( get_post_thumbnail_id(),'alumni-super-small');$thumbxxs = $thumbxxs[0]; ?>
									<img class="unveil" src="<?php echo $thumbxxs ?>" data-src="<?php echo $thumbxs ?>"
									data-src-retina="<?php echo $thumbL ?>" alt="<?php the_title(); ?>" width="146" height="182">
								</span>
							</div>
							<div class="person-text">
								<div class="person-name">
									<h5><?php the_title(); ?></h5>
								</div>
								<div class="person-lehrgebiet">
									Abschluss: <?php the_field('alumni-abschluss'); ?>
								</div>
								<div class="person-kontakt">
									<?php $alumniarbeit = get_field('alumni-masterarbeit'); if( !empty($alumniarbeit) ): ?>
										<span><i class="fa fa-paste"></i> <a href="<?php echo $alumniarbeit; ?>">
										Masterarbeit</a></span>
									<?php endif; ?>
									<span><i class="fa fa-info-circle"></i> <a href="<?php the_permalink(); ?>">
										Info</a></span>
									<?php $textalumni = get_field('alumni-email'); if( !empty($textalumni) ): ?>
										<span><i class="fa fa-envelope"></i> <a href="mailto:<?php echo $textalumni; ?>">
										Mail</a></span>
									<?php endif; ?>

									<?php  if( get_field('alumni-webseiten') ): ?>
										<?php while( has_sub_field('alumni-webseiten') ): ?>
											<?php $alumnilink = get_sub_field('alumni-webseite'); if( !empty($alumnilink) ): ?>
												<span><i class="fa fa-globe"></i> <a href="http://<?php echo $alumnilink; ?>">
												Webseite</a></span>
											<?php endif; ?>
										<?php endwhile; ?>
									<?php endif; ?>
								</div>
							 </div>
						</div>
					</div> <!-- Ende News-Item -->

				<?php endwhile; ?>

			 </div>
		  </div>
	  </div>
  </div>

</section>

<?php get_footer(); ?>
