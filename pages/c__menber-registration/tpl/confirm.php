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
    <form action="./confirm.php" method="GET">
      <div class="step1-1">
        <h3>入力内容の確認</h3>
        <!-- JSで隠す -->
        <p>お間違えなければ登録ボタンを押してください</p>
        <table>
          <tr>
            <th>ID</th>
            <td><?php echo $_SESSION['register']['user_id']; ?></td>
          </tr>
          <tr>
            <th>PASS</th>
            <td><?php echo $_SESSION['register']['user_pass']; ?></td>
          </tr>
        </table>
      </div>
      <div class="step1-2">
        <h3>お客様情報の入力</h3>
        <!-- JSで隠す -->
        <p>こちらはお客様の個人情報の入力フォームになっております。<br>
          著作権などの内容を同意のいうえ会員登録を行ってください。</p>
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
            <th>電話番号(ハイフン無し)</th>
            <td><?php echo $_SESSION['register']['user_tel']; ?></td>
          </tr>
          <tr>
            <th>
              メールアドレス
              <!-- <br>メールアドレス確認 -->
            </th>
            <td>
            <?php echo $_SESSION['register']['user_mail']; ?>
            <!-- <br><input type="text" name="user_mail2" value=""> -->
          </td>
          </tr>
          <tr>
            <!-- <td><button>次へ</button></td> -->
          </tr>
        </table>
      </div>
      <div class="step1-3">
        <h3>クレジット内容</h3>
        <p>
          こちらは、you_nextでの月額料金をお支払いする際にお使いになるお客様のクレジットカードの内容入力フォームになります。
        </p>
        <table>
          <tr>
            <th>名義人</th>
            <td><?php echo $_SESSION['register']['credit_user']; ?>
          </tr>
          <tr>
            <th>クレジットカード番号</th>
            <td><?php echo $_SESSION['register']['credit_no']; ?></td>
          </tr>
          <tr>
            <th>クレジットカードセキュリティーコード</th>
            <td><?php echo $_SESSION['register']['credit_code']; ?><br>
              カード裏面の下3桁のコード <br>
              (AMEXは表面のクレジットカード番号の右上4桁)</td>
          </tr>
          <tr>
            <th>クレジットカード有効期限(月/年4桁)</th>
            <td><?php echo $credit_date; ?></td>
          </tr>
          <tr>
            <td></td>
            <td><input type="submit" name="state" value="戻る">          <input type="submit" name="state" value="登録"></td>
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