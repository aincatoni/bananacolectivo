<?php get_header();?>

<main>
  <section> 
  
  <?php the_post(); ?>
    <h3> <?php the_title(); ?> </h3>
    <img src="<?php echo get_the_post_thumbnail_url(); ?>" alt="">
    <p> <?php the_content() ?> </p>
  </section>
</main>
<?php get_footer();?>