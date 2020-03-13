<?php ?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <?php wp_head(); ?>
 
</head>
<body <?php body_class(); ?>>
<header class="site-header">

  <div>

  <h2><a class="title-link" href="<?php home_url();?>"><?php bloginfo( 'name' ); ?></a></h2>
  <div>
    <p><?php bloginfo( 'description' ); ?></p>
  </div>

    <ul>
      <li><a href=""><span class="fas fa-bars"></span></a></li>
      <li><a href=""><span class="fas fa-search"></span></a></li>
      <li><a href=""><span class="fas fa-share"></span></a></li>
    </ul>
  </div>

</header>


<div id="primary" class="content-area">
<?php if (is_category()) {

?> 
  <div class="div1">
    <h1 class="category-title">CATEGORY: <?php wp_title(' '); ?> </h1>
  </div>
<?php

} ?>
  <main id="main" class="site-main">
    

  