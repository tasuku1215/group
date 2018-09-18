<?php
//====================================================
//ログインページ
//
//以下エラー文
//
//====================================================
?>
<?php
require_once "./../../tpl/header.html";
require_once './../../tpl/main_up_menu.html';
require_once './../../tpl/left_menu.html';

?>
<div class="c__main">

    <div class="c__main-box">
        <form action="">

            <p><b>ログインID</b></p>
            <input type="text">
            <p><b>パスワード</b></p>
            <input type="text">
            <div><button>ログイン</button></div>
            <p> <a href="">ログイン/パスワードを忘れた方</a> </p>

        </form>
    </div>
</div>
<?php
require_once "./../../tpl/footer.html";
?>