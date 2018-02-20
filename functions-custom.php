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
function auto_post_slug( $slug, $post_ID, $post_status, $post_type ) {
		if ( preg_match( '/(%[0-9a-f]{2})+/', $slug ) ) {
				$slug = $post_ID;
		}
		return $slug;
}
add_filter( 'wp_unique_post_slug', 'auto_post_slug', 10, 4  );