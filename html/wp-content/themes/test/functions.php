<?php
// CSS
function mytheme_enqueue()
{
	// テーマのCSS
	wp_enqueue_style('mytheme-style', get_stylesheet_uri());
}
add_action('wp_enqueue_scripts', 'mytheme_enqueue');
// ------------------------------
// グーテンベルクCSS
// ------------------------------
add_action('after_setup_theme', 'nxw_setup_theme');
function nxw_setup_theme()
{
	add_theme_support('wp-block-styles');
}
// ------------------------------
// ウィジェット
// ------------------------------
function my_theme_widgets_init()
{
	register_sidebar(array(
		'name' => 'Main Sidebar',
		'id' => 'main-sidebar',
	));
}
add_action('widgets_init', 'my_theme_widgets_init');
// ------------------------------
// siteurl
// ------------------------------
add_shortcode('surl', 'shortcode_surl');
function shortcode_surl()
{
	return site_url();
}
// ------------------------------
// ショートコード設定
// ------------------------------
function siteurl_shortcode()
{
	return site_url();
}
add_shortcode('siteurl', 'siteurl_shortcode');
function themeurl_shortcode()
{
	return get_bloginfo('template_url');
}
add_shortcode('themeurl', 'themeurl_shortcode');
// ------------------------------
// アイキャッチ画像を有効にする。
// ------------------------------
add_theme_support('post-thumbnails');
function my_script_init()
{
	wp_enqueue_style('style', get_template_directory_uri() . '/dist/css/style.css', array());
	wp_enqueue_style('style_fontawesome', 'https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.0/css/all.min.css', array(), '6.2.0');
	wp_enqueue_script('swiper_js-01', get_template_directory_uri() . '/dist/js/lib/swiper-bundle.min.js', array(), '1.0.0', true);
	wp_enqueue_script('swiper_js-02', get_template_directory_uri() . '/src/js/swiper.js', array(), '1.0.0', true);
	wp_enqueue_script('ajax_js', 'https://ajaxzip3.github.io/ajaxzip3.js', array(), false);
	wp_enqueue_script('js', get_template_directory_uri() . '/src/js/index.js', array(), '1.0.0', true);
}
add_action('wp_enqueue_scripts', 'my_script_init');
// ------------------------------
// the_archive_title 余計な文字を削除
// ------------------------------
add_filter('get_the_archive_title', function ($title) {
	if (is_category()) {
		$title = single_cat_title('', false);
	} elseif (is_tag()) {
		$title = single_tag_title('', false);
	} elseif (is_tax()) {
		$title = single_term_title('', false);
	} elseif (is_post_type_archive()) {
		$title = post_type_archive_title('', false);
	} elseif (is_date()) {
		$title = get_the_time('Y年n月');
	} elseif (is_search()) {
		$title = '検索結果：' . esc_html(get_search_query(false));
	} elseif (is_404()) {
		$title = '「404」ページが見つかりません';
	} else {
	}
	return $title;
});

// カテゴリーとタグのmeta descriptionからpタグを除去
remove_filter('term_description', 'wpautop');
// ------------------------------
//投稿ページに個別CSS追加
// ------------------------------

add_action('admin_menu', 'custom_css_hooks');
add_action('save_post', 'save_custom_css');
add_action('wp_head', 'insert_custom_css');
function custom_css_hooks()
{
	add_meta_box('custom_css', 'Custom CSS', 'custom_css_input', 'post', 'normal', 'high');
	add_meta_box('custom_css', 'Custom CSS', 'custom_css_input', 'page', 'normal', 'high');
}
function custom_css_input()
{
	global $post;
	echo '<input type="hidden" name="custom_css_noncename" id="custom_css_noncename" value="' . wp_create_nonce('custom-css') . '" />';
	echo '<textarea name="custom_css" id="custom_css" rows="5" cols="30" style="width:100%;">' . get_post_meta($post->ID, '_custom_css', true) . '</textarea>';
}
function save_custom_css($post_id)
{
	if (!wp_verify_nonce($_POST['custom_css_noncename'], 'custom-css')) return $post_id;
	if (defined('DOING_AUTOSAVE') && DOING_AUTOSAVE) return $post_id;
	$custom_css = $_POST['custom_css'];
	update_post_meta($post_id, '_custom_css', $custom_css);
}
function insert_custom_css()
{
	if (is_page() || is_single()) {
		if (have_posts()) : while (have_posts()) : the_post();
				echo '<style type="text/css">' . get_post_meta(get_the_ID(), '_custom_css', true) . '</style>';
			endwhile;
		endif;
		rewind_posts();
	}
}

// ------------------------------
// 記事IDを投稿画面に表示させる
// ------------------------------
function add_posts_columns_postid($columns)
{
	$columns['postid'] = 'ID';
	return $columns;
}
function add_posts_columns_postid_row($column_name, $post_id)
{
	if ('postid' == $column_name) {
		echo $post_id;
	}
}
add_filter('manage_posts_columns', 'add_posts_columns_postid');
add_action('manage_posts_custom_column', 'add_posts_columns_postid_row', 10, 2);

// ------------------------------
//サイト内検索で日本語の種類を区別しない 
// ------------------------------
function change_search_char($where, $obj)
{
	if ($obj->is_search) {
		$where = str_replace(".post_title", ".post_title COLLATE utf8_unicode_ci", $where);
		$where = str_replace(".post_content", ".post_content COLLATE utf8_unicode_ci", $where);
	}
	return $where;
}
add_filter('posts_where', 'change_search_char', 10, 2);


// ------------------------------
//メニュー説明
// ------------------------------
function edit_menu_link($atts, $item)
{
	// メニュー項目が「説明」を持っている場合
	if (!empty($item->description)) {
		// リンクにdata-desc属性を追加する
		$atts['data-desc'] = $item->description;
	}
	return $atts;
}
add_filter('nav_menu_link_attributes', 'edit_menu_link', 10, 2);

// ------------------------------
// カスタム投稿のパーマリンク設定
// ------------------------------
//パーマリンクからタクソノミー名を削除
function my_custom_post_type_permalinks_set($termlink, $term, $taxonomy)
{
	return str_replace('/' . $taxonomy . '/', '/', $termlink);
}
add_filter('term_link', 'my_custom_post_type_permalinks_set', 11, 3);

//リライトルールの追加	
//★それぞれownersblogはカスタム投稿タイプ名、ownersblog-catはカスタムタクソノミー名を挿入

//↓カスタム投稿タイプの一覧ページ
add_rewrite_rule('works/page/([0-9]+)/?$', 'index.php?post_type=works&paged=$matches[1]', 'top');

//↓親タームに属する記事ページ
add_rewrite_rule('works/([^/]+)/([0-9]+)/?$', 'index.php?post_type=works&p=$matches[2]', 'top');

//↓親ターム一覧ページ
add_rewrite_rule('works/([^/]+)/?$', 'index.php?shop_cat=$matches[1]', 'top');
add_rewrite_rule('works/([^/]+)/page/([0-9]+)/?$', 'index.php?shop_cat=$matches[1]&paged=$matches[2]', 'top');

//↓子ターム一覧ページ
add_rewrite_rule('works/([^/]+)/([^/]+)/?$', 'index.php?shop_cat=$matches[2]', 'top');
add_rewrite_rule('works/([^/]+)/([^/]+)/page/([0-9]+)/?$', 'index.php?shop_cat=$matches[1]&paged=$matches[2]', 'top');


// タクソノミー未選択公開時にデフォルトで特定のタームを選択させる

function add_defaulttaxonomy($post_ID)
{
	global $wpdb;
	//カスタム分類のタームを取得
	$curTerm = wp_get_object_terms($post_ID, 'shop_cat'); //★カスタムタクソノミー名
	//ターム指定数が未設定の時に特定のタームを指定
	if (0 == count($curTerm)) {
		$defaultTerm = array(1); //★選択させたいタームID
		wp_set_object_terms($post_ID, $defaultTerm, 'shop_cat'); //★カスタムタクソノミー名
	}
}
//カスタム投稿
add_action('publish_works', 'add_defaulttaxonomy'); //★publish_カスタム投稿タイプ名


// ------------------------------
// カスタム投稿のパーマリンク設定
// ------------------------------
add_action(
	'pre_get_posts',
	function ($query) {
		if (is_admin() && !$query->is_main_query()) {
			return;
		}
		if (is_tax('shop_cat')) {
			$query->set('posts_per_page', 9);
			return;
		}
	}
);
