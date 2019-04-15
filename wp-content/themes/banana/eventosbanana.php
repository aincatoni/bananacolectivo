<section id="bananaEventos">
      <div class="container-fluid"> 
            <div class="row">
              <div class="col-12 text-center titulo-seccion-cian-grande">
                <h2>BANANA EVENTOS</h2>  
                </a>
                <h3> EVENTOS DESTACADOS</h3>
              </div>
            </div> 
      </div>
      <div class="container-fluid">
        

        <div class="row" id="previewEventos">
        <?php
            $eb = 0;
        $arg = array(
          'post_type'		 => 'eventos',
          'posts_per_page' => -1
        );

        $get_arg = new WP_Query( $arg );

        while ( $get_arg->have_posts() ) {
            $eb++;
            $get_arg->the_post(); ?>

        
          
            <div data-aos="fade-left" class="col-12 col-sm-6 col-md-6 col-lg-3 my-4">
          
              <div class="ficha-evento">
                <a href="<?php the_permalink() ?>">
                  <div class="imagen-evento" style="background-image: url('<?php echo get_the_post_thumbnail_url(); ?>'); background-size: cover; background-position: center;">
                    <div class="overlayblack"></div>
                  </div>
                </a> 
                <div class="texto-ficha-evento">
                  <h4> <?php the_field('nombre_del_evento'); ?> </h4>
                  <h5><i class="fas fa-map-marker-alt"></i> <?php the_field('lugar_del_evento'); ?></h5>
                  
                  <ul>
                  <li><?php the_field('fecha_del_evento'); ?></li>
                  <li>-</li>
                  <li><?php the_field('horario_de_inicio'); ?></li>
                  <li>-</li>
                  <li><?php the_field('horario_de_cierre'); ?></li>
                  </ul>
                  
                  <p><?php the_excerpt(); ?></p>
                  <span><a href="<?php the_permalink() ?>">Revisa los detalles del evento aquí</a></span>
                </div>
              </div>

         
          </div>
          <?php 
        } ?>
          </div>
        
      </div>
    </section>