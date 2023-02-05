<!DOCTYPE html>
<html lang="ja">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/css/style.min.css">
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link href="https://fonts.googleapis.com/css2?family=Pacifico&display=swap" rel="stylesheet">
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crosssorigin>
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Shrikhand&display=swap" rel="stylesheet">
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@8/swiper-bundle.min.css" />
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Noto+Sans+JP&display=swap" rel="stylesheet">
  <link rel="stylesheet" href="//cdnjs.cloudflare.com/ajax/libs/highlight.js/11.7.0/styles/atom-one-dark.min.css">
  <script src="https://code.jquery.com/jquery-3.6.3.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/swiper@8/swiper-bundle.min.js"></script>
  <script src="https://kit.fontawesome.com/c75f779c0d.js" crossorigin="anonymous"></script>
  <script src="//cdnjs.cloudflare.com/ajax/libs/highlight.js/11.7.0/highlight.min.js"></script>
  <script src="https://tarptaeya.github.io/repo-card/repo-casrd.js"></script>
  <script>
  hljs.highlightAll();
  </script>
  <title>Pennn</title>
  <?php wp_head(); ?>
</head>

<body ontouchstart="">
  <canvas id="myCanvas"></canvas>
  <?php if(!is_front_page()): ?>
  <header class="p-header">
    <div class="p-header__hamburger-icon" id="open-button" data-is-open="false">
      <span class="p-header__hamburger-bar"></span>
      <span class="p-header__hamburger-bar"></span>
      <span class="p-header__hamburger-bar"></span>
    </div>
  </header>
  <div class="p-header__overlay" id="overlay" data-is-open="false"></div>
  <button class="p-header__close-button">
    <span class="p-header__cross-bar"></span>
    <span class="p-header__cross-bar"></span>
  </button>
  <nav class="p-header__nav">
    <a href="/" class="p-header__nav-item">
      <div class="p-header__nav-item-content">
        <i class="fa-solid fa-house"></i>
        <span>Top</span>
      </div>
    </a>
    <a href="/notes" class="p-header__nav-item">
      <div class="p-header__nav-item-content">
        <i class="fa-solid fa-book"></i>
        <span>Notes</span>
      </div>
    </a>
    <a href="/notes" class="p-header__nav-item">
      <div class="p-header__nav-item-content">
        <i class="fa-solid fa-crown"></i>
        <span>Portforio</span>
      </div>
    </a>
    <a href="/notes" class="p-header__nav-item">
      <div class="p-header__nav-item-content">
        <i class="fa-solid fa-user-astronaut"></i>
        <span>About Me</span>
      </div>
    </a>
  </nav>
  <?php endif; ?>