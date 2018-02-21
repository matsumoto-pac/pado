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
  <article class="underlayer">
    <section id="sec_01" class="sec">
      <h2 class="ttl_en-ja ttl_dot align_center">
        <span class="en">INFORMATION</span>
        <span class="ja">お知らせ</span>
      </h2>
      <div class="cont">
        <div class="article_info site_wid">
          <p class="info_date">
            <?php the_date(); ?>
          </p>
          <p class="info_cat">
            <a href="<?php echo $cat_url; ?>" class="cat_<?php echo $cat_slug; ?>">
              <?php echo $cat_name; ?>
            </a>
          </p>
          <h3 class="info_desc">
            <?php the_title(); ?>
          </h3>
        </div>
        <figure class="article_mv site_pc_wid"><?php the_post_thumbnail(); ?></figure>
        <div class="wp_cont site_wid">
          <?php the_content(); ?>
        </div>
        <div class="article_btm site_wid">
          <?php get_sidebar('sns'); ?>
          <p class="info_more">
            <a href="./">
              お知らせ一覧
            </a>
          </p>
        </div>
      </div>
    </section>
  </article>
  <?php get_template_part( 'template-parts/content-entry' ); ?>
<?php get_footer(); ?>
