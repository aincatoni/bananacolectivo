<?php /* Template Name: Nosotros */ ?>

  <!-- Header -->
  <?php get_header();?>
<section id="bananaNosotros">
  
  <div class="container-fluid mt-5">
    <div class="container">
      <div class="row">
        <div class="col-12">
            <div class="text-center titulo-seccion-amarillo-dark-grande">
              <h2><?php the_title();?></h2>
            </div> 
            <div><?php the_post();?></div>
            <p><?php the_content();?></p>
        </div>
      </div>
    </div>
  </div>



  
</section>
  <!-- Footer -->
  <?php get_footer();?>

  