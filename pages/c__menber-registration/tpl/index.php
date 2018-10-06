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
require_once './../../tpl/main_up_menu.html';
require_once './../../tpl/left_menu.html';

?>
<div class="c__main">

    <h2>会員登録画面</h2>

    <div class="step1">
        <div class="step1-1">
            <h3>コンテンツ内情報</h3>
            <!-- JSで隠す -->
            <p>こちらの内容はコンテンツ内で利用する内容入力フォームになっております。<br>
            IDとPASSはお客様でお控えいただきますようお願いいたします。</p>
            <form action="">
                <table>
                    <tr>
                        <td><button>次へ</button></td>
                    </tr>
                </table>
            </form>
        </div>
        <div class="step1-2">
            <h3>お客様情報の入力</h3>
            <!-- JSで隠す -->
            <p>こちらはお客様の個人情報の入力フォームになっております。<br>
            著作権などの内容を同意のいうえ会員登録を行ってください。</p>
            <form action="./index.php" method="POST">
            <table>
                <tr>
                    <th>名前(カタカナ)</th>
                    <td><input type="text" name="user_name" value=""></td>
                </tr>
                <tr>
                    <th>ニックネーム</th>
                    <td><input type="text" name="nickname" value=""></td>
                </tr>
                <tr>
                    <th>ご希望会員ID</th>
                    <td><input type="text" name="user_id" value=""></td>
                </tr>
                <tr>
                    <th>ご希望会員PASS</th>
                    <td><input type="password" name="user_pass" value=""></td>
                </tr>
                
                <!-- <tr>
                    <th>住まい</th>
                    <td><input type="text" name="" value=""></td>
                </tr> -->
                <tr>
                    <th>電話番号(ハイフン無し)</th>
                    <td><input type="text" name="user_tel" value=""></td>
                </tr>
                <tr>
                    <th>メールアドレス<br>確認用メールアドレス</th>
                    <td><input type="text" name="user_mail" value=""></td>
                </tr>
                <tr>
                    <td><button>次へ</button></td>
                </tr>
            </table>
        </div>
        <div class="step1-3">
            <h3>クレジット内容</h3>
            <p>
                こちらは、you_nextでの月額料金をお支払いする際にお使いになるお客様のクレジットカードの内容入力フォームになります。
                著作権等の
            </p>
            <table>
                <tr>
                    <th>名義人</th>
                    <td><input type="text" name="credit_user" value="">
                </tr>
                <tr>
                    <!-- id ユーザーID	user_id	user_name ユーザーネーム	user_pass ユーザーパスワード	user_mail ユーザーメール	user_tel ユーザー電話番号	user_msg	entry_date	del_flag -->
                    <th>クレジットカード番号</th>
                    <td><input type="text" name="credit_no" value=""></td>
                </tr>
                <tr>
                    <th>クレジットカードセキュリティーコード</th>
                    <td><input type="text" name="" value=""><br>
                    カード裏面の下3桁のコード <br>
                    (AMEXは表面のクレジットカード番号の右上4桁)</td>
                </tr>
                <tr>
                    <th>クレジットカード有効期限</th>
                    <td><input type="text" name="credit_date" value=""></td>
                </tr>
                <tr>
                    <td><button>確認</button></td>
                </tr>
            </table>
        </form>
        
    </div>
</div>
</div>
<?php
require_once "./../../tpl/footer.html";
?>