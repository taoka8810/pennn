<?php get_header(); ?>
<main class="p-notes">
  <div class="p-notes__inner">
    <h1 class="p-notes__title">Notes</h1>
    <div class="p-notes__category-button-list">
      <div class="p-notes__category-button-wrapper">
        <button class="p-notes__category-button" data-category="all" data-is-selected="true" tabindex="-1">
          <i class="fa-solid fa-earth-asia"></i>
        </button>
        <div class="p-notes__category-name">ALL</div>
      </div>
      <div class="p-notes__category-button-wrapper">
        <button class="p-notes__category-button" data-category="dev" data-is-selected="false" tabindex="-1">
          <i class="fa-solid fa-code"></i>
        </button>
        <div class="p-notes__category-name">Web開発</div>
      </div>
      <div class="p-notes__category-button-wrapper">
        <button class="p-notes__category-button" data-category="design" data-is-selected="false" tabindex="-1">
          <i class="fa-solid fa-pen"></i>
        </button>
        <div class="p-notes__category-name">デザイン</div>
      </div>
      <div class="p-notes__category-button-wrapper">
        <button class="p-notes__category-button" data-category="other" data-is-selected="false" tabindex="-1">
          <i class="fa-solid fa-user-astronaut"></i>
        </button>
        <div class="p-notes__category-name">その他</div>
      </div>
    </div>
    <div class="p-notes__contents" id="contents-all" data-is-show="true">
      <?php 
      $args = array(
        "posts_per_page" => 20,
      );
      $my_posts = get_posts($args);
      foreach($my_posts as $post):
        setup_postdata($post);
        $category_array = get_the_category($posts -> ID);
        $category = $category_array[0] -> name;
      ?>
      <article class="c-article-card" data-type="archive">
        <a href="<?php echo get_the_permalink(); ?>">
          <p class="c-aricle-card__tag" data-category="<?php echo get_category_color($category); ?>">
            <?php echo $category; ?>
            <?php echo $delay; ?>
          </p>
          <div class="c-article-card__icon">
            <img src="<?php echo get_the_post_thumbnail_url(); ?>" alt="記事のサムネイル">
          </div>
          <div class="c-article-card__info">
            <h3 class="c-article-card__title"><?php echo get_the_title(); ?></h3>
            <p class="c-article-card__published-date"><?php echo get_the_modified_date("Y/m/d"); ?></p>
          </div>
        </a>
      </article>
      <?php endforeach; ?>
    </div>

    <div class="p-notes__contents" id="contents-dev" data-is-show="false">
      <?php 
      $args = array(
        "posts_per_page" => 20,
        "category_name" => "develop"
      );
      $my_posts = get_posts($args);
      foreach($my_posts as $post):
        setup_postdata($post);
        $category_array = get_the_category($posts -> ID);
        $category = $category_array[0] -> name;
      ?>
      <article class="c-article-card" data-type="archive">
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
      <?php endforeach; ?>
    </div>

    <div class="p-notes__contents" id="contents-design" data-is-show="false">
      <?php 
      $args = array(
        "posts_per_page" => 20,
        "category_name" => "design"
      );
      $my_posts = get_posts($args);
      foreach($my_posts as $post):
        setup_postdata($post);
        $category_array = get_the_category($posts -> ID);
        $category = $category_array[0] -> name;
      ?>
      <article class="c-article-card" data-type="archive">
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
      <?php endforeach; ?>
    </div>

    <div class="p-notes__contents" id="contents-other" data-is-show="false">
      <?php 
      $args = array(
        "posts_per_page" => 20,
        "category_name" => "other"
      );
      $my_posts = get_posts($args);
      foreach($my_posts as $post):
        setup_postdata($post);
        $category_array = get_the_category($posts -> ID);
        $category = $category_array[0] -> name;
      ?>
      <article class="c-article-card" data-type="archive">
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
      <?php endforeach; ?>
    </div>
  </div>
</main>
<?php get_footer(); ?>