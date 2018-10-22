<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
<meta charset="<?php bloginfo( 'charset' ); ?>" />
<meta name="viewport" content="width=device-width, initial-scale=1" />
<title><?php wp_title('|', true, 'left'); ?></title>
<link rel="profile" href="http://gmpg.org/xfn/11" />
<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>" />


<?php wp_head(); ?>
<script type="text/javascript" src="https://maps.googleapis.com/maps/api/js?key=AIzaSyC_oWa8xmTOpD0ISjI5rQUXBEEM77aWSQc&sensor=false"></script>
</head>

<body <?php body_class(); ?>>
<div id="container">

	<header id="branding" role="banner">
      <div id="inner-header" class="clearfix">

        <div id="site-heading">
        	<?php if ( get_theme_mod( 'attorney_logo' ) ) : ?>
            <div id="site-logo"><a href="<?php echo esc_url( home_url( '/' ) ); ?>" title="<?php echo esc_attr( get_bloginfo( 'name', 'display' ) ); ?>" rel="home"><img src="<?php echo esc_url( get_theme_mod( 'attorney_logo' ) ); ?>" alt="<?php echo esc_attr( get_bloginfo( 'name', 'display' ) ); ?>" /></a></div>
            <?php else : ?>
			<div id="site-title"><a href="<?php echo esc_url( home_url( '/' ) ); ?>" title="<?php echo esc_attr( get_bloginfo( 'name', 'display' ) ); ?>" rel="home"><?php bloginfo( 'name' ); ?></a></div>
			<div id="site-description"><?php bloginfo( 'description' ); ?></div>
            <?php endif; ?>
		</div>

        <div id="social-media" class="clearfix">
            <p class="phoneWrapper">Call for a quote: <a class="phoneNum" href="tel:+447703102725">07703 102725</a></p>
            <p><?php echo get_bloginfo ( 'description' );  ?><br /></p>
        </div>



      </div>

      <nav id="access" role="navigation">
        <h1 class="assistive-text section-heading"><?php _e( 'Main menu', 'attorney' ); ?></h1>
        <div class="skip-link screen-reader-text"><a href="#content" title="<?php esc_attr_e( 'Skip to content', 'attorney' ); ?>"><?php _e( 'Skip to content', 'attorney' ); ?></a></div>
        <?php attorney_main_nav(); // Adjust using Menus in Wordpress Admin ?>
        <?php //get_search_form(); ?>
      </nav><!-- #access -->

	</header><!-- #branding -->
