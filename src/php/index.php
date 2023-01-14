<?php get_header(); ?>

<main class="p-top">
  <section class="p-top__heading">
    <h1 class="p-top__heading-title">Penn</h1>
  </section>
  <!-- contents tile -->
  <section class="p-top__tiles">
    <div class="p-top__tile-top">
      <a class="p-top__tile-note" href="/notes">
        <span>Notes</span>
      </a>
      <a class="p-top__tile-portforio" href="">
        <span>Portforio</span>
      </a>
    </div>
    <div class="p-top__tile-bottom">
      <a class="p-top__tile-about" href="">
        <span>About</span>
        <span>Me</span>
      </a>
      <a class="p-top__tile-twitter" href="https://twitter.com">
        <i class="fa-brands fa-twitter"></i>
      </a>
      <a class="p-top__tile-github" href="https://github.com">
        <i class="fa-brands fa-github"></i>
      </a>
    </div>
  </section>
  <!-- feature article -->
  <section class="p-top__articles">
    <h2 class="p-top__articles-title">Posts</h2>
    <div class="p-top__article-container article-swiper">
      <div class="swiper-wrapper">
        <?php 
          $my_posts = get_posts();
          foreach($my_posts as $post):
            setup_postdata($post);
            $category_array = get_the_category($posts -> ID);
            $category = $category_array[0] -> name;
        ?>
        <div class="p-top__article-slide-wrapper swiper-slide">
          <article class="c-article-card">
            <a href="<?php echo get_the_permalink(); ?>">
              <p class="c-aricle-card__tag" data-category="<?php echo get_category_color($category); ?>">
                <?php echo $category; ?></p>
              <div class="c-article-card__icon">
                <img src="<?php echo get_the_post_thumbnail_url(); ?>" alt="記事のサムネイル">
              </div>
              <div class="c-article-card__info">
                <h3 class="c-article-card__title"><?php echo get_the_title(); ?></h3>
                <p class="c-article-card__published-date"><?php echo get_the_modified_date("Y/m/d"); ?></p>
              </div>
            </a>
          </article>
          <article class="c-article-card">
            <a href="<?php echo get_the_permalink(); ?>">
              <p class="c-aricle-card__tag" data-category="<?php echo get_category_color($category); ?>">
                <?php echo $category; ?></p>
              <div class="c-article-card__icon">
                <img src="<?php echo get_the_post_thumbnail_url(); ?>" alt="記事のサムネイル">
              </div>
              <div class="c-article-card__info">
                <h3 class="c-article-card__title"><?php echo get_the_title(); ?></h3>
                <p class="c-article-card__published-date"><?php echo get_the_modified_date("Y/m/d"); ?></p>
              </div>
            </a>
          </article>
        </div>
        <?php endforeach; ?>
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