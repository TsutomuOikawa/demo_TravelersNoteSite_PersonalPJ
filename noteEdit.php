<?php
$page_title = 'タイトル';
require ('head.php');
require ('header.php');
 ?>

    <main class="page-wrapper">
      <div class="container--note">
        <div class="container_body">
          <form method="post" class="form">
          <h2 class="form_title">旅の概要</h2>
            <label>
              <div class="form_name">
                <span class="form_label form_label--required">必須</span>
                タイトル
              </div>
              <input type="text" name="title" class="form_input" value="">
            </label>
            <p class="form_errMsg"></p>

            <label>
              <div class="form_name">
                <span class="form_label form_label--required">必須</span>
                旅先
              </div>
              <select name="destination" class="form_input" value="">
                <option value="">北海道</option>
              </select>
            </label>
            <p class="form_errMsg"></p>
          </form>
        </div>

        <div class="container_body container_body--carousel">
          <form method="post" class="form form--carousel">
          <h2 class="form_title">Chapter 1</h2>
            <label>
              <div class="form_name">
                <span class="form_label form_label--required">必須</span>
                チャプタータイトル
              </div>
              <input type="text" name="chap1-title" class="form_input" value="">
            </label>
            <p class="form_errMsg"></p>

            <div class="form_date">
              <label>
                <div class="form_name">
                  <span class="form_label form_label--required">必須</span>
                  旅行日程
                </div>
                <input type="date" name="chap1-startDate" class="form_input" value="">
              </label>
              ~
              <input type="date" name="chap1-endDate" class="form_input" value="">
            </div>

            <p class="form_errMsg"></p>

            <label>
              <div class="form_name">
                <span class="form_label form_label--required">必須</span>
                本文
              </div>
              <textarea name="chap1-text" class="form_input"></textarea>
            </label>
            <p class="form_errMsg"></p>

            <button type="submit" class="form_button" name="">投稿する</button>
          </form>
        </div>


      </div>
    </main>

<?php require('footer.php'); ?>
