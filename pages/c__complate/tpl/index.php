<?php
//====================================================
//確認ページページ
//
//以下エラー文
//
//====================================================
require_once "./../../tpl/header.html";
require_once './../../tpl/main_up_menu.html';
require_once './../../tpl/left_menu.html';
?>
<div class="c__main">
<div class="c__complate">
<div class="directory_box">
            <a href="#" class="square_btn">〇〇ページ</a>
            <a href="#" class="square_btn">〇〇確認ぺージ</a>
            <div class="header_font">
                <h2>〇〇完了ページ</h2>
            </div>
        </div>
        <h3> 下記の内容で登録　投稿しました</h3>
        <div class="comfirm_detail">
        </div>
        <div class="back_buttun">
          <button type="button" name="sned" value="" alt="OKボタン">
            <p size="5" >TOPへ</p>
          </button>
        </div>
</div>
</div>
   <?php
    require_once "./../../tpl/footer.html";
    ?>