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
      <style type="text/css">
        #mc_embed_signup{background:#fff; clear:left; display:inline-block; display:-moz-groupbox; float:left; margin-left:0; margin-right:auto; width:80%; }
        #mc_embed_signup .mc-field-group {width:25%; display:inline-block; display:-moz-groupbox; margin-top:.6em; margin-right:.8em; padding-bottom:0; }
        #mc_embed_signup .mc-field-group-submit {display:inline-block; display:-moz-groupbox; margin-top:auto; margin=bottom:auto; padding-right:.6em; padding-left:.6em; }
        #mc_embed_signup .button {background:#c59b42;vertical-align:baseline;}
        /* Add your own MailChimp form style overrides in your site stylesheet or in this style block.
           We recommend moving this block and the preceding CSS link to the HEAD of your HTML file. */
      </style>

      <div id="mc_embed_signup">
      <div style="width:100%; margin:0; padding-top:1em; background:#000;"><span style="color:#fff; font-size:15px; padding-left:1em;">Sign up to learn more about our community, commitment and campaign, plus, we'll send you a "My Dream for the Next Generation of Women" poster.</span></div>
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
