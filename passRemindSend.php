
<?php
$page_title = '認証コード送信';
require('head.php');
require('header.php');
?>
<div class="alert--err js-show-err-msg">
  <p><?php //echo $err_msg['common']; ?></p>
</div>

<main class="page-wrapper">
  <div class="container--baseColor">
    <h1 class="container_title">パスワード再発行手続き</h1>
    <p class="container_notion">ご登録のメールアドレス宛に<br>認証コードをお送りします</p>
    <div class="container_body--xs">
      <form method="post" class="form">
      <h2 class="form_title">ご登録のメールアドレスを<br>入力してください</h2>

        <label>
          <div class="form_name">
            <span class="form_label form_label--required">必須</span>
            メールアドレス
          </div>
          <input type="text" name="email" class="form_input" value="" placeholder="example@test.com">
        </label>
        <p class="form_errMsg"></p>


        <button type="submit" class="form_button" name="">認証コード送信</button>

        <p class="form_notion"><a href="login.php" class="link"><span style="font-size:18px;">&gt</span> ログインフォームへ戻る</a></p>
        <p class="form_notion"><a href="register.php" class="link"><span style="font-size:18px;">&gt</span> ご登録がお済みでない方はこちら</a></p>
      </form>
    </div>
  </div>
</main>

<!--　共通フッター呼び出し　-->
<?php require('footer.php'); ?>
