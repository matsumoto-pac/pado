<?php
/*
Template Name: サイトマップ
*/
?>
<?php get_header(); ?>
<article id="sitemap" class="underlayer">
  <section id="sec_01" class="sec">
    <div class="cover">

    </div>
  </section>
  <section id="sec_02" class="sec">
    <h2 class="ttl_en-ja align_center">
        <span class="en">SITEMAP</span>
        <span class="ja">サイトマップ</span>
      </h2>
      <ul>
        <li><a href="<?php echo esc_url( home_url( '/' ) ); ?>">ホーム</a>
          <ul>
            <li><a href="<?php echo esc_url( home_url( '/value/' ) ); ?>">ぱどバリュー</a></li>
            <li><a href="<?php echo esc_url( home_url( '/business/' ) ); ?>">事業内容</a></li>
            <li><a href="<?php echo esc_url( home_url( '/environment/' ) ); ?>">働く環境</a></li>
            <li><a href="<?php echo esc_url( home_url( '/people/' ) ); ?>">ぱどの人々</a></li>
            <li><a href="<?php echo esc_url( home_url( '/recruit/' ) ); ?>">新卒採用情報</a></li>
            <li><a href="<?php echo esc_url( home_url( '/joblist/' ) ); ?>">中途募集要項</a></li>
            <li><a href="<?php echo esc_url( home_url( '/info/' ) ); ?>">お知らせ</a></li>
            <li><a href="https://job.mynavi.jp/19/pc/search/corp222996/outline.html">新卒エントリー</a></li>
            <li><a href="<?php echo esc_url( home_url( '/entry/' ) ); ?>">中途エントリー</a></li>
            <li><a href="<?php echo esc_url( home_url( '/sitemap/' ) ); ?>">サイトマップ</a></li>
          </ul>
        </li>
      </ul>
  </section>
  </article>
  <?php get_template_part( 'template-parts/content-entry' ); ?>
<?php get_footer(); ?>
