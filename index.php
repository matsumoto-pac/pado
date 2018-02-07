<?php get_header(); ?>
  <section id="mainvis">
    <div class="cont">
      <h1 class="ttl">“make a CHALLENGE”</h1>
      <div class="btns">
        <ul>
          <li>
            <a href="">
              結果を<strong class="color_blue">出せる</strong>人へ
            </a>
          </li><li>
            <a href="">
              結果を<strong class="color_blue">出したい</strong>人へ
            </a>
          </li>
        </ul>
      </div>
      <div class="scroll">
        <div class="mouse">
          <span class="boule"></span>
        </div>
      </div>
    </div>
  </section>
  <section id="sec_01" class="sec">
    <div class="cont">
      <h2 class="ttl_dot">
        街中の人に幸せ、<br>
        喜びを提供したい。
      </h2>
      <div class="desc align_center">
        <p>
          テキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキスト
        </p>
        <p>
          テキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキスト
        </p>
      </div>
    </div>
  </section>
  <section id="sec_02" class="sec">
    <div class="cont">
      <h3 class="ttl_en-ja align_center">
        <span class="en">PADO&nbsp;PEOPLE</span>
        <span class="ja">ぱどの人々</span>
      </h3>
      <div class="list_people">
        <?php
          $the_query = new WP_Query(array(
            'post_type'	=> 'people'
          ));
          if ( $the_query->have_posts() ) :
        ?>
          <ul>
            <?php
              while ( $the_query->have_posts() ) : $the_query->the_post();
            ?>
              <li>
                <a href="">
                  <figure class="img">
                    <?php the_post_thumbnail(); ?>
                  </figure>
                  <p class="text">
                    <span class="date"><?php the_field('list_text'); ?></span>
                    <span class="name"><?php the_title(); ?></span>
                  </p>
                </a>
              </li>
            <?php
              endwhile;
          　?>
          </ul>
          <p class="btn_more">
            <a href="">
              さらに見る
            </a>
          </p>
        <?php
          endif;
        ?>
      </div>
    </div>
  </section>
  <section id="sec_03" class="sec">
    <div class="cont col_2 col_2-right">
      <div class="col bg_gray bg_shift">        
        <h3 class="ttl_en-ja align_right">
          <span class="en">PADO&nbsp;VALUE</span>
          <span class="ja">ぱどバリュー</span>
        </h3>
        <div class="desc">
          <p>
            テキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキスト
          </p>
        </div>
        <p class="btn_more">
          <a href="">
            さらに見る
          </a>
        </p>
      </div>
      <figure class="col">
        <img src="<?php echo esc_url( get_template_directory_uri() ); ?>/images/top/img_top.jpg" alt="" />
      </figure>
    </div>
  </section>
  <section id="sec_04" class="sec">
    <div class="cont col_2">
      <div class="col">
        <h3 class="ttl_en-ja">
          <span class="en">INFORMATION</span>
          <span class="ja">お知らせ</span>
        </h3>
      </div>
      <div class="col">
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
                  <span class="date"><?php echo get_the_date(); ?></span>
                  <span class="cat cat_<?php echo $cat_slug ?>"><?php echo $cat_name ?></span>
                  <a href=""><?php the_title(); ?></a>
                </li>
              <?php
                endwhile;
             ?>
            </ul>
          <?php
            endif;
          ?>
        </div>
      </div>
    </div>
            <p class="btn_more">
              <a href="">
                さらに見る
              </a>
            </p>
  </section>
  <?php get_template_part( 'template-parts/content-entry' ); ?>
<?php get_footer(); ?>