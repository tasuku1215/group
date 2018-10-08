<?php
  // コンフィグ呼び出し
  require_once './../../config.php';
  // ファンクション呼び出し
  require_once './../../func/func.php';
  session_start();
  echo '<pre>';
  var_dump($_SESSION);
  var_dump($_FILES);
  echo '</pre>';
  if(!empty($_FILES)&&$_FILES['upload_file']['type']=='video/mp4'){
    $dbh=new PDO('mysql:dbname='.DB_NAME.';host='.HOST.';charset=utf8',DB_USER,DB_PASS);
    $sql='INSERT INTO users(user_id,user_pass,user_mail,user_tel,credit_no,credit_code,credit_date,credit_user,entry_date)VALUE("'.$_SESSION['register']["user_id"].'","'.$_SESSION['register']["user_pass"].'","'.$_SESSION['register']["user_mail"].'","'.$_SESSION['register']["user_tel"].'","'.$_SESSION['register']["credit_no"].'","'.$_SESSION['register']["credit_code"].'","'.$_SESSION['register']["credit_date"].'","'.$_SESSION['register']["credit_user"].'","'.$_SESSION['register']['entry_date'].'")';
    $stmt=$dbh->query($sql);
    $dbh=null;
    if($stmt){
      // header('location:register.php');
    }
    move_uploaded_file($_FILES['upload_file']['tmp_name'],'./../../up_videos/'.$_SESSION['login']['id'].'.mp4');
  }
  // テンプレート呼び出し
  require_once './tpl/index.php';
?>