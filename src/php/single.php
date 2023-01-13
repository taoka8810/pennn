<?php get_header(); ?>
<main>
  <section class="p-web__heading">
    <div class="p-web__heading-icon">
      <img src="<?php echo get_the_post_thumbnail_url(); ?>" alt="">
    </div>
    <h1 class="p-web__heading-title"><?php echo get_the_title(); ?></h1>
  </section>
</main>
<?php get_footer(); ?>