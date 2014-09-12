<?php
/*
Template Name: Accordianblog
*/
?>
<?php get_header(); ?>
<!-- Accordian for blog ==================================================
================================================== -->

<div class="worksingle">
  <div class="container">
    <?php
$args = array(
				'post_type' => 'post',
				'posts_per_page' => '4',
			);

$wpacc = new WP_Query( $args );

if ($wpacc->have_posts()) : while ( $wpacc->have_posts() ) : $wpacc->the_post();
?>
    <div class="accordion-trigger">
      <h4>
        <?php the_title(); ?>
      </h4>
    </div>
    <div class="accordion-container">
      <a class="thumb" href="<?php the_permalink() ?>">
        <?php
      if ( has_post_thumbnail() ) { // check if the post has a Post Thumbnail assigned to it.
        the_post_thumbnail( array( 'class' => 'accthumb' ) );
      }
         ?>
        </a>
      <?php the_excerpt();?>
      <div class="clear"></div>
    </div>
    <?php
endwhile;
else :
?>
    <?php

endif; // END the Wordpress Loop
wp_reset_query(); // Reset the Query Loop
?>
  </div>
  <!--end container-->
  <div class="container work">
    <div id="pagination" class="fl">
      <?php
global $wp_query;

$big = 999999999; // need an unlikely integer

echo paginate_links( array(
	'base' => str_replace( $big, '%#%', esc_url( get_pagenum_link( $big ) ) ),
	'format' => '?paged=%#%',
	'current' => max( 1, get_query_var('paged') ),
	'prev_text'    => __('&lang;', 'anariel'),
	'next_text'    => __('&rang;', 'anariel'),
	'total' => $wp_query->max_num_pages
) );
?>
    </div>
    <?php wp_link_pages(); ?>
  </div>
</div>
<?php get_footer(); ?>
