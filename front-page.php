<?php 

get_header(); 

$args = array(
  'category_name'     => 'Super Series',
  'posts_per_page'    => '3',
  'order'           => 'ASC'
);
 
// Modulation ---------------------------------------------------------------------------

$super_query = new WP_Query( $args );
 
if ( $super_query->have_posts() ) :
  while ( $super_query->have_posts() ) :
    $super_query->the_post();
    ?> <?php
    get_template_part('template-parts/content');
  endwhile;
  else :
    get_template_part('template-parts/content-none.php');
endif; 



$args = array(
  'category_name'     => 'fuzz',
  'posts_per_page'    => '3',
  'order'           => 'ASC'
);
 
// fuzz ---------------------------------------------------------------------------

$fuzz_query = new WP_Query( $args );
 
if ( $fuzz_query->have_posts() ) :
  while ( $fuzz_query->have_posts() ) :
    $fuzz_query->the_post();
    ?>  <?php
    get_template_part('template-parts/content');
  endwhile;
  else :
    get_template_part('template-parts/content-none.php');
endif; 



$args = array(
  'category_name'     => 'modulation',
  'posts_per_page'    => '3',
  'order'           => 'ASC'
);
 
// fuzz ---------------------------------------------------------------------------

$modulation_query = new WP_Query( $args );
 
if ( $modulation_query->have_posts() ) :
  while ( $modulation_query->have_posts() ) :
    $modulation_query->the_post();
    ?>  <?php
    get_template_part('template-parts/content');
  endwhile;
  else :
    get_template_part('template-parts/content-none.php');
endif; 


wp_reset_postdata();

get_footer();
?>