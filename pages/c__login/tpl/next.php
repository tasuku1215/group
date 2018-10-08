<?php
//====================================================
//ログインページ
//
//以下エラー文
//
//====================================================
?>
<?php
// require_once "./../../tpl/header.html";
// require_once './../../tpl/main_up_menu.php';
// require_once './../../tpl/left_menu.html';

?>
<div class="c__main">

    <div class="c__main-box">
        <form action="index.php" method="GET">

            <p><b>ログインID</b></p>
            <input type="text" name="user_id" value='test'>
            <p><b>パスワード</b></p>
            <input type="text" name="user_pass" value="pass">
            <div>
                <input type="submit" value="ログイン">
                <!-- <button>ログイン</button> -->
        </div>
            <p> <a href="">ログイン/パスワードを忘れた方</a> </p>

        </form>
    </div>
</div>
<?php
require_once "./../../tpl/footer.html";
?>