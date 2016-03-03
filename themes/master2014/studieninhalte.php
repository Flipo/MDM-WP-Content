<?php /* Template Name: Studieninhalte */ get_header(); ?>

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
					  </article>
					  <article class="col-md-12">
						<?php

						$args = array(
							'type'                     => 'post',
							'child_of'                 => 0,
							'parent'                   => '',
							'orderby'                  => 'ID',
							'order'                    => 'ASC',
							'hide_empty'               => 1,
							'hierarchical'             => 1,
							'exclude'                  => '',
							'include'                  => '',
							'number'                   => '',
							'taxonomy'                 => 'module',
							'pad_counts'               => false

						);

						?>

						<?php
						$categories = get_categories($args);
						foreach ($categories as $cat) {
							echo '<div class="modul-teaser">';
							echo '<span><a href="'.get_option('home').'/module'.'/'.$cat->category_nicename.'/"><i class="fa fa-long-arrow-right"></i> '.$cat->cat_name.'</a> ('.$cat->category_count.')</span>';
							if ($cat->category_description != '') {
								echo ' <p> '.$cat->category_description.' </p> ';
							}
							echo '</div>';
						}
						?>
					  </article>
				 </div>
			  </div>

			  <?php endwhile; ?>
			  <?php endif; ?>


			  <?php get_sidebar('studium'); ?>
	  </div>
  </div>
</section>
<?php get_footer(); ?>
