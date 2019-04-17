<!-- Últimas noticias  -->
<section id="bandasBanana">
      <div class="container-fluid"> 
          <div class="row">
            <div class="col-12 text-center titulo-seccion-amarillo-grande">
                  <h2>BANDAS BANANA </h2>  
                  </a>
            </div>
          </div>
      </div>


          <div class="container-fluid my-3 px-5">
          <div class="row">
          
          
          <?php
  $bandasBanana = 0;

  $arg = array(
    'post_type'		 => 'bandas',
    'posts_per_page' => -1
  );

  $get_arg = new WP_Query( $arg );

  while ( $get_arg->have_posts() ) {
      $bandasBanana++;
      $get_arg->the_post(); ?>

       
        <div data-aos="fade-left" class="col-12 col-sm-12 col-md-6 col-lg-3 ficha-banda" style="background-image: url('<?php echo get_the_post_thumbnail_url(); ?>'); background-size: cover; background-position: center top;">
          <div class="texto-banda">
            <a href="<?php the_permalink() ?>">
              <h3><?php the_title(); ?></h3>
            </a>
            <p><?php the_excerpt(); ?> </p>
          </div>
        </div>
 
        <?php } ?>
      </div>
      </div>    
    
    </section>
