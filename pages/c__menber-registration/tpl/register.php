<?php
//====================================================
//会員登録画面
//
//エラー文
//入力されていない文字があります
//登録できない文字が含まれています
//メールアドレスは＠を含んで入力してください
//確認用メールアドレスを入力してください
//電話番号は99999999999で入力してください
//郵便番号は9999999で入力してください
//番地の数字は大文字で入力して下い
//パスワードは英数字のはいった8文字以上で入力してください
//IDは英数字の入った8文字以上で入力してください
//そちらのIDは現在使われています
//確認用口座番号を入力してください
//====================================================
require_once "./../../tpl/header.html";
require_once './../../tpl/main_up_menu.php';
require_once './../../tpl/left_menu.html';

?>
<div class="c__main">

  <h2><a href="./"> 会員登録画面</a></h2>
  <div class="step1">
    <form action="./index.php" method="GET">
      <div class="step1-1">
        <h3>登録が完了しました</h3>
        <h3><a href="./../c__login/index.php">ログインへ</a></h3>
        <!-- JSで隠す -->
        <p><br>
          </p>
        <table>
          <tr>
            <th></th>
            <td></td>
          </tr>
          <tr>
            <th></th>
            <td></td>
          </tr>
        </table>
      </div>
      <div class="step1-2">
        <h3></h3>
        <!-- JSで隠す -->
        <p><br>
          </p>
        <table>
          <!-- <tr>
            <th>名前</th>
            <td><input type="text" name="user_name" value=""></td>
          </tr> -->
          <!-- <tr>
            <th>ニックネーム</th>
            <td><input type="text" name="nickname" value=""></td>
          </tr> -->
          <!-- <tr>
            <th>ご希望会員ID</th>
            <td><input type="text" name="user_id" value=""></td>
          </tr>
          <tr>
            <th>ご希望会員PASS</th>
            <td><input type="password" name="user_pass" value=""></td>
          </tr> -->

          <!-- <tr>
                    <th>住まい</th>
                    <td><input type="text" name="" value=""></td>
                </tr> -->
          <tr>
            <th></th>
            <td></td>
          </tr>
          <tr>
            <th>
              <!-- <br>メールアドレス確認 -->
            </th>
            <td>
            <!-- <br><input type="text" name="user_mail2" value=""> -->
          </td>
          </tr>
          <tr>
            <!-- <td><button>次へ</button></td> -->
          </tr>
        </table>
      </div>
      <div class="step1-3">
        <h3></h3>
        <p>
        </p>
        <table>
          <tr>
            <th></th>
            <td>
          </tr>
          <tr>
            <th></th>
            <td></td>
          </tr>
          <tr>
            <th></th>
            <td><br>
              <br>
              </td>
          </tr>
          <tr>
            <th></th>
            <td></td>
          </tr>
          <tr>
            <td></td>
            <td></td>
            <!-- <td><button>確認</button></td> -->
          </tr>
        </table>
      </div>
      <!-- <div class="kakunin"></div> -->
      <!-- <div class="kakunin"><button>確認</button></div> -->
    </form>
  </div>
</div>
</div>
<?php
require_once "./../../tpl/footer.html";
?>