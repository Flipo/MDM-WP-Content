<?php /* Template Name: Termine */ get_header(); ?>

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
			  	<h2>Termine und Veranstaltungen</h2>
			  </div>
			  <div class="row news-teaser-container">
			  	<div class="termine-container">

				<div class="panel-group termine-list" id="accordion">
				  <div class="panel panel-default">
				    <div class="panel-heading">
				      <div class="panel-title clearfix">
						  <div class="termin-icon termin-icon-text">
							  Bild
						  </div>
						  <div class="termin-date">
							  Datum
						  </div>
						  <div class="termin-name">
							  Veranstaltungsname
						  </div>
						  <div class="termin-place">
							  Ort
						  </div>
						  <div class="termin-type">
							  Typ
						  </div>
						  <div class="termin-more">
							  Link
						  </div>
				      </div>
				    </div>
				  </div>


				<?php $loop = new WP_Query( array( 'post_type' => 'termine', 'posts_per_page' => 100, 'meta_key' => 'termin-startdatum', 'orderby'		=> 'meta_value_num','order' => 'ASC' ) ); ?>
				<?php while ( $loop->have_posts() ) : $loop->the_post(); ?>


				  <div class="panel panel-default">
				    <div class="panel-heading">
				      <div class="panel-title clearfix">
						  <div class="termin-icon">
							  <?php the_post_thumbnail('thumbnail'); ?>
						  </div>
						  <div class="termin-date">
							  <?php $date = DateTime::createFromFormat('Ymd', get_field('termin-startdatum'));
								     echo $date->format('d.m.Y'); ?>
							  <?php $date = DateTime::createFromFormat('Ymd', get_field('termin-enddatum'));
							  if(get_field('termin-enddatum')) { echo '- ' . $date->format('d.m.Y'); } ?>
						  </div>
						  <div class="termin-name">
							  <a data-toggle="collapse" data-parent="#accordion" href="#open-<?php the_ID(); ?>"><?php the_title(); ?></a>
						  </div>
						  <div class="termin-place">
							 <span> <?php $terms = get_the_terms( $post->ID , 'veranstaltungsorte' ); foreach ( $terms as $term ) { echo $term->name; } ?> </span>
						  </div>
						  <div class="termin-type">
							  Veranstaltungshinweis
						  </div>
						  <div class="termin-more">
							  <?php if(get_field('termin-beschreibung')): ?>
								  <a data-toggle="collapse" data-parent="#accordion" href="#open-<?php the_ID(); ?>">mehr</a>
							  <?php endif; ?>
						  </div>
				      </div>
				    </div>
				    <div id="open-<?php the_ID(); ?>" class="panel-collapse collapse">
				      <div class="panel-body">
				        <?php the_field('termin-beschreibung'); ?>
				      </div>
				    </div>
				  </div>



				<?php endwhile; ?>

				</div>
			  	</div>

			 </div>
		  </div>

		  <?php get_sidebar('termine'); ?>
	  </div>
  </div>
</section>
<?php get_footer(); ?>
