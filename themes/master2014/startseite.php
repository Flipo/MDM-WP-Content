<?php /* Template Name: Startseite */ get_header(); ?>

<section class="slider">
	<div class="start-slider">


<?php  if( get_field('startseite-slider') ): ?>
	<?php while( has_sub_field('startseite-slider') ): ?>

	 <?php $image = get_sub_field('startseite-slider-bild'); if( !empty($image) ): $url = $image['url']; $title = $image['title'];
	  $alt = $image['alt']; $size = 'startseite'; $thumb = $image['sizes'][ $size ]; ?>

	  <div class="slide-item" style="background-image: url(<?php echo $thumb; ?>)">

		  <div class="carousel-caption">
			  <div class="container">
			  	<div class="slider-box">
					<h1><?php the_sub_field('startseite-slider-headline'); ?></h1>
					<p><?php the_sub_field('startseite-slider-text'); ?></p>
					<a href="<?php the_sub_field('startseite-slider-link'); ?>" class="button button-orange">mehr erfahren</a>
			  	</div>
			  </div>
		  </div>

	  </div>

	  <?php endif; ?>

	<?php endwhile; ?>
<?php endif; ?>





	</div>
</section>

<section class="content-container">
  <div class="container">
	  <div class="main-container clearfix">
		  <div class="main-content">
			  <div class="title-container">
			  	<h2>Aktuelle Neuigkeiten</h2>
			  	<a href="/neuigkeiten/" class="link-more pull-right visible-xs"><i class="fa fa-long-arrow-right"></i> mehr</a>
			  	<a href="/neuigkeiten/" class="link-more pull-right hidden-xs"><i class="fa fa-long-arrow-right"></i> Zum Archiv</a>
			  </div>
			  <div class="row news-teaser-container">

				<?php $temp = $wp_query; $wp_query= null; $wp_query = new WP_Query(); $wp_query->query('showposts=6');
				while ($wp_query->have_posts()) : $wp_query->the_post(); ?>

				<article class="news-item">
				  	<div class="row">
					  		<div class="news-img">
								<a href="<?php the_permalink(); ?>">
									<?php $thumbL = wp_get_attachment_image_src( get_post_thumbnail_id(),'blog');$thumbL = $thumbL[0];
									$thumbxs = wp_get_attachment_image_src( get_post_thumbnail_id(),'blog-small');$thumbxs = $thumbxs[0];
									$thumbxxs = wp_get_attachment_image_src( get_post_thumbnail_id(),'blog-super-small');$thumbxxs = $thumbxxs[0]; ?>
									<img class="unveil" src="<?php echo $thumbxxs ?>"
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

			 </div>
		  </div>

		  <?php get_sidebar(); ?>
	  </div>
  </div>
<div class="container work-container">
		<div class="title-container">
		 	<h2 class="visible-xs">Aktuelle Arbeiten</h2>
		 	<h2 class="hidden-xs">Aktuelle Masterarbeiten</h2>
		  	<a href="/masterarbeiten/" class="link-more pull-right visible-xs"><i class="fa fa-long-arrow-right"></i> mehr</a>
		  	<a href="/masterarbeiten/" class="link-more pull-right hidden-xs"><i class="fa fa-long-arrow-right"></i> Alle Masterarbeiten ansehen</a>
		</div>
	  	<div class="row work-teaser-list">

			<?php $loop = new WP_Query( array( 'post_type' => 'masterarbeit', 'posts_per_page' => 4 ) ); ?>
			<?php while ( $loop->have_posts() ) : $loop->the_post(); ?>

			  	<div class="work-item col-sm-6 col-md-3">
				  	<div class="work-img">
							<a href="<?php the_permalink(); ?>">
								<?php 	$thumbL = wp_get_attachment_image_src( get_post_thumbnail_id(),'blog');$thumbL = $thumbL[0];
										$thumbxs = wp_get_attachment_image_src( get_post_thumbnail_id(),'blog-small');$thumbxs = $thumbxs[0];
										$thumbxxs = wp_get_attachment_image_src( get_post_thumbnail_id(),'blog-super-small');$thumbxxs = $thumbxxs[0]; ?>
								<img class="unveil" src="<?php echo $thumbxxs ?>" data-src="<?php echo $thumbxs ?>" data-src-retina="<?php echo $thumbL ?>"
								width="345" height="230">
							</a>
				  	</div>
				  	<div class="work-text">
					  	<span class="work-person"><?php the_field('arbeiten-ersteller'); ?></span>
					  	<h5 class="work-title"><?php the_title(); ?></h5>
					  	<p class="work-excerpt"><?php the_excerpt(); ?></p>
				  	</div>
				  	<a href="<?php the_permalink(); ?>" class="work-link">weiterlesen</a>
			  	</div> <!--  ENDE ARBEIT -->

			<?php endwhile; ?>

	  	</div>
	  </div>

</section>


<?php get_footer(); ?>
