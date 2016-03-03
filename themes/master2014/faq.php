<?php /* Template Name: FAQ */ get_header(); ?>

<?php

$attachment_id = get_field('page-header-bild');
$size = "pageheader";
$image = wp_get_attachment_image_src( $attachment_id, $size ); ?>


<section class="full cover-orange" style="background-image: url('<?php echo $image[0]; ?>');"></section>


<section class="content-container">
  <div class="container">
	  <div class="main-container clearfix">
		  <div class="main-content termin-content">
			  <div class="title-container">
			  	<h2><?php the_title(); ?></h2>
			  </div>
			  <div class="row news-teaser-container">
			  	<div class="termine-container">
			  		<?php if (have_posts()): while (have_posts()) : the_post(); ?>
					  	<div>
					  		<?php the_content(); ?>
					  	</div>

						<div class="panel-group faq-list" id="accordion">

						<?php if(get_field('faq-fragen')): $i = 0; ?>
							<?php while(has_sub_field('faq-fragen')): $i++; ?>

							  <div class="panel panel-default">
							    <div class="panel-heading">
							      <div class="panel-title clearfix">
									  <a data-toggle="collapse" data-parent="#accordion" href="#open-<?php echo $i; ?>" class="accordion-toggle collapsed">
									  	<i class="fa"></i> <?php the_sub_field('faq-frage'); ?>
									  </a>
							      </div>
							    </div>
							    <div id="open-<?php echo $i; ?>" class="panel-collapse collapse">
							      <div class="panel-body">
							        <?php the_sub_field('faq-antwort'); ?>
							      </div>
							    </div>
							  </div>


						  	<?php endwhile; ?>
						  <?php endif; ?>

						</div>

					 <?php endwhile; ?>
					 <?php endif; ?>
				</div>
			 </div>
		  </div>

		  <?php get_sidebar('termine'); ?>
	  </div>
  </div>
</section>
<?php get_footer(); ?>
