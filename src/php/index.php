<?php get_header(); ?>
<main class="p-top">
  <button class="p-top__rocket-button" id="rocket-button" data-is-visible="true">
    <i class="fa-solid fa-rocket"></i>
  </button>
  <section class="p-top__heading">
    <h1 class="p-top__heading-title">Pennn</h1>
  </section>
  <!-- contents tile -->
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
      <a class="p-top__tile-about u-only-pc tile-animation" href="/about" ontouchstart="">
        <span>About</span>
        <span>Me</span>
      </a>
      <a class="p-top__tile-twitter tile-animation" href="https://twitter.com/yasai_tarinai" ontouchstart="">
        <i class="fa-brands fa-twitter"></i>
      </a>
      <a class="p-top__tile-github tile-animation" href="" ontouchstart="">
        <i class="fa-brands fa-github"></i>
      </a>
    </div>
  </section>

</main>
<?php get_footer(); ?>