<?php
$page_title = 'トップ';
require ('head.php');
require ('header.php');
 ?>

    <main>
      <section id="firstView" class="firstView">
        <div class="firstView_container">
          <h1 class="title title--sizeLL title--color">旅の思い出、のぞき見</h1>
          <form class="header_form" action="index.html" method="post">
            <input type="text" name="" class="header_input" value="" placeholder="都道府県名を入力">
            <input type="text" name="" class="header_input" value="" placeholder="キーワードを入力">
            <button type="submit" class="header_submit" name=""><i class="fas fa-search fa-lg"></i></button>
          </form>
        </div>
      </section>

      <section id="map" class="section-wrapper">
        <h2 class="title title--sizeL title--color">次の目的地は？</h2>
        <div class="map_container">

        </div>
      </section>
      <ul id="imgSlider">
        <li></li>
        <li></li>
        <li></li>
        <li></li>
        <li></li>
        <li></li>
        <li></li>
        <li></li>
      </ul>
      <section id="about" class="section-wrapper section--color2">
        <h2 class="title title--sizeL title--color">Globe Noteとは</h2>
        <div class="contents-wrapper">
          <div class="">
            <img src="" alt="">
            <div class="">
              <p>タイトル</p>
              <p>テキストテキストテキストテキストテキストテキスト<br>テキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキスト<br>テキストテキストテキスト</p>
            </div>
          </div>

          <div class="">
            <img src="" alt="">
            <div class="">
              <p>タイトル</p>
              <p>テキストテキストテキストテキストテキストテキスト<br>テキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキスト<br>テキストテキストテキスト</p>
            </div>
          </div>

          <div class="">
            <img src="" alt="">
            <div class="">
              <p>タイトル</p>
              <p>テキストテキストテキストテキストテキストテキスト<br>テキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキスト<br>テキストテキストテキスト</p>
            </div>
          </div>

          <div class="">
            <img src="" alt="">
            <div class="">
              <p>タイトル</p>
              <p>テキストテキストテキストテキストテキストテキスト<br>テキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキスト<br>テキストテキストテキスト</p>
            </div>
          </div>
        </div>
      </section>
      <a href="#" class="belt link link--belt">会員登録はこちら</a>
      <section id="search" class="section-wrapper section--color">
        <h2 class="title title--sizeL">旅先を探す</h2>
        <div class="contents-wrapper">
          <h3 class="title title--sizeM">みんなのノートから探す</h3>
          <div class="contents-wrapper contents-wrapper--sizeL" style="height:300px; background:grey;">

          </div>

          <h3 class="title title--sizeM">都道府県一覧から探す</h3>
          <div class="contents-wrapper contents-wrapper--sizeL" style="height:300px; background:blue;">

          </div>

        </div>
      </section>
    </main>

<?php require('footer.php'); ?>
