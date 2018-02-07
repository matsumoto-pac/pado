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
    <p id="h_logo">
      <a href="<?php echo esc_url( home_url( '/' ) ); ?>">
        <img src="<?php echo esc_url( get_template_directory_uri() ); ?>/images/common/logo_01.png" alt="<?php echo bloginfo('name'); ?>">
      </a>
    </p>
    <div class="ham-btn open sp">
      <button type="button" class="tcon tcon-menu--xcross sb-toggle-right" aria-label="toggle menu">
        <span class="tcon-menu__lines" aria-hidden="true"></span>
        <span class="tcon-visuallyhidden">toggle menu</span>
      </button>
    </div>
    <nav class="h_nav">
      <ul class="g_nav">
        <li>
          <a href="<?php echo esc_url( home_url( '/' ) ); ?>">
            ホーム
          </a>
        </li><li>
          <a href="<?php echo esc_url( home_url( '/' ) ); ?>">
            ぱどバリュー
          </a>
        </li><li>
          <a href="<?php echo esc_url( home_url( '/' ) ); ?>">
            事業内容
          </a>
        </li><li>
          <a href="<?php echo esc_url( home_url( '/' ) ); ?>">
            働く環境
          </a>
        </li><li>
          <a href="<?php echo esc_url( home_url( '/' ) ); ?>">
            ぱどの人々
          </a>
        </li><li class="sp">
          <a href="<?php echo esc_url( home_url( '/' ) ); ?>">
            新卒採用情報
          </a>
        </li><li class="sp">
          <a href="<?php echo esc_url( home_url( '/' ) ); ?>">
            中途募集要項
          </a>
        </li><li>
          <a href="<?php echo esc_url( home_url( '/' ) ); ?>">
            お知らせ
          </a>
        </li><li>
          <a href="<?php echo esc_url( home_url( '/' ) ); ?>">
            サイトマップ
          </a>
        </li>
      </ul>
      <ul class="entry_nav">
        <li>
          <a href="<?php echo esc_url( home_url( '/' ) ); ?>" class="bc_blue_deep">
            新卒エントリー
          </a>  
        </li><li>
          <a href="<?php echo esc_url( home_url( '/' ) ); ?>" class="bc_blue">
            中途エントリー
          </a>  
        </li>
      </ul>
    </nav>
  </header>
  <main id="main">