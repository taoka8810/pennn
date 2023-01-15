<?php 
  $title = $args["title"];
  $thumbnail = $args["thumbnail"];
  $url = $args["url"];
  $date = $args["date"];
  $tag = $args["tag"];
  $is_swiper = $args["is_swiper"];
?>

<?php if($is_swiper === "true"): ?>
  <article class="c-article-card swiper-slide">
    <a href="<?php echo $url ?>">
      <p class="c-aricle-card__tag"><?php echo $tag ?></p>
      <div class="c-article-card__thumbnail">
        <img src="<?php echo $thumbnail ?>" alt="記事のサムネイル">
      </div>
      <div class="c-article-card__info">
        <h3 class="c-article-card__title"><?php echo $title ?></h3>
        <p class="c-article-card__published-date"><?php echo $date ?></p>
      </div>
    </a>
  </article>
<?php else: ?>
  <article class="c-article-card" data-type="archive">
    <a href="<?php echo $url ?>">
      <p class="c-aricle-card__tag"><?php echo $tag ?></p>
      <div class="c-article-card__thumbnail">
        <img src="<?php echo $thumbnail ?>" alt="記事のサムネイル">
      </div>
      <div class="c-article-card__info">
        <h3 class="c-article-card__title"><?php echo $title ?></h3>
        <p class="c-article-card__published-date"><?php echo $date ?></p>
      </div>
    </a>
  </article>
<?php endif; ?>