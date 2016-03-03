<!-- sidebar -->
<aside class="main-sidebar" role="complementary">
		  	<div class="row">
				 <div class="sidebar-item col-sm-6 col-md-12">
				 	<h3>Artikel teilen</h3>
					 <div class="social-sidebar clearfix">
							<ul>
								<li class="fb-einzeln">
									<a href="https://www.facebook.com/sharer/sharer.php?u=<?php echo urlencode(get_permalink($post->ID)); ?>&t=<?php echo rawurlencode(strip_tags(get_the_title())) ?>" target="blank" title="Bei Facebook empfehlen">
		        					<span class="mh"><i class="fa fa-facebook"></i> </span></a>
		        				</li>
		        				<li class="tw-einzeln">
									<a href="https://twitter.com/intent/tweet?source=webclient&text=<?php echo rawurlencode(strip_tags(get_the_title())) ?>%20<?php echo urlencode(get_permalink($post->ID)); ?>" target="blank" title="Bei Twitter empfehlen">
		        					<span class="mh"><i class="fa fa-twitter"></i></span></a>
		        				</li>
								<li class="gp-einzeln">
									<a href="https://plusone.google.com/_/+1/confirm?hl=de&url=<?php echo urlencode(get_permalink($post->ID)); ?>&title=<?php echo rawurlencode(strip_tags(get_the_title())) ?>" target="blank" title="Bei Google+ empfehlen">
		        					<span class="mh"><i class="fa fa-google-plus"></i> </span></a>
		        				</li>
								<li class="xi-einzeln">
									<a href="http://www.xing.com/app/user?op=share;url=<?php echo urlencode(get_permalink($post->ID)); ?>;title=<?php echo rawurlencode(get_the_title()); ?>;provider=<?php echo rawurlencode(get_bloginfo('name')); ?>" target="blank"  title="Bei XING empfehlen">
									<span class="mh"><i class="fa fa-xing"></i> </span></a>
								</li>
							</ul>
					 </div>
				 </div>
				 <div class="sidebar-item  col-sm-6 col-md-12">
			     	<h3>Ähnliche Artikel</h3>
				 	<div class="relatedposts">
					 	<?php if (function_exists("echo_ald_crp")) { echo_ald_crp();} ?>
					</div>
				 </div>
		  	</div>

	<div class="sidebar-widget">
		<?php if(!function_exists('dynamic_sidebar') || !dynamic_sidebar('widget-area-2')) ?>
	</div>

</aside>
<!-- /sidebar -->