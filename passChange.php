
<?php
$page_title = 'パスワード変更';
require('head.php');
require('header.php');
?>
<div class="alert--err js-show-err-msg">
  <p><?php //echo $err_msg['common']; ?></p>
</div>

<main class="page-wrapper">
  <div class="container--baseColor">
    <h1 class="container_title">パスワード変更</h1>
    <div class="container_body--xs">
      <form method="post" class="form">
      <h2 class="form_title">パスワードを入力してください</h2>
        <label>
          <div class="form_name">
            <span class="form_label form_label--required">必須</span>
            現在のパスワード
          </div>
          <input type="password" name="old_pass" class="form_input" value="">
        </label>
        <p class="form_errMsg"></p>

        <label>
          <div class="form_name">
            <span class="form_label form_label--required">必須</span>
            新しいパスワード
          </div>
          <input type="password" name="new_pass" class="form_input" value="">
        </label>
        <p class="form_errMsg"></p>

        <label>
          <div class="form_name">
            <span class="form_label form_label--required">必須</span>
            パスワード再入力
          </div>
          <input type="password" name="new_pass_re" class="form_input" value="">
        </label>
        <p class="form_errMsg"></p>

        <button type="submit" class="form_button" name="">登録する</button>
      </form>
    </div>
  </div>
</main>

<!--　共通フッター呼び出し　-->
<?php require('footer.php'); ?>
