<?php get_header(); ?>

			<div id="content" class="clearfix">

				<?php if(of_get_option('sc_blurbhome') == '1') { ?>
				<!-- begin .blurb -->
				<div class="container">
					<div class="intro-page">
						<?php if(!of_get_option('sc_blurb') == '')  { ?>
						<h2><?php echo of_get_option('sc_blurb') ?></h2>
						<?php }?>
					</div>
				</div>
				<!-- end .blurb -->
				<?php } ?>





				<?php if(of_get_option('sc_displayslider') == '1') { ?>
					<?php if(of_get_option('sc_slidertype') == 'flex') { ?>
						<?php get_template_part( 'homepage', 'slider' ); ?>
					<?php } ?>
				<?php } ?>


<div align="center" class=html>
<br>
<br>
	<div>
		<span font: 18px;>Sign up for my mailing list and receive a FREE resource: Which Type of Designer Are You Looking to Hire?</span>
	</div>
<br>
<form action="//rouxroamer.us8.list-manage.com/subscribe/post?u=595b6cbab2f215309dbeebd88&amp;id=67f40e452e" method="post" id="mc-embedded-subscribe-form" name="mc-embedded-subscribe-form" class="validate" target="_blank" novalidate>


	<link href="//cdn-images.mailchimp.com/embedcode/classic-081711.css" rel="stylesheet" type="text/css" />

<link href='http://fonts.googleapis.com/css?family=Raleway' rel='stylesheet' type='text/css'>

<style type="text/css"><!--
#mc_embed_signup{background:#fff; clear:left ; font-family:'Raleway', sans-serif; font:14px; }
/* Add your own MailChimp form style overrides in your site stylesheet or in this style block.
We recommend moving this block and the preceding CSS link to the HEAD of your HTML file. */
#mc_embed_signup form {padding: 0;}
#mc_embed_signup .mc-field-group{display: inline-block; clear: none; width: auto; padding: 0; min-height: 0;}
#mc_embed_signup .mc-field-group label {display: none; width: auto; padding: 0; min-height: 0; margin: 0}
#mc_embed_signup .mc-field-group input {width: 280px; border: solid 1px #b1b1b1; margin: 0 8px 0 0; display: inline-block; box-shadow: inset 0 0 0px 0px rgba(0, 0, 0, 0); vertical-align: middle;}
#mc_embed_signup .mc-field-group input[type="submit"] {font-family: 'Raleway', sans-serif; font: 18px; width: 160px; background: #e64135; box-shadow: 0 2px 4px 2px rgba(177, 177, 177, 0.7); border: none; padding: 0; text-indent: 0; border-radius: 16px;}
--></style>
<div id="mc_embed_signup"><form action="//rouxroamer.us8.list-manage.com/subscribe/post?u=595b6cbab2f215309dbeebd88&amp;id=67f40e452e" method="post" id="mc-embedded-subscribe-form" name="mc-embedded-subscribe-form" class="validate" target="_blank" novalidate>
<div class="mc-field-group"><label for="mce-FNAME">Name</label><input id="mce-FNAME" type="text" name="FNAME" placeholder="NAME" value="" /></div>
<div class="mc-field-group"><label for="mce-EMAIL">Email Address</label><input class="required email" id="mce-EMAIL" type="email" name="EMAIL" placeholder="EMAIL" value="" /></div>
<div class="clear" id="mce-responses"></div>
<div style="position: absolute; left: -5000px;"><!-- real people should not fill this in and expect good things - do not remove this or risk form bot signups--><input tabindex="-1" type="text" name="" value="" /></div>
<div class="mc-field-group"><input class="button" id="mc-embedded-subscribe" type="submit" name="subscribe" value="Subcribe" /></div>
</form></div>
<script type="text/javascript" src="//s3.amazonaws.com/downloads.mailchimp.com/js/mc-validate.js"></script><script type="text/javascript" language="javascript">// <![CDATA[
function redirect() {
            window.location.href = '/clientarea.php?action=details';
        }
// ]]></script>
<script type="text/javascript">// <![CDATA[
(function($) {
window.fnames = new Array(); window.ftypes = new Array();fnames[0]='EMAIL';ftypes[0]='email';fnames[1]='FNAME';ftypes[1]='text';
}(jQuery));
var $mcj = jQuery.noConflict(true);
// ]]></script>
<!--End mc_embed_signup-->
<br>
<br>
</div>

				<?php if(of_get_option('sc_homecontent') == '1') { ?>

				<!--begin cols content -->
				<div class="container clearfix">
					<?php if( of_get_option('sc_homecontent1img') ||  of_get_option('sc_homecontent1title') || of_get_option('sc_homecontent1') ) : ?>
					<div class="one-half">
						<?php if( of_get_option('sc_homecontent1img')): ?><img src="<?php echo of_get_option('sc_homecontent1img') ?>" class="img-align-left" alt="<?php echo of_get_option('sc_homecontent1title') ?>" /><?php endif ?>
						<h3><?php echo of_get_option('sc_homecontent1title') ?></h3>
						<p><?php echo of_get_option('sc_homecontent1') ?></p>
						<?php if (of_get_option('sc_homecontent1url')!='') { ?>
						<p class="readmore">
							<a href="<?php echo of_get_option('sc_homecontent1url') ?>"><?php _e('Read more…', 'site5framework') ?></a>
						</p>
						<?php } ?>
					</div>
					<?php endif ?>

					<?php if( of_get_option('sc_homecontent2img') ||  of_get_option('sc_homecontent2title') || of_get_option('sc_homecontent2') ) : ?>
					<div class="one-half last">
						<?php if( of_get_option('sc_homecontent2img')): ?><img src="<?php echo of_get_option('sc_homecontent2img') ?>" class="img-align-left" alt="<?php echo of_get_option('sc_homecontent2title') ?>" /><?php endif ?>
						<h3><?php echo of_get_option('sc_homecontent2title') ?></h3>
						<p><?php echo of_get_option('sc_homecontent2') ?></p>
						<?php if (of_get_option('sc_homecontent2url')!='') { ?>
						<p class="readmore">
							<a href="<?php echo of_get_option('sc_homecontent2url') ?>"><?php _e('Read more…', 'site5framework') ?></a>
						</p>
						<?php } ?>
					</div>
					<?php endif ?>
				</div>

				<div class="container clearfix">
					<?php if( of_get_option('sc_homecontent3img') ||  of_get_option('sc_homecontent3title') || of_get_option('sc_homecontent3') ) : ?>
					<div class="one-half">
						<?php if( of_get_option('sc_homecontent3img')): ?><img src="<?php echo of_get_option('sc_homecontent3img') ?>" class="img-align-left" alt="<?php echo of_get_option('sc_homecontent3title') ?>" /><?php endif ?>
						<h3><?php echo of_get_option('sc_homecontent3title') ?></h3>
						<p><?php echo of_get_option('sc_homecontent3') ?></p>
						<?php if (of_get_option('sc_homecontent3url')!='') { ?>
						<p class="readmore">
							<a href="<?php echo of_get_option('sc_homecontent3url') ?>"><?php _e('Read more…', 'site5framework') ?></a>
						</p>
						<?php } ?>
					</div>
					<?php endif ?>

					<?php if( of_get_option('sc_homecontent4img') ||  of_get_option('sc_homecontent4title') || of_get_option('sc_homecontent4') ) : ?>
					<div class="one-half last">
						<?php if( of_get_option('sc_homecontent4img')): ?><img src="<?php echo of_get_option('sc_homecontent4img') ?>" class="img-align-left" alt="<?php echo of_get_option('sc_homecontent4title') ?>" /><?php endif ?>
						<h3><?php echo of_get_option('sc_homecontent4title') ?></h3>
						<p><?php echo of_get_option('sc_homecontent4') ?></p>
						<?php if (of_get_option('sc_homecontent4url')!='') { ?>
						<p class="readmore">
							<a href="<?php echo of_get_option('sc_homecontent4url') ?>"><?php _e('Read more…', 'site5framework') ?></a>
						</p>
						<?php } ?>
					</div>
					<?php endif ?>

					<div class="horizontal-line"> </div>

				</div>



				<!-- end cols content -->

				<?php } ?>



				<?php if(of_get_option('sc_portfoliohome') == '1') : ?>
				<div class="container clearfix">

					<h3><?php echo of_get_option('sc_portfoliohometitle') ?></h3>

					<?php
					$args=array('post_type'=> 'portfolio', 'post_status'=> 'publish','orderby'=> 'menu_order','posts_per_page'=>8,'showposts'=>8,'caller_get_posts'=>1,'paged'=>$paged,); query_posts($args);
					if ( have_posts() ) :
					?>
					<ul id="projects-carousel" class="loading">
						<?php
						while (have_posts()): the_post();
							$categories = wp_get_object_terms( get_the_ID(), 'types');
						?>
						<!-- PROJECT ITEM STARTS -->
						<li>
						<div class="item-content">
							<div class="link-holder">
								<div class="portfolio-item-holder">
									<div class="portfolio-item-hover-content">




										<?php
										$thumbId = get_image_id_by_link ( get_post_meta($post->ID, 'snbp_pitemlink', true) );

										$thumb = wp_get_attachment_image_src($thumbId, 'portfolio-thumbnail', false);
										$large = wp_get_attachment_image_src($thumbId, 'large', false);

										if (!$thumb == ''){ ?>

										<a href="<?php echo $large[0] ?>" title="<?php the_title(); ?>" data-rel="prettyPhoto" class="zoom">View Image</a>

										<img src="<?php echo $thumb[0] ?>" alt="<?php the_title(); ?>" width="220" class="portfolio-img" />
										<?php } else { ?>
										<img src="<?php echo get_template_directory_uri(); ?>/library/images/sampleimages/portfolio-img.jpg" alt="<?php the_title(); ?>" width="220"  class="portfolio-img" />
										<?php }?>

										<div class="hover-options"></div>
									</div>
								</div>
								<div class="description">
									<p>
										<a href="<?php the_permalink() ?>" title="<?php the_title(); ?>"> <?php the_title(); ?> </a>
									</p>
									<span><?php $separator = ''; foreach ($categories as $category) { echo $separator . $category->name; $separator=' / ';} ?></span>
								</div>
							</div>
						</div>
						</li>
						<!-- PROJECT ITEM ENDS -->
						<?php
						endwhile;
						wp_reset_query();
						?>
					</ul>
					<!-- // optional "view full portfolio" button on homepage featured projects -->
					<a href="<?php echo of_get_option('sc_portfoliohomebuttonurl') ?>" class="colored" title="<?php echo of_get_option('sc_portfoliohomebuttontitle') ?>"><?php echo of_get_option('sc_portfoliohomebuttontitle') ?></a>
					<?php
					else :
					?>

					<?php
					endif;
					?>



				</div>
				<?php endif ?>



			</div> <!-- end #content -->
<?php get_footer(); ?>
