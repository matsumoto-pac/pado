<?php
/*
Template Name: ぱどの人々
*/
?>
<?php get_header(); ?>
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
  <article class="underlayer">
    <section id="sec_01" class="sec site_wid">
      <h2 class="ttl_en-ja align_center">
        <span class="en sr_bottom">PADO&nbsp;PEOPLE</span>
        <span class="ja sr_bottom">ぱどの人々</span>
      </h2>
    </section>
    <section id="sec_02" class="sec">
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
            if($_GET['term']) {
              $cat_link .= '?term=' . $_GET['term'];
            }
            echo '<li><a href="' . $cat_link .'">';
            echo  esc_html($term->name); // タームタイトル
            echo '</a></li>';
          }
        ?>
      </ul>
      <?php
        $query_arg = array(
          'post_type'	=> 'people',
          'page' => get_query_var('page'),
          'paged' => get_query_var('paged'),
          'posts_per_page' => 12,
          'tax_query' => array(
		        'relation' => 'AND',
          ),
        );
      
        //カテゴリによる絞込
        $query_object = get_queried_object();
        $now_cat = $query_object->slug;
        if ($now_cat) {
          $marge_arg = array(
            'taxonomy' => 'cat_people',
            'field'    => 'slug',
            'terms'    => $now_cat,
          );
          $query_arg['tax_query'][] = $marge_arg;
        }
      
        //タグによる絞込
        $now_tag = $_GET['term'];
        if ($now_tag) {
          $marge_arg = array(
            'meta_key'		=> 'joblist',
	          'meta_value'	=> $now_tag
          );
          $query_arg = array_merge($query_arg, $marge_arg);
        }
        $the_query = new WP_Query($query_arg);
        set_query_var('the_query', $the_query);
      ?>
		  <?php if ( $the_query->have_posts() ) : ?>
        <ul class="people_area site_wid">
          <?php while ( $the_query->have_posts() ) : $the_query->the_post(); ?>
            <?php
              //カテゴリ取得
              $tag = get_field('joblist');
            ?>
            <li class="sr_bottom_delay">
              <a href="<?php the_permalink(); ?>">
                <figure>
                  <?php the_post_thumbnail(); ?>
                  <figcaption class="people_ttl"><?php the_field('ttl_comment'); ?></figcaption>
                  <span class="cat_<?php echo esc_html($tag->slug); ?>" style="background-color: <?php echo esc_html(get_field('color','cat_joblist_'.$tag->term_id)); ?>;">
                    <?php echo esc_html($tag->name) ?>
                  </span>
                </figure>
                <h3>
                  <span class="neme"><?php the_title(); ?></span>
                  <span class="occupations"><?php the_field('list_text'); ?></span>
                </h3>
              </a>
            </li>
          <?php endwhile;?>
        </ul>
        <?php
          //Pagenation
          if (function_exists("pagination")) {
            pagination($the_query->max_num_pages);
          }
        ?>
      <?php
        else:
          echo "<p>" . wpautop('投稿が見つかりませんでした。'), "</p>";
        endif;
		  ?>
    </section>
  </article>
  <?php get_template_part( 'template-parts/content-entry' ); ?>
<?php get_footer(); ?>
