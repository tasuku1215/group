<?php
  // コンフィグ呼び出し
  require_once './../../config.php';
  // ファンクション呼び出し
  require_once './../../func/func.php';
  if(!empty($_GET['user_id'])&&!empty($_GET['user_pass'])){
    $dbh=new PDO('mysql:dbname='.DB_NAME.';host='.HOST.';charset=utf8',DB_USER,DB_PASS);
    $sql='SELECT count(*) as count FROM users WHERE user_id = "'.$_GET['user_id'].'" AND user_pass = "'.$_GET['user_id'].'"';
    $stmt=$dbh->query($sql);
    if($stmt){
      session_start();
      $_SESSION['login']['id']=$_GET['user_id'];
      header( "Location:next.php");
    }
    var_dump($sql);
    var_dump($stmt);
    $dbh=null;

  }
  // テンプレート呼び出し
  require_once './tpl/index.php';
?>