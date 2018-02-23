<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
  <meta charset="<?php bloginfo( 'charset' ); ?>" />
  <meta name="format-detection" content="telephone=no">
  <meta name="viewport" content="width=device-width,initial-scale=1.0" />
  <meta name="thumbnail" content="<?php echo esc_url( get_template_directory_uri() ); ?>/images/common/h_logo.png" />
  <link rel="shortcut icon" href="<?php echo esc_url( get_template_directory_uri() ); ?>/images/common/favicon.ico">
  <?php the_seo($post); ?>
  <?php wp_head(); ?>
</head>
<body <?php body_class(); ?>>
  <header id="header" class="sb-slidebar sb-right sb-style-overlay">
    <h1 id="h_logo">
      <a href="<?php echo esc_url( home_url( '/' ) ); ?>">
        <img src="<?php echo esc_url( get_template_directory_uri() ); ?>/images/common/logo_01.png" alt="">
        <img src="<?php echo esc_url( get_template_directory_uri() ); ?>/images/common/logo_01_top.png" alt="<?php echo bloginfo('name'); ?>" class="img_top">
      </a>
    </h1>
    <div class="ham-btn open sp">
      <button type="button" class="tcon tcon-menu--xcross sb-toggle-right" aria-label="toggle menu">
        <span class="tcon-menu__lines" aria-hidden="true"></span>
        <span class="tcon-visuallyhidden">toggle menu</span>
      </button>
    </div>
    <nav class="h_nav">
      <ul class="g_nav">
        <li>
          <a href="<?php echo esc_url( home_url( '/value/' ) ); ?>" class="<?php if ( is_page('value') ) { echo 'current'; } ?>">
            ぱどバリュー
          </a>
        </li><li>
          <a href="<?php echo esc_url( home_url( '/business/' ) ); ?>" class="<?php if ( is_page('business') ) { echo 'current'; } ?>">
            事業内容
          </a>
        </li><li>
          <a href="<?php echo esc_url( home_url( '/environment/' ) ); ?>" class="<?php if ( is_page('environment') ) { echo 'current'; } ?>">
            働く環境
          </a>
        </li><li>
          <a href="<?php echo esc_url( home_url( '/people/' ) ); ?>" class="<?php if ( is_page('people') ) { echo 'current'; } ?>">
            ぱどの人々
          </a>
        </li><li>
          <a href="<?php echo esc_url( home_url( '/recruit/' ) ); ?>" class="<?php if ( is_page('recruit') ) { echo 'current'; } ?>">
            新卒採用情報
          </a>
        </li><li>
          <a href="<?php echo esc_url( home_url( '/joblist/' ) ); ?>" class="<?php if ( is_post_type_archive('joblist') ) { echo 'current'; } ?>">
            中途募集要項
          </a>
        </li>
      </ul>
      <ul class="entry_nav">
        <li>
          <a href="https://job.mynavi.jp/19/pc/search/corp222996/outline.html" class="bc_blue_deep js-ripple">
            新卒エントリー
            <span class="js-ripple__circle header__entry_ripple"></span>
          </a>
        </li><li>
          <a href="<?php echo esc_url( home_url( '/entry/' ) ); ?>" class="bc_blue js-ripple">
            中途エントリー
            <span class="js-ripple__circle header__entry_ripple"></span>
          </a>
        </li>
      </ul>
    </nav>
  </header>
  <main id="main">
