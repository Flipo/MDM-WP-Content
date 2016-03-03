<?php get_header(); ?>

<?php

$attachment_id = get_field('page-header-bild');
$size = "pageheader";
$image = wp_get_attachment_image_src( $attachment_id, $size ); ?>


<section class="full cover-orange" style="background-image: url('<?php echo $image[0]; ?>');"></section>


<section class="content-container">
  <div class="container">
	  <div class="main-container clearfix">
		  <div class="main-content page-content">
			  <div class="title-container">
			  	<h2><?php single_cat_title(); ?></h2>
			  	<a href="/studieninhalte/" class="link-more pull-right visible-xs"><i class="fa fa-long-arrow-right"></i> Übersicht</a>
			  	<a href="/studieninhalte/" class="link-more pull-right hidden-xs"><i class="fa fa-long-arrow-right"></i> Zur Übersicht</a>
			  </div>
			  <div class="row news-teaser-container">
				  <article class="col-md-12">
				  	<div class="module-description">
					  	<?php echo term_description() ?>
				  	</div>
					<?php if (have_posts()): while (have_posts()) : the_post(); ?>
						<div class="modul-teaser">
							<span><a href="<?php the_permalink(); ?>"><i class="fa fa-long-arrow-right"></i>  <?php the_title(); ?></a></span>
						    <p><?php the_excerpt(); ?></p>
						</div> <!-- Ende News-Item -->
					 <?php endwhile; ?>
					 <?php endif; ?>
				  </article>
			 </div>
			 <div class="pagination">
				 <?php html5wp_pagination(); ?>
			 </div>
		  </div>

		  <?php get_sidebar('studium'); ?>
	  </div>
  </div>
</section>
<?php get_footer(); ?>
