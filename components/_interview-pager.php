<?php
// 前の記事を取得(存在しなかったら最新記事取得)
$prevPost = get_adjacent_post();
if(!$prevPost){
	$newestPost = get_posts('post_type=interview&order=DESC&orderby=date&showposts=1');
	$prevPost = $newestPost[0];
}


// 次に記事を取得(存在しなかったら一番昔の記事取得)
$nextPost = get_adjacent_post( false, "", false );
if(!$nextPost){
	$oldestPost = get_posts('post_type=interview&order=ASC&orderby=date&showposts=1');
	$nextPost = $oldestPost[0];
}
?>


<!-- 記事前後へのリンク -->
<div class="bottom-interview-link">
	
    <div class="bottom-interview-container <?php echo $prevPost->post_name;?>" style="background-image:url(<?php the_field('main_image_pc',$prevPost->ID); ?>);">
      <a href="<?php echo get_permalink($prevPost->ID); ?>">
        <div class="overlay"></div>
        <div class="dot-img"></div>
        <div class="bottom-interview-meta">
        <p class="interview-title">
		<?php if( get_field('maincopy') ) { ?>
	  	    <?php the_field('maincopy',$prevPost->ID,false); ?> 
		<?php } ?></p>
          <p class="interview-name"><?php echo $prevPost->post_title;?></p>
          <p class="interview-job">
		<?php if( get_field('detail-cat') ) { ?>
	  	    <?php the_field('detail-cat',$prevPost->ID,false); ?> 
		<?php } ?></p>
        </div>
      </a>
    </div>
	
    <div class="bottom-interview-container <?php echo $nextPost->post_name;?>" tyle="background-image:url(<?php the_field('main_image_pc',$nextPost->ID); ?>);">
      <a href="<?php echo get_permalink($nextPost->ID); ?>">
        <div class="overlay"></div>
        <div class="dot-img"></div>
        <div class="bottom-interview-meta">
        <p class="interview-title">
		<?php if( get_field('maincopy') ) { ?>
	  	    <?php the_field('maincopy',$nextPost->ID,false); ?> 
		<?php } ?>
		</p>
		<p class="interview-name"><?php echo $nextPost->post_title;?></p>
        <p class="interview-job">
		<?php if( get_field('detail-cat') ) { ?>
	  	    <?php the_field('detail-cat',$nextPost->ID,false); ?> 
		<?php } ?></p>
        </div>
      </a>
    </div>
	
  </div>
  <!-- .bottom-interview-link -->