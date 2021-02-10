<section id="message" class="sec">
    <div class="section-title sc-f">
      <h2>Message</h2>
      <p>取締役たちがZENKIGENそして社会に寄せる想い</p>
    </div>
  <?php

  $args = array(
    'numberposts' => 99,  // 取得する投稿数
    'post_type' => 'message' // 投稿タイプ名
  );
  $my_posts = get_posts($args);
?>
<?php if($my_posts) :?>
<?php foreach ($my_posts as $post) : setup_postdata($post); ?>
<?php
	$className = "message-".$post->post_name;
	$bgimage = get_field('top_thumbnail', $post->ID);
	 
?>
<?php if($bgimage):?>
<?php
  $place = get_field('text_right_or_left', $post->ID);
  $place = "container-".$place;
?>
<div class="area <?php echo $className;?> <?php echo $place;?> area-message sc-f" style="background-image:url(<?php the_field('top_thumbnail',$post->ID); ?>);">
<?php else:?>
	<div class="area <?php echo $className;?> area-message sc-f">
<?php endif;?>


    <a href="<?php echo get_permalink($post->ID); ?>">
      <div class="overlay"></div>
      <div class="area-img"></div>
      <section class="area-container">
        <p class="message-name-en">
		<?php if( get_field('english_name', $post->ID,false) ) { ?>
	  	    <?php the_field('english_name',$post->ID,false); ?> 
		<?php } ?>
		  </p>
        <h3 class="message-name"><?php echo $post->post_title;?></h3>
        <p class="message-job">		
		<?php if( get_field('thumbnail_detail_cat', $post->ID,false) ) { ?>
	  	    <?php the_field('thumbnail_detail_cat',$post->ID,false); ?> 
		<?php } ?></p>
        <p class="message-copy-jp">		
		<?php if( get_field('thumbnail_maincopy', $post->ID,false) ) { ?>
	  	    <?php the_field('thumbnail_maincopy',$post->ID,false); ?> 
		<?php } ?>
		</p>
        <div class="wrap-btn">
          <div class="btn-s">
            <span class="btn-txt">メッセージはこちら</span>
            <span class="btn-ar"><img src="https://recruit.zenkigen.co.jp/assets/img/ar_next_white_s.svg" alt=""></span>
          </div>
        </div>
      </section>
    </a>
</div>
<?php endforeach; ?>
<?php wp_reset_postdata(); ?>
<?php endif;?>

</section>