<?php

// アイキャッチを使用可能に
add_theme_support('post-thumbnails');
add_image_size( 'custom_thumbnails', 300, 300, true );

// 固定ページでタグ設定欄を表示
function add_tag_to_page(){
  register_taxonomy_for_object_type('post_tag', 'page'); 
}
add_action('init', 'add_tag_to_page');



// カスタム投稿タイプ作成

// message
function create_post_type() {
  $exampleSupports = [
    'title',
    'editor',
    'thumbnail',
    'revisions'
  ];
  // add post type
  register_post_type( 'message',
    array(
      'label' => 'message',
	  'show_in_rest' => true,
      'public' => true,
      //'has_archive' => true,
      'menu_position' => 5,
      'supports' => $exampleSupports
    )
  );
}
add_action( 'init', 'create_post_type' );


function create_post_type2() {
  $exampleSupports2 = [
    'title',
    'editor',
    'thumbnail',
    'revisions'
  ];
  // add post type
  register_post_type( 'interview',
    array(
      'label' => 'interview',
	  'show_in_rest' => true,
      'public' => true,
      //'has_archive' => true,
      'menu_position' => 5,
      'supports' => $exampleSupports2
    )
  );

  // add taxonomy
  register_taxonomy(
    'interview_category',
    'interview',
    array(
      'label' => 'カテゴリー',
      'labels' => array(
        'all_items' => 'カテゴリー一覧',
        'add_new_item' => '新規カテゴリーを追加'
      ),
      'hierarchical' => true,
	  'show_in_rest' => true //ここ
    )
   );
}
add_action( 'init', 'create_post_type2' );