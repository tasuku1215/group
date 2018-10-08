<?php
//====================================================
//確認ページページ
//
//以下エラー文
//
//====================================================
require_once "./../../tpl/header.html";
require_once './../../tpl/main_up_menu.php';
require_once './../../tpl/left_menu.html';
?>
<div class="c__main">
<div class="c__comfirm">
<div class="directory_box">
            <a href="#" class="square_btn">〇〇ページ</a>
            <a href="#" class="square_btn">〇〇確認ぺージ</a>
            <div class="header_font">
                <h2>〇〇確認ページ</h2>
            </div>
        </div>
        <h3> 下記の内容でよろしいでしょうか</h3>
        <div class="comfirm_detail">
        </div>
        <div class="upload_buttun">
          <button type="button" name="sned" value="" alt="OKボタン">
            <p size="5" >戻る</p>
          </button>
          <button type="button" name="sned" value="" alt="OKボタン">
            <p size="5" >完了</p>
          </button>
        </div>
</div>
</div>
   <?php
    require_once "./../../tpl/footer.html";
    ?>