<?php ?>
<article <?php post_class(); ?>>
 
<div class="cat">
  <div class="cat-sub"><?php the_category(" • "); ?></div>
    <div class="entry-thumbnail">
      <?php the_post_thumbnail(); ?>
    </div>
</div>

<div class="text-content">
  <h2>
      <a href="<?php the_permalink();?>"><?php the_title(); ?></a> 
  </h2>
  <div class="short-div">
    <p class="ex-content">
      <?php
      if ( !is_single() ):
            $limit = 50;
            $excerpt = explode(' ', get_the_excerpt(), $limit);
            array_pop($excerpt);
            $excerpt = implode(" ",$excerpt)."[...] <br><br><br>";
            echo $excerpt; 
            ?><div class="next-link"><a class='read-more' href=' <?php the_permalink();  ?> '>Read more</a></div><?php
      else: 
        the_content();
      endif;    
      ?>  
    </p>


    <div class="custom">
      <p><?php echo get_post_meta($post->ID, 'Price', true); ?></p>
      <p class="p2"><?php echo get_post_meta($post->ID, 'Year', true); ?></p>
    </div>

  </div>
</div>

</article>