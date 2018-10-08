<?php
//====================================================
//動画投稿ページ
//
//以下エラー文
//
//====================================================
// require_once "./../../tpl/header.html";
// require_once './../../tpl/main_up_menu.php';
// require_once './../../tpl/left_menu.html';

?>
<div class="c__main">
<div id="upload_portbox_box">
  <!---ディレクトリ表示 -->
  <div class="directory_box">
   <a href="#" class="square_btn">TOPページ</a>
   <a href="#" class="square_btn">チャンネル登録</a>
   <div class="header_font">
     <h2>動画投稿</h2>
    </div>
   </div>
  <form action="./index.php" method="POST" enctype='multipart/form-data'>
      <table>
        <tr>
          <th class ="aline-middle" width="200" style="font-size : 20px;"><h3>投稿動画</h3></th>
        </tr>
        <tr>
          <td><input class ="sample"type="file" name="upload_file" alt="動画アップロード"></td>
        </tr>
        <tr>
          <th class ="aline-middle" style="font-size : 20px;"><h3>金額設定</h3></th>
          <td>
            <!-- 金額設定 -->
            <div class="form-select">
            <select id="select-money" name="select-money">
                <!-- <option value=""></option> -->
                  <option value="money1">0</option>
                  <option value="money2" >500</option>
                  <option value="money3">1000</option>
                  <option value="money4" >5000</option>
                  <option value="money5">10000</option>
              </select>
              </div>
          </td>
        </tr>
        <tr>
          <th class ="aline-middle"><h3 style="font-size : 20px;">公開範囲</h3></th>
          <td>
            <!-- 公開範囲 -->
          <div class="form-select">
              <select id="select-release" name="select-release">
                <!-- <option value=""></option> -->
                <!-- <option value="release2" >一般</option> -->
                <option value="release3">誰でも</option>
                <option value="release1">自分だけ</option>
              </select>
            </div>  
          </td>
        </tr>
        <tr>
          <th class ="aline-middle"><h3 style="font-size : 20px;">動画タイトル</h3></th>
          <td>
            <input type="text" name="title">
          </td>
        </tr>
        <tr>
          <th class ="aline-middle"><h3 style="font-size : 20px;">動画サムネイル</h3></th>
          <td>
            <input type="file" name="video_img">
          </td>
        </tr>
        <tr>
          <!-- 動画説明 -->
          <th class ="aline-middle">
          <h3 style="font-size : 20px;">動画説明</h3>
          </th>
          <td>
            <textarea name="explanatory" alt="動画説明文"rows=10 cols=50>
            </textarea>
          </td>
        </tr>
      </table>
      <div id="upload_buttun">
        <input type="submit">
        <button type="button" name="sned" value="" alt="OKボタン">
          <p size="5" >OK</p>
        </button>
      </div>
    </div>
  </form>
</div>
<?php
require_once "./../../tpl/footer.html";
?>