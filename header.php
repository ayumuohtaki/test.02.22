<!DOCTYPE html>
<html lang="ja">
<head>
  <meta charset="utf-8" />
  <meta name="viewport" content="width=device-width,initial-scale=1" />
  <meta name="keywords" content="共通キーワード" />
  <meta name="description" content="<?php bloginfo( 'description' ); ?>" />
  <title><?php bloginfo( 'name' ); ?></title>
  <link rel="shortcut icon" href="<?php echo get_template_directory_uri(); ?>/assets/images/common/pm_icon.ico" />
  <link href="https://fonts.googleapis.com/earlyaccess/notosansjapanese.css" rel="stylesheet" />
  <link href="https://fonts.googleapis.com/css?family=Vollkorn:400i" rel="stylesheet" />
  <link href="https://fonts.googleapis.com/css?family=Bangers" rel="stylesheet" />

  
  <link rel="stylesheet" type="text/css" href="<?php echo get_template_directory_uri(); ?>/css/slick.css" media="screen">
  <link rel="stylesheet" type="text/css" href="<?php echo get_template_directory_uri(); ?>/css/slick-theme.css" media="screen">
  <link rel="stylesheet" type="text/css" href="<?php echo get_template_directory_uri(); ?>/css/common.css" media="screen">

  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.0.0/animate.min.css">
 
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
  
<?php wp_head(); ?>
</head>
<body <?php body_class(); ?>>
  <div class="container">
    <header id="header">
      <div class="header-inner">
        <div class="logo">
          <a class="logo-header" href="/">
            <img src="<?php echo get_template_directory_uri(); ?>/assets/images/common/parramota-logo.png" class="main-logo" alt="PARRAMOTA~30minutes~" />
            <img src="<?php echo get_template_directory_uri(); ?>/assets/images/common/parramota-logo.png" class="fixed-logo" alt="PARRAMOTA~30minutes~" />
          </a>
        </div>
        <button class="toggle-menu js-toggoleNav">
          <span class="toggle-line">メニュー</span>
        </button>
        <div class="header-nav">
          <nav class="global-nav">
<?php
wp_nav_menu(
    array (
      'theme_location' => 'place_global',
      'container' => false,
    )
);
?>
          </nav>
          <form class="search-form" role="search" method="get" action="<?php echo esc_url( home_url() ); ?>">
            <div class="search-box">
              <input type="text" class="search-input" name="s" placeholder="キーワードを入力してください" />
              <button type="submit" class="button-submit"></button>
            </div>
            <div class="search-buttons">
              <button type="button" class="close-icon js-searchIcon"></button>
              <button type="button" class="search-icon js-searchIcon"></button>
            </div>
          </form>
        </div>
      </div>
    </header>
<?php if( is_front_page() ): ?>
    <div class="head-logo">
      <img src="<?php echo get_template_directory_uri(); ?>/assets/images/common/pm_1.png" class="head-logo-master animate__animated animate__rotateIn animate__slower head-logo-before head-logo-after" alt="MAIN IMAGE" />
    </div>

<?php else: ?>
  <div class="wrap">
    <div id="primary" class="content-area">
      <main>
        <div class="page-contents">
          <div class="page-head">
            <?php the_post_thumbnail( 'blog' ); ?>
            <div class="wrapper">
              <span class="page-title-en"><?php echo get_main_en_title(); ?></span>
              <h2 class="page-title"><?php echo get_main_title(); ?></h2>
            </div>
          </div>
          <div class="page-container">
<?php
if (function_exists('bread_crumb') ):
    bread_crumb();
endif;
?>
<?php endif; ?>

    