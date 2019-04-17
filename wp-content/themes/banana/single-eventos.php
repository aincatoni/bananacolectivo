<?php get_header();?>

<main>
  <div class="container-fluid bananaEventosSingle">
    <div class="container">
      <div class="row">
        <div class="col-12">
        <section class="mt-5"> 
          <?php the_post(); ?>
          
          <div class="row">
          <div class="col-12 col-md-4 tituloSesionSingle">
            <h3 class=""><?php the_title(); ?> </h3>
          </div>
          <div class="col-12 col-md-8">
          
          <div class="imagen-dest-sesion">
            <img class="imagenDestSesion img-fluid" src="<?php echo get_the_post_thumbnail_url(); ?>" alt="">
           
          
          </div>
          </div>
          <div class="col-12">
            <p><?php the_field('descripcion_del_evento'); ?></p>
          </div>
            
        </section>
        </div>
      </div>
    </div>
  </div>
  
</main>
<?php get_footer();?>