<?php
//====================================================
//動画視聴画面
//====================================================
?>
<?php
require_once "./../../tpl/header.html";
require_once './../../tpl/main_up_menu.html';
require_once './../../tpl/left_menu.html';

?>
<div class="c__main">
    <!-- 動画再生場所 -->
    <div clasas="p__viedo_show-main">
        <video controls autoplay poster="video_icon/firstframe.jpg" width="320" height="240">
            <source src="video/sample.mp4">
            <source src="video/sample.ogv">
            <source src="video/sample.webm">
            <p>動画を再生するには、videoタグをサポートしたブラウザが必要です。</p>
        </video>
    </div>
    <!-- 再生動画情報 -->
    <div class="p__video_description">
        <h2>動画名</h2>
        <img src="" alt="投稿者アイコン"><p>投稿者名</p>
        <p>お気に入り数/999</p>
        <p>カテゴリー/</p>
        <p>タグ/</p>
    </div>
    <!-- 関連動画リスト 最大動画数：10動画-->
    <div class="p__video_list">
        <ul>
            <li>
                <img src="video_icon/firstframe.jpg" alt="動画アイコン">
                <div>
                    <h3>動画名</h3>
                    <img src="" alt="投稿者アイコン"><p>投稿者名</p>
                    <p>お気に入り数/999</p>
                </div>
            </li>
            <li>
                <img src="video_icon/firstframe.jpg" alt="動画アイコン">
                <div>
                    <h3>動画名</h3>
                    <img src="" alt="投稿者アイコン"><p>投稿者名</p>
                    <p>お気に入り数/999</p>
                </div>
            </li>
            <li>
                <img src="video_icon/firstframe.jpg" alt="動画アイコン">
                <div>
                    <h3>動画名</h3>
                    <img src="" alt="投稿者アイコン"><p>投稿者名</p>
                    <p>お気に入り数/999</p>
                </div>
            </li>
            <li>
                <img src="video_icon/firstframe.jpg" alt="動画アイコン">
                <div>
                    <h3>動画名</h3>
                    <img src="" alt="投稿者アイコン"><p>投稿者名</p>
                    <p>お気に入り数/999</p>
                </div>
            </li>
            <li>
                <img src="video_icon/firstframe.jpg" alt="動画アイコン">
                <div>
                    <h3>動画名</h3>
                    <img src="" alt="投稿者アイコン"><p>投稿者名</p>
                    <p>お気に入り数/999</p>
                </div>
            </li>
            <li>
                <img src="video_icon/firstframe.jpg" alt="動画アイコン">
                <div>
                    <h3>動画名</h3>
                    <img src="" alt="投稿者アイコン"><p>投稿者名</p>
                    <p>お気に入り数/999</p>
                </div>
            </li>
            <li>
                <img src="video_icon/firstframe.jpg" alt="動画アイコン">
                <div>
                    <h3>動画名</h3>
                    <img src="" alt="投稿者アイコン"><p>投稿者名</p>
                    <p>お気に入り数/999</p>
                </div>
            </li>

        </ul>
    </div>
</div>
<?php
require_once "./../../tpl/footer.html";
?>