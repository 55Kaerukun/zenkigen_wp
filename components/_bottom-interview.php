<section class="sec message">
    <div class="sec-container">
      <h2 class="sc-f show">Interview</h2>
    </div>
</section>

<?php

// 最新記事2件取得
$posts = get_posts('post_type=interview&order=DESC&orderby=date&showposts=2');
$newestPost = $posts[0];
$senondNewPost = $posts[1];
?>

<!-- 記事前後へのリンク -->
<div class="bottom-interview-link">
  
    <div class="bottom-interview-container <?php echo $newestPost->post_name;?>" style="background-image:url(<?php the_field('main_image_pc',$newestPost->ID); ?>);">
      <a href="<?php echo get_permalink($newestPost->ID); ?>">
        <div class="overlay"></div>
        <div class="dot-img"></div>
        <div class="bottom-interview-meta">
        <p class="interview-title">
    <?php if( get_field('maincopy',$newestPost->ID,false) ) { ?>
          <?php the_field('maincopy',$newestPost->ID,false); ?> 
    <?php } ?></p>
          <p class="interview-name"><?php echo $newestPost->post_title;?></p>
          <p class="interview-job">
    <?php if( get_field('detail-cat',$newestPost->ID,false) ) { ?>
          <?php the_field('detail-cat',$newestPost->ID,false); ?> 
    <?php } ?></p>
        </div>
      </a>
    </div>
  
    <div class="bottom-interview-container <?php echo $senondNewPost->post_name;?>" style="background-image:url(<?php the_field('main_image_pc',$senondNewPost->ID); ?>);">
      <a href="<?php echo get_permalink($senondNewPost->ID); ?>">
        <div class="overlay"></div>
        <div class="dot-img"></div>
        <div class="bottom-interview-meta">
        <p class="interview-title">
    <?php if( get_field('maincopy',$senondNewPost->ID,false) ) { ?>
          <?php the_field('maincopy',$senondNewPost->ID,false); ?> 
    <?php } ?>
    </p>
    <p class="interview-name"><?php echo $senondNewPost->post_title;?></p>
        <p class="interview-job">
    <?php if( get_field('detail-cat',$senondNewPost->ID,false) ) { ?>
          <?php the_field('detail-cat',$senondNewPost->ID,false); ?> 
    <?php } ?></p>
        </div>
      </a>
    </div>
  
  </div>
  <!-- .bottom-interview-link -->
