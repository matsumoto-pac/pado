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
          <h2 class="ttl_dot sr_bottom">
      結果を出す人の<br>
      メカニズム
    </h2>
          <div class="desc align_center">
              <p class="sr_bottom">
                  ぱどは「結果を出せる人」の才能を発掘し、開花する機会を与え、育てることを第一に考えています。私たちが考える「結果を出す人のメカニズム」を説明するために、私たちの歩みを知って欲しいと思います。
              </p>
              <p class="sr_bottom">
                  ぱどはフリーペーパー広告を通して街の困り事を解決してきました。
              </p>
              <p class="sr_bottom">
                  ぱどは◯◯部の発行、◯◯万人の元へ届くようになり、～～～（日本最大の◯◯など）になりました。しかし、競合が次々に生まれ、また広告手法は多様化し、生活の中に広告は溢れていきました。
              </p>
              <p class="sr_bottom">
                  広告の中心はインターネットへとシフトしていき、フリーペーパーは衰退していくように見えました。
              </p>
              <p class="sr_bottom">
                  ぱどもWebメディアに力を入れていきました。アドテクにも積極的に取り組んでいきます。もちろん、方法論が進化することは重要です。しかし、広告手法は変われど変わらないものがあります。
              </p>
              <p class="sr_bottom">
                  それは、「お客様を勝たせる」ということ。
                  <br> つまり、「お客様の結果にコミットする」こと。
              </p>
              <p class="sr_bottom">
                  広告はどうしても結果の測定が曖昧になりがちで、広告会社が結果の目標は立てど、結果に責任を持つということはほとんどありませんでした。一歩間違えると、広告会社は広告を提供することに注力しがちです。
              </p>
              <p class="sr_bottom">
                  しかし、ぱどは違います。お客様の困りごとに真剣に耳を傾ける。広告が解決できるかどうかではなく、むしろ広告の枠を超えて、どうすればお客様の困りごとを解決できるかを真剣に考える。
              </p>
              <p class="sr_bottom">
                  情報を集め、問題解決の策を練り、企画を考え、誌面やWebを超えて立体的に構築する。共に汗を流し、結果が出る喜びの感動を共有する。
              </p>
              <p class="sr_bottom">
                  結果を出す人とは、大切な人の結果にコミットする人。
                  <br> 結果にコミットしたら、方法を考え抜き、やりきる人。
              </p>
              <p class="sr_bottom">
                  結果を出す人のまわりには笑顔が集まり、感動が溢れている。</p>
          </div>
      </div>
  </section>
  <section id="sec_02" class="sec">
    <div class="cont">
      <h3 class="ttl_en-ja align_center">
        <span class="en sr_bottom">PADO&nbsp;PEOPLE</span>
        <span class="ja sr_bottom">ぱどの人々</span>
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
              get_template_part( 'template-parts/content-list_people' );
            endwhile;
           ?>
        </ul>
        <p class="btn_more sr_bottom">
          <a href="home_url( '/people/' )">
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
          <div class="col bg_gray bg_shift ">
            <h3 class="ttl_en-ja align_right">
              <span class="en sr_bottom">PADO&nbsp;VALUE</span>
              <span class="ja sr_bottom">ぱどバリュー</span>
            </h3>
              <div class="desc">
                  <p class="sr_bottom">
                      テキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキスト
                  </p>
              </div>
              <p class="btn_more sr_bottom">
                <a href="home_url( '/value/' )">
                  さらに見る
                </a>
              </p>
          </div>
          <figure class="col sr_bottom">
              <img src="<?php echo esc_url( get_template_directory_uri() ); ?>/images/top/img_top.jpg" alt="" />
          </figure>
      </div>
  </section>
  <section id="sec_04" class="sec">
      <div class="cont col_2">
          <div class="col">
            <h3 class="ttl_en-ja align_left">
              <span class="en sr_bottom">INFORMATION</span>
              <span class="ja sr_bottom">お知らせ</span>
            </h3>
          </div>
          <div class="col sr_bottom">
              <?php
            $the_query = new WP_Query(array(
              'post_type' => 'post'
            ));
            set_query_var('the_query', $the_query);
            get_template_part( 'template-parts/content-list_info' );
          ?>
          </div>
      </div>
      <p class="btn_more sr_bottom">
          <a href="home_url( '/info/' )">
          さらに見る
        </a>
      </p>
  </section>
  <?php get_template_part( 'template-parts/content-entry' ); ?>
</div>
<script type="text/javascript">
  //とりあえずここ
  (function($) {
    var $win = $(window);
    var $body = $('body');
    var $sec02 = $('#sec_02');
    var now_y = $win.scrollTop();
    var disp_y; //ヘッダを表示し始めるy座標

    //ヘッダーをクローンした後にclass付与して画像差し替え
    $('#header').clone().appendTo('body').addClass('h_clone');


    //画面リサイズ時動作
    $win.load(function () {
      resize_func();
    });
    var timer = false;
    $win.resize(function(){
      if (timer !== false) {
        clearTimeout(timer);
      }
      timer = setTimeout(function() {
        resize_func();
      });
    });

    //スクロール時の動作
    $win.scroll(function () {
      now_y = $win.scrollTop();
        //console.log(disp_y + ' ' + now_y);

      if(disp_y < now_y) {
        $body.addClass('hc_active');
      } else {
        $body.removeClass('hc_active');
      }
    });

    //functions
    function resize_func() {
      disp_y = $sec02.offset().top;
        //console.log(disp_y);
    }
  }(jQuery));
</script>
<?php get_footer(); ?>
