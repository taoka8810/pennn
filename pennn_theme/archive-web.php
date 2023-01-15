<?php get_header(); ?>
<main>
  <div class="p-web__inner">
    <h1 class="p-web__title"><span>Web制作</span></h1>
    <div class="p-web__article-list">
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
          "is_swiper" => "false",
        );
        echo get_template_part("./component/article-card", null, $args);
      ?>
      <?php 
        endwhile;
      endif;
      ?>
    </div>
  </div>
</main>
<?php get_footer(); ?>