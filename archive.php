<?php
/*
Template Name: お知らせ
*/
?>
<?php get_header(); ?>
  <article class="underlayer">
    <section id="sec_01" class="sec">
      <h2 class="ttl_en-ja ttl_dot align_center">
        <span class="en sr_bottom">INFORMATION</span>
        <span class="ja sr_bottom">お知らせ</span>
      </h2>
      <div class="cont site_wid">
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
