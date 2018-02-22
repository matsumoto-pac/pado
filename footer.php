	</main>
  <p id="page-top"><a href="#"><img src="<?php echo esc_url( get_template_directory_uri() ); ?>/images/common/img_pagetop.gif" alt="page-top"></a></p>
  <footer id="footer">
    <div class="f_cont">
      <nav class="f_nav">
        <ul>
          <li class="pc">
            <a href="<?php echo esc_url( home_url( '/' ) ); ?>">
              ホーム
            </a>
          </li><li class="sp">
            <a href="<?php echo esc_url( home_url( '/' ) ); ?>">
              トップ
            </a>
          </li><li>
            <a href="<?php echo esc_url( home_url( '/value/' ) ); ?>">
              ぱどバリュー
            </a>
          </li><li>
            <a href="<?php echo esc_url( home_url( '/business/' ) ); ?>">
              事業内容
            </a>
          </li><li>
            <a href="<?php echo esc_url( home_url( '/environment/' ) ); ?>">
              働く環境
            </a>
          </li><li>
            <a href="<?php echo esc_url( home_url( '/people/' ) ); ?>">
              ぱどの人々
            </a>
          </li><li>
            <a href="<?php echo esc_url( home_url( '/joblist/' ) ); ?>">
              募集要項
            </a>
          </li><li>
            <a href="<?php echo esc_url( home_url( '/info/' ) ); ?>">
              お知らせ
            </a>
          </li><li>
            <a href="<?php echo esc_url( home_url( '/sitemap/' ) ); ?>">
              サイトマップ
            </a>
          </li><li>
            <a href="<?php echo esc_url( home_url( '/' ) ); ?>" class="site_link">
              ぱど企業サイト
            </a>
          </li>
        </ul>
      </nav>
      <p class="f_logo">
        <a href="<?php echo esc_url( home_url( '/' ) ); ?>">
          <img src="<?php echo esc_url( get_template_directory_uri() ); ?>/images/common/logo_01.png" alt="<?php echo bloginfo('name'); ?>">
        </a>
      </p>
    </div>
    <p id="copy"><small>Copyright(c)&nbsp;Pado&nbsp;Corporation&nbsp;ALL&nbsp;RIGHTS&nbsp;RESERVED.</small></p>
  </footer>
  <?php wp_footer(); ?>
  <?php if(is_home()): ?>
  <script type="text/javascript">
  jQuery(window).load(function($) {
    setTimeout(function(){
      jQuery('#mainvis .bg-movie').vide('<?php echo esc_url( get_template_directory_uri() ); ?>/movie/mainvis', {
        volume: 1,
        playbackRate: 1,
        muted: true,
        loop: true,
        autoplay: true,
        position: '50% 50%',
        posterType: 'detect',
        resizing: true,
        bgColor: 'transparent',
        className: ''
      });
       var instance = jQuery('#mainvis .bg-movie').data('vide');
       if(instance.getVideoObject().play()){
        jQuery(".content-wrap").addClass('active');
        jQuery(".loader-wrap").fadeOut('slow');
        jQuery("#mainvis .bg-movie img").remove();
       }
    },1200);
  });
  </script>
  <?php endif; ?>
</body>
</html>
