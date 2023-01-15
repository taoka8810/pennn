<?php get_header(); ?>
<main>
  <section class="p-note__heading">
    <div class="p-note__heading-icon">
      <img src="<?php echo get_the_post_thumbnail_url(); ?>" alt="">
    </div>
    <h1 class="p-note__heading-title"><?php echo get_the_title(); ?></h1>
    <div class="p-note__heading-tag-wrapper">
      <?php
      $categories = get_the_category();
      $category = $categories[0]->name;
      $tags = get_the_tags();
      ?>
      <span class="p-note__heading-category-tag" data-category="<?php echo get_category_color($category); ?>">
        <?php echo $category ?>
      </span>
      <?php
      if(has_tag()):
        foreach($tags as $tag):
      ?>
      <span class="p-note__heading-keyword-tag"><?php echo $tag->name ?></span>
      <?php
        endforeach;
      endif;
      ?>
    </div>
    <?php
      $published_date = get_the_date("Y/m/d");
      $modified_date = get_the_modified_date("Y/m/d"); 
    ?>
    <div class="p-note__heading-date">公開日: <?php echo $published_date;  ?></div>
    <?php if($published_date !== $modified_date): ?>
    <div class="p-note__heading-date">更新日: <?php echo $modified_date; ?></div>
    <?php endif; ?>
  </section>
  <section class="p-note__contents">
    コンテンツ
  </section>
</main>
<?php get_footer(); ?>