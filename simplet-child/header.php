<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
<meta charset="<?php bloginfo( 'charset' ); ?>" />
<!--=================================== Mobile Specific Meta  ===================================-->
<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=0">
<!-- Favicons ==================================================
================================================== -->
<link rel="shortcut icon" href="<?php echo get_theme_mod( 'anariel_favicon' ); ?>">
<title>
<?php wp_title( '|', true, 'right' ); ?>
</title>
<link rel="profile" href="http://gmpg.org/xfn/11" />
<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>" />
<?php wp_head(); ?>
</head>
<body <?php body_class('main_body'); ?>>

<!-- Mailchimp stylesheet link =====-->

<link href="//cdn-images.mailchimp.com/embedcode/classic-081711.css" rel="stylesheet" type="text/css">

<!--Content Part - Navigation and Logo ==================================================
================================================== -->
<div id="headerbox">
  <div class="container header">
    <header>
      <div class="social-media-container">
        <a href="https://www.facebook.com/womenenough" target="_blank" title="Women Enough" class="media-link">
          <img src="http://www.rouxroamer.com/womenenough/wp-content/uploads/2014/09/facebookison.png" class="media-ico">
        </a>
        <a href="https://www.twitter.com/women_enough" target="_blank" title="Women Enough" class="media-link">
          <img src="http://www.rouxroamer.com/womenenough/wp-content/uploads/2014/09/twittericon.png" class="media-ico">
        </a>
        <a href="http://www.pinterest.com/women_enough" target="_blank" title="Women Enough" class="media-link">
          <img src="http://www.rouxroamer.com/womenenough/wp-content/uploads/2014/09/pinteresticon.png" class="media-ico">
        </a>
        <a href="http://www.youtube.com/" target="_blank" title="Women Enough" class="media-link">
          <img src="http://www.rouxroamer.com/womenenough/wp-content/uploads/2014/09/youtubeicon.png" class="media-ico">
        </a>
        <a href="mailto:michelle@womenenough.com" target="_blank" title="michelle@womenenough.com" class="media-link">
          <img src="http://www.rouxroamer.com/womenenough/wp-content/uploads/2014/09/mailicon.png" class="media-ico">
        </a>
      </div>
      <?php if ( get_theme_mod( 'anariel_logo' ) ) : ?>
      <div class="site-logo"> <a href="<?php echo esc_url( home_url( '/' ) ); ?>" title="<?php echo esc_attr( get_bloginfo( 'name', 'display' ) ); ?>" rel="home"><img src="<?php echo get_theme_mod( 'anariel_logo' ); ?>" alt="<?php echo esc_attr( get_bloginfo( 'name', 'display' ) ); ?>"></a> </div>
      <?php else : ?>
      <div id="site-title">
        <h1><a href="<?php echo esc_url( home_url( '/' ) ); ?>" title="<?php echo esc_attr( get_bloginfo( 'name', 'display' ) ); ?>" rel="home">
          <?php bloginfo( 'name' ); ?>
          </a></h1>
        <h2 id="site-description">
          <?php bloginfo( 'description' ); ?>
        </h2>
      </div>
      <?php endif; ?>
      <nav id="navigation">
        <?php if ( has_nav_menu( 'primary-menu' ) ) { /* if menu location 'primary-menu' exists then use custom menu */ ?>
        <?php wp_nav_menu( array( 'theme_location' => 'primary-menu', 'menu_id' => 'nav', 'container' => '',) ); ?>
        <?php } else { /* else use wp_list_pages */?>
        <ul id="nav">
          <?php wp_list_pages('title_li=&depth=2'); ?>
          <?php if (is_page('home')) { echo "current_page_item"; }?>
        </ul>
        <?php } ?>
      </nav>
    </header>
  </div>
</div>
<img class="headerimage" src="<?php header_image(); ?>" height="<?php echo get_custom_header()->height; ?>" width="<?php echo get_custom_header()->width; ?>" alt="" />
