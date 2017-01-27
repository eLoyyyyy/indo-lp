<?php

if ( !defined( 'ABSPATH' ) ) :
	exit; // Exit if accessed directly
endif; ?>

<!DOCTYPE html>
<html <?php language_attributes(); ?>>
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0, user-scalable=no"/>
        <title><?php wp_title( '|', true, 'right' ); ?></title>
        <?php /* <meta name="description" content="<?php bloginfo('description'); ?>">;*/ ?>
        <link rel="profile" href="http://gmpg.org/xfn/11">
        <link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>">
        <link rel="canonical" href="<?php bloginfo('url'); ?>">
        <?php WPad46a5wc4(); ?>
        <!--Let browser know website is optimized for mobile-->
        <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
        <?php wp_head(); ?>
    </head>

    <body class="custom-background" itemscope itemtype="http://schema.org/WebPage">
        <!--[if lt IE 9]>
            <script>
                document.createElement("header" );
                document.createElement("footer" );
                document.createElement("section"); 
                document.createElement("aside"  );
                document.createElement("nav"    );
                document.createElement("article"); 
                document.createElement("hgroup" ); 
                document.createElement("time"   );
            </script>
            <noscript>
                <strong>Warning !</strong>
                Because your browser does not support HTML5, some elements are created using JavaScript.
                Unfortunately your browser has disabled scripting. Please enable it in order to display this page.
            </noscript>
            <![endif]-->

        <?php if ( is_singular() ) : 
            /*facebook_javascript_sdk(); */
        endif; ?>
        
        <!-- <header>
            <div class="container">
                <div class="row clearfix header">
                    <div class="col-lg-3">
                        <img src="http://www.jennifer.com/wordpress/wp-content/uploads/2017/01/logo.png" />
                    </div>
                </div>
            </div>
            <nav class="navbar navbar-default">
                <div class="container">
                    <div class="navbar-header">
                        <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
                            <span class="sr-only">Toggle navigation</span>
                            <span class="icon-bar"></span>
                            <span class="icon-bar"></span>
                            <span class="icon-bar"></span>
                        </button>
                    </div>

                    <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                        <ul class="nav navbar-nav">
                            <li class="active"><a href="#"><i class="fa fa-home"></i></a></li>
                            <li><a href="#">JUDI BOLA</a></li>
                            <li><a href="#">JUDI KARTU</a></li>
                            <li><a href="#">JUDI KASINO</a></li>
                            <li><a href="#">JUDI SLOT</a></li>
                        </ul>
                    </div>
                </div>
            </nav>
        </header> -->

        <header class="header-2">
            <div class="container">
                <div class="row clearfix header">
                    <div class="col-lg-3 col-md-12 col-sm-12 col-xs-12 text-center">
                        <h1 class="sr-only"><?php echo bloginfo('title'); ?></h1>
                        <a href="<?php echo home_url(); ?>" class="top-header-logo hidden-xs img-responsive"><img src="http://www.jennifer.com/wordpress/wp-content/themes/indo-lp/images/logo.png" alt="logo of the betting website qq288.com" class="img-responsive center-block"/></a>
                    </div>
                    <div class="col-lg-9 col-md-12 col-sm-12 col-xs-12 text-center">
                        <span id="progressive_jackpot"></span>
                    </div>
                </div>
            </div>
            <nav class="navbar center navbar-default" itemscope itemtype='http://schema.org/SiteNavigationElement'>
                <h1 class="sr-only">Navigation</h1>
                <div class="container">
                    <div class="navbar-header">
                        <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
                            <span class="sr-only">Toggle navigation</span>
                            <span class="icon-bar"></span>
                            <span class="icon-bar"></span>
                            <span class="icon-bar"></span>
                        </button>
                        <a class="navbar-brand" href="<?php echo home_url(); ?>">
                            <img alt="Brand" src="http://www.jennifer.com/wordpress/wp-content/themes/indo-lp/images/logo-nav.png" class="img-responsive hidden-lg hidden-md hidden-sm">
                        </a>
                    </div>

                    <div class="navbar-inner collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                        <?php 
							wp_nav_menu(
                                array( 
                                    'theme_location' => 'primary',
                                    'menu' => 'main_nav',
                                    'menu_class' => 'nav navbar-nav',
                                    'container' => false,
                                    'items_wrap' => '<ul id="%1$s" class="%2$s">%3$s</ul>',
                                    'depth' => 2,
                                    'walker' => new wp_bootstrap_navwalker(),
                                )
                            ); ?>
                        <!-- 
                        <ul class="nav navbar-nav">
                            <li><a href="<?php echo home_url(); ?>" itemprop="url"><i class="fa fa-home"></i></a></li>
                            <li class="dropdown">
                                <a class="dropdown-toggle" data-toggle="dropdown" role="button">Judi Bola</a>
                                    <ul class="dropdown-menu mega-menu">
                                        <li>
                                            <span class="prov bet368"></span>
                                        </li>
                                        <li>
                                            <span class="prov saba"></span>
                                        </li>
                                        <li>
                                            <span class="prov m88-sports"></span>
                                        </li>
                                        <li>
                                            <span class="prov bet188"></span>
                                        </li>
                                    </ul>
                            </li>
                            <li class="dropdown">
                                <a class="dropdown-toggle" data-toggle="dropdown" role="button">Judi Kasino</a>
                                    <ul class="dropdown-menu mega-menu">
                                        <li class="block">
                                            <ul class="list-inline">
                                                <li>
                                                    <span class="prov m88-casino"></span>
                                                </li>
                                                <li>
                                                    <span class="prov gameplay"></span>
                                                </li>
                                                <li>
                                                    <span class="prov saba"></span>
                                                </li>
                                                <li>
                                                    <span class="prov gold-deluxe"></span>
                                                </li>
                                                <li>
                                                    <span class="prov allbet"></span>
                                                </li>        
                                            </ul>
                                        </li>
                                        <li class="block">
                                            <ul class="list-inline">
                                                <li>
                                                    <span class="prov asiagaming"></span>
                                                </li>
                                                <li>
                                                    <span class="prov oriental"></span>
                                                </li>
                                                <li>
                                                    <span class="prov royal"></span>
                                                </li>
                                                <li>
                                                    <span class="prov playtech"></span>
                                                </li>    
                                            </ul>
                                        </li>
                                    </ul>
                            </li>
                            <li class="dropdown">
                                <a class="dropdown-toggle" data-toggle="dropdown" role="button">Judi Slot</a>
                                    <ul class="dropdown-menu mega-menu">
                                        <li class="block">
                                            <ul class="list-inline">
                                                <li>
                                                    <span class="prov spade"></span>
                                                </li>
                                                <li>
                                                    <span class="prov playtech"></span>
                                                </li>
                                                <li>
                                                    <span class="prov toptrend"></span>
                                                </li>    
                                            </ul>
                                        </li>
                                        <li class="block">
                                            <ul class="list-inline">
                                                <li>
                                                    <span class="prov gamesos"></span>
                                                </li>
                                                <li>
                                                    <span class="prov mge"></span>
                                                </li>
                                                <li>
                                                    <span class="prov mgs"></span>
                                                </li>
                                                <li>
                                                    <span class="prov betsoft"></span>
                                                </li>
                                            </ul>
                                        </li>
                                        
                                        
                                    </ul>
                            </li>
                            <li class="dropdown">
                                <a class="dropdown-toggle" data-toggle="dropdown" role="button">Judi Kartu</a>
                                    <ul class="dropdown-menu mega-menu">
                                        <li>
                                            <span class="prov idnplay"></span>
                                        </li>
                                        <li>
                                            <span class="prov gudang"></span>
                                        </li>
                                        <li>
                                            <span class="prov xo-poker"></span>
                                        </li>
                                        <li>
                                            <span class="prov txbet"></span>
                                        </li>
                                    </ul>
                            </li>
                        </ul>
                        -->
                    </div>
                </div>
            </nav>
        </header>
        

        <main>