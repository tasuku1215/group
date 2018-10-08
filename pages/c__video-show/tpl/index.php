<?php
//====================================================
//動画視聴画面
//====================================================
?>
<?php
require_once "./../../tpl/header.html";
require_once './../../tpl/main_up_menu.php';
require_once './../../tpl/left_menu.html';

?>
<div class="c__main">
    <div id="p__video_box">
        <div class="directory_box">
            <a href="#" class="square_btn">TOPページ</a>
            <a href="#" class="square_btn">動画視聴ページ</a>
            <div class="header_font">
                <h2>動画視聴ページ</h2>
            </div>
        </div>
        <!-- 動画再生場所 -->
        <div class="p__viedo_show-main">
            <div class="p__video_center">
                <video controls autoplay poster="video_icon/firstframe.jpg" width="750" height="400">
                    <source src="video/sample.mp4">
                    <source src="video/sample.ogv">
                    <source src="video/sample.webm">
                    <p>動画を再生するには、videoタグをサポートしたブラウザが必要です。</p>
                </video>
            </div>
        </div>
        <!-- 再生動画情報 -->
        <div class="p__video_description">
            <h2>動画名 aaaa_bbb</h2>
            <img src="" alt="投稿者アイコン">
            <h3>投稿者名 xxxxxxx</h3>
            <h3>お気に入り数/999</h3>
            <p>動画説明</p>
            <p>カテゴリー/</p>
            <p>タグ/</p>
        </div>
        <!-- 関連動画リスト 最大動画数：10動画-->
        <div class="p__video_list">
            <ul>
                <a href="">
                    <li>
                        <div class="img_absolute_position">
                            <img src="video_icon/firstframe.jpg" alt="動画アイコン">
                        </div>
                        <div class="video_detail">
                            <div class="box_float">
                                <h3>動画名 test_video</h3>
                                <img src="" alt="投稿者アイコン">
                                <p>投稿者名 sample_user</p>
                            </div>
                            <p>お気に入り数/999</p>
                        </div>
                    </li>
                </a>
                <a href="">
                    <li>
                        <div class="img_absolute_position">
                            <img src="video_icon/firstframe.jpg" alt="動画アイコン">
                        </div>
                        <div class="video_detail">
                            <div class="box_float">
                                <h3>動画名 test_video</h3>
                                <img src="" alt="投稿者アイコン">
                                <p>投稿者名 sample_user</p>
                            </div>
                            <p>お気に入り数/999</p>
                        </div>
                    </li>
                </a>
                <a href="">
                    <li>
                        <div class="img_absolute_position">
                            <img src="video_icon/firstframe.jpg" alt="動画アイコン">
                        </div>
                        <div class="video_detail">
                            <div class="box_float">
                                <h3>動画名 test_video</h3>
                                <img src="" alt="投稿者アイコン">
                                <p>投稿者名 sample_user</p>
                            </div>
                            <p>お気に入り数/999</p>
                        </div>
                    </li>
                </a>
                <a href="">
                    <li>
                        <div class="img_absolute_position">
                            <img src="video_icon/i.jpg" alt="動画アイコン">
                        </div>
                        <div class="video_detail">
                            <div class="box_float">
                                <h3>動画名 test_video</h3>
                                <img src="" alt="投稿者アイコン">
                                <p>投稿者名 sample_user</p>
                            </div>
                            <p>お気に入り数/999</p>
                        </div>
                    </li>
                </a>
                <a href="">
                    <li>
                        <div class="img_absolute_position">
                            <img src="video_icon/firstframe.jpg" alt="動画アイコン">
                        </div>
                        <div class="video_detail">
                            <div class="box_float">
                                <h3>動画名 test_video</h3>
                                <img src="" alt="投稿者アイコン">
                                <p>投稿者名 sample_user</p>
                            </div>
                            <p>お気に入り数/999</p>
                        </div>
                    </li>
                </a>
                <a href="">
                    <li>
                        <div class="img_absolute_position">
                            <img src="video_icon/firstframe.jpg" alt="動画アイコン">
                        </div>
                        <div class="video_detail">
                            <div class="box_float">
                                <h3>動画名 test_video</h3>
                                <img src="" alt="投稿者アイコン">
                                <p>投稿者名 sample_user</p>
                            </div>
                            <p>お気に入り数/999</p>
                        </div>
                    </li>
                </a>
                <a href="">
                    <li>
                        <div class="img_absolute_position">
                            <img src="video_icon/firstframe.jpg" alt="動画アイコン">
                        </div>
                        <div class="video_detail">
                            <div class="box_float">
                                <h3>動画名 test_video</h3>
                                <img src="" alt="投稿者アイコン">
                                <p>投稿者名 sample_user</p>
                            </div>
                            <p>お気に入り数/999</p>
                        </div>
                    </li>
                </a>
                <a href="">
                    <li>
                        <div class="img_absolute_position">
                            <img src="video_icon/i.jpg" alt="動画アイコン">
                        </div>
                        <div class="video_detail">
                            <div class="box_float">
                                <h3>動画名 test_video</h3>
                                <img src="" alt="投稿者アイコン">
                                <p>投稿者名 sample_user</p>
                            </div>
                            <p>お気に入り数/999</p>
                        </div>
                    </li>
                </a>
                <a href="">

                    <li>
                        <div class="img_absolute_position">
                            <img src="video_icon/firstframe.jpg" alt="動画アイコン">
                        </div>
                        <div class="video_detail">
                            <div class="box_float">
                                <h3>動画名 test_video</h3>
                                <img src="" alt="投稿者アイコン">
                                <p>投稿者名 sample_user</p>
                            </div>
                            <p>お気に入り数/999</p>
                        </div>
                    </li>
                </a>
                <a href="">
                    <li>
                        <div class="img_absolute_position">
                            <img src="video_icon/i.jpg" alt="動画アイコン">
                        </div>
                        <div class="video_detail">
                            <div class="box_float">
                                <h3>動画名 test_video</h3>
                                <img src="" alt="投稿者アイコン">
                                <p>投稿者名 sample_user</p>
                            </div>
                            <p>お気に入り数/999</p>
                        </div>
                    </li>
                </a>
            </ul>
        </div>
    </div>
</div>
<?php
require_once "./../../tpl/footer.html";
?>