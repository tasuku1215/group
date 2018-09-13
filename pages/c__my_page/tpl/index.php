<?php
//====================================================
//マイページ
//
//以下エラー文
//
//====================================================
require_once "./../tpl/header.html";
require_once './../../tpl/main_up_menu.html';
require_once './../../tpl/left_menu.html';

?>
<div class="c__main">
  <!---ディレクトリ表示 -->
  <div id=""></div>
  <!-- お問い合わせボタン-->
  <div id=""></div>
  <!--プルフィール -->
  <div id="profile_contents">
    <div id="profile_info">
      <div id="profile_img"></div>
      <div id="user_name"alt="ユーザーネーム">
        <button type="button" name="change" value="" alt="変更">
          <font size="5" color="#333399">変更</font>
        </button>
      </div>
    </div>
    <!-- プロフィール情報表示-->
    <div id="profile_text"></div>
  </div>
  <div id="mylist_contents">
    <div id="mylist_box">
      <!-- -->
      <div class="my_video_list">
          <ul>
              <li>
                  <img src="video_icon/firstframe.jpg" alt="動画アイコン">
                  <div>
                      <h3>動画名</h3>
                      <img src="" alt="投稿者アイコン"><p>投稿者名</p>
                      <p>お気に入り数/999</p>
                  </div>
              </li>
              <li>
                  <img src="video_icon/firstframe.jpg" alt="動画アイコン">
                  <div>
                      <h3>動画名</h3>
                      <img src="" alt="投稿者アイコン"><p>投稿者名</p>
                      <p>お気に入り数/999</p>
                  </div>
              </li>
              <li>
                  <img src="video_icon/firstframe.jpg" alt="動画アイコン">
                  <div>
                      <h3>動画名</h3>
                      <img src="" alt="投稿者アイコン"><p>投稿者名</p>
                      <p>お気に入り数/999</p>
                  </div>
              </li>
              <li>
                  <img src="video_icon/firstframe.jpg" alt="動画アイコン">
                  <div>
                      <h3>動画名</h3>
                      <img src="" alt="投稿者アイコン"><p>投稿者名</p>
                      <p>お気に入り数/999</p>
                  </div>
              </li>
              <li>
                  <img src="video_icon/firstframe.jpg" alt="動画アイコン">
                  <div>
                      <h3>動画名</h3>
                      <img src="" alt="投稿者アイコン"><p>投稿者名</p>
                      <p>お気に入り数/999</p>
                  </div>
              </li>
              <li>
                  <img src="video_icon/firstframe.jpg" alt="動画アイコン">
                  <div>
                      <h3>動画名</h3>
                      <img src="" alt="投稿者アイコン"><p>投稿者名</p>
                      <p>お気に入り数/999</p>
                  </div>
              </li>
              <li>
                  <img src="video_icon/firstframe.jpg" alt="動画アイコン">
                  <div>
                      <h3>動画名</h3>
                      <img src="" alt="投稿者アイコン"><p>投稿者名</p>
                      <p>お気に入り数/999</p>
                  </div>
              </li>
              <li>
                  <img src="video_icon/firstframe.jpg" alt="動画アイコン">
                  <div>
                      <h3>動画名</h3>
                      <img src="" alt="投稿者アイコン"><p>投稿者名</p>
                      <p>お気に入り数/999</p>
                  </div>
              </li>
              <li>
                  <img src="video_icon/firstframe.jpg" alt="動画アイコン">
                  <div>
                      <h3>動画名</h3>
                      <img src="" alt="投稿者アイコン"><p>投稿者名</p>
                      <p>お気に入り数/999</p>
                  </div>
              </li>
          </ul>
      </div>
    </div>
  </div>
  <input type="button"name="forward"alt="進む">
  <input type="button"name="back"alt="戻る">

</div>
<?php
require_once "./../tpl/footer.html";
?>