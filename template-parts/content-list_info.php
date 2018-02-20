<?php
/**
 * Template part for displaying list_info
 *
 * @package underscoreDefault
 */

?>

<div class="list_info">
  <?php
    if ( $the_query->have_posts() ) :
  ?>
    <ul>
      <?php
        while ( $the_query->have_posts() ) : $the_query->the_post();
          //カテゴリ取得
          $category = get_the_category();
          $cat_name = $category[0]->cat_name;
          $cat_slug = $category[0]->category_nicename;
          $cat_id = $category[0]->cat_ID;
          $cat_url = get_category_link($cat_id);
      ?>
        <li>
          <span class="info_date">
            <?php echo get_the_date(); ?>
          </span>
          <span class="info_cat">
            <a href="<?php echo $cat_url; ?>" class="cat_<?php echo $cat_slug; ?>">
              <?php echo $cat_name; ?>
            </a>
          </span>
          <span class="info_desc">
            <?php if(get_the_content() != NULL): ?>
              <a href="<?php the_permalink(); ?>">
                <?php the_title(); ?>
              </a>
            <?php else: ?>
              <?php the_title(); ?>
            <?php endif; ?>
          </span>
        </li>
      <?php
        endwhile;
     ?>
    </ul>
  <?php
		else:
			echo "<p>" . wpautop('投稿が見つかりませんでした。'), "</p>";
		endif;
  ?>
</div>