<?php
//====================================================
//動画投稿ページ
//
//以下エラー文
//
//====================================================
require_once "./../tpl/header.html";
require_once './../../tpl/main_up_menu.html';
require_once './../../tpl/left_menu.html';

?>
<div class="c__main">
   <!---ディレクトリ表示 -->
   <div id=""></div>
<div id="upload_portbox_box">
    <form action="">
      <h2>動画投稿</h2>
      <table>
        <tr>
          <th>投稿動画</th>
        </tr>
        <tr>
          <td><input type="file" name="upload_file" alt="動画アップロード"></td>
        </tr>
        <tr>
          <th>金額設定</th>
          <td>
            <p>
              <label for="language">金額設定してください</label>
              <select id="language" name="language">
                <option value="en">0</option>
                <option value="de" disabled>500</option>
                <option value="fr">1000</option>
                <option value="ja" selected>5000</option>
                <option value="zh">10000</option>
              </select>
            </p>
          </td>
        </tr>
        <tr>
          <th>公開範囲</th>
          <td>
            <p>
              <input type="radio" name="comon">誰でも
              <input type="radio" name="menber">限定公開
              <input type="radio" name="private">非公開
            </p>
          </td>
        </tr>
        <tr>
          <th>動画タイトル</th>
          <td>
            <input type="text" name="title">
          </td>
        </tr>
        <tr>
          <th>
            動画説明
          </th>
          <td>
            <input type="text" name="explanatory" alt="動画説明文">
          </td>
        </tr>
      </table>
      <div id="upload_buttun">
        <button type="button" name="sned" value="" alt="OKボタン">
          <font size="2">ここを</font>
          <font size="5" color="#333399">OK</font>
        </button>
      </div>
    </div>
  </form>

</div>
<?php
require_once "./../tpl/footer.html";
?>