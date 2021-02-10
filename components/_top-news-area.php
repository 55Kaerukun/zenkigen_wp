<section id="news" class="sec">
<div class="section-title sc-f">
  <h2>News</h2>
  <p>採用に関する新着情報</p>
</div>
<div class="area-news">
  <div class="area-container sc-f">
    <dl>
    <?php
      // 表示件数
      $NEWS_NUM = 3;

      $args = array(
        'posts_per_page' => $NEWS_NUM // 表示件数の指定
      );
      $posts = get_posts( $args );

      foreach ( $posts as $post ):
      setup_postdata( $post );
    ?>

    <dt><?php the_time('Y年m月d日') ?></dt>
    <dd><?php the_title(); ?></dd>
    <?php
      endforeach;
      wp_reset_postdata();
    ?>
    </dl>
  </div>
</div>
</section>