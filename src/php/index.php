<?php get_header(); ?>

<main class="p-top">

  <!-- article-web -->
  <section class="p-top__articles">
    <div class="p-top__articles-heading">
      <h2 class="p-top__articles-heading-title">Web制作</h2>
      <a href="/web" class="p-top__all-article-link">全ての記事を見る</a>
    </div>
    <div class="p-top__article-container article-swiper">
      <div class="swiper-wrapper">
        <?php 
          $args = [
            'post_type' => 'web',
            "posts" => $post,
            'posts_per_page' => 10,
          ];
          $the_query = new WP_Query($args);
          if ($the_query->have_posts()) :
            while ($the_query->have_posts()) : $the_query->the_post();
        ?>
        <?php
          $terms = get_the_terms($post->ID, "tech-category");
          $args = array(
            "title" => get_the_title(),
            "thumbnail" => get_the_post_thumbnail_url(),
            "url" => get_the_permalink(),
            "date" => get_the_modified_date("Y/m/d"),
            "tag" => $terms[0]->name,
            "is_swiper" => "true",
          );
          echo get_template_part("./component/article-card", null, $args);
        ?>
        <?php 
          endwhile;
        endif;
        ?>
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