<!-- 
//====================================================
//上のメニューバー(メイン)
//
//どのページにもついている
//
//==================================================== -->

<header class="c__main_up_menu">
    <div class="text_input"><input type="text" size="100px"><button><i class="fas fa-phone"></i></button></div>
    <div class="menu_button">
        <?php
        if(!empty($_GET['login'])&&$_GET['login']=='out'){
            session_delete();
            session_start();
        }
        // session_start();
        if(!empty($_SESSION['login'])){?>
            <div> <a href="?login=out"> <i class="fas fa-phone"></i>ログアウト</a></div>
        <?php }
        else{ ?>
            <div><a href="./../c__login/index.php" ><i class="fas fa-phone"></i>ログイン</a></div>
        <?php } ?>
        <div><a href="./../c__menber-registration/index.php">会員登録</a></div>
    </div>
</header>