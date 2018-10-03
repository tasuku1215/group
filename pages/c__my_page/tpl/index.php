<?php
//====================================================
//マイページ
//
//以下エラー文
//
//====================================================
require_once "./../../tpl/header.html";
require_once './../../tpl/main_up_menu.html';
require_once './../../tpl/left_menu.html';

?>
<div class="c__main">
    <div id="my_peage_box">
        <!---ディレクトリ表示 -->
        <div class="directory_box">
            <a href="#" class="square_btn">TOPページ</a>
            <a href="#" class="square_btn">マイぺージ</a>
            <div class="option_help">
                <button type="button" name="help" value="" alt="変更">
                    <font size="2" color="#333399">お問い合わせ </font>
                </button>
            </div>
            <div class="header_font">
                <h2>マイページ</h2>
            </div>
        </div>

        <!--プルフィール -->
        <div id="profile_contents">
            <div id="profile_info">
                <div class="profile_img"></div>
                <div class="user_name" alt="ユーザーネーム">
                    <h4>sample_code</h4>
                    <h3>sample_name</h3>

                    <button type="button" name="change" value="" alt="変更">
                        <font size="5" color="#333399">変更</font>
                    </button>

                </div>

            </div>
            <!-- プロフィール情報表示-->
            <div id="profile_text">

            </div>
        </div>
        <div id="mylist_contents">
            <h3> MYLIST</h3>
            <div id="mylist_box">
                <div class="back_grond">
                </div>
                <!-- -->
                <div class="my_video_list">
                    <ul>
                        <li>
                            <div class="img_absolute_position">
                                <img src="video_icon/firstframe.jpg" alt="動画アイコン">
                            </div>
                            <div class="video_detail">
                                <h3>動画名 test_video</h3>
                                <p>投稿者名 sample_user</p>
                                <p>お気に入り数/999</p>
                            </div>
                        </li>
                        <li>
                            <div class="img_absolute_position">
                                <img src="video_icon/firstframe.jpg" alt="動画アイコン">
                            </div>
                            <div class="video_detail">
                                <h3>動画名 test_video</h3>
                                <p>投稿者名 sample_user</p>
                                <p>お気に入り数/999</p>
                            </div>
                        </li>
                        <li>
                            <div class="img_absolute_position">
                                <img src="video_icon/firstframe.jpg" alt="動画アイコン">
                            </div>
                            <div class="video_detail">
                                <h3>動画名 test_video</h3>
                                <p>投稿者名 sample_user</p>
                                <p>お気に入り数/999</p>
                            </div>
                        </li>
                        <li>
                            <div class="img_absolute_position">
                                <img src="video_icon/i.jpg" alt="動画アイコン">
                            </div>
                            <div class="video_detail">
                                <h3>動画名 test_video</h3>
                                <p>投稿者名 sample_user</p>
                                <p>お気に入り数/999</p>
                            </div>
                        </li>
                    </ul>
                </div>
                <div class="position_center">
                    <button type="button" name="back""value="" alt=" 戻る"">
                        <font size="4" color="#333399">戻る </font>
                    </button>
                    <button type="button" name="foword" value="" alt="進む">
                        <font size="4" color="#333399">進む </font>
                    </button>
                </div>
            </div>
        </div>


    </div>
</div>
<?php
require_once "./../../tpl/footer.html";
?>