
<?php
$page_title = '会員登録';
require('head.php');
require('header.php');
?>
<div class="alert--err js-show-err-msg">
  <p><?php //echo $err_msg['common']; ?></p>
</div>

<main class="page-wrapper">
  <div class="container--baseColor">
    <h1 class="container_title">会員登録（無料）</h1>
    <div class="container_body">
      <div class="form">
        <h2 class="form_title">ご登録フォーム</h2>
        <form method="post" class="">
          <label>
            <div class="form_name">
              <span class="form_label form_label--required">必須</span>
              メールアドレス
            </div>
            <input type="text" name="email" class="form_input" value="" placeholder="example@test.com">
          </label>
          <p class="form_errMsg"></p>

          <label>
            <div class="form_name">
              <span class="form_label form_label--required">必須</span>
              パスワード
              <span class="smallfont">（半角英数字6文字以上）</span>
            </div>
            <input type="password" name="pass" class="form_input" value="">
          </label>
          <p class="form_errMsg"></p>

          <label>
            <div class="form_name">
              <span class="form_label form_label--required">必須</span>
              パスワード再入力
            </div>
            <input type="password" name="pass_re" class="form_input" value="">
          </label>
          <p class="form_errMsg"></p>

          <button type="submit" class="form_button" name="">登録する</button>

          <p class="form_notion"><a href="login.php" class="link"><span style="font-size:18px;">&gt</span> 登録済みの方はこちら</a></p>
        </form>
      </div>

    </div>
  </div>
</main>

<!--　共通フッター呼び出し　-->
<?php require('footer.php'); ?>
