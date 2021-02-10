<?php get_header(); ?>

<!-- メインイメージ部分 -->
<main id="main">
    <div class="area-img fade-in"></div>
    <div class="main-gradient-overlay"></div>
    <div class="dot-img fade-out"></div>
    <div class="main-title-wrap">
      <h1 class="fade-in">Message</h1>
      <p class="message-main-copy fade-in">
		  <?php  $copy = get_field('maincopy'); if($copy){echo $copy;}?>
	  </p>
      <p class="name-en fade-in">
		  <?php  $english_name = get_field('english_name'); if($english_name){echo $english_name;}?>
	  </p>
      <p class="name-jp fade-in">
	 	   <?php  $name = get_field('name'); if($name){echo $name;}?>
	  </p>
      <p class="job-jp fade-in">
		  <?php  $detailcat = get_field('detail-cat'); if($detailcat){echo $detailcat;}?>
	  </p>
    </div>
</main>
<!-- /#main-->


<!-- 画像切り替え処理 -->
<?php get_template_part('components/_change-main-image'); ?>

<!-- エディタの内容表示 -->
<?php if(have_posts()): while(have_posts()):the_post(); ?>
	<?php the_content(); ?>
<?php endwhile; endif; ?>

<!-- messageのサムネイルリスト表示 -->
<?php get_template_part('components/_message-thumbnail-list'); ?>


<?php get_footer(); ?>