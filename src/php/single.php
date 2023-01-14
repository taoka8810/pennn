<?php get_header(); ?>
<main>
  <section class="p-note__heading">
    <div class="p-note__heading-icon">
      <img src="<?php echo get_the_post_thumbnail_url(); ?>" alt="">
    </div>
    <h1 class="p-note__heading-title"><?php echo get_the_title(); ?></h1>
  </section>
</main>
<?php get_footer(); ?>