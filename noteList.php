
<?php
$page_title = 'ノート一覧';
require('head.php');
require('header.php');
?>
<div class="alert--err js-show-err-msg">
  <p><?php //echo $err_msg['common']; ?></p>
</div>

<main class="page-wrapper">
  <div class="container--note">
    <h1 class="container_title">書庫</h1>
    <div class="container_body">
      <div class="searchMenu">
        <div class="searchMenu_item">
          <p>検索結果：68件</p>
          <p>表示中：1~10件/68件</p>
        </div>
        <div class="searchMenu_item">
          <div class="searchMenu_sort">
            <p href="#">新着順</p>
            <span class="itemSeparater"></span>
            <p>ブックマーク数順</p>
            <span class="itemSeparater"></span>
            <p>コメント数順</p>
          </div>
          <select class="searchMenu_appearNum">
            <option value="">表示件数：30件</option>
          </select>
        </div>
      </div>

      <div class="list--note">
        <ul class="list_body--note">
          <li class="panel--note">
            <img src="img/IMG_5131.JPG" class="panel_thumbnail" alt="">
            <div class="panel_info">
              <h3 class="panel_title">朝5時に家を出てから、18時間での熊本訪問</h3>
              <div class="userInfo">
                <img src="img/プロフィールアイコン：有色.jpeg" class="userInfo_img" alt="">
                <p class="userInfo_name">ユーザーネーム</p>
              </div>
              <p class="panel_postDay">2002/08/06投稿</p>
              <div class="iconBox">
                <i></i>
                <span></span>
                <i></i>
                <span></span>
              </div>
            </div>
          </li>

          <li class="panel--note">
            <img src="img/6241759280_IMG_3459.JPG" class="panel_thumbnail" alt="">
            <div class="panel_info">
              <h3 class="panel_title">熊本の、城とラーメンと人情と</h3>
              <div class="userInfo">
                <img src="img/noimage.png" class="userInfo_img" alt="">
                <p class="userInfo_name">ユーザーネーム</p>
              </div>
              <p class="panel_postDay">2002/08/06投稿</p>
              <div class="iconBox">
                <i></i>
                <span></span>
                <i></i>
                <span></span>
              </div>
            </div>
          </li>

          <li class="panel--note">
            <img src="img/6176658528_IMG_4498.JPG" class="panel_thumbnail" alt="">
            <div class="panel_info">
              <h3 class="panel_title">いつか行ってみたいと思っていた熊本に行ってきました！</h3>
              <div class="userInfo">
                <img src="img/プロフィール.JPG" class="userInfo_img" alt="">
                <p class="userInfo_name">ユーザーネーム</p>
              </div>
              <p class="panel_postDay">2002/08/06投稿</p>
              <div class="iconBox">
                <i></i>
                <span></span>
                <i></i>
                <span></span>
              </div>
            </div>
          </li>

          <li class="panel--note">
            <img src="img/IMG_5506.JPG" class="panel_thumbnail" alt="">
            <div class="panel_info">
              <h3 class="panel_title">タイトル</h3>
              <div class="userInfo">
                <img src="img/noimage.png" class="userInfo_img" alt="">
                <p class="userInfo_name">ユーザーネーム</p>
              </div>
              <p class="panel_postDay">2002/08/06投稿</p>
              <div class="iconBox">
                <i></i>
                <span></span>
                <i></i>
                <span></span>
              </div>
            </div>
          </li>

        </ul>
      </div>
    </div>
    <div class="modal">
      <div class="modal_inner">
        <div class="modal_note">
          <div class="note_thumbnail"></div>
          <div class="note_description">
            <div class="panel_info">
              <h3 class="panel_title">朝5時に家を出てから、18時間での熊本訪問</h3>
              <div class="userInfo">
                <img src="img/プロフィールアイコン：有色.jpeg" class="userInfo_img" alt="">
                <p class="userInfo_name">ユーザーネーム</p>
              </div>
              <p class="panel_postDay">2002/08/06投稿</p>
              <div class="iconBox">
                <i></i>
                <span></span>
                <i></i>
                <span></span>
              </div>
            </div>
            <div class="note_outline">
              <div class="note_chapter">
                <h4>Chapter</h4>
                <p class="note_beginning">テキストテキストテキストテキストテキストテキスト</p>
              </div>
              <div class="note_chapter">
                <h4>Chapter</h4>
                <p class="note_beginning">テキストテキストテキストテキストテキストテキスト</p>
              </div>
              <div class="note_chapter">
                <h4>Chapter</h4>
                <p class="note_beginning">テキストテキストテキストテキストテキストテキスト</p>
              </div>
              <div class="note_chapter">
                <h4>Chapter</h4>
                <p class="note_beginning">テキストテキストテキストテキストテキストテキスト</p>
              </div>
            </div>
          </div>
        </div>
        <span class="modal_action">&lt 戻る</span>
      </div>
      <div class="modal_cover">

      </div>
    </div>

  </div>
</main>

<!--　共通フッター呼び出し　-->
<?php require('footer.php'); ?>
