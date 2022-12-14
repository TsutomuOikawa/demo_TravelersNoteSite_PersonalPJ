
<?php
$page_title = 'プロフィール編集';
require('head.php');
require('header.php');
?>
<div class="alert--err js-show-err-msg">
  <p><?php //echo $err_msg['common']; ?></p>
</div>

<main class="page-wrapper">
  <div class="container--baseColor">
    <h1 class="container_title">プロフィール編集</h1>
    <div class="container_body--xs container_body--carousel">
      <form method="post" class="form form--carousel">
      <h2 class="form_title">基本情報</h2>
        <label>
          <div class="form_name">
            <span class="form_label form_label--optional">任意</span>
            ユーザーネーム
          </div>
          <input type="text" name="name" class="form_input" value="">
        </label>
        <p class="form_errMsg"></p>

        <label>
          <div class="form_name">
            <span class="form_label form_label--optional">任意</span>
            年齢
          </div>
          <input type="number" min="10" max="100" name="age" class="form_input" value="">
        </label>
        <p class="form_errMsg"></p>

        <button type="submit" class="form_button" name="">更新して終わる</button>
      </form>

      <form method="post" class="form form--carousel">
      <h2 class="form_title">メールアドレス</h2>
        <label>
          <div class="form_name">
            <span class="form_label form_label--required">必須</span>
            メールアドレス
          </div>
          <input type="text" name="email" class="form_input" value="">
        </label>
        <p class="form_errMsg"></p>

        <label>
          <div class="form_name">
            <span class="form_label form_label--required">必須</span>
            確認のため再度入力してください
          </div>
          <input type="text" name="email_re" class="form_input" value="">
        </label>
        <p class="form_errMsg"></p>

        <button type="submit" class="form_button" name="">更新して終わる</button>
      </form>

      <form method="post" class="form form--carousel">
      <h2 class="form_title">プロフィール画像</h2>
        <label>
          <div class="form_name">
            <span class="form_label form_label--optional">任意</span>
            プロフィール画像
          </div>
          <input type="text" name="profImg" class="form_input" value="">
        </label>
        <p class="form_errMsg"></p>

        <label>
          <div class="form_name">
            <span class="form_label form_label--required">任意</span>
            コメント
          </div>
          <input type="text" name="new_pass" class="form_input" value="">
        </label>
        <p class="form_errMsg"></p>

        <button type="submit" class="form_button" name="">更新して終わる</button>
      </form>
    </div>
  </div>
</main>

<!--　共通フッター呼び出し　-->
<?php require('footer.php'); ?>
