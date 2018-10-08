<?php
//====================================================
//チャンネルページ
//
//以下エラー文
//
//====================================================
require_once "./../../tpl/header.html";
  require_once './../../tpl/main_up_menu.php';
  require_once './../../tpl/left_menu.html';
?>
<div class="c__main">
  <div class="channel_op">

    <div class="directory_box">
                <a href="#" class="square_btn">TOPページ</a>
                <div class="header_font">
                    <h2>チャンネル登録ページ</h2>
                </div>
     </div>
     <div class="channel_detail">
       <div class="box_center">
         <h3 style="font-size : 20px;">チャンネル名</h3>
         <p><input type="text"></p>
         <h3 style="font-size : 20px;">チャンネル説明</h3>
         <p><textarea name="" id="" cols="30" rows="20"></textarea></p>
        </div>
        <div class="upload_buttun">
          <button type="button" name="sned" value="" alt="OKボタン">
            <p size="5" >OK</p>
          </button>
        </div>
      </div>
    </div>
    </div>
    <?php
require_once "./../../tpl/footer.html";
?>