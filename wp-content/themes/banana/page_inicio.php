<?php /* Template Name: Inicio */ ?>
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

    <!-- RRSS -->
    <section id="bananaSocial">
      <div class="container-fluid"> 
          <div class="row">
            <div class="col-12 text-center">
            <div class="instagram"></div>
            </div>
          </div> 
      </div>
    </section>
  
  </main> 
    
  <!-- Footer -->
  <?php get_footer();?>