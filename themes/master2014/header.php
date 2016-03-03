<!doctype html>
<html <?php language_attributes(); ?> class="no-js">
	<head>
		<meta charset="<?php bloginfo('charset'); ?>">
		<title><?php wp_title(''); ?></title>

		<link href="//www.google-analytics.com" rel="dns-prefetch">
        <link href="<?php echo get_template_directory_uri(); ?>/img/icons/favicon.ico" rel="shortcut icon">
        <link href="<?php echo get_template_directory_uri(); ?>/img/icons/touch.png" rel="apple-touch-icon-precomposed">

		<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
		<meta name="viewport" content="width=device-width,initial-scale=1.0">

		<link href="http://brick.a.ssl.fastly.net/Roboto:300,300i,400,400i,700,700i" rel="stylesheet" type="text/css">


		<?php wp_head(); ?>

		<!--[if lt IE 9]>
			<script src="http://cdnjs.cloudflare.com/ajax/libs/html5shiv/3.7/html5shiv.min.js"></script>
			<script src="http://cdnjs.cloudflare.com/ajax/libs/respond.js/1.4.2/respond.js"></script>
			<script src="http://cdnjs.cloudflare.com/ajax/libs/selectivizr/1.0.2/selectivizr-min.js"></script>
		<![endif]-->
	</head>
	<body <?php body_class(); ?>>
	<div id="wrap">
	<nav class="navbar navbar-default navbar-fixed-top" role="navigation">
	  <div class="container">
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-ex1-collapse">
                    <span class="sr-only">Navigation ausklappen</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand logo-nav" href="<?php echo home_url(); ?>">
                    <img src="<?php echo get_template_directory_uri(); ?>/img/logo-mdm.svg" alt="Master Design & Medien">
                </a>
            </div>

            <!-- Collect the nav links, forms, and other content for toggling -->
            <div class="collapse navbar-collapse navbar-ex1-collapse">
                <ul class="nav navbar-nav navbar-right">
                    <li class="nav-item-start"><a href="<?php echo home_url(); ?>">Start</a></li>
                    <li class="dropdown nav-item-studium">
					    <a class="dropdown-toggle" data-toggle="dropdown" data-hover="dropdown" data-delay="200" href="/studiengang/">
					      Studium <span class="caret"></span>
					    </a>
					    <ul class="dropdown-menu">
					      <li class="nav-item-studiengang"><a href="/studiengang/">Studiengang</a></li>
					      <li class="nav-item-studienstruktur"><a href="/studienstruktur/">Studienstruktur</a></li>
					      <li class="nav-item-studieninhalte"><a href="/studieninhalte/">Studieninhalte/Module</a></li>
					      <li class="nav-item-bewerbung"><a href="/bewerbung/">Bewerbung</a></li>
					    </ul>
					</li>
                    <li class="nav-item-neuigkeiten"><a href="/neuigkeiten/">Neuigkeiten</a></li>
                    <li class="nav-item-masterarbeiten"><a href="/masterarbeiten/">Masterarbeiten</a></li>
                    <li class="nav-item-personen"><a href="/personen/">Personen</a></li>
                    <li class="dropdown nav-item-service">
					    <a class="dropdown-toggle" data-toggle="dropdown" data-hover="dropdown" data-delay="200" href="/termine/">
					      Service <span class="caret"></span>
					    </a>
					    <ul class="dropdown-menu">
					      <li class="nav-item-termine"><a href="/termine/">Termine</a></li>
					      <li class="nav-item-faq"><a href="/faq-haeufige-fragen/">FAQ - Häufige Fragen</a></li>
					      <li class="nav-item-links"><a href="/links/">Links</a></li>
					    </ul>
					</li>
                </ul>
            </div>
            <!-- /.navbar-collapse -->
        </div>
        <!-- /.container -->
     </nav>