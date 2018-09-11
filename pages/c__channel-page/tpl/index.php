<?php
//====================================================
//チャンネルページ
//
//以下エラー文
//
//====================================================
require_once "./../tpl/header.html";
?>
<div class="c__main">
    <!-- head -->
    <div>
        <div><img src="" alt=""></div>
    </div>
    <!-- 情報 -->
    <div>
        <h2>ユーザー名</h2>
        <p>動画数：999</p>
        <p>新規投稿</p>

    </div>
    <!-- 動画リスト -->
    <div>
        <h3>投稿動画</h3>
        <select name="kibun">
            <option value="1">再生回数の多い</option>
            <option value="2">再生回数の少ない<option>
            <option value="3">投稿時間の古い</option>
            <option value="4">投稿時間の新しい</option>
            <option value="5">お気に入り数が多い</option>
            <option value="6">お気に入り数が少ない</option>
        </select>
    </div>
    <div class="p__video_list">
        <ul>
            <li>
                <img src="video_icon/firstframe.jpg" alt="動画アイコン">
                <div>
                    <h3>動画名</h3>
                    <p>お気に入り数/999</p>
                    <p>当が再生回数/999</p>
                    <p>投稿時間/99:99</p>
                    <p>消去</p>
                </div>
            </li>
            <li>
                <img src="video_icon/firstframe.jpg" alt="動画アイコン">
                <div>
                    <h3>動画名</h3>
                    <p>お気に入り数/999</p>
                    <p>当が再生回数/999</p>
                    <p>投稿時間/99:99</p>
                    <p>消去</p>
                </div>
            </li>
            <li>
                <img src="video_icon/firstframe.jpg" alt="動画アイコン">
                <div>
                    <h3>動画名</h3>
                    <p>お気に入り数/999</p>
                    <p>当が再生回数/999</p>
                    <p>投稿時間/99:99</p>
                    <p>消去</p>
                </div>
            </li>
            <li>
                <img src="video_icon/firstframe.jpg" alt="動画アイコン">
                <div>
                    <h3>動画名</h3>
                    <p>お気に入り数/999</p>
                    <p>当が再生回数/999</p>
                    <p>投稿時間/99:99</p>
                    <p>消去</p>
                </div>
            </li>

        </ul>
    </div>
</div>
<?php
require_once "./../tpl/footer.html";
?>