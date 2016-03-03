<!-- sidebar -->
<aside class="main-sidebar" role="complementary">
		  	<div class="row">
		  		 <div class="sidebar-item col-sm-6 col-md-12">
		  		 	<h3>Informationen</h3>
		  			<p>Seit Gründung des Studiengangs Master Design und Medien sind mehr als <?php $count_posts = wp_count_posts('masterarbeit'); echo $count_posts->publish;  ?> Masterabschlussarbeiten im Rahmen des Studiums entstanden.</p>
		  		 </div>

				 <div class="sidebar-item col-sm-6 col-md-12">
				 	<h3>Schwerpunkte</h3>
					<div class="category-list">
						<ul>
							<li><a href="/masterarbeiten/">Alle</a> (<?php $count_posts = wp_count_posts('masterarbeit'); echo $count_posts->publish;  ?>)</li>
							<?php
							$orderby = 'name';
							$show_count = 1; // 1 for yes, 0 for no
							$pad_counts = 0; // 1 for yes, 0 for no
							$hierarchical = 1; // 1 for yes, 0 for no
							$taxonomy = 'schwerpunkte';
							$title = '';

							$args = array(
								'orderby' => $orderby,
								'show_count' => $show_count,
								'pad_counts' => $pad_counts,
								'hierarchical' => $hierarchical,
								'taxonomy' => $taxonomy,
								'title_li' => $title
							);
							?>

							<?php wp_list_categories($args); ?>
						</ul>
					</div>
				 </div>
				 <div class="sidebar-item  col-sm-6 col-md-12">
				 	<h3>Abschlusssemester</h3>
					<div class="category-list">
						<ul>
							<li><a href="/masterarbeiten/">Alle</a> (<?php $count_posts = wp_count_posts('masterarbeit'); echo $count_posts->publish;  ?>)</li>
								<?php
								$orderby = 'ID';
								$show_count = 1; // 1 for yes, 0 for no
								$pad_counts = 0; // 1 for yes, 0 for no
								$hierarchical = 1; // 1 for yes, 0 for no
								$taxonomy = 'abschlusssemester';
								$title = '';

								$args = array(
									'orderby' => $orderby,
									'show_count' => $show_count,
									'pad_counts' => $pad_counts,
									'hierarchical' => $hierarchical,
									'taxonomy' => $taxonomy,
									'title_li' => $title
								);
								?>

								<?php wp_list_categories($args); ?>
						</ul>
					</div>
				 </div>
		  	</div>

	<div class="sidebar-widget">
		<?php if(!function_exists('dynamic_sidebar') || !dynamic_sidebar('widget-area-2')) ?>
	</div>

</aside>
<!-- /sidebar -->
