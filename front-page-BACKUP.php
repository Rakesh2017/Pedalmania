<?php 

get_header(); 


// properties for the new wp_query object
// that gets built in the next step

$args = array(
  'category_name'  => 'modulation',
  'posts_per_page' => '3',
  // 'order'        => 'ASC',
  'orderby'      => 'rand'
);

// pass the properties array to the new constructor

$modulation_query = new WP_Query($args);

// loop through this new query object, accessing with its methods with ->

if ( $modulation_query -> have_posts() ) :
  while ( $modulation_query -> have_posts() ) :
    $modulation_query -> the_post();
    get_template_part('template-parts/content');
  endwhile;
  else :
    get_template_part('template-parts/content-none.php');
endif;  

// END modulation query

?><?php
$args = array(
  'category_name'  => 'fuzz',
  'posts_per_page' => '3',
  // 'order'        => 'ASC',
  'orderby'      => 'rand'
);

// pass the properties array to the new constructor

$modulation_query = new WP_Query($args);

// loop through this new query object, accessing with its methods with ->

if ( $modulation_query -> have_posts() ) :
  while ( $modulation_query -> have_posts() ) :
    $modulation_query -> the_post();
    get_template_part('template-parts/content');
  endwhile;
  else :
    get_template_part('template-parts/content-none.php');
endif;  


// if you use the main loop on the page, run this. 

 wp_reset_postdata();


get_footer();