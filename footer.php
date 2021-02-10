  <footer class="sc-f">
    <div id="page-top">
      <a href="index.html#top" class="s-scroll">
        <span class="txt">PAGE TOP</span>
        <span class="arw"></span>
      </a>
    </div>

    <div class="footer-container">
      <div class="logo"><a href="https://zenkigen.co.jp">ZENKIGEN</a></div>

      <div class="footer-column-top">
        <section class="footer-address">
          <h4>Tokyo Office</h4>
          <div class="address-text">
            〒100-0004<br>東京都千代田区大手町1-6-1<br>大手町ビル6階643区
          </div>
          <h4>Shonan Southern Beach Office</h4>
          <div class="address-text">
            〒253-0055<br>神奈川県茅ヶ崎市中海岸4丁目12986番地52<br>サザンビーチヒルズ4F
          </div>
        </section>
        <div class="footer-nav">
          <div class="footer-nav-top">
            <section class="footer-nav-service">
              <h4><a href="https://zenkigen.co.jp/service/">Service</a></h4>
              <ul>
                <li><a href="https://harutaka.jp/" target="_blank">harutaka</a></li>
              </ul>
            </section>
            <section class="footer-nav-company">
              <h4><a href="https://zenkigen.co.jp/">Company</a></h4>
              <ul>
                <li><a href="https://zenkigen.co.jp/about/" target="_blank">会社概要</a></li>
                <li><a href="https://zenkigen.co.jp/executive/" target="_blank">役員紹介</a></li>
                <li><a href="https://zenkigen.co.jp/about/#access" target="_blank">アクセス</a></li>
              </ul>
            </section>
            <section class="footer-nav-labo">
              <h4>Labo</h4>
            </section>
            <section class="footer-nav-recruit">
              <h4><a href="index.html">Recruit</a></h4>
              <ul>
                <li><a href="<?php echo home_url() ?>/newgraduate">新卒採用</a></li>
                <li><a href="<?php echo home_url() ?>/career">キャリア採用</a></li>
                <li><a href="<?php echo home_url() ?>/#interview">インタビュー</a></li>
                <li><a href="<?php echo home_url() ?>#message">メッセージ</a></li>
                <li><a href="<?php echo home_url() ?>#workstyle">ワークスタイル</a></li>
              </ul>
            </section>
          </div>
          <div class="footer-nav-bottom">
            <section class="footer-nav-news">
              <h4><a href="https://zenkigen.co.jp/news" target="_blank">News</a></h4>
            </section>
            <section class="footer-nav-blog">
              <h4><a href="https://note.com/zenkigen" target="_blank">Blog</a></h4>
            </section>
            <section class="footer-nav-contact">
              <h4><a href="https://zenkigen.co.jp/contact/" target="_blank">Contact</a></h4>
            </section>
            <section class="footer-nav-english">
              <h4><a href="https://zenkigen.co.jp/en/"  target="_blank">English</a></h4>
            </section>
          </div>
        </div>
      </div>
      <div class="footer-column-bottom">
        <ul>
          <li><a href="https://zenkigen.co.jp/privacy/">プライバシーポリシー</a></li>
          <li><a href="https://zenkigen.co.jp/security/">情報セキュリティ方針</a></li>
          <li><a href="https://zenkigen.co.jp/personalinfo/">個人情報の取扱いについて</a></li>
        </ul>
        <p class="copyright"><small><span lang="en">&copy;</span> ZENKIGEN, Inc.</small></p>
      </div>
    </div>
  </footer>
  <script src="<?php echo get_template_directory_uri(); ?>/assets/js/main.js" defer></script>
  <script>
    
    var swiper = new Swiper('.swiper-container', {

navigation: {
  nextEl: '.swiper-button-next',
  prevEl: '.swiper-button-prev',
  disableOnInteraction: false, // クリックしてもループし続けるように
},
pagination: {
  el: '.swiper-pagination',
},
autoplay: {
   delay: 500, // 次スライドまでの待機時間
},
 speed: 1000, // スライドするスピード
 loop:true,
 observer: true, // ローディング後のうまく行かない挙動対策
 observeParents: true,
 
});

	  

    </script>


  <?php wp_footer(); ?>
</body>

</html>
