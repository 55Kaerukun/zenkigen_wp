<!-- header.phpの読み込み -->
<?php get_header(); ?>

  
<!-- 固定ページのエディタ内の内容表示 -->
<?php if(have_posts()): while(have_posts()):the_post(); ?>
	<?php the_content(); ?>
<?php endwhile; endif; ?>


<?php if ( is_page('career') ) : ?>
  <!-- 募集職種部分読み込み-->
  <?php get_template_part('components/_recruitment_list'); ?>
<?php endif;?>


<?php if ( is_page('career') || is_page('newgraduate')) : ?>
  <!-- インタビューのサムネイル表示 -->
	<?php get_template_part('components/_bottom-interview'); ?>
<?php endif;?>

<?php if (is_page('workstyle') ): ?>
  <!--  workstyleのスライドを表示 -->
	<?php if(have_rows('slideimages1')): ?>
	<?php while(have_rows('slideimages1')): the_row(); ?>
	<?php the_sub_field('slide1_image'); ?>
	<?php endwhile; ?>
	<?php endif; ?>
<?php endif;?>

 
<!-- footer.phpの読み込み -->
<?php get_footer(); ?>
