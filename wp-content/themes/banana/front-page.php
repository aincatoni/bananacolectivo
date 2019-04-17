  <!-- Header -->
  <?php get_header();?>
    
  <!-- Banner Principal / Slider  -->
    <?php get_template_part('bannerslider') ?>
    
  <!-- Main Content -->
  <main>
    
  <!-- Sesiones Banana -->
  <?php get_template_part('sesionesbanana') ?>
    
    <!-- Últimas noticias -->
    <?php get_template_part('noticiasbanana') ?>
  
    <!-- Eventos Banana -->
    <?php get_template_part('eventosbanana') ?>
   

     <!-- Bandas Banana -->
     <?php get_template_part('bandasbanana') ?>

    <!-- LASTFM -->
    <?php get_template_part('bandaslastfm') ?>
  
  </main> 
    
  <!-- Footer -->
  <?php get_footer();?>