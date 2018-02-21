<?php get_header(); ?>
<div class="loader-wrap">
<div class="loader">Loading...</div>
</div>
<div class="content-wrap">
<section id="mainvis">
    <div class="bg-movie"><img src="<?php echo esc_url( get_template_directory_uri() ); ?>/movie/mainvis.gif" alt=""></div>
    <div class="cont">
        <h2 class="ttl">“make a CHALLENGE”</h2>
        <?php if(false): ?>
        <div class="btns">
            <ul>
                <li>
                    <a href="">
          結果を<strong class="color_blue">出せる</strong>人へ
        </a>
                </li>
                <li>
                    <a href="">
          結果を<strong class="color_blue">出したい</strong>人へ
        </a>
                </li>
            </ul>
        </div>
        <?php endif; ?>
        <div class="scroll">
            <div class="mouse">
                <span class="boule"></span>
            </div>
        </div>
    </div>
</section>
<section id="sec_01" class="sec">
    <div class="cont site_wid">
        <h2 class="ttl_dot">
    結果を出す人の<br>
    メカニズム
  </h2>
        <div class="desc align_center">
            <p>
                ぱどは「結果を出せる人」の才能を発掘し、開花する機会を与え、育てることを第一に考えています。私たちが考える「結果を出す人のメカニズム」を説明するために、私たちの歩みを知って欲しいと思います。
            </p>
            <p>
                ぱどはフリーペーパー広告を通して街の困り事を解決してきました。
            </p>
            <p>
                ぱどは◯◯部の発行、◯◯万人の元へ届くようになり、～～～（日本最大の◯◯など）になりました。しかし、競合が次々に生まれ、また広告手法は多様化し、生活の中に広告は溢れていきました。
            </p>
            <p>
                広告の中心はインターネットへとシフトしていき、フリーペーパーは衰退していくように見えました。
            </p>
            <p>
                ぱどもWebメディアに力を入れていきました。アドテクにも積極的に取り組んでいきます。もちろん、方法論が進化することは重要です。しかし、広告手法は変われど変わらないものがあります。
            </p>
            <p>
                それは、「お客様を勝たせる」ということ。
                <br> つまり、「お客様の結果にコミットする」こと。
            </p>
            <p>
                広告はどうしても結果の測定が曖昧になりがちで、広告会社が結果の目標は立てど、結果に責任を持つということはほとんどありませんでした。一歩間違えると、広告会社は広告を提供することに注力しがちです。
            </p>
            <p>
                しかし、ぱどは違います。お客様の困りごとに真剣に耳を傾ける。広告が解決できるかどうかではなく、むしろ広告の枠を超えて、どうすればお客様の困りごとを解決できるかを真剣に考える。
            </p>
            <p>
                情報を集め、問題解決の策を練り、企画を考え、誌面やWebを超えて立体的に構築する。共に汗を流し、結果が出る喜びの感動を共有する。
            </p>
            <p>
                結果を出す人とは、大切な人の結果にコミットする人。
                <br> 結果にコミットしたら、方法を考え抜き、やりきる人。
            </p>
            <p>
                結果を出す人のまわりには笑顔が集まり、感動が溢れている。
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
            'post_type' => 'people'
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
          <span class="ja align_right">ぱどバリュー</span>
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
          <span class="ja align-left">お知らせ</span>
        </h3>
        </div>
        <div class="col">
            <?php
          $the_query = new WP_Query(array(
            'post_type' => 'post'
          ));
          set_query_var('the_query', $the_query);
          get_template_part( 'template-parts/content-list_info' );
        ?>
        </div>
    </div>
    <p class="btn_more">
        <a href="home_url( '/info/' )">
        さらに見る
      </a>
    </p>
</section>
<?php get_template_part( 'template-parts/content-entry' ); ?>
</p>
<?php get_footer(); ?>
