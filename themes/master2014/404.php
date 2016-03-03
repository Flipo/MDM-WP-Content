<?php get_header(); ?>

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
			  	<h1><?php _e( 'Page not found', 'html5blank' ); ?></h1>
			  </div>
			  <div class="personen-container">

				<!-- article -->
				<article id="post-404">

					<h2>
						<a href="<?php echo home_url(); ?>"><?php _e( 'Return home?', 'html5blank' ); ?></a>
					</h2>

				</article>
				<!-- /article -->
			  </div>

	  	  	</div>
	  </div>
  </div>
</section>
<?php get_footer(); ?>

