
<?php
$page_title = 'パスワード再発行';
require('head.php');
require('header.php');
?>
<div class="alert--err js-show-err-msg">
  <p><?php //echo $err_msg['common']; ?></p>
</div>

<main class="page-wrapper">
  <div class="container--baseColor">
    <h1 class="container_title">パスワード再発行手続き</h1>
    <p class="container_notion">メールアドレスに届いた認証コードを<br>入力してください</p>
    <p class="container_notion">パスワードを再発行し、<br>再度メールをお送りします</p>
    <div class="container_body--xs">
      <form method="post" class="form">
      <h2 class="form_title">認証コードを入力してください</h2>

        <label>
          <div class="form_name">
            <span class="form_label form_label--required">必須</span>
            認証コード
          </div>
          <input type="text" name="auth_key" class="form_input" value="" placeholder="">
        </label>
        <p class="form_errMsg"></p>

        <button type="submit" class="form_button" name="">認証する</button>
        <p class="form_notion"><a href="login.php" class="link"><span style="font-size:18px;">&gt</span> ログインフォームへ戻る</a></p>
      </form>
    </div>
  </div>
</main>

<!--　共通フッター呼び出し　-->
<?php require('footer.php'); ?>
