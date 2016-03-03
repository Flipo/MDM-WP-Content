<!-- sidebar -->
<aside class="main-sidebar" role="complementary">
		  	<div class="row">
				 <div class="sidebar-item col-sm-6 col-md-12">
				 	<h3>Personen</h3>
				 	<p>Hier gelangen Sie zurück zur Übersicht der Personen:</p>
				 	<a href="<?php echo home_url(); ?>/personen/"><i class="fa fa-long-arrow-right"></i> Zur Übersicht</a>
				 </div>
				 <div class="sidebar-item col-sm-6 col-md-12">
				 	<h3>Lehrende</h3>
					<div class="category-list">
						<ul>
							<?php $loop = new WP_Query( array( 'post_type' => 'lehrende', 'posts_per_page' => 100 ) ); ?>
							<?php while ( $loop->have_posts() ) : $loop->the_post(); ?>
								<li>
									<a href="<?php the_permalink(); ?>"><i class="fa fa-long-arrow-right"></i> <?php the_title(); ?></a>
								</li>
							<?php endwhile; ?>
						</ul>
					</div>
				 </div>
				 <div class="sidebar-item col-sm-6 col-md-12">
				 	<h2>Häufige Fragen</h2>
				 	<p>	Sie haben weitere Fragen zur Bewerbung und zum Aufnahmeverfahren für den Studiengang Master Design und Medien? In unseren FAQs
				 		finden Sie Antworten auf häufige Fragen.</p>
				 	<a href="/faq-haeufige-fragen/"><i class="fa fa-long-arrow-right"></i> Zu den FAQs</a>
				 </div>
		  	</div>

	<div class="sidebar-widget">
		<?php if(!function_exists('dynamic_sidebar') || !dynamic_sidebar('widget-area-2')) ?>
	</div>

</aside>
<!-- /sidebar -->
