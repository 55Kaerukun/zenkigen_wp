<section id="interview" class="sec">
    <div class="section-title sc-f">
        <h2>Interview</h2>
        <p>メンバーたちがZENKIGENに寄せる想い</p>
    </div>

    <div class="interview-container">

    <ul>
    <?php
        $cnt = 0; // 記事が3つになったらulタグで閉じる用
        $args = array(
            'posts_per_page' => 99,
            'post_type' => 'interview', 
            'order' => 'ASC' // 古い順番に表示
        );
    ?>
    <?php
        $customPosts = get_posts($args);
        $postsNum = count($customPosts);
        if($customPosts) : foreach($customPosts as $post) : setup_postdata( $post );
    ?>

    <?php if( get_field('top_thumbnail', $post->ID) ) :?>
    <li class="<?php echo $post->post_name;?> sc-f" style="background-image:url(<?php the_field('top_thumbnail',$post->ID); ?>);">
    <?php else :?>
    <li class="<?php echo $post->post_name;?> sc-f">
    <?php endif;?>


        <a href="<?php echo get_permalink($prevPost->ID); ?>">
        <div class="overlay"></div>
        <div class="dot-img"></div>
        <div class="interview-meta">
            <p class="interview-title">
            <?php if( get_field('maincopy') ) { ?>
            <?php the_field('maincopy',$post->ID,false); ?> 
            <?php } ?></p>
            <p class="interview-name"><?php echo $post->post_title;?></p>
            <p class="interview-job">
            <?php if( get_field('detail-cat') ) { ?>
            <?php the_field('detail-cat',$post->ID,false); ?> 
            <?php } ?></p>
        </div>
        </a>
    </li>

    <?php
    $cnt++;
    if($cnt % 3 == 0){
    echo "</ul>";
    if($cnt !=$postsNum ){
    echo "<ul>";
    }
    } 
    ?>

    <?php endforeach; ?>
    
    <?php
    if ($postsNum % 3 == 1){
    echo '<li class="empty"></li><li class="empty"></li></ul>';
    } else if ($postsNum % 3 ==  2){
    echo '<li class="empty"></li></ul>';
    }
    ?>

<?php endif;
wp_reset_postdata();
?>
</div>
</section>
<!-- /#interview -->