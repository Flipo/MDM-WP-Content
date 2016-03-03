<!-- sidebar -->
<aside class="main-sidebar" role="complementary">
		  	<div class="row">
				 <div class="sidebar-item col-sm-6 col-md-12">
				 	<h2>Infos zur Bewerbung</h2>
				 	<p>	Sie haben Fragen zur Bewerbung und zum Aufnahmeverfahren für den Studiengang Master Design und Medien? Hier bekommen Sie
				 		alle Informationen zur Bewerbung.</p>
				 	<a href="bewerbung.html"><i class="fa fa-long-arrow-right"></i> Zu den Informationen</a>
				 </div>
				 <div class="sidebar-item  col-sm-6 col-md-12">
				 	<h2>Aktuelle Termine</h2>
				 	<div class="event-teaser-container">

					 	<?php $loop = new WP_Query( array( 'post_type' => 'termine', 'posts_per_page' => 5, 'meta_key' => 'termin-startdatum',
					 	'orderby' => 'meta_value_num','order' => 'ASC' ) ); ?>
					 	<?php while ( $loop->have_posts() ) : $loop->the_post(); ?>

					 	<div class="event-item">
						 	<span class="event-time">
							  <?php $date = DateTime::createFromFormat('Ymd', get_field('termin-startdatum'));
								     echo $date->format('d.m.Y'); ?>
							  <?php $date = DateTime::createFromFormat('Ymd', get_field('termin-enddatum'));
							  if(get_field('termin-enddatum')) { echo '- ' . $date->format('d.m.Y'); } ?>
						 	</span>
						 	<div class="event-title">
						 	 <?php the_title(); ?>
						 	</div>
					 	</div>

					 	<?php endwhile; ?>

				 	</div>
				 	<a href="/termine/"><i class="fa fa-long-arrow-right"></i> alle Termine anzeigen</a>
				 </div>
		  	</div>

	<div class="sidebar-widget">
		<?php if(!function_exists('dynamic_sidebar') || !dynamic_sidebar('widget-area-2')) ?>
	</div>

</aside>
<!-- /sidebar -->
