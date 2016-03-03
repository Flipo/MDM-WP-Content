

		<div id="push"></div>
	    </div> <!-- Ende #wrap -->
	    <div class="main-footer" id="footer">
	      <div class="container">
	      	<div class="row">
			  <div class="footer-logo col-sm-2">
				  <a href="<?php echo home_url(); ?>">
				  	<img src="<?php echo get_template_directory_uri(); ?>/img/logo-neg-sm.svg" alt="Master Design & Medien" class="img-responsive">
				  </a>
			  </div>
			  <div class="col-xs-12 col-sm-7 col-md-6 col-sm-offset-3 col-md-offset-4 footer-nav">
					<!-- search -->
					<form class="navbar-form navbar-left" method="get" action="<?php echo home_url(); ?>" role="search">
						<div class="form-group">
							<input class="search-input form-control" type="search" name="s" placeholder="<?php _e( 'Suche', 'html5blank' ); ?>">
						</div>
						<button class="search-submit btn btn-default" type="submit" role="button"><?php _e( 'Absenden', 'html5blank' ); ?></button>
					</form>
					<!-- /search -->

				  <a class="kontakt-link pull-right" href="/kontakt/">
					  Kontakt
				  </a>
			  </div>
	      	</div>
	      </div>
	      <div class="meta-footer">
		      <div class="container">
			      <div class="row">
			      	<p class="pull-left">&copy; <?php echo date('Y'); ?> Master Design und Medien, Hochschule Hannover</p>
			      	<ul>
				      	<li><a href="/datenschutz/">Datenschutz</a></li>
				      	<li><a href="/impressum/">Impressum</a></li>
			      	</ul>
			      </div>
		      </div>
	      </div>
	    </div>


		<?php wp_footer(); ?>

		<!-- analytics -->
		<script>
		  (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
		  (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
		  m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
		  })(window,document,'script','//www.google-analytics.com/analytics.js','ga');
		  ga('create', 'UA-54331091-1', 'auto');
		  ga('require', 'displayfeatures');
		  ga('send', 'pageview');
		</script>

	</body>
</html>
