<?php
//募集要項カスタム投稿
function cptui_register_my_cpts() {
	/**
	 * Post Type: 募集要項.
	 */
	$labels = array(
		"name" => __( "募集要項", "" ),
		"singular_name" => __( "募集要項", "" ),
		"view_item" => __( "募集要項を表示", "" ),
	);

	$args = array(
		"label" => __( "募集要項", "" ),
		"labels" => $labels,
		"description" => "",
		"public" => true,
		"publicly_queryable" => true,
		"show_ui" => true,
		"show_in_rest" => false,
		"rest_base" => "",
		"has_archive" => true,
		"show_in_menu" => true,
		"exclude_from_search" => false,
		"capability_type" => "post",
		"map_meta_cap" => true,
		"hierarchical" => false,
		"rewrite" => array( "slug" => "joblist", "with_front" => false ),
		"query_var" => false,
		"menu_position" => 6,
		"supports" => array( "title", "thumbnail" ),
		"taxonomies" => array( "cat_joblist" ),
	);

	register_post_type( "joblist", $args );
}
add_action( 'init', 'cptui_register_my_cpts' );

//募集要項カスタムタクソノミー
function cptui_register_my_taxes_cat_joblist() {
	$labels = array(
		"name" => __( "職種", "" ),
		"singular_name" => __( "職種", "" ),
		"add_new_item" => __( "職種を新規追加", "" ),
	);

	$args = array(
		"label" => __( "職種", "" ),
		"labels" => $labels,
		"public" => true,
		"hierarchical" => true,
		"label" => "職種",
		"show_ui" => true,
		"show_in_menu" => true,
		"show_in_nav_menus" => true,
		"query_var" => true,
		"rewrite" => array( 'slug' => 'joblist-category', 'with_front' => false, ),
		"show_admin_column" => true,
		"show_in_rest" => false,
		"rest_base" => "",
		"show_in_quick_edit" => false,
	);
	register_taxonomy( "cat_joblist", array( "joblist" ), $args );
}

add_action( 'init', 'cptui_register_my_taxes_cat_joblist' );


//募集要項カスタム投稿で職種選択を単一化
function select_to_radio_cat_joblist() {
	?>
		<script type="text/javascript">
		jQuery( function( $ ) {
				// 投稿画面
				$( '#taxonomy-cat_joblist input[type=checkbox]' ).each( function() {
						$( this ).replaceWith( $( this ).clone().attr( 'type', 'radio' ) );
				} );

				// 一覧画面
				var cat_joblist_checklist = $( '.cat_joblist-checklist input[type=checkbox]' );
				cat_joblist_checklist.click( function() {
						$( this ).parents( '.cat_joblist-checklist' ).find( ' input[type=checkbox]' ).attr( 'checked', false );
						$( this ).attr( 'checked', true );
				} );
		} );
		</script>
		<?php
}add_action('admin_print_footer_scripts', 'select_to_radio_cat_joblist');

//募集要項カスタム投稿一覧用サムネイルサイズ
add_image_size('joblist_thumbnail', 170, 194, true);

//スラッグ名が日本語だったら自動的にid付与へ変更
function auto_post_slug($slug, $post_ID, $post_status, $post_type) {
	if (!strcmp($post_type, "joblist")) {
		if (preg_match('/(%[0-9a-f]{2})+/', $slug)) {
			// $slug = utf8_uri_encode($post_type) . '-' . $post_ID;
			$slug = $post_ID;
		}
		return $slug;
	}
}
add_filter('wp_unique_post_slug', 'auto_post_slug', 10, 4);

//Pagenation
function pagination($pages = '', $range = 10) {
	$showitems = ($range * 2) + 1; //表示するページ数（５ページを表示）

	global $paged; //現在のページ値
	if (empty($paged)) {
		$paged = 1;
	}
//デフォルトのページ

	if ($pages == '') {
		global $wp_query;
		$pages = $wp_query->max_num_pages; //全ページ数を取得
		if (!$pages) //全ページ数が空の場合は、１とする
		{
			$pages = 1;
		}
	}

	if (1 != $pages) //全ページが１でない場合はページネーションを表示する
	{
		echo "<div class=\"pagenation\">\n";
		echo "<ul>\n";
		//Prev：現在のページ値が１より大きい場合は表示
		if ($paged > 1) {
			echo "<li class=\"prev\"><a href='" . get_pagenum_link($paged - 1) . "'>Prev</a></li>\n";
		}

		for ($i = 1; $i <= $pages; $i++) {
			if (1 != $pages && (!($i >= $paged + $range + 1 || $i <= $paged - $range - 1) || $pages <= $showitems)) {
				//三項演算子での条件分岐
				echo ($paged == $i) ? "<li class=\"active\">" . $i . "</li>\n" : "<li><a href='" . get_pagenum_link($i) . "'>" . $i . "</a></li>\n";
			}
		}
		//Next：総ページ数より現在のページ値が小さい場合は表示
		if ($paged < $pages) {
			echo "<li class=\"next\"><a href=\"" . get_pagenum_link($paged + 1) . "\">Next</a></li>\n";
		}

		echo "</ul>\n";
		echo "</div>\n";
	}
}

//ページネーション404対策
function custom_query($query) {
	if (is_admin() || !$query->is_main_query()) {
		return;
	}
	if ($query->is_archive('joblist') || $query->is_tax('cat_joblist')) {
		$query->set('posts_per_page', 8); //10記事毎にページング
		return;
	}
}
add_action('pre_get_posts', 'custom_query');
