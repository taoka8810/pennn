<?php get_header(); ?>
<canvas id="myRocket"></canvas>
<main class="p-top">
  <button class="p-top__rocket-button" id="rocket-button" data-clicked="false">
    <img src="<?php echo get_template_directory_uri(); ?>/images/icons/rocket-solid-white.svg" alt="rocket">
  </button>
  <section class="p-top__heading">
    <h1 class="p-top__heading-title">Pennn</h1>
  </section>

  <!-- タイルUI -->
  <section class="p-top__tiles">
    <div class="p-top__tile-top">
      <a class="p-top__tile-note tile-animation" href="/notes" ontouchstart="">
        <span>Notes</span>
      </a>
      <a class="p-top__tile-portforio tile-animation" href="/portforio" ontouchstart="">
        <span>Portforio</span>
      </a>
    </div>
    <a class="p-top__tile-about u-only-sp tile-animation" href="/about" ontouchstart="">
      <span>About</span>
      <span>Me</span>
    </a>
    <div class="p-top__tile-bottom">
      <a class="p-top__tile-about u-only-pc tile-animation" href="/profile" ontouchstart="">
        <span>About</span>
        <span>Me</span>
      </a>
      <a class="p-top__tile-twitter tile-animation" href="https://twitter.com/yasai_tarinai" ontouchstart="" target="_blank" rel="noopener noreferrer">
        <img src="<?php echo get_template_directory_uri(); ?>/images/icons/x-twitter-white.svg" alt="">
      </a>
      <a class="p-top__tile-github tile-animation" href="" ontouchstart="" target="_blank" rel="noopener noreferrer">
        <img src="<?php echo get_template_directory_uri(); ?>/images/icons/github-gray.svg" alt="">
      </a>
    </div>
  </section>

</main>

<?php get_footer(); ?>