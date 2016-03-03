<!-- sidebar -->
<aside class="main-sidebar" role="complementary">
		  	<div class="row">
				 <div class="sidebar-item col-sm-6 col-md-12">
				 	<h3>Studium</h3>
					<div class="category-list">
						<ul>
							<li>
								<a href="/studiengang/"><i class="fa fa-long-arrow-right"></i> Studiengang</a>
							</li>
							<li>
								<a href="/studienstruktur/"><i class="fa fa-long-arrow-right"></i> Studienstruktur</a>
							</li>
							<li>
								<a href="/studieninhalte/"><i class="fa fa-long-arrow-right"></i> Studieninhalte</a>
							</li>
							<li>
								<a href="/bewerbung/"><i class="fa fa-long-arrow-right"></i> Bewerbung</a>
							</li>
						</ul>
					</div>
				 </div>
				 <div class="sidebar-item col-sm-6 col-md-12">
				 	<h2>Häufige Fragen</h2>
				 	<p>	Sie haben weitere Fragen zur Bewerbung und zum Aufnahmeverfahren für den Studiengang Master Design und Medien? In unseren FAQs
				 		finden Sie Antworten auf häufige Fragen.</p>
				 	<a href="/faq-haeufige-fragen/"><i class="fa fa-long-arrow-right"></i> Zu den FAQs</a>
				 </div>
				 <div class="sidebar-item col-sm-6 col-md-12">
				 	<h2>Modulhandbuch / PDF</h2>
				 	<p>	Das komplette Modulhandbuch mit den ausführlichen Modul­beschreibungen und den im Web dargestellten Teilmodulen als Download:</p>
				 	<a href="<?php the_field('modulhandbuch-upload', 'option'); ?>">
				 		<i class="fa fa-download"></i> Download | PDF, 77 KB
				 	</a>
				 </div>
		  	</div>

	<div class="sidebar-widget">
		<?php if(!function_exists('dynamic_sidebar') || !dynamic_sidebar('widget-area-2')) ?>
	</div>

</aside>
<!-- /sidebar -->
