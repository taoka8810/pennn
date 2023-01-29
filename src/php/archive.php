<?php get_header(); ?>
<main class="p-notes">
  <div class="p-notes__inner">
    <h1 class="p-notes__title">Notes</h1>
    <form class="p-notes__category-button-list" id="button-group">
      <div class="p-notes__category-button-wrapper">
        <input class="p-notes__radio-button" type="radio" id="category-all" name="button-group" checked>
        <label class="p-notes__category-button" for="category-all" data-category="all" tabindex="-1" ontouchstart="">
          <i class="fa-solid fa-earth-asia"></i>
        </label>
        <div class="p-notes__category-name">ALL</div>
      </div>
      <div class="p-notes__category-button-wrapper">
        <input class="p-notes__radio-button" type="radio" id="category-web" name="button-group">
        <label class="p-notes__category-button" for="category-web" data-category="web" tabindex="-1" ontouchstart="">
          <i class="fa-solid fa-code"></i>
        </label>
        <div class="p-notes__category-name">Web</div>
      </div>
      <div class="p-notes__category-button-wrapper">
        <input class="p-notes__radio-button" type="radio" id="category-hobby" name="button-group">
        <label class="p-notes__category-button" for="category-hobby" data-category="hobby" tabindex="-1"
          ontouchstart="">
          <i class="fa-solid fa-pen"></i>
        </label>
        <div class="p-notes__category-name">Hobby</div>
      </div>
      <div class="p-notes__category-button-wrapper">
        <input class="p-notes__radio-button" type="radio" id="category-other" name="button-group">
        <label class="p-notes__category-button" for="category-other" data-category="other" tabindex="-1"
          ontouchstart="">
          <i class="fa-solid fa-user-astronaut"></i>
        </label>
        <div class="p-notes__category-name">Other</div>
      </div>
    </form>
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

    <div class="p-notes__contents" id="contents-web" data-is-show="false">
      <?php 
      $args = array(
        "posts_per_page" => 20,
        "category_name" => "web"
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

    <div class="p-notes__contents" id="contents-hobby" data-is-show="false">
      <?php 
      $args = array(
        "posts_per_page" => 20,
        "category_name" => "hobby"
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