<?php get_header(); ?>


  <div id="WebGL-output"></div>

  <main id="main">
    <ul class="slide-show">
    </ul>
    <div class="main-dot-img"></div>
    <div class="main-title">
      <h1>For Our Next Generations</h1>
      <p>次世代によい社会を残す</p>
    </div>
  </main>


  <div class="main-scroll">
    <div class="main-scroll-container">
      <div class="scroll-t">
        SCROLL DOWN
      </div>
      <div class="scroll-arw"></div>
    </div>
  </div>

  <section class="mission-value">
    <div class="content-container">
      <h2 class="sc-f sc-f-on">Vision</h2>
      <p class="sub-title sc-f sc-f-on">テクノロジーを通じて<br>
        人と企業が全機現できる社会の創出に貢献する</p>
      <section class="value sc-f sc-f-on">
        <h3><span class="mv-top-line sc-f sc-f-on"></span><span class="mv-title sc-f sc-f-on">人とAIが調和する社会</span><span class="mv-bottom-line sc-f sc-f-on"></span></h3>
        <p class="copy-jp sc-f sc-f-on">社会のあらゆる領域において<br class="hidden-md-down">「人とAIが調和して新たな価値を創出していくこと」を<br class="hidden-md-down">求められる時代が到来しています。<br>
                私たちは、高い倫理観を持ち高度なAI技術を駆使することで、<br class="hidden-md-down">全ての人が自身の能力や才能、溢れる個性を最大限発揮し、<br class="hidden-md-down">それが歓迎される社会の実現に貢献します。</p>
      </section>
    </div>
  </section>

  <section class="area-newgraduate area sc-f">
    <a href="newgraduate/index.html">
      <div class="overlay"></div>
      <div class="area-img"></div>
      <div class="area-container">
        <h2>New Graduate</h2>
        <p class="subtitle-jp">新卒採用</p>
        <p class="copy-jp">各職種で新卒採用を積極的に行っています。</p>
        <div class="wrap-btn">
          <div class="btn-s">
            <span class="btn-txt">新卒採用はこちら</span>
            <span class="btn-ar"><img src="assets/img/ar_next_white_s.svg" alt=""></span>
          </div>
        </div>
      </div>
    </a>
  </section>

  <section class="area-carrer area sc-f">
    <a href="career/index.html">
      <div class="overlay"></div>
      <div class="dot-img"></div>
      <div class="area-container">
        <h2>Career</h2>
        <p class="subtitle-jp">キャリア採用</p>
        <p class="copy-jp">キャリア採用の受け入れを積極的に行っています。</p>
        <div class="wrap-btn">
          <div class="btn-s">
            <span class="btn-txt">キャリア採用はこちら</span>
            <span class="btn-ar"><img src="assets/img/ar_next_white_s.svg" alt=""></span>
          </div>
        </div>
      </div>
    </a>
  </section>



 <!-- #interview -->
 <?php get_template_part('components/_top-interview-area'); ?>
 <!-- /#interview -->

  
<!-- #message -->
<?php get_template_part('components/_top-message-area'); ?>
<!-- /message -->

  <section id="workstyle" class="sec">
    <div class="section-title sc-f">
      <h2>WorkStyle</h2>
      <p>ZENKIGENのカルチャー、オフィス、ベネフィット</p>
    </div>
    <div class="area-workstyle area sc-f">
      <a href="https://recruit.zenkigen.co.jp/workstyle/">
        <div class="overlay"></div>
        <div class="area-img"></div>
        <section class="area-container">
          <h3 class="workstyle-title">Culture / Office / Benefits</h3>
          <p class="copy-jp">メンバーが最大限の能力を発揮できるよう、<br>
          働く場所や福利厚生からもサポートしています。</p>
          <p class="comingsoon">Coming Soon</p>
          <div class="wrap-btn">
            <div class="btn-s">
              <span class="btn-txt">詳しくはこちら</span>
              <span class="btn-ar"><img src="assets/img/ar_next_white_s.svg" alt=""></span>
            </div>
          </div>
        </section>
      </a>
    </div>
  </section>
  <!-- /#workstyle -->

  <section id="company" class="sec">
    <div class="section-title sc-f">
      <h2>Company</h2>
      <p>会社概要</p>
    </div>
    <div class="area-company">
      <div class="area-container sc-f">
        <p class="copy-jp">ZENKIGENに関する主要データ、役員をご紹介します。</p>
        <div class="wrap-btn">
          <a href="https://zenkigen.co.jp/about/">
            <div class="btn-s">
              <span class="btn-txt">詳しくはこちら</span>
              <span class="btn-ar"><img src="assets/img/ar_next_black_s.svg" alt=""></span>
            </div>
          </a>
        </div>
      </div>
    </div>
  </section>
  <!-- /#company -->

  <!-- #news -->
  <?php get_template_part('components/_top-news-area'); ?>
  <!-- /#news -->

  <?php get_footer(); ?>