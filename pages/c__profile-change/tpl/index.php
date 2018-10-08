<?php
//====================================================
//プロフィール変更ページ
//
//以下エラー文
//
//====================================================
require_once "./../../tpl/header.html";
  require_once './../../tpl/main_up_menu.php';
  require_once './../../tpl/left_menu.html';
?>
<div class="c__main">
  <!-- profile-change　プロフィール変更 -->
  <div class="profile_change_box">
    <div class="directory_box">
      <a href="#" class="square_btn">TOPページ</a>
      <a href="#" class="square_btn">マイぺージ</a>
      <a href="#" class="square_btn">変更ぺージ</a>
      <div class="header_font">
                <h2>プロフィール変更</h2>
            </div>
    </div>
    <div class="profile_more_detail">
      <div class="detail_top">
        <div class="img_box">
          <div class="img_b">
            <img src="" alt="プロフィール画像">
          </div>
          <div class="center">
          <button type="button" name="select"" value="" alt=" 変更">
            <font size="2" color="#333399">選択 </font>
          </button>
          </div>
        </div>
        <div class="introduction_box ">
        <h3>名前</h3>
        <input type="text">
        <h3>コメント</h3>
        <textarea name="" id="" cols="95"" rows="10">
        </textarea>
      </div>
      <div class="damy"> 
      </div>
      <div class="detail_bottom">
        <p>プライバシー</p>
          <p>マイリストをすべて非公開</p>
          <p>お気に入りをすべて非公開</p>
        </div>
        <div class="center">
        <button type="button" name="change" value="" alt="変更">
        <font size="2" color="#333399">変更 </font>
    </button>
        </div>
      </div>
    </div>
   
  </div>

</div>
<?php
require_once "./../../tpl/footer.html";
?>