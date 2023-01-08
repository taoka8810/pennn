<?php get_header(); ?>

<main class="p-top">
  <div class="p-top__inner">

    <!-- article-web -->
    <section class="p-top__articles">
      <h2 class="p-top__articles-heading">Web制作</h2>
      <div class="p-top__article-container">
        <?php echo get_template_part("./component/article-card"); ?>
        <?php echo get_template_part("./component/article-card"); ?>
        <?php echo get_template_part("./component/article-card"); ?>
        <?php echo get_template_part("./component/article-card"); ?>
        <?php echo get_template_part("./component/article-card"); ?>
        <?php echo get_template_part("./component/article-card"); ?>
        <?php echo get_template_part("./component/article-card"); ?>
        <?php echo get_template_part("./component/article-card"); ?>
      </div>
    </section>
  </div>
</main>

<?php get_footer(); ?>