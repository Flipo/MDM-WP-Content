<!-- sidebar -->
<aside class="main-sidebar" role="complementary">
		  	<div class="row">
				 <div class="sidebar-item col-sm-6 col-md-12">
				 	<h3>Kategorien</h3>
					<div class="category-list">
						<ul>
							<li><a href="/neuigkeiten/">Alle</a></li>
							<?php wp_list_categories('orderby=name&title_li='); ?>
						</ul>
					</div>
				 </div>
				 <div class="sidebar-item  col-sm-6 col-md-12">
				 	<h3>Archiv</h3>
					<div class="category-list">
						<ul>
							<?php get_archives('monthly', '', 'html', '', '', TRUE); ?>
						</ul>
					</div>
				 </div>
		  	</div>

	<div class="sidebar-widget">
		<?php if(!function_exists('dynamic_sidebar') || !dynamic_sidebar('widget-area-2')) ?>
	</div>

</aside>
<!-- /sidebar -->
