<?php
// 404ページへリンクするように設定
//header('HTTP/1.0 404 Not Found');
//include(TEMPLATEPATH.'/404.php');
//exit;
?>



<?php get_header(); ?>

<main class="category">
  
<p class="cat-name"><?php single_cat_title(); ?> カテゴリー</p>

<?php if(have_posts()): while(have_posts()):the_post(); ?>

  <div class="content">
    
    <!-- 投稿日付 -->
    <time><?php the_time('Y年m月d日'); ?></time>

    <!-- タイトル出力 -->
    <h2 class="cat-title"><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h2>

  </div>
  
<?php endwhile; endif; ?>
	
  
<div class="pager">
    <?php previous_posts_link('次のページへ'); ?>
    <?php next_posts_link('前のページへ'); ?>
</div>
	
</main>

<?php get_footer(); ?>
