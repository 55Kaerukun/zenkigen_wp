<!-- 職種リンク -->
<section class="sec interview-sec sc-f">
	<div class="sec-interview-container">
     <h4>
		<?php
			$interview_cat = "";
			$terms = get_the_terms($post->ID,'interview_category');
			foreach( $terms as $term ) {
				echo $term->name;
				$interview_cat =  $term->name;
			}
		?>の募集職種
	</h4>
	<?php

	// careerページのID取得
	$page_id = get_page_by_path('career');
	$page_id = $page_id->ID;
	?>


	<?php if(have_rows('job-info', $page_id)): ?>
	<?php while(have_rows('job-info', $page_id)): the_row(); ?>
	<?php

		// 職種のカテゴリ名と詳細カテゴリ取得
		$job_name = get_sub_field('job');
        $job_categorys = get_sub_field('job_categorys');
	?>

	  <!-- 同じカテゴリの職種リストを表示-->
	  <?php if($interview_cat == $job_name):?>
      <?php if(have_rows('job_categorys')): ?>
	　<ul class="carrer-entry-link">
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
	  </ul>
    <?php endif; ?>
	<?php endif; ?>
<?php endwhile; ?>
<?php endif; ?>
		

</div>
</section>