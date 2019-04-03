  <!-- Header -->
  <?php get_header();?>

  <!-- Main Content -->
  <main>
    
    <!-- Banana Sesiones -->
    <section id="bananaSesiones">
      <div class="container-fluid mt-3"> 
          <div class="row">
            <div class="col-12 text-center px-0">
              <a href="">
                <img src="https://via.placeholder.com/2000x400.png?text=Banana+Sesiones" class="img-fluid" alt="">
              </a>
            </div>
          </div> 
      </div>
      <!-- LOOP CPT SESIONES -->
      <div class="container-fluid my-3 px-5">
          
              
            <?php
            $i = 0;
        $arg = array(
          'post_type'		 => 'sesiones',
          'posts_per_page' => -1
        );

        $get_arg = new WP_Query( $arg );

        while ( $get_arg->have_posts() ) {
            $i++;
            $get_arg->the_post(); ?>
            <?php if($i === 1){ ?>  
            <div class="row">
              <div class="col-12 col-sm-12 col-md-8 col-lg-8 extracto-sesion-grande px-0">
            <?php } ?>
            
            <?php if($i === 2){ ?>
              <div class="col-12 col-sm-12 col-md-4 col-lg-4 px-0">
              <?php } ?>

            <?php if($i === 2 || $i === 3){ ?>  
              <div class="col-12 col-sm-12 col-md-12 col-lg-12 extracto-sesion-medio">
              
            <?php } ?>
            <?php if($i > 3){ ?>  
              <div class="col-6 col-sm-3 col-md-3 col-lg-3 extracto-sesion-chico">
            <?php } ?>
                <div class="extracto-sesion-grande-texto">  

                <h3> <?php the_title(); ?> </h3>
                  <p><?php the_excerpt(); ?></p>
                  <span><a href="<?php the_permalink() ?>">Leer más ...</a></span>

                  
                </div>
              </div>
              <?php if($i === 3){ ?>
              </div>
              </div>
              <div class="row">
              <?php } ?>

              
        <?php 
        } ?>
        <?php if($i !== 3 ){ ?>
                </div>
              <?php } ?>
       
        

        
        
      </div>
    </section>
    
    <!-- Eventos Banana -->
    <section id="bananaEventos">
      <div class="container-fluid"> 
            <div class="row">
              <div class="col-12 text-center">
                <a href="">
                  <img src="https://via.placeholder.com/2000x200.png?text=Banana+Eventos" class="img-fluid" alt="">
                </a>
              </div>
            </div> 
      </div>
      <div class="container-fluid">
        <div class="container">
          <div class="row">
          .
          </div>
        </div>
      </div>
    </section>
    
    <!-- Últimas noticias  -->
    <section id="bananaNoticias">
      <div class="container-fluid"> 
          <div class="row">
            <div class="col-12 text-center">
              <a href="">
                <img src="https://via.placeholder.com/2000x200.png?text=Banana+Noticias" class="img-fluid" alt="">
              </a>
            </div>
          </div> 
      </div>
    </section>
    
    <!-- Bandas Banana -->
    <section id="bananaBandas">
      <div class="container-fluid"> 
          <div class="row">
            <div class="col-12 text-center">
              <a href="">
                <img src="https://via.placeholder.com/2000x200.png?text=Banana+Bandas" class="img-fluid" alt="">
              </a>
            </div>
          </div> 
      </div>
    </section>

    <!-- Nosotros -->
    <section id="bananaNosotros">
      <div class="container-fluid"> 
          <div class="row">
            <div class="col-12 text-center">
              <a href="">
                <img src="https://via.placeholder.com/2000x200.png?text=Banana+Nosotros" class="img-fluid" alt="">
              </a>
            </div>
          </div> 
      </div>
    </section>

    <!-- RRSS -->
    <section id="bananaSocial">
      <div class="container-fluid"> 
          <div class="row">
            <div class="col-12 text-center">
              <a href="">
                <img src="https://via.placeholder.com/2000x200.png?text=Banana+Social" class="img-fluid" alt="">
              </a>
            </div>
          </div> 
      </div>
    </section>
  
  </main> 
    
  <!-- Footer -->
  <?php get_footer();?>