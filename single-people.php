<?php
/*
Template Name: ぱどの人々（下層）
*/
?>
<?php get_header(); ?>
<article id="people_02" class="underlayer">
  <section id="sec_01" class="sec">
    <?php if(get_field('mainvis')): ?>
      <i class="cover" style="background-image:url(<?php echo get_field('mainvis'); ?>)"></i>
    <?php endif; ?>
  </section>
  <section id="sec_02" class="sec">
    <div class="people_area">
        <div class="bg_pp_light_blue">
          <h2>
            <span class="name"><?php the_title(); ?></span>
            <span class="name_en"><?php the_field('name_en'); ?></span>
          </h2>
          <p class="occupations"><?php the_field('list_text'); ?></p>
          <p><?php the_field('profile'); ?></p>
        </div>

      </div>
    <h3 class="align_center people_ttl site_wid">
      <?php the_field('ttl_comment'); ?>
    </h3>
  </section>
  <section id="sec_03" class="sec bg_gray_02">
    <div class="wp_cont site_wid">
      <?php the_content(); ?>
    </div>
      <div class="keyword site_wid">
        <ul>
          <li><a href="#">やりがい</a></li>
          <li><a href="#">新卒</a></li>
          <li><a href="#">中途</a></li>
          <li><a href="#">女性</a></li>
        </ul>
      </div>
      <ul class="category">
        <li><a href="#">営業</a></li>
        <li><a href="#">営業事務</a></li>
        <li><a href="#">配布スタッフ</a></li>
        <li><a href="#">編集スタッフ</a></li>
        <li><a href="#">商材管理</a></li>
      </ul>
      <ul class="tag">
      <li><a href="#">新卒</a></li>
      <li><a href="#">中途</a></li>
      <li><a href="#">女性</a></li>
      <li><a href="#">やりがい</a></li>
      <li><a href="#">新卒</a></li>
      <li><a href="#">中途</a></li>
      <li><a href="#">女性</a></li>
      <li><a href="#">やりがい</a></li>
      <li><a href="#">新卒</a></li>
      <li><a href="#">中途</a></li>
      <li><a href="#">女性</a></li>
      <li><a href="#">やりがい</a></li>
      <li><a href="#">やりがい</a></li>
      <li><a href="#">新卒</a></li>
      <li><a href="#">中途</a></li>
      <li><a href="#">女性</a></li>
      <li><a href="#">やりがい</a></li>
      <li><a href="#">新卒</a></li>
      <li><a href="#">中途</a></li>
    </ul>

  </section>
  <section id="sec_04" class="sec">
    <div class="cont">
      <h2 class="ttl_en-ja align_center">
        <span class="en">RECOMMEND</span>
        <span class="ja">おすすめの記事</span>
      </h2>
      <div>
        <?php wp_related_posts()?>
      </div>
    </div>
  </section>
  </article>
  <?php get_template_part( 'template-parts/content-entry' ); ?>
<?php get_footer(); ?>
