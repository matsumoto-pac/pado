<?php
/*
Template Name: お知らせ
*/
?>
<?php get_header(); ?>
<article id="info" class="underlayer">
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
        <?php
          $the_query = new WP_Query(array(
            'post_type'	=> 'post',
            'page' => get_query_var('page'),
            'paged' => get_query_var('paged'),
            'posts_per_page' => 13
          ));
          set_query_var('the_query', $the_query);
          get_template_part( 'template-parts/content-list_info' );
          //Pagenation
          if (function_exists("pagination")) {
            pagination($the_query->max_num_pages);
          }
        ?>
      </div>

  </section>

  </article>
  <?php get_template_part( 'template-parts/content-entry' ); ?>
<?php get_footer(); ?>
