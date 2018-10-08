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
    <!-- head -->
    <div class="channel_box">
    <div class="header_box">
        <!-- <div class="img_roundly">
            <div><img src="" alt=""></div>
        </div> -->
        <!-- 情報 -->
        <div class="user_detail">
            <h2><?php echo $_SESSION['login']['id'] ?></h2>
            <!-- <p>動画数：999</p> -->
            
        </div>
    </div>

        <!-- 動画リスト -->
        <div class="video_list_contents">
            <h3> 投稿動画一覧</h3>
            <!-- <div class="video_sort">
                <select name="kibun">
                    <option value="1">再生回数の多い</option>
                    <option value="2">再生回数の少ない<option>
                    <option value="3">投稿時間の古い</option>
                    <option value="4">投稿時間の新しい</option>
                    <option value="5">お気に入り数が多い</option>
                    <option value="6">お気に入り数が少ない</option>
                </select>
        </div> -->
            <div class="p_video_box">
                <div class="back_grond">
                </div>
                <!-- 動画投稿一覧-->
                <div class="p_video_list">
                    <ul>
                        <!--  -->
                <?php for($i=0;$i<10;$i++){ ?>
                        <a href="">
                            <li>
                                <div class="img_absolute_position">
                                    <img src="video_icon/firstframe.jpg" alt="動画アイコン">
                                </div>
                                <div class="video_detail">
                                    <div class="box_float">
                                        <h3>動画名 test_video</h3>
                                        <p>お気に入り数/999</p>
                                        <button>
                                        削除
                                        </button>
                                    </div>
                                </div>
                            </li>
                        </a>
                <?php }?>
        </div>

    </div>
</div>
<?php
require_once "./../../tpl/footer.html";
?>