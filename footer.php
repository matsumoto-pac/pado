	</main>
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
            <a href="<?php echo esc_url( home_url( '/' ) ); ?>">
              ぱどバリュー
            </a>
          </li><li>
            <a href="<?php echo esc_url( home_url( '/' ) ); ?>">
              事業内容
            </a>
          </li><li>
            <a href="<?php echo esc_url( home_url( '/' ) ); ?>">
              働く環境
            </a>
          </li><li>
            <a href="<?php echo esc_url( home_url( '/' ) ); ?>">
              ぱどの人々
            </a>
          </li><li>
            <a href="<?php echo esc_url( home_url( '/' ) ); ?>">
              募集要項
            </a>
          </li><li>
            <a href="<?php echo esc_url( home_url( '/' ) ); ?>">
              お知らせ
            </a>
          </li><li>
            <a href="<?php echo esc_url( home_url( '/' ) ); ?>">
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
  jQuery(function($) {
      setTimeout(function(){
        $('#mainvis .bg-movie').vide('<?php echo esc_url( get_template_directory_uri() ); ?>/movie/mainvis', {
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
         var instance = $('#mainvis .bg-movie').data('vide');
         if(instance.getVideoObject().play()){
          $(".content-wrap").addClass('active');
          $(".loader-wrap").fadeOut('slow');
        }
      },1500);
  });
  </script>
  <?php endif; ?>
</body>
</html>
