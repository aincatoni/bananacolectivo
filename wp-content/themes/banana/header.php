<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title><?php bloginfo('name') ?></title>
  <?php wp_head(); ?> 
</head>
<body data-spy="scroll" data-target="#navbar-example">
  
  <!-- Header -->
  <header>
    

<nav id="navbar-example2" class="navbar navbar-expand-lg navbar-light nav-banana bg-amarillo-banana">
  <div class="nav-logo-banana">
  <a class="navbar-brand" href="<?php echo get_home_url() ?>">
    <img class="img-fluid logo-bana-nav" src="/recursos/BANANA/banana-logo-horizontal-navbar.png" alt="">
  </a>
  </div>  

  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>
  <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
    <div class="navbar-nav ml-auto" >
    
      
    <?php if (has_nav_menu( 'header-menu' )) { ?>
      <?php wp_nav_menu(array( 
        'theme_location' 	=> 'header-menu',
        'menu_class'     	=> 'navbar-nav',
        'container_class' => 'ml-auto'    
      )); ?>
    <?php } ?>


    </div>
  </div>
</nav>








  </header> 