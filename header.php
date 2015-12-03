<?php
/**
 * Test_theme template for displaying the header
 *
 * @package WordPress
 * @subpackage Test_theme
 * @since Test_theme 1.0
 */
?>

<!DOCTYPE html>
<!--[if lt IE 7]>      <html class="ie ie-no-support" <?php language_attributes(); ?>> <![endif]-->
<!--[if IE 7]>         <html class="ie ie7" <?php language_attributes(); ?>> <![endif]-->
<!--[if IE 8]>         <html class="ie ie8" <?php language_attributes(); ?>> <![endif]-->
<!--[if IE 9]>         <html class="ie ie9" <?php language_attributes(); ?>> <![endif]-->
<!--[if gt IE 9]><!--> <html <?php language_attributes(); ?>> <!--<![endif]-->
	<head>
		<meta charset="<?php bloginfo( 'charset' ); ?>" />
		<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
		<title><?php wp_title( ); ?></title>
		<meta name="viewport" content="width=device-width" />
		<link rel="icon" href="<?php echo get_template_directory_uri(); ?>/images/favicon.ico" type="image/x-icon">
		<?php wp_enqueue_script("jquery"); ?>
		<!--[if lt IE 9]>
			<script src="<?php echo get_template_directory_uri(); ?>/js/html5shiv.js"></script>
		<![endif]-->
		<?php wp_head(); ?>
		<script src="//cdnjs.cloudflare.com/ajax/libs/jquery.isotope/2.2.2/isotope.pkgd.js"></script>
	</head>
	<body <?php body_class(); ?>>


			<header class="site-header clearfix">
			<div class="container" id="main-header">
			
			<div class="col-lg-5 col-md-5 col-sm-5 col-xs-12" id="header-logo">
			<img src="<?php echo get_template_directory_uri(); ?>/images/logo.png">
			</div>
			
			<div class="col-lg-7 col-md-7 col-sm-7 col-xs-12" id="header-social">
				<ul id="social">
					<li><a href="#"><i class="fa fa-twitter fa-lg"></i></a></li>
					<li><a href="#"><i class="fa fa-facebook fa-lg"></i></a></li>
					<li><a href="#"><i class="fa fa-linkedin fa-lg"></i></a></li>
					<li><a href="#"><i class="fa fa-rss fa-lg"></i></a></li>
				</ul>
			</div>

		
			

				<!--<?php if ( '' != get_custom_header()->url ) : ?>
					<img src="<?php header_image(); ?>" class="custom-header" height="<?php echo get_custom_header()->height; ?>" width="<?php echo get_custom_header()->width; ?>" alt="" />
				<?php endif; ?>-->
			

			<div class="menu">

				<button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#responsive-menu">
					<span class="glyphicon glyphicon-plus" aria-hidden="true"></span>
				</button>
				<div class="clearfix"></div>
					<div class="collapse navbar-collapse" id="responsive-menu">
            		
            		<?php
					$nav_menu = wp_nav_menu(
						array(
							'container' => 'nav',
							'container_class' => 'main-menu',
							'items_wrap' => '<ul class="%2$s">%3$s</ul>',
							'theme_location' => 'main-menu',
							'fallback_cb' => '__return_false',
						)

					); ?>
					</div>					
				</div>

	<!--<div class="container hidden-lg hidden-md hidden-sm" id="mobile-menu">
            <button class="btn btn-default" type="button" data-toggle="collapse" data-target="#collapseExample" aria-expanded="false" aria-controls="collapseExample">
                <span class="glyphicon glyphicon-plus" aria-hidden="true"></span>
            </button>
            <div class="collapse" id="collapseExample">
                <div class="well">
                    <ul class="nav navbar-nav" id="mobile-menu-ul">
                        <li class="dropdown">
                            <a href="http://localhost/wordpress/index.php/home/" class="dropdown-toggle" data-toggle="dropdown">home</a>
                        </li>
                        <li class="dropdown">
                            <a href="http://localhost/wordpress/index.php/about/" class="dropdown-toggle" data-toggle="dropdown">about<span class="glyphicon glyphicon-triangle-bottom" id="down-desktop" aria-hidden="true"></span></a>
                            <ul class="dropdown-menu">
                                <li><a href="#">testimonials</a></li>
                                <li><a href="#">archives</a></li>
                                <li><a href="#">faqs</a></li>
                            </ul>
                        </li>
                        <li class="dropdown">
                            <a href="/services/" class="dropdown-toggle" data-toggle="dropdown">services<span class="glyphicon glyphicon-triangle-bottom" id="down-desktop" aria-hidden="true"></span></a>
                            <ul class="dropdown-menu">
                                <li><a href="#">services 2</a></li>
                                <li><a href="#">services 3</a></li>
                                <li><a href="#">services 4</a></li>
                            </ul>
                        </li>
                        <li class="dropdown">
                            <a href="/programms/" class="dropdown-toggle" data-toggle="dropdown">programs</a>
                        </li>
                        <li class="dropdown">
                            <a href="/blog/" class="dropdown-toggle" data-toggle="dropdown">blog</a>
                        </li>
                        <li class="dropdown">
                            <a href="/contacts/" class="dropdown-toggle" data-toggle="dropdown">contacts</a>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
</div>-->
<!--<script>
    jQuery(document).ready(function(){
                     
    jQuery(".menu li").hover(
                       
                     function(){                    
               jQuery(this).find('ul').show();                  
        },
                 
        function(){
        jQuery(this).find('ul').hide();                     
           }
    );          
}); 
</script>-->
		
			</header>




			