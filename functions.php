<?php

if ( ! function_exists( 'my_theme_default_setup' ) ) :
	function my_theme_default_setup() {
    //---------------------
    // フロントエンドUI
    //---------------------

    //Include css/js
    function my_include_files() {
      wp_enqueue_script( 'jquery' );
      wp_enqueue_script( 'jquery-slick', get_template_directory_uri() . '/js/jquery.slick.min.js', array(), '20180206', true );
      wp_enqueue_script( 'my-common', get_template_directory_uri() . '/js/common.js', array(), '20180206', true );
      wp_enqueue_style( 'noto-sans', 'https://fonts.googleapis.com/css?family=Noto+Sans:400,700', '20180206' );
      wp_enqueue_style( 'montserrat', 'https://fonts.googleapis.com/css?family=Montserrat:400,500,700,800', '20180206' );
      wp_enqueue_style( 'my-style', get_template_directory_uri() . '/css/style.css', "", '20180206' );
    }
    add_action( 'wp_enqueue_scripts', 'my_include_files' );

    //OGP
    function the_seo($post) {
      $ogp = '';
      $seo ='';
      if ( is_archive() || get_post_meta($post->ID, 'noindex', true) ) {
        $seo .= '<meta name="robots" content="noindex">';
      }
      if (is_single()) {
        $ogp .= '<head prefix="og: http://ogp.me/ns# fb: http://ogp.me/ns/fb# article: http://ogp.me/ns/article#">';
      } else {
        $ogp .= '<head prefix="og: http://ogp.me/ns# fb: http://ogp.me/ns/fb# website: http://ogp.me/ns/website#">';
      }
      $ogp .= '<meta property="og:locale" content="ja_JP">';
      //$ogp .= '<meta property="fb:app_id" content="213475055740471">';
      $ogp .= '<meta property="og:site_name" content="' . get_bloginfo('name') . '">';
      if (is_single()){
        if(have_posts()): while(have_posts()): the_post();
          $ogp .= '<meta property="og:title" content="' . get_the_title() . '">';
          $ogp .= '<meta property="og:description" content="' . mb_substr(get_the_excerpt(), 0, 100) . '">';
          $seo .= '<meta name="description" content="' . mb_substr(get_the_excerpt(), 0, 100) . '">';
          $ogp .= '<meta property="og:url" content="' . get_the_permalink() . '">';
          $ogp .= '<meta property="og:type" content="article">';
          //$ogp .= '<meta property="article:author" content="https://www.facebook.com/ss764020">';
        endwhile; endif;
      } else {
        $ogp .= '<meta property="og:title" content="' . get_bloginfo('name') .'">';
        $ogp .= '<meta property="og:description" content="' . get_bloginfo('description') . '">';
        $seo .= '<meta name="description" content="' . get_bloginfo('description') . '">';
        $ogp .= '<meta property="og:url" content="' . get_bloginfo('url') . '">';
        $ogp .= '<meta property="og:type" content="website">';
      }
      $str = $post->post_content;
      $searchPattern = '/<img.*?src=(["\'])(.+?)\1.*?>/i';
      if (is_single()){
        if (has_post_thumbnail()){
          $image_id = get_post_thumbnail_id();
          $image = wp_get_attachment_image_src( $image_id, 'full');
          $ogp .= '<meta property="og:image" content="' . $image[0] . '">';
        } else if ( preg_match( $searchPattern, $str, $imgurl )){
          $ogp .= '<meta property="og:image" content="' . $imgurl[2] . '">';
        } else {
          $ogp .= '<meta property="og:image" content="' . esc_url( get_template_directory_uri() ) . '/images/common/ogp-image.png">';
        }
      } else {
        $ogp .= '<meta property="og:image" content="' . esc_url( get_template_directory_uri() ) . '/images/common/ogp-image.png">';
      }
      //$ogp .= '<meta name="twitter:card" content="summary">';
      //$ogp .= '<meta name="twitter:site" content="@kerger2">';
      echo $seo . $ogp;
    }

		//SEOtitleタグ
		add_theme_support( 'title-tag' );

		//アイキャッチをサポート
		add_theme_support( 'post-thumbnails', array('people','joblist'));
		register_post_type(
			'people',
			array(
			  // 'supports'に'thumbnail'を追記
			  'supports' => array('title','editor','thumbnail')
			)
		);

		//html5対応
		add_theme_support( 'html5', array(
			'search-form',
			'comment-form',
			'comment-list',
			'gallery',
			'caption',
		) );
	}

  //google analytics
  function my_js_function_foot() {
    echo
    "<script>
      (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
      (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
      m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
      })(window,document,'script','https://www.google-analytics.com/analytics.js','ga');

      ga('create', 'UA-xxxxxxxxx', 'auto');
      ga('send', 'pageview');

    </script>";
  }
  add_action('wp_footer', 'my_js_function_foot', 99999999);

  //---------------------
  // フロントエンド機能
  //---------------------

  //Contact form7 メールアドレス確認
  /*
  add_filter( 'wpcf7_validate_email', 'wpcf7_text_validation_filter_extend', 11, 2 );
  add_filter( 'wpcf7_validate_email*', 'wpcf7_text_validation_filter_extend', 11, 2 );
  function wpcf7_text_validation_filter_extend( $result, $tag ) {
    $type = $tag['type'];
    $name = $tag['name'];
    $_POST[$name] = trim( strtr( (string) $_POST[$name], "\n", " " ) );
    if ( 'email' == $type || 'email*' == $type ) {
      if (preg_match('/(.*)_confirm$/', $name, $matches)){
        $target_name = $matches[1];
        if ($_POST[$name] != $_POST[$target_name]) {
          if (method_exists($result, 'invalidate')) {
            $result->invalidate( $tag,"確認用のメールアドレスが一致していません");
          } else {
            $result['valid'] = false;
            $result['reason'][$name] = '確認用のメールアドレスが一致していません';
          }
        }
      }
    }
    return $result;
  }
  */

  //抜粋の文字数
  add_filter('excerpt_mblength', 'new_excerpt_mblength');
  function new_excerpt_mblength($length) {
    return 36;
  }

  //抜粋の末尾の文字
  add_filter('excerpt_more', 'new_excerpt_more');
  function new_excerpt_more($more) {
    return '…';
  }

  //トップページを固定ページとした時$pagedが取得されない問題を解決
  /*
  add_action( 'parse_query', 'my_parse_query' );
  function my_parse_query( $query ) {
    if ( ! isset( $query->query_vars['paged'] ) && isset( $query->query_vars['page'] ) )
      $query->query_vars['paged'] = $query->query_vars['page'];
  }
  */

  //Authorアーカイブページを無効にする
  /*
  add_action( 'template_redirect', 'theme_slug_redirect_author_archive' );
  function theme_slug_redirect_author_archive() {
      if (is_author() ) {
          wp_redirect( home_url());
          exit;
      }
  }
  */

  //---------------------
  // バックエンドUI
  //---------------------

  // ログイン画面 CSS・js
  /*
  add_action( 'login_enqueue_scripts', 'custom_login_css' );
  function custom_login_css() {
    $files = '
      <link rel="stylesheet" href="'.get_bloginfo('template_directory').'/css/login.css" />
      <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
      <script src="' .get_bloginfo('template_directory'). '/js/login.js"></script>
    ';
    echo $files;
  }
  */

  // 管理画面 CSS・js
  /*
  add_action( 'admin_enqueue_scripts', 'custom_admin_css' );
  function custom_admin_css() {
    $files = '
      <link rel="stylesheet" href="'.get_bloginfo('template_directory').'/css/admin.css" />
    ';
    echo $files;
  }
  */

  //ビジュアルエディタcss
  add_editor_style("./css/vis_editor.css");

  //wysiwygエディタの「見出し１」を削除する
  function custom_editor_settings( $initArray ){
    $initArray['block_formats'] = "段落=p; 見出し2=h2; 見出し3=h3; 見出し4=h4;";
    return $initArray;
  }
  add_filter( 'tiny_mce_before_init', 'custom_editor_settings' );

  //「投稿」のラベル変更
  function custom_post_labels( $labels ) {
    $labels->name = 'お知らせ'; // 投稿
    $labels->singular_name = 'お知らせ'; // 投稿
    $labels->add_new = '新規追加'; // 新規追加
    $labels->add_new_item = 'お知らせを追加'; // 新規投稿を追加
    $labels->edit_item = '投稿の編集'; // 投稿の編集
    $labels->new_item = '新規お知らせ'; // 新規投稿
    $labels->view_item = 'お知らせを表示'; // 投稿を表示
    $labels->search_items = 'お知らせを検索'; // 投稿を検索
    $labels->not_found = 'お知らせが見つかりませんでした。'; // 投稿が見つかりませんでした。
    $labels->not_found_in_trash = 'ゴミ箱内にお知らせが見つかりませんでした。'; // ゴミ箱内に投稿が見つかりませんでした。
    $labels->parent_item_colon = ''; // (なし)
    $labels->all_items = 'お知らせ一覧'; // 投稿一覧
    $labels->archives = 'お知らせアーカイブ'; // 投稿アーカイブ
    $labels->insert_into_item = 'お知らせに挿入'; // 投稿に挿入
    $labels->uploaded_to_this_item = 'このお知らせへのアップロード'; // この投稿へのアップロー
    $labels->filter_items_list = 'お知らせリストの絞り込み'; // 投稿リストの絞り込み
    $labels->items_list_navigation = 'お知らせリストナビゲーション'; // 投稿リストナビゲーション
    $labels->items_list = 'お知らせリスト'; // 投稿リスト
    $labels->menu_name = 'お知らせ'; // 投稿
    $labels->name_admin_bar = 'お知らせ'; // 投稿
    return $labels;
  }
  add_filter( 'post_type_labels_post', 'custom_post_labels' );

  //カスタム投稿タイプの追加
  function create_custom_post_type() {
    //「ぱどの人々」
    register_post_type( 'people',
      array(
        'labels' => array(
          'name' => __( 'ぱどの人々' ),
          'singular_name' => __( 'ぱどの人々' )
        ),
        'public' => true,
        'menu_position' =>5,
      )
    );
  }
  add_action( 'init', 'create_custom_post_type' );

  //---------------------
  // バックエンド機能
  //---------------------

  //アイキャッチを必須入力
  /*
  add_action( 'admin_head-post-new.php', 'post_edit_required' );
  add_action( 'admin_head-post.php', 'post_edit_required' );
  function post_edit_required() {
  ?>
  <script type="text/javascript">
  jQuery(function($) {
    if( 'event' == $('#post_type').val() ) {
      $('#post').submit(function(e) {
        // アイキャッチ
        if( $('#set-post-thumbnail img').length < 1 ) {
          alert('アイキャッチ画像を設定してください');
          $('.spinner').css('visibility', 'hidden');
          $('#publish').removeClass('button-primary-disabled');
          $('#set-post-thumbnail').focus();
          return false;
        }
      });
    }
  });
  </script>
  <?php
  }
  */

  //一部カスタム投稿ページではエディタを利用できないようにする
  /*
  add_action( 'init' , 'my_remove_post_editor_support' );
  function my_remove_post_editor_support() {
   remove_post_type_support( 'dlm_download', 'editor' );
  }
  */


  //投稿機能から「カテゴリー」(,「タグ」)を削除
  add_action('init', 'my_unregister_taxonomies');
  function my_unregister_taxonomies() {
    global $wp_taxonomies;
    /*
    if (!empty($wp_taxonomies['category']->object_type)) {
      foreach ($wp_taxonomies['category']->object_type as $i => $object_type) {
        if ($object_type == 'post') {
          unset($wp_taxonomies['category']->object_type[$i]);
        }
      }
    }
    */
    if (!empty($wp_taxonomies['post_tag']->object_type)) {
      foreach ($wp_taxonomies['post_tag']->object_type as $i => $object_type) {
        if ($object_type == 'post') {
          unset($wp_taxonomies['post_tag']->object_type[$i]);
        }
      }
    }
    return true;
  }


  //管理画面でもTerm Orderで設定した並び順に
  /*
  add_filter('get_terms_orderby', 'my_get_terms_orderby', 10);
  function my_get_terms_orderby($orderby){
    if(is_admin()){
      return "t.term_order";
    }else{
      return $orderby;
    }
  }
  */

  //---------------------
  // パーミッション
  //---------------------

  // (管理者以外)管理画面のサイドバーを一部非表示
  add_action('admin_menu', 'remove_menus', 9999);
  function remove_menus () {
    if (!current_user_can('level_10')) { //level10以下のユーザーの場合メニューをunsetする
      //remove_menu_page('all-in-one-seo-pack/aioseop_class.php'); //All in One SEO
      remove_menu_page('wpcf7'); //Contact Form 7
      //remove_menu_page('metaslider'); //MetaSlider
      //remove_menu_page('edit.php?post_type=acf'); //AdvancedCustomField
      //remove_menu_page('cpt_main_menu'); //CustomPostTypeUI

      global $menu;
      //unset($menu[2]); // ダッシュボード
      //unset($menu[4]); // メニューの線1
      //unset($menu[5]); // 投稿
      //unset($menu[10]); // メディア
      //unset($menu[15]); // リンク
      unset($menu[20]); // ページ
      unset($menu[25]); // コメント
      //unset($menu[59]); // メニューの線2
      //unset($menu[60]); // テーマ
      //unset($menu[65]); // プラグイン
      unset($menu[70]); // プロフィール
      unset($menu[75]); // ツール
      //unset($menu[80]); // 設定
      //unset($menu[90]); // メニューの線3
    }
  }

  //(管理者以外)all in one seo packのメタボックス消す
/*
  add_action('admin_menu', 'remove_plugins_metabox', 1000 );
  function remove_plugins_metabox() {
    if(!current_user_can('level_10')) {
      remove_meta_box( 'aiosp', 'post', 'advanced' );
      remove_meta_box( 'aiosp', 'faq', 'advanced' );
      remove_meta_box( 'aiosp', 'event', 'advanced' );
      remove_meta_box( 'aiosp', 'tips', 'advanced' );
    }
  }
*/

  // (管理者以外)管理者ページのアクセス禁止
  add_action( 'auth_redirect', 'subscriber_go_to_home' );
  function subscriber_go_to_home( $user_id ) {
    $user = get_userdata( $user_id );
    if ( !$user->has_cap( 'edit_posts' ) ) {
      wp_redirect( get_home_url() );
      exit();
    }
  }

  // (管理者以外)ログイン時ツールバーを非表示
  /*
  add_filter( 'show_admin_bar' , 'my_function_admin_bar');
  function my_function_admin_bar($content) {
    return ( current_user_can("administrator") ) ? $content : false;
  }
  */
endif;
add_action( 'after_setup_theme', 'my_theme_default_setup' );

//カスタムフィールド・カスタム投稿
require_once "functions-custom.php";
