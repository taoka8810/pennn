<!DOCTYPE html>
<html lang="ja">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Shrikhand&display=swap" rel="stylesheet">
  <link href="https://fonts.googleapis.com/css2?family=Pacifico&display=swap" rel="stylesheet">
  <link href="https://fonts.googleapis.com/css2?family=Noto+Sans+JP&display=swap" rel="stylesheet">
  <link rel="stylesheet" href="//cdnjs.cloudflare.com/ajax/libs/highlight.js/11.7.0/styles/atom-one-dark.min.css">
  <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/css/style.min.css">
  <script src="https://code.jquery.com/jquery-3.6.3.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/swiper@8/swiper-bundle.min.js"></script>
  <script src="//cdnjs.cloudflare.com/ajax/libs/highlight.js/11.7.0/highlight.min.js"></script>
  <script src="https://tarptaeya.github.io/repo-card/repo-card.js"></script>
  <script>hljs.highlightAll();</script>
  <?php wp_head(); ?>
</head>

<body ontouchstart="">
  <?php if(!is_front_page()): ?>
  <header class="p-header">
    <div class="p-header__hamburger-icon" id="open-button" data-is-open="false">
      <span class="p-header__hamburger-bar"></span>
      <span class="p-header__hamburger-bar"></span>
      <span class="p-header__hamburger-bar"></span>
    </div>
  </header>
  <div class="p-header__overlay" id="overlay" data-is-open="false"></div>
  <div class="p-header__line" id="line" data-is-open="false"></div>
  <div class="p-header__triangle-area" id="triangle" data-is-open="false"></div>
  <div class="p-header__close-button" id="close-button" data-is-open="false">
    <span class="p-header__cross-bar"></span>
    <span class="p-header__cross-bar"></span>
  </div>
  <nav class="p-header__nav" id="nav" data-is-open="false">
    <a class="p-header__nav-item" href="/" data-is-open="false">
      <span class="p-header__nav-text--en">Top</span>
      <span class="p-header__nav-text--ja">トップページ</span>
    </a>
    <a class="p-header__nav-item" href="/notes" data-is-open="false">
    <span class="p-header__nav-text--en">Notes</span>
    <span class="p-header__nav-text--ja">投稿一覧ページ</span>
    </a>
    <a class="p-header__nav-item" href="/portforio" data-is-open="false">
    <span class="p-header__nav-text--en">Portforio</span>
    <span class="p-header__nav-text--ja">制作物一覧ページ</span>
    </a>
  </nav>
  <?php endif; ?>