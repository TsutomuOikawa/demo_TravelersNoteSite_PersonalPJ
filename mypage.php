<?php
$page_title = 'マイページ';
require ('head.php');
require ('header.php');
 ?>

    <main class="page-wrapper">
      <div class="container">
        <h1 class="container_title">マイページ</h1>
        <div class="container_body--l mypage">
          <div class="mypage_main">
            <nav class="mypage_nav">
              <p>Map</p>
              <span class="itemSeparater"></span>
              <p>Notes</p>
              <span class="itemSeparater"></span>
              <p>WishLists</p>
              <span class="itemSeparater"></span>
              <p>Favorites</p>
            </nav>
            <div class="mypage_article">

              <section id="map" class="mypage_contents map">
                <h2 class="mypage_title">MY MAP</h2>
                <div class="mypage_body">
                  <div class="map">

                  </div>
                </div>
              </section>

              <section id="note" class="mypage_contents">
                <h2 class="mypage_title">記録済みノート</h2>
                <div class="mypage_body">
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
              </section>

              <section id="favorites" class="mypage_contents">
                <h2 class="mypage_title">お気に入りのノート</h2>
                <div class="mypage_body">
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
              </section>

              <section id="" class="mypage_contents">
                <h2 class="mypage_title">MyLists</h2>
                <div class="mypage_body">
                  <div class="list--wish">
                    <ul class="list_body--wish">
                      <li class="panel--wish">
                        <div class="userInfo">
                          <img src="img/プロフィールアイコン：有色.jpeg" class="userInfo_img" alt="">
                          <p class="userInfo_name">ユーザーネーム</p>
                        </div>
                        <table class="panel_table">
                          <tr class="panel_tableElm">
                            <th>WHERE</th>
                            <td>熊本城</td>
                          </tr>
                          <tr class="panel_tableElm">
                            <th>WHAT</th>
                            <td>雪の熊本城を撮りたい！</td>
                          </tr>
                        </table>
                      </li>

                      <li class="panel--wish">
                        <div class="userInfo">
                          <img src="img/プロフィールアイコン：有色.jpeg" class="userInfo_img" alt="">
                          <p class="userInfo_name">ユーザーネーム</p>
                        </div>
                        <table class="panel_table">
                          <tr class="panel_tableElm">
                            <th>WHERE</th>
                            <td>熊本城</td>
                          </tr>
                          <tr class="panel_tableElm">
                            <th>WHAT</th>
                            <td>雪の熊本城を撮りたい！</td>
                          </tr>
                        </table>
                      </li>

                      <li class="panel--wish">
                        <div class="userInfo">
                          <img src="img/プロフィールアイコン：有色.jpeg" class="userInfo_img" alt="">
                          <p class="userInfo_name">ユーザーネーム</p>
                        </div>
                        <table class="panel_table">
                          <tr class="panel_tableElm">
                            <th>WHERE</th>
                            <td>熊本城</td>
                          </tr>
                          <tr class="panel_tableElm">
                            <th>WHAT</th>
                            <td>雪の熊本城を撮りたい！</td>
                          </tr>
                        </table>
                      </li>


                      <li class="panel--wish">
                        <div class="userInfo">
                          <img src="img/プロフィールアイコン：有色.jpeg" class="userInfo_img" alt="">
                          <p class="userInfo_name">ユーザーネーム</p>
                        </div>
                        <table class="panel_table">
                          <tr class="panel_tableElm">
                            <th>WHERE</th>
                            <td>熊本城</td>
                          </tr>
                          <tr class="panel_tableElm">
                            <th>WHAT</th>
                            <td>雪の熊本城を撮りたい！</td>
                          </tr>
                        </table>
                      </li>

                      <li class="panel--wish">
                        <div class="userInfo">
                          <img src="img/プロフィールアイコン：有色.jpeg" class="userInfo_img" alt="">
                          <p class="userInfo_name">ユーザーネーム</p>
                        </div>
                        <table class="panel_table">
                          <tr class="panel_tableElm">
                            <th>WHERE</th>
                            <td>熊本城</td>
                          </tr>
                          <tr class="panel_tableElm">
                            <th>WHAT</th>
                            <td>雪の熊本城を撮りたい！</td>
                          </tr>
                        </table>
                      </li>

                      <li class="panel--wish">
                        <div class="userInfo">
                          <img src="img/プロフィールアイコン：有色.jpeg" class="userInfo_img" alt="">
                          <p class="userInfo_name">ユーザーネーム</p>
                        </div>
                        <table class="panel_table">
                          <tr class="panel_tableElm">
                            <th>WHERE</th>
                            <td>熊本城</td>
                          </tr>
                          <tr class="panel_tableElm">
                            <th>WHAT</th>
                            <td>雪の熊本城を撮りたい！</td>
                          </tr>
                        </table>
                      </li>

                      <li class="panel--wish">
                        <div class="userInfo">
                          <img src="img/プロフィールアイコン：有色.jpeg" class="userInfo_img" alt="">
                          <p class="userInfo_name">ユーザーネーム</p>
                        </div>
                        <table class="panel_table">
                          <tr class="panel_tableElm">
                            <th>WHERE</th>
                            <td>熊本城</td>
                          </tr>
                          <tr class="panel_tableElm">
                            <th>WHAT</th>
                            <td>雪の熊本城を撮りたい！</td>
                          </tr>
                        </table>
                      </li>
                    </ul>
                  </div>

                </div>
              </section>

            </div>
          </div>
          <div class="mypage_sidebar">
            <div class="mypage_profile">
              <div class="userInfo userInfo--big">
                <img src="img/プロフィールアイコン：有色.jpeg" class="userInfo_img userInfo_img--big" alt="">
                <p class="userInfo_name userInfo_name--big">ユーザーネーム</p>
              </div>

            </div>
            <ul class="mypage_menu">
              <li>password</li>
              <li>logout</li>
              <li>withdrawal</li>

            </ul>
          </div>
        </div>
        <div class="imgSlider">
          <ul class="imgSlider_list">
            <li class="imgSlider_item"><img src="img/noimage.png" class="imgSlider_img" alt=""></li>
            <li class="imgSlider_item"><img src="img/noimage.png" class="imgSlider_img" alt=""></li>
            <li class="imgSlider_item"><img src="img/noimage.png" class="imgSlider_img" alt=""></li>
            <li class="imgSlider_item"><img src="img/noimage.png" class="imgSlider_img" alt=""></li>
            <li class="imgSlider_item"><img src="img/noimage.png" class="imgSlider_img" alt=""></li>
            <li class="imgSlider_item"><img src="img/noimage.png" class="imgSlider_img" alt=""></li>
            <li class="imgSlider_item"><img src="img/noimage.png" class="imgSlider_img" alt=""></li>
            <li class="imgSlider_item"><img src="img/noimage.png" class="imgSlider_img" alt=""></li>
          </ul>
        </div>
      </div>
    </main>

<?php require('footer.php'); ?>
