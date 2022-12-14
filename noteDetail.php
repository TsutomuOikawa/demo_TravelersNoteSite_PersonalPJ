<?php
$page_title = 'タイトル';
require ('head.php');
require ('header.php');
 ?>

    <main class="page-wrapper">
      <div class="container--note">
        <div class="container_body--l container_body--2col">
          <article class="note-wrapper">
            <section class="note">
              <img src="img/IMG_5131.JPG" class="note_thumbnail" alt="">
              <h1 class="container_title">h1:ノートのタイトルはここ</h1>
              <div class="note_subInfo">
                <p>投稿日：2022/9/10</p>
                <div class="iconBox">
                  <i class="fa-regular fa-bookmark fa-lg icon--bookmark"></i>
                  <span class="iconBox_num">33</span>
                </div>
              </div>
              <div class="note_text">
                テキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキス
              </div>
            </section>

            <section class="comments">
              <ul class="comments_list">
                <li class="comments_item">
                  <div class="userInfo">
                    <img src="img/プロフィールアイコン：有色.jpeg" class="userInfo_img" alt="">
                    <p class="userInfo_name">ユーザーネーム</p>
                  </div>
                  <div class="comments_text">
                    コメントテキストコメントテキストコメントテキストコメントテキストコメントテキスト
                  </div>
                </li>
              </ul>
              <textarea name="name" class="comments_posting" rows="2"></textarea>
              <button type="submit" class="form_button">送信する</button>
            </section>

          </article>
          <aside class="sidebar">
            <img src="img/IMG_5131.JPG" class="sidebar_thumbnail" alt="">
            <div class="sidebar_contents">
              <p class="panel_title">朝5時に家を出てから、18時間での熊本訪問</p>
              <ul class="sidebar_chapters">
                <li><a href="#">Chapter 1</a></li>
                <li><a href="#">Chapter 2</a></li>
                <li><a href="#">Chapter 3</a></li>
                <li><a href="#">Chapter 4</a></li>
              </ul>

              <div class="sidebar_profile">
                <div class="userInfo userInfo--big">
                  <img src="img/プロフィールアイコン：有色.jpeg" class="userInfo_img userInfo_img--big" alt="">
                  <p class="userInfo_name userInfo_name--big">ユーザーネーム</p>
                </div>
              </div>

            </div>
          </aside>


        </div>
      </div>
    </main>

<?php require('footer.php'); ?>
