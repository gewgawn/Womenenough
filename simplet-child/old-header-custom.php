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

<!--Content Part - Navigation and Logo ==================================================
================================================== -->
<div id="headerbox">
  <div class="container header">
    <header>
      <!-- Begin MailChimp Signup Form -->
      <link href="//cdn-images.mailchimp.com/embedcode/classic-081711.css" rel="stylesheet" type="text/css">

      <div id="mc_embed_signup">
      <div style="width:100%; margin:0; padding-top:1em; background:#000;"><span style="color:#fff; font-size:15px; padding-left:1em;">Join our community, plus, we'll send you a free poster.</span></div>
      <form  style="background:#000;" action="//WomenEnough.us8.list-manage.com/subscribe/post?u=12e75866274e1809377ce4b1b&amp;id=0f0f7b0d1c" method="post" id="mc-embedded-subscribe-form" name="mc-embedded-subscribe-form" class="validate" target="_blank" novalidate>

      <div class="mc-field-group">
        <input type="email" value="" name="EMAIL" class="required email" id="mce-EMAIL" placeholder="Email">
      </div>
      <div class="mc-field-group">
        <input type="text" value="" name="FNAME" class="" id="mce-FNAME" placeholder="First Name">
      </div>
      <div class="mc-field-group">
        <input type="text" value="" name="LNAME" class="" id="mce-LNAME" placeholder="Last Name">
      </div>
        <div id="mce-responses" class="clear">
          <div class="response" id="mce-error-response" style="display:none"></div>
          <div class="response" id="mce-success-response" style="display:none"></div>
        </div>    <!-- real people should not fill this in and expect good things - do not remove this or risk form bot signups-->
          <div style="position: absolute; left: -5000px;"><input type="text" name="b_12e75866274e1809377ce4b1b_0f0f7b0d1c" tabindex="-1" value=""></div>
          <div class="mc-field-group-submit"><input type="submit" value="Subscribe" name="subscribe" id="mc-embedded-subscribe" class="button"></div>
      </form>
      </div>
      <script type='text/javascript' src='//s3.amazonaws.com/downloads.mailchimp.com/js/mc-validate.js'></script><script type='text/javascript'>(function($) {window.fnames = new Array(); window.ftypes = new Array();fnames[0]='EMAIL';ftypes[0]='email';fnames[1]='FNAME';ftypes[1]='text';fnames[2]='LNAME';ftypes[2]='text';}(jQuery));var $mcj = jQuery.noConflict(true);</script>
      <!--End mc_embed_signup-->
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
