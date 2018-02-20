<?php
/*
Template Name: お知らせ（下層）
*/
?>
<?php get_header(); ?>
<?php
  $category = get_the_category();
  $cat_name = $category[0]->cat_name;
  $cat_slug = $category[0]->category_nicename;
  $cat_id = $category[0]->cat_ID;
  $cat_url = get_category_link($cat_id);
?>
<article id="info02" class="underlayer">
  <section id="sec_01" class="sec">
    <div class="cover">

    </div>
  </section>
  <section id="sec_02" class="sec">
    <h2 class="ttl_en-ja align_center">
        <span class="en">INFORMATION</span>
        <span class="ja">お知らせ</span>
      </h2>
      <div class="cont">
        <div class="list_info">
          <ul>
              <li>
                <span class="info_date"><?php the_date(); ?></span>
                <span class="info_cat cat_<?php echo $cat_slug; ?>"><?php echo $cat_name; ?></span>
                <span class="info_desc"><?php the_title(); ?></span>
              </li>
          </ul>
        </div>
        <figure><?php the_post_thumbnail(); ?></figure>
        <p><?php the_content(); ?></p>
          <p class="info_more">
            <a href="./">
              お知らせ一覧
            </a>
          </p>
      </div>
  </section>

  </article>
  <?php get_template_part( 'template-parts/content-entry' ); ?>
<?php get_footer(); ?>
