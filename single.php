<?php
// 404ページへリンクするように設定
//header('HTTP/1.0 404 Not Found');
//include(TEMPLATEPATH.'/404.php');
//exit;
?>

<!-- ヘッダー読み込み -->
<?php get_header(); ?>

<main class="single">
	
	<article>

	<!-- 記事があったら表示 -->
	<?php if(have_posts()): while(have_posts()):the_post(); ?>
	  
	  	<!-- 投稿タイトルを表示 -->
	  	<h2 class="single-title"><?php the_title(); ?></h2>
		
	  	<!-- 投稿日時を表示 -->
	  	<time><?php the_time('Y年m月d日'); ?></time>

	  	<!-- 投稿カテゴリーを表示 -->
	    <?php the_category(); ?>
	  
	
		<!-- エディタで入力したコンテンツ部分を表示 -->
	    <div class="content">
	    	<?php the_content(); ?>
	    </div>
	  
	<?php endwhile; endif; ?>
		
	</article>

	  
	<!-- ページャーの表示 -->
	<div class="pager">
		<?php previous_post_link('%link','前の記事へ'); ?>
		<?php next_post_link('%link','次の記事へ'); ?>
	</div>
		
		

</main><!-- /#single-->


<!-- フッター読み込み -->
<?php get_footer(); ?>
