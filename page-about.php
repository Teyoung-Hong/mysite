<?php  
/*
Template Name: abou me
*/

get_header();

?>

<div class="about">
  <div class="about__top">
    <div class="about__top--content">
      <div class="about__top--title animated bounceInDown">Teyoung Hong</div>
      <div class="about__top--subtitle animated bounceInDown">An ARTIST with TECH</div>
      <div class="about__top--down animated bounceInDown">∨</div>
    </div>
  </div>
  <div class="about__main animated zoomInDown">
    <div class="about__nav">
      <li class="about__nav--item nav__intro">INTRO</li>
      <li class="about__nav--item nav__work">WORK</li>
      <li class="about__nav--item nav__skill">SKILL</li>
      <li class="about__nav--item nav__media">MEDIA</li>
      <li class="about__nav--item nav__contact">CONTACT</li>
    </div>
    <div id="intro" class="about__content intro is_active">
      <h2 class="about__content--title">Introduction</h2>
      <div class="about__content--body">
        <p class="about__content--subtitle">Wisdom</p>
        <p class="about__content--sentence">全ての人間の行動は「死」から物理的・心理的に遠ざかるための行動です。</br>
        人間は「死」に対する恐怖心を煽られることで、行動などに強い動機を感じます。いつ何が起こるかわからない場所「地球」に住んでいることを忘れないようにしましょう。この世の事象における全ての確率に0%も100%も存在しないので、常に確率を見ましょう。</p>
      </div>
    </div>
    <div id="work" class="about__content work">
      <h2 class="about__content--title">Work</h2>
      <div class="about__content--body">
        <p class="about__content--subtitle">Engneer</p>
        <p class="about__content--sentence">
        フリーランスでエンジニアをしています。主にコーポレートサイトやランディングページの開発を請け負っています。<br>成果物は諸事情によりここでは表示できませんが、たくさん作ってきたと思います。
        </p>
      </div>
    </div>
    <div id="skill" class="about__content skill">
      <h2 class="about__content--title">Skill</h2>
      <div class="about__content--body">
        <p class="about__content--subtitle">Programming</p>
        <p class="about__content--sentence">HTML / CSS / Java Script / Jquery / React / Ruby (Ruby on Rails) / Python (Django)</p>
        <p class="about__content--subtitle">Language</p>
        <p class="about__content--sentence">English (toeic 850) / Chinese (HSK 6級) / Korean (Native) / Japanese (漢検 5級...)</p>
        <p class="about__content--subtitle">Else</p>
        <p class="about__content--sentence">すべらない話(笑率90%)</p>
      </div>
    </div>
    <div id="media" class="about__content media">
      <h2 class="about__content--title">Media</h2>
      <div class="about__content--body">
        <p class="about__content--subtitle"><a href="https://teyoung.site/">Web media</a></p>
        <p class="about__content--sentence">
        ・プログラミングに関すること</br>
        ・哲学に関すること（アカデミック）</br>
        ・第二言語習得に関すること</br>
        上記の発信をしています。</br>
        正しくて丁寧な情報は世に出回っているので、読みながら面白いカジュアルなメディアにしたいと思っています。
        </p>
        <p class="about__content--subtitle"><a href="#">Youtube</a></p>
        <!-- ここにyoutubeのapiから動画のプレビュー持って期待 -->
        <iframe width="560" height="315" src="https://www.youtube.com/embed/566DPJECw18" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
        <p class="about__content--sentence">プログラミングやアプリ開発、哲学に関してのことなどに関する動画をアップしてます。</p>
        <p class="about__content--subtitle">Featured</p>
        <p class="about__content--sentence">
          <ul class="about__features">
            <li class="about__feature"><a href="https://user.billage.space/events/5b389d99171075bc3621f7b3">U-25起業家ピッチコンテスト no.1</a></li>
            <li class="about__feature"><a href="https://note.com/billageosaka/n/n7da0ecee790a">U-25起業家ピッチコンテスト no.2</a></li>
            <li class="about__feature"><a href="https://storywalker.jp/article/617">[メディア] Story Walker -「夢」に突き動かされ、その力を信じた元サッカー少年の挑戦 - </a></li>
            <li class="about__feature"><a href="https://newspicks.com/news/3870715/body/">Newspicks z世代</a></li>
          </ul>
        </p>
      </div>
    </div>
    <div id="contact" class="about__content contact">
      <h2 class="about__content--title">Contact</h2>
      <div class="about__content--body">
        <p class="about__contact-wrapper"><?php echo do_shortcode('[contact-form-7 id="6" title="お仕事依頼"]'); ?></p>
      </div>
    </div>
  </div>
</div>

<style>
header{display:none;}
</style>

<script type="text/javascript">
jQuery(function($){
// animateをready functionにのせる
var navTop = $('.about__nav').offset().top;
var navHeight = $('.about__nav').outerHeight();
$(window).on('scroll', function() {
  if ($(this).scrollTop > navTop) {
    console.log($(window).scrollTop);
    $('.about').css('padding-top', navHeight);
    $('.about__nav').addClass('nav__fixed');
  } else {
    $('.about').css('padding-top', 0);
    $('.about__nav').removeClass('nav__fixed');
  }
});
});
</script>

<?php get_footer(); ?>
