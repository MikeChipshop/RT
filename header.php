<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
<link rel="preconnect" href="https://fonts.gstatic.com/" crossorigin>
<link rel="preconnect" href="https://fonts.googleapis.com" crossorigin>
<meta charset="<?php bloginfo( 'charset' ); ?>" />
<meta name="viewport" content="width=device-width, initial-scale=1" />
<title><?php wp_title('|', true, 'left'); ?></title>
<link rel="profile" href="http://gmpg.org/xfn/11" />
<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>" />
<link rel="apple-touch-icon" sizes="180x180" href="/apple-touch-icon.png">
<link rel="icon" type="image/png" sizes="32x32" href="/favicon-32x32.png">
<link rel="icon" type="image/png" sizes="16x16" href="/favicon-16x16.png">
<link rel="manifest" href="/site.webmanifest">
<link rel="mask-icon" href="/safari-pinned-tab.svg" color="#00599e">
<meta name="msapplication-TileColor" content="#ffffff">
<meta name="theme-color" content="#ffffff">
<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
<div class="rt_gdpr-bar" style="display:none;">
    <div class="rt_gdpr-inner">
        <h2><?php the_field('gdpr_notice_title','option'); ?></h2>
        <div class="rt_gdpr-inner-content">
            <?php the_field('gdpr_notice_content','option'); ?>
            <button aria-label="Close GDPR Popup"><i class="fas fa-window-close"></i></button>
        </div>
    </div>
</div>
<div class="rt_topbar">
    <div class="rt_topbar-left">

      <ul>
          <li><a target="_blank" rel="noreferrer" href="https://business.google.com/dashboard/l/00218186411982608153?hl=en" title="Find RT Alkin on Google+"><i class="fab fa-google-plus-square"></i></a></li>
          <li><a target="_blank" rel="noreferrer" href="https://www.facebook.com/RTAlkinLeadworkandRoofing" title="Find RT Alkin on Facebook"><i class="fab fa-facebook-square"></i></a></li>
          <li><a target="_blank" rel="noreferrer" href="https://twitter.com/rtalkinleadwork" title="Follow RT alkin on Twitter"><i class="fab fa-twitter-square"></i></a></li>
          <li><a target="_blank" rel="noreferrer" href="https://www.houzz.co.uk/pro/rtalkinleadwork/rt-alkin-leadwork" title="Find RT Alkin on Houzz"><i class="fab fa-houzz"></i></a></li>
      </ul>
</div>
    <div class="rt_topbar-right">
    <p class="phoneWrapper"><a class="phoneNum" href="tel:+447703102725"><i class="fas fa-phone fa-flip-horizontal"></i> Call for a quote: 07703 102725</a></p>
</div>
</div>
<div id="container">

	<header id="branding" role="banner">
      <div id="inner-header" class="clearfix">

        <div id="site-heading">
            <div id="site-logo">
                <a href="<?php echo esc_url( home_url( '/' ) ); ?>" title="<?php echo esc_attr( get_bloginfo( 'name', 'display' ) ); ?>" rel="home">
                    <img src="<?php bloginfo('stylesheet_directory'); ?>/images/rt-alkin-logo.png" alt="<?php bloginfo('name'); ?>" />
                </a>
            </div>
        </div>

        <div id="social-media" class="clearfix">
            <p><?php echo get_bloginfo ( 'description' );  ?><br /></p>
            <div class="rt_header-search"><?php get_search_form(); ?></div>
        </div>



      </div>

      <nav id="access" role="navigation">
        <h1 class="assistive-text section-heading"><?php _e( 'Main menu', 'attorney' ); ?></h1>
        <div class="skip-link screen-reader-text"><a href="#content" title="<?php esc_attr_e( 'Skip to content', 'attorney' ); ?>"><?php _e( 'Skip to content', 'attorney' ); ?></a></div>
        <div class="menu">
            <div id="menu-icon">Menu</div>
            <ul id="menu-main-menu" class="menu">
                <?php wp_nav_menu(
                    array(
                        'theme_location' => 'top_menu',
                        'container'      => '',
                        'items_wrap'    => '%3$s',
                    ));
                ?>
            </ul>
        </div>
    </nav>
</header>
