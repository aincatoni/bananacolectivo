<!-- Últimas noticias  -->
<section id="bananaNoticias">
      <div class="container-fluid"> 
          <div class="row">
            <div class="col-12 text-center titulo-seccion-purpura-grande">
                  <h2>BANANA NOTICIAS</h2>  
                  </a>
            </div>
          </div>
      </div>


          <div class="container-fluid my-3 px-5">
          <div class="row">
          
          
          <?php 
          
if ( have_posts() ) {
  $noticiasBanana = 0;

	while ( have_posts() ) {
    $noticiasBanana++;
    the_post();
    ?>
        <?php if($noticiasBanana <= 2){ ?> 
        <div class="col-12 col-sm-12 col-md-6 col-lg-6 ficha-noticia-grande" style="background-image: url('<?php echo get_the_post_thumbnail_url(); ?>'); background-size: cover; background-position: center top;">
          <div class="texto-noticia-grande">
            <a href="<?php the_permalink() ?>">
              <h3><?php the_title(); ?></h3>
            </a>
            <p><?php the_content( $more_link_text , $strip_teaser ); ?> </p>
          </div>
        </div>
        
          <?php } ?>
          
          <?php if($noticiasBanana > 2){ ?> 

            <div class="col-12 col-sm-12 col-md-3 col-lg-3 ficha-noticias">
            <a href="<?php the_permalink() ?>">
              <div class="imagen-evento" style="background-image: url('<?php echo get_the_post_thumbnail_url(); ?>'); background-size: cover; background-position: center;">
                <div class="overlayblack"></div>
              </div>
            </a>
           <h3> <?php the_title(); ?> </h3>
          <p><?php the_content( $more_link_text , $strip_teaser ); ?> </p>
          </div>
          <?php } ?>

                 
      <?php } ?>
      </div>
    
      </div>
      <?php } // end if
?>
          </div>  
          </div>
      </div>
    </section>