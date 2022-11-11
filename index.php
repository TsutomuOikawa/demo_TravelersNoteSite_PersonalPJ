<?php
$page_title = 'トップ';
require ('head.php');
require ('header.php');
 ?>

    <main>
      <section id="firstView" class="firstView js-header-change-target">
        <div class="firstView_container">
          <h1 class="firstView_title">旅の思い出<span>、</span><br>のぞき見しよう</h1>
          <form class="header_form" action="index.html" method="post">
            <input type="text" name="" class="header_input" value="" placeholder="都道府県名を入力">
            <input type="text" name="" class="header_input" value="" placeholder="キーワードを入力">
            <button type="submit" class="header_submit" name=""><i class="fas fa-search fa-lg"></i></button>
          </form>
        </div>
      </section>

      <section id="map" class="container map">
        <h2 class="container_title">次の目的地は？</h2>
        <div class="container_body">
          <div class="map">

          </div>
        </div>
      </section>
      <ul class="imgSlider">
        <li class="imgSlider_item"><img src="img/noimage.png" class="imgSlider_img" alt=""></li>
        <li class="imgSlider_item"><img src="img/noimage.png" class="imgSlider_img" alt=""></li>
        <li class="imgSlider_item"><img src="img/noimage.png" class="imgSlider_img" alt=""></li>
        <li class="imgSlider_item"><img src="img/noimage.png" class="imgSlider_img" alt=""></li>
        <li class="imgSlider_item"><img src="img/noimage.png" class="imgSlider_img" alt=""></li>
        <li class="imgSlider_item"><img src="img/noimage.png" class="imgSlider_img" alt=""></li>
        <li class="imgSlider_item"><img src="img/noimage.png" class="imgSlider_img" alt=""></li>
        <li class="imgSlider_item"><img src="img/noimage.png" class="imgSlider_img" alt=""></li>
      </ul>
      <section id="about" class="container--subColor">
        <h2 class="container_title">Globe Noteとは</h2>
        <div class="container_body">
          <div class="features-wrapper">
            <div class="feature">
              <img src="img/noimage.png" class="feature_img" alt="">
              <div class="feature_description">
                <p class="feature_title">タイトル</p>
                <p class="feature_text">テキストテキストテキストテキストテキストテキスト<br>テキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキスト<br>テキストテキストテキスト</p>
              </div>
            </div>

            <div class="feature feature--reverse">
              <img src="img/noimage.png" class="feature_img" alt="">
              <div class="feature_description">
                <p class="feature_title">タイトル</p>
                <p class="feature_text">テキストテキストテキストテキストテキストテキスト<br>テキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキスト<br>テキストテキストテキスト</p>
              </div>
            </div>

            <div class="feature">
              <img src="img/noimage.png" class="feature_img" alt="">
              <div class="feature_description">
                <p class="feature_title">タイトル</p>
                <p class="feature_text">テキストテキストテキストテキストテキストテキスト<br>テキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキスト<br>テキストテキストテキスト</p>
              </div>
            </div>

            <div class="feature feature--reverse">
              <img src="img/noimage.png" class="feature_img" alt="">
              <div class="feature_description">
                <p class="feature_title">タイトル</p>
                <p class="feature_text">テキストテキストテキストテキストテキストテキスト<br>テキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキスト<br>テキストテキストテキスト</p>
              </div>
            </div>

          </div>
        </div>
      </section>
      <section id="search" class="container--baseColor">
        <h2 class="container_title">旅先を探す</h2>
        <div class="container_body--l">
          <div class="list">
            <h3 class="list_title">みんなのノートから探す</h3>
            <div class="list_body" style="height:300px; background:grey;">

            </div>
          </div>
          <div class="list--destination">
            <h3 class="list_title">都道府県一覧から探す</h3>
            <div class="list_body" style="height:300px; background:blue;">

            </div>
          </div>

        </div>
      </section>
    </main>

<?php require('footer.php'); ?>
