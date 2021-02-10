 <!-- 募集職種部分 -->
 <section class="sec newgraduate-type">
  <div class="section-title sc-f">
    <h3>募集職種</h3>
  </div>
   
  <div class="sec-carre-type-container">
	
    <!-- リピーターフィールド  -->
    <?php if(have_rows('job-info')): ?>
    <?php while(have_rows('job-info')): the_row(); ?>

    <?php 
      $job = get_sub_field('job');
      $job_discription = get_sub_field('job_discription');
      $job_categorys = get_sub_field('job_categorys');
    ?>

    <div class="carre-business">
      <div class="sec-data sc-f">
        <h4><?php echo $job;?></h4>
        <p class="copy-jp"><?php echo $job_discription;?></p>
        <ul class="carrer-entry-link career-business sc-f">

          <!-- 職種リスト入れ子-->
          <?php if(have_rows('job_categorys')): ?>
          <?php while(have_rows('job_categorys')): the_row(); ?>
              <?php
                $job_category = get_sub_field('job_category');
              ?>
              <li>
              <a href="<?php echo $job_category['url'];?>" target="_blank" rel="noopener">
                <?php echo $job_category['title'];?>
              </a>
              </li>
          <?php endwhile; ?>
          <?php endif; ?>
          <!-- /職種リスト入れ子-->

        </ul>
      </div>
    </div>
    <!-- /ビジネス職 -->
    <?php endwhile; ?>
    <?php endif; ?>
  </div>
</section>
<!-- /募集職種部分 -->