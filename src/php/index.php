<?php get_header(); ?>

<main class="p-top">

  <!-- article-web -->
  <section class="p-top__articles">
    <h2 class="p-top__articles-heading">Web制作</h2>
    <div class="p-top__article-container article-swiper">
      <div class="swiper-wrapper">
        <?php echo get_template_part("./component/article-card"); ?>
        <?php echo get_template_part("./component/article-card"); ?>
        <?php echo get_template_part("./component/article-card"); ?>
        <?php echo get_template_part("./component/article-card"); ?>
        <?php echo get_template_part("./component/article-card"); ?>
        <?php echo get_template_part("./component/article-card"); ?>
        <?php echo get_template_part("./component/article-card"); ?>
        <?php echo get_template_part("./component/article-card"); ?>
      </div>
      <div class="article-swiper-button-prev">
        <i class="fa-solid fa-chevron-left"></i>
      </div>
      <button class="article-swiper-button-next">
        <i class="fa-solid fa-chevron-right"></i>
      </button>
    </div>
  </section>

  <!-- article-FE -->
  <section class="p-top__articles">
    <h2 class="p-top__articles-heading">基本情報技術者試験 解説</h2>
    <div class="p-top__article-container article-swiper">
      <div class="swiper-wrapper">
        <?php echo get_template_part("./component/article-card"); ?>
        <?php echo get_template_part("./component/article-card"); ?>
        <?php echo get_template_part("./component/article-card"); ?>
        <?php echo get_template_part("./component/article-card"); ?>
        <?php echo get_template_part("./component/article-card"); ?>
        <?php echo get_template_part("./component/article-card"); ?>
        <?php echo get_template_part("./component/article-card"); ?>
        <?php echo get_template_part("./component/article-card"); ?>
      </div>
      <div class="article-swiper-button-prev">
        <i class="fa-solid fa-chevron-left"></i>
      </div>
      <button class="article-swiper-button-next">
        <i class="fa-solid fa-chevron-right"></i>

      </button>
    </div>
  </section>
</main>

<?php get_footer(); ?>