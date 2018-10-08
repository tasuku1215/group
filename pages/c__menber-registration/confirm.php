<?php
  // コンフィグ呼び出し
  require_once './../../config.php';
  // ファンクション呼び出し
  require_once './../../func/func.php';
  // session_start();
  $credit_date=substr($_SESSION['register']["credit_date"],0,4).'年'.substr($_SESSION['register']["credit_date"],4,2).'月';
  if(!empty($_GET['state'])&&$_GET['state']=='登録'){
    $dbh=new PDO('mysql:dbname='.DB_NAME.';host='.HOST.';charset=utf8',DB_USER,DB_PASS);
    $sql='INSERT INTO users(user_id,user_pass,user_mail,user_tel,credit_no,credit_code,credit_date,credit_user,entry_date)VALUE("'.$_SESSION['register']["user_id"].'","'.$_SESSION['register']["user_pass"].'","'.$_SESSION['register']["user_mail"].'","'.$_SESSION['register']["user_tel"].'","'.$_SESSION['register']["credit_no"].'","'.$_SESSION['register']["credit_code"].'","'.$_SESSION['register']["credit_date"].'","'.$_SESSION['register']["credit_user"].'","'.$_SESSION['register']['entry_date'].'")';
    $stmt=$dbh->query($sql);
    $dbh=null;
    session_delete();
    header('location:register.php');
  }
  elseif(!empty($_GET['state'])&&$_GET['state']=='戻る'){
    header('location:index.php');
  }
  // テンプレート呼び出し
  require_once './tpl/confirm.php';
?>