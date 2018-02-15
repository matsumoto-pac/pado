<?php
/**
 * Template part for displaying list_info
 *
 * @package underscoreDefault
 */

?>

<div class="list_info">
  <?php
    $the_query = new WP_Query(array(
      'post_type'	=> 'post'
    ));
    if ( $the_query->have_posts() ) :
  ?>
    <ul>
      <?php
        while ( $the_query->have_posts() ) : $the_query->the_post();
          //カテゴリ取得
          $category = get_the_category();
          $cat_name = $category[0]->cat_name;
          $cat_slug = $category[0]->category_nicename;
      ?>
        <li>
          <span class="info_date"><?php echo get_the_date(); ?></span>
          <span class="info_cat cat_<?php echo $cat_slug ?>"><?php echo $cat_name ?></span>
          <a class="info_desc" href=""><?php the_title(); ?></a>
        </li>
      <?php
        endwhile;
     ?>
    </ul>
  <?php
    endif;
  ?>
</div>