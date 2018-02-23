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
    <?php get_sidebar('sns'); ?>
    <?php
      $post_terms_tag = get_the_terms($post->ID, 'cat_people');
    ?>
    <div class="keyword site_wid">
      <ul>
      <?php
        foreach ( $post_terms_tag as $term ) {
          $cat_link = get_category_link( $term );
          echo '<li><a href="' . $cat_link .'">';
          echo  esc_html($term->name); // タームタイトル
          echo '</a></li>';
        }
      ?>
      </ul>
    </div>
    
    <?php
      //カスタムタクソノミー一覧取得
      $args = array(
        'post_type' => 'joblist',
        'taxonomy' => 'cat_joblist',
        'hide_empty' => false,
      );
      $terms_cat = get_categories($args);
      $args = array(
        'post_type' => 'people',
        'taxonomy' => 'cat_people',
        'hide_empty' => false,
      );
      $terms_tag = get_categories($args);
    ?>
    
    <ul class="category">
      <?php
        foreach ( $terms_cat as $term ) {
          echo '<li><a href="?term=' . $term->term_id .'">';
          echo  esc_html($term->name); // タームタイトル
          echo '</a></li>';
        }
      ?>
    </ul>
    <ul class="tag">
      <?php
        foreach ( $terms_tag as $term ) {
          $cat_link = get_category_link( $term );
          echo '<li><a href="' . $cat_link .'">';
          echo  esc_html($term->name); // タームタイトル
          echo '</a></li>';
        }
      ?>
    </ul>
  </section>
  <section id="sec_04" class="sec">
    <div class="cont">
      <h2 class="ttl_en-ja align_center">
        <span class="en sr_bottom">RECOMMEND</span>
        <span class="ja sr_bottomv">おすすめの記事</span>
      </h2>
      <div>
        <?php
          yarpp_related(array(
            'post_type' => 'people'
          )); ?>
      </div>
    </div>
  </section>
  </article>
  <?php get_template_part( 'template-parts/content-entry' ); ?>
<?php get_footer(); ?>
