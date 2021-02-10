<!-- header.phpの読み込み -->
<?php get_header(); ?>
  
<div class="page404">
  <section class="sec message">
    <div class="sec-container">
      <h2 class="sc-f">404 Not Found</h2>
      <p class="copy-jp sc-f">お探しのページは見つかりませんでした。<br>
			URLが間違っているか削除された可能性があります。<br>
			お手数ですが再度ご確認ください。
	  </p>
	  <p>
			<a class="to-top-link" href="<?php echo home_url() ?>">←採用情報トップへ</a>
	  </p>
    </div>
  </section>
</div>
<!-- footer.phpの読み込み -->
<?php get_footer(); ?>
