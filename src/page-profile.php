<?php get_header(); ?>

<main class="p-about">
  <div class="p-about__inner">
    <h1 class="p-about__title">About Me</h1>
    <div class="p-about__contents">
      <div class="p-about__me">
        <div class="p-about__icon"><img src="<?php echo get_field("icon"); ?>" alt=""></div>
        <div class="p-about__intro">
          <?php echo get_field("introduction") ?>
        </div>
      </div>
      <?php while(have_rows("introduction-contents")): the_row(); ?>
      <div class="p-about__section">
        <h2 class="p-about__section-title"><?php echo get_sub_field("title"); ?></h2>
        <div class="p-about__section-comment"><?php echo get_sub_field("description"); ?></div>
        <div class="p-about__picture-list">
          <?php while(have_rows("picture-list")): the_row(); ?>
          <div class="p-about__picture-wrapper">
            <img src="<?php echo get_sub_field("picture"); ?>" alt="">
          </div>
          <?php endwhile; ?>
        </div>
      </div>
      <?php endwhile; ?>
    </div>
  </div>
</main>

<?php get_footer(); ?>