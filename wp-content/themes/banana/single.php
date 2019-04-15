<?php get_header();?>
<section class="my-4 noticias-single"> 
<div class="container-fluid">
  <div class="container">
    <div class="row">
      <div class="col-12">
        <?php the_post(); ?>
        <h3> <?php the_title(); ?> </h3>
        <img class="img-fluid" src="<?php echo get_the_post_thumbnail_url(); ?>" alt="">
        <p> <?php the_content() ?> </p>
      </div>
    </div>
  </div>
</div>
</section>

<?php get_footer();?>