<?php

function add_css_js() {//関数名add_css_js()を作成
	//CSSの読み込みはここから
	
	//全てのページにstyle.cssを読み込み
	wp_enqueue_style('style',get_template_directory_uri().'/style.css' );
	
	//全てのページにcss/base.cssを読み込み
	wp_enqueue_style('base', get_template_directory_uri().'/css/base.css');

	//全てのページにcss/responsive.cssを読み込み
	wp_enqueue_style('responsive', get_template_directory_uri().'/css/responsive.css');
  
  
	if(!is_admin()){ //管理画面以外
		wp_enqueue_script('jquery');
    remove_action('wp_head', 'wp_print_scripts');
    remove_action('wp_head', 'wp_print_head_scripts', 9);
    remove_action('wp_head', 'wp_enqueue_scripts', 1);
    add_action('wp_footer', 'wp_print_scripts');
    add_action('wp_footer', 'wp_print_head_scripts');
    add_action('wp_footer', 'wp_enqueue_scripts');
  }

  //Multiple Select
  wp_enqueue_style('jq-multiple-css', 'https://unpkg.com/multiple-select@1.5.2/dist/multiple-select.min.css', array()); 
  wp_enqueue_script('jquery-cdn', 'https://cdn.jsdelivr.net/npm/jquery/dist/jquery.min.js',array('jquery'),'', true);
  wp_enqueue_script('jquery-multiple', 'https://unpkg.com/multiple-select@1.5.2/dist/multiple-select.min.js',array('jquery-cdn'),'', true);
  
	    // slick style
  wp_enqueue_style('slick-style', get_template_directory_uri() . '/slick/slick.css', array());
  wp_enqueue_style('slick-theme-style', get_template_directory_uri() . '/slick/slick-theme.css', array('slick-style'));

  wp_enqueue_script('slick-script', get_template_directory_uri() . '/slick/slick.min.js', array(), '1.8.1', true);

	wp_enqueue_script('zip', get_theme_file_uri('js/ajaxzip3.js'), array('jquery'),'', true);

	wp_enqueue_script( 'script', get_theme_file_uri('js/script.js') ,array('jquery') ,'',true);

}
//関数名add_scripts()を表側で呼び出す
add_action('wp_enqueue_scripts', 'add_css_js');

?>

<?php // アイキャッチ画像を有効にする。
add_theme_support('post-thumbnails');
?>

<?php 

function register_my_menus() { 
	register_nav_menus( array( //複数のナビゲーションメニューを登録する関数
	//'「メニューの位置」の識別子' => 'メニューの説明の文字列',
	  'main-menu' => 'Main Menu',
	  'tag-menu'  => 'Tag Menu',
	) );
  }
  add_action( 'after_setup_theme', 'register_my_menus' );

?>

<?php 
//カスタムフィールドの「post_views_count」にアクセス数を保存する
function setPostViews($post_id) {
    $count_key = 'post_views_count';
    $count = get_post_meta($post_id, $count_key, true);
    if($count==''){
        $count = 0;
        delete_post_meta($post_id, $count_key);
        add_post_meta($post_id, $count_key, '0');
    }else{
        $count++;
        update_post_meta($post_id, $count_key, $count);
    }
}

//カスタムフィールドに保存されているアクセス数を取得する
function getPostViews($post_id){
    $count_key = 'post_views_count';
    $count = get_post_meta($post_id, $count_key, true);
    if($count==''){
        delete_post_meta($post_id, $count_key);
        add_post_meta($post_id, $count_key, '0');
        return "0 View";
    }
        return $count.' Views';
}
?>

<?php 
function post_has_archive($args, $post_type){
	if('post'== $post_type){
	  $args['rewrite']=true;
	  $args ["label"] = '投稿'; /*「投稿」のラベル名 */
	  $args['has_archive']='post'; /* アーカイブにつけるスラッグ名 */
	}
	return $args;
  }
  
  add_filter('register_post_type_args', 'post_has_archive', 10, 2);
?>

<?php
function widgetsidebar_init() {
	register_sidebar(array(
	'name'=>'サイドバー',
	'id' => 'side-widget',
	'description' => 'サイドバーにコンテンツを表示します。',
	'before_widget'=>'
	<div id="%1$s" class="%2$s sidebar-wrapper">',
	'after_widget'=>'</div>',
	'before_title' => '<h5 class="sidebar-title">',
	'after_title' => '</h5>'
	));
	}
	add_action( 'widgets_init', 'widgetsidebar_init' );
	?>
