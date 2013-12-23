<!doctype html>  

<!--[if lt IE 7]><html <?php language_attributes(); ?> class="no-js lt-ie9 lt-ie8 lt-ie7"> <![endif]-->
<!--[if (IE 7)&!(IEMobile)]><html <?php language_attributes(); ?> class="no-js lt-ie9 lt-ie8"><![endif]-->
<!--[if (IE 8)&!(IEMobile)]><html <?php language_attributes(); ?> class="no-js lt-ie9"><![endif]-->
<!--[if gt IE 8]><!--> <html <?php language_attributes(); ?> class="no-js"><!--<![endif]-->
	
	<head>
		<meta charset="utf-8">
		
		<title><?php bloginfo('name'); ?> | <?php is_home() ? bloginfo('description') : wp_title(''); ?></title>
		
		<!-- Google Chrome Frame for IE -->
		<!--[if IE]><meta http-equiv='X-UA-Compatible' content='IE=edge,chrome=1'><![endif]-->
		
		<!-- mobile meta (hooray!) -->
		<meta name="HandheldFriendly" content="True">
		<meta name="MobileOptimized" content="320">
		<meta name="viewport" content="width=device-width, initial-scale=1.0"/>
		<meta name="format-detection" content="telephone=no">
		
		<!-- icons & favicons (for more: http://themble.com/support/adding-icons-favicons/) -->
		<link rel="shortcut icon" href="<?php echo THEME_LIBRARY_URL ?>/images/favicon.ico">
				
  		<link rel="pingback" href="<?php bloginfo('pingback_url'); ?>">

<!--TODO: Need to move these -->
  		<link rel="stylesheet" id="theme-font-css" href="http://fonts.googleapis.com/css?family=Open+Sans:400,400italic,600,700&amp;subset=latin,latin-ext" type="text/css" media="all">
		<link rel="stylesheet" id="font-awesome-css" href="http://demo.herothemes.com/knowhow/wp-content/themes/knowhow/css/font-awesome.min.css?ver=3.8" type="text/css" media="all">

		<!--[if lt IE 9]>
			<script src="js/libs/html5shiv.js"></script>
		<![endif]-->

		<!-- wordpress head functions -->
		<?php wp_head(); ?>
		<!-- end of wordpress head -->
		
	</head>
	
	<body <?php body_class(); ?> style="opacity:0;filter: alpha(opacity=0); display:none;">

		<!-- #site-container -->
		<div id="site-container" class="clearfix">

		  <!-- #primary-nav-mobile -->
		  <header class="header">
		    <?php get_template_part('header','mobile-menu') ?>  
		  </header>
		  <!-- /#primary-nav-mobile -->

		  <!-- #header -->
		  <header id="site-header" class="clearfix" role="banner">
		    <div class="wrap">

				<!-- #logo -->
				<div id="logo">
					<a title="Div Wikiw" href="https://github.com/Xtremefaith/div-wiki/">
						<?php #TODO: Need to get new logo placeholder ?>
						<img alt="Div Wiki" src="http://demo.herothemes.com/knowhow/wp-content/uploads/sites/4/2012/08/knowhow-logo1.png">
					</a>
				</div>
				<!-- /#logo -->

		      <!-- #primary-nav -->
		      <nav id="primary-nav" role="navigation" class="clearfix full">
		        <?php div_starter_main_nav(array(
		        	'menu_class' => 'nav top-nav'
		        )); ?>
		      </nav>
		      <!-- #primary-nav -->
		    </div>
		  </header>
		  <!-- /#header -->

		  <!-- #live-search -->
		  <div id="live-search">
		    <div class="wrap">
		    <div id="search-wrap">
		      <form role="search" method="get" id="searchform" class="clearfix" action="http://demo.herothemes.com/knowhow/">
		        <input type="text" onfocus="if (this.value == 'Have a question? Ask or enter a search term.') {this.value = '';}" onblur="if (this.value == '')  {this.value = 'Have a question? Ask or enter a search term.';}" value="Have a question? Ask or enter a search term." name="s" id="s" autocapitalize="off" autocorrect="off" autocomplete="off">
		        <i class="live-search-loading icon-spinner icon-spin"></i>
		        <button type="submit" id="searchsubmit">
		                <i class="icon-search"></i><span>Search</span>
		            </button>
		      </form>
		      </div>
		    </div>
		  </div>
		  <!-- /#live-search -->