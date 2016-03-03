<?php get_header(); ?>

<section class="full cover-orange"></section>


<section class="content-container">
  <div class="container">
	  <div class="main-container clearfix">
	  	  <?php if (have_posts()): while (have_posts()) : the_post(); ?>

		  <div class="main-content page-content">
			  <div class="title-container project-title">
			  	<h2><?php the_title(); ?></h2>
			  	<a href="/studieninhalte/" class="link-more pull-right visible-xs"><i class="fa fa-long-arrow-right"></i> Übersicht</a>
			  	<a href="/studieninhalte/" class="link-more pull-right hidden-xs"><i class="fa fa-long-arrow-right"></i> Zur Übersicht</a>
			  </div>
			  <div class="row news-teaser-container">
				  <article class="col-md-12">
					  <?php the_content(); ?>

					  <div class="modul-table">

						  <div class="modul-table-item">
							  <b class="module-table-title">
								Teilmodulbezeichnung / Titel
							  </b>
							  <?php if( get_field('Inhalt-Titel') ): ?>
							  	<span>
									<?php the_field('Inhalt-Titel'); ?>
								</span>
							  <?php endif; ?>
						  </div>
						  <div class="modul-table-item">
							  <b class="module-table-title">
								ggf. Untertitel
							  </b>
							  <?php if( get_field('Inhalt-Untertitel') ): ?>
							  	<span>
									<?php the_field('Inhalt-Untertitel'); ?>
								</span>
							  <?php endif; ?>
						  </div>
						  <div class="modul-table-item">
							  <b class="module-table-title">
								Kürzel
							  </b>
							  <?php if( get_field('Inhalt-Kurzel') ): ?>
							  	<span>
									<?php the_field('Inhalt-Kurzel'); ?>
								</span>
							  <?php endif; ?>
						  </div>
						  <div class="modul-table-item">
							  <b class="module-table-title">
								Teilmodulverantwortliche(r)
							  </b>
							  <?php if( get_field('Inhalt-Verantwortlicher') ): ?>
							  	<span>
									<?php the_field('Inhalt-Verantwortlicher'); ?>
								</span>
							  <?php endif; ?>
						  </div>
						  <div class="modul-table-item">
							  <b class="module-table-title">
								Sprache
							  </b>
							  <?php if( get_field('Inhalt-Sprache') ): ?>
							  	<span>
									<?php the_field('Inhalt-Sprache'); ?>
								</span>
							  <?php endif; ?>
						  </div>
						  <div class="modul-table-item">
							  <b class="module-table-title">
								Zuordnung zu Curricula
							  </b>
							  <?php if( get_field('Inhalt-Curricula') ): ?>
							  	<span>
									<?php the_field('Inhalt-Curricula'); ?>
								</span>
							  <?php endif; ?>
						  </div>
						  <div class="modul-table-item">
							  <b class="module-table-title">
								Credits
							  </b>
							  <?php if( get_field('Inhalt-Credits') ): ?>
							  	<span>
									<?php the_field('Inhalt-Credits'); ?>
								</span>
							  <?php endif; ?>
						  </div>
						  <div class="modul-table-item">
							  <b class="module-table-title">
								Präsenzstunden
							  </b>
							  <?php if( get_field('Inhalt-Stunden') ): ?>
							  	<span>
									<?php the_field('Inhalt-Stunden'); ?>
								</span>
							  <?php endif; ?>
						  </div>
						  <div class="modul-table-item">
							  <b class="module-table-title">
								Stunden Selbststudium
							  </b>
							  <?php if( get_field('Inhalt-Selbststudium') ): ?>
							  	<span>
									<?php the_field('Inhalt-Selbststudium'); ?>
								</span>
							  <?php endif; ?>
						  </div>
						  <div class="modul-table-item">
							  <b class="module-table-title">
								Empfehlungen zum Selbststudium
							  </b>
							  <?php if( get_field('Inhalt-Empfehlungen-Selbststudium') ): ?>
							  	<span>
									<?php the_field('Inhalt-Empfehlungen-Selbststudium'); ?>
								</span>
							  <?php endif; ?>
						  </div>
						  <div class="modul-table-item">
							  <b class="module-table-title">
								Empfohlene Voraussetzungen
							  </b>
							  <?php if( get_field('Inhalt-Empfehlungen-Vorraussetzungen') ): ?>
							  	<span>
									<?php the_field('Inhalt-Empfehlungen-Vorraussetzungen'); ?>
								</span>
							  <?php endif; ?>
						  </div>
						  <div class="modul-table-item">
							  <b class="module-table-title">
								Gruppengröße
							  </b>
							  <?php if( get_field('Inhalt-Gruppengroesse') ): ?>
							  	<span>
									<?php the_field('Inhalt-Gruppengroesse'); ?>
								</span>
							  <?php endif; ?>
						  </div>
						  <div class="modul-table-item">
							  <b class="module-table-title">
								Angestrebte Lernergebnisse
							  </b>
							  <?php if( get_field('Inhalt-Lernergebnisse') ): ?>
							  	<span>
									<?php the_field('Inhalt-Lernergebnisse'); ?>
								</span>
							  <?php endif; ?>
						  </div>
						  <div class="modul-table-item">
							  <b class="module-table-title">
								Veranstaltungsart, SWS
							  </b>
							  <?php if( get_field('Inhalt-SWS') ): ?>
							  	<span>
									<?php the_field('Inhalt-SWS'); ?>
								</span>
							  <?php endif; ?>
						  </div>
						  <div class="modul-table-item">
							  <b class="module-table-title">
								Anforderungen der Präsenzzeit
							  </b>
							  <?php if( get_field('Inhalt-Anforderungen-Zeit') ): ?>
							  	<span>
									<?php the_field('Inhalt-Anforderungen-Zeit'); ?>
								</span>
							  <?php endif; ?>
						  </div>
						  <div class="modul-table-item">
							  <b class="module-table-title">
								Anforderungen des Selbststudiums
							  </b>
							  <?php if( get_field('Inhalt-Anforderungen-Selbststudium') ): ?>
							  	<span>
									<?php the_field('Inhalt-Anforderungen-Selbststudium'); ?>
								</span>
							  <?php endif; ?>
						  </div>
						  <div class="modul-table-item">
							  <b class="module-table-title">
								Studien- / Prüfungsleistungen
							  </b>
							  <?php if( get_field('Inhalt-Pruefung') ): ?>
							  	<span>
									<?php the_field('Inhalt-Pruefung'); ?>
								</span>
							  <?php endif; ?>
						  </div>
						  <div class="modul-table-item">
							  <b class="module-table-title">
								Literatur
							  </b>
							  <?php if( get_field('Inhalt-Literatur') ): ?>
							  	<span>
									<?php the_field('Inhalt-Literatur'); ?>
								</span>
							  <?php endif; ?>
						  </div>
					  </div>
				  </article>
			 </div>
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
							   echo "\t" . '<span>Weiter &raquo;</span>' . '<a rel="prev" href="' . get_permalink($prev_post->ID) . '" title="' . $prev_title. '" class="news-last-post">' . '<p>' .$next_title . '</p></a>' . "\n";
							                }
							?>
						</div>
					</div>
			 </div>
		  </div>

		  <?php endwhile; ?>
		  <?php endif; ?>

		  <?php get_sidebar('studium'); ?>
	  </div>
  </div>
</section>
<?php get_footer(); ?>

