<!-- Banana Sesiones -->
<section id="bananaSesiones">
      <div class="container-fluid mt-5"> 
          <div class="row">
            <div class="col-12 text-center px-0 titulo-seccion-amarillo-grande">
            <h2>BANANA SESIONES</h2>  
            </div>
          </div> 
      </div>
      <!-- LOOP CPT SESIONES -->
      <div class="container-fluid my-3 px-5">
          
              
            <?php
            $sb = 0;
        $arg = array(
          'post_type'		 => 'sesiones',
          'posts_per_page' => -1
        );

        $get_arg = new WP_Query( $arg );

        while ( $get_arg->have_posts() ) {
            $sb++;
            $get_arg->the_post(); ?>

            <?php if($sb === 1){ ?>  
            <div class="row">
              <div data-aos="fade-right" class="col-12 col-sm-12 col-md-8 col-lg-8 extracto-sesion-grande px-0" style="background-image: url('<?php echo get_the_post_thumbnail_url(); ?>'); background-size: cover; background-position: center;">
            <?php } ?>
            
            <?php if($sb === 2){ ?>
              <div data-aos="fade-right" class="col-12 col-sm-12 col-md-4 col-lg-4 px-0">
              <?php } ?>

            <?php if($sb === 2 || $sb === 3){ ?>  
              <div data-aos="fade-left" class="col-12 col-sm-12 col-md-12 col-lg-12 extracto-sesion-medio" style="background-image: url('<?php echo get_the_post_thumbnail_url(); ?>'); background-size: cover; background-position: center;">
              
            <?php } ?>
            <?php if($sb > 3){ ?>  
              <div data-aos="fade-up" class="col-6 col-sm-3 col-md-3 col-lg-3 extracto-sesion-chico" style="background-image: url('<?php echo get_the_post_thumbnail_url(); ?>'); background-size: cover; background-position: center;">
            <?php } ?>
            <div class="overlayblack"></div>
            <div class=" bajotexto"></div>
           
                <div class="extracto-sesion-texto">  
                <h3> <?php the_title(); ?> </h3>
                  <p><?php the_excerpt(); ?></p>
                  <span><a href="<?php the_permalink() ?>">Revisa la sesión aquí</a></span>
                </div>
              </div>
              <?php if($sb === 3){ ?>
              </div>
              </div>
              <div class="row">
              <?php } ?>

              
        <?php 
        } ?>
        <?php if($sb !== 3 ){ ?>
                </div>
              <?php } ?>
       
      </div>
    </section>