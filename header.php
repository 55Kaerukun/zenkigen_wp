<!DOCTYPE html>
<html lang="ja">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta http-equiv="x-ua-compatible" content="ie=edge">
  <meta property="og:title" content="採用情報 株式会社ZENKIGEN" />
  <meta property="og:description" content="株式会社ZENKIGENの採用情報サイトです。" />
  <meta property="og:type" content="website" />
  <meta property="og:url" content="https://recruit.zenkigen.co.jp" />
  <meta property="og:image" content="https://recruit.zenkigen.co.jp/assets/img/ogp.png" />
  <meta name="twitter:card" content="summary_large_image">
  <meta property="og:locale" content="ja_JP" />
  <meta name="format-detection" content="telephone=no">
  <meta name="description" content="">
  <meta name="keywords" content="">
  <?php if ( is_home() || is_front_page() ) : ?>
  <title><?php bloginfo('name'); ?></title>
  <?php elseif(is_page()): ?>
  <title><?php wp_title(''); ?> | <?bloginfo('name'); ?></title>
  <?php elseif(is_singular('interview')): ?>
  <title><?php echo "インタビュー";wp_title(''); ?> | <?bloginfo('name'); ?></title>
  <?php elseif(is_singular('message')): ?>
  <title><?php echo "メッセージ";wp_title(''); ?> | <? bloginfo('name'); ?></title>
  <?php elseif(is_single()): ?>
  <title><?php wp_title(''); ?> | <?bloginfo('name'); ?></title>
  <?php elseif(is_archive()): ?>
  <title>news一覧| <?bloginfo('name'); ?></title>
  <?php else:?>
  <title><?php bloginfo('name'); ?></title>
  <?php endif; ?>
  <link href="https://fonts.googleapis.com/css?family=Noto+Sans+JP:400,700&subset=japanese" rel="stylesheet">
  <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/assets/css/style.css">
  <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/assets/css/append.css">
  <link rel="stylesheet" href="https://unpkg.com/swiper/swiper-bundle.min.css">
<script src="https://unpkg.com/swiper/swiper-bundle.min.js"></script>
</head>
	
<?php if ( is_home() || is_front_page() ) : ?>
	<body id="top" <?php body_class( $class ); ?>>
		
<?php elseif(is_page()) : ?>
<!-- 固定ページはタグをclass名として出力 -->
<body id="top" class="<?php		 
	$flag = get_the_tags();
	if(!empty($flag)){
		foreach ( $flag as $tag ) {
		   echo $tag -> slug.' ';
		}
	}
?>"></body>
		
<?php elseif(is_singular('message')) : ?>
<?php $slug_name = get_post( get_the_ID() )->post_name; ?>
<body id="top" class="message <?php echo $slug_name;?>">
	
<?php elseif(is_singular('interview')) : ?>
<?php $slug_name = get_post( get_the_ID() )->post_name; ?>
<body id="top" class="interview <?php echo $slug_name;?>">
	
<?php else:?>
   <body id="top" <?php body_class( $class ); ?>>
<?php endif; ?>

	

  <div class="drawer">
    <div class="drawer-wrapper">
      <div class="drawer-container">
        <p class="drawer-title">ZENKIGEN RECRUIT</p>
        <ul>
          <li class="td4"><a href="<?php echo home_url() ?>">採用情報トップ</a></li>
          <li class="td5"><a href="<?php echo home_url() ?>/newgraduate">新卒採用</a></li>
          <li class="td6"><a href="<?php echo home_url() ?>/career">キャリア採用</a></li>
          <li class="sc-click td7"><a href="<?php echo home_url() ?>/#interview" class="s-scroll">インタビュー</a></li>
          <li class="sc-click td8"><a href="<?php echo home_url() ?>#message" class="s-scroll">メッセージ</a></li>
          <li class="sc-click td9"><a href="<?php echo home_url() ?>#workstyle" class="s-scroll">ワークスタイル</a></li>
        </ul>
      </div>
      <div class="drawer-container">
        <p class="drawer-title drawer-corp-title">ZENKIGEN CORPORATE</p>
        <ul class="drawer-corp-list">
          <li><a href="https://zenkigen.co.jp">企業情報トップ</a></li>
          <li><a href="https://zenkigen.co.jp/about/" target="_blank">会社概要</a></li>
          <li><a href="https://zenkigen.co.jp/executive/" target="_blank">役員紹介</a></li>
          <li><a href="https://zenkigen.co.jp/about/#access" target="_blank">アクセス</a></li>
        </ul>
      </div>
    </div>
  </div>
  <!-- .drawer -->

  <header>
    <div class="header-container">
      <div class="site-id">
        <a href="index.html">
          <span class="site-id-img">
            <img src="<?php echo get_template_directory_uri(); ?>/assets/img/logo.svg" alt="">
          </span>
          <span class="site-id-title">Recruit</span>
        </a>
      </div>
      <div class="back-top"><a href="<?php echo home_url() ?>">採用情報トップ</a></div>
      <div class="wrap-nav">
        <nav class="header-nav">
          <div class="mobile-nav">
            <span>MENU</span>
          </div>
        </nav>
        <!-- <div class="corporate-link"><a href="https://zenkigen.co.jp"><span class="corp-name">ZENKIGEN</span> Corporate</a></div> -->
      </div>
    </div>
  
<?php wp_head(); ?>
</header>

<?php if(!is_404()): ?>
<div id="wrap-loader">
  <div class="loader">Loading...</div>
 </div>
<?php endif; ?>
