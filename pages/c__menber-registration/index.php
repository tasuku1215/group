<?php
  // コンフィグ呼び出し
  require_once './../../config.php';
  // ファンクション呼び出し
  require_once './../../func/func.php';
  // session_start();
  session_delete();
  
  // echo substr(date('Y'),0,2);
  // echo substr($_GET["credit_date"],2,2);
  // echo substr($_GET["credit_date"],0,2);
  // echo date(substr(date('Y'),0,2).substr($_GET["credit_date"],2,2).substr($_GET["credit_date"],0,2).'00');
  
  if(!empty($_GET['state'])&&$_GET['state']=='entry'){
    session_start();

    $_SESSION['register']['user_id']=$_GET["user_id"];
    $_SESSION['register']['user_pass']=$_GET["user_pass"];
    $_SESSION['register']['user_mail']=$_GET["user_mail"];
    $_SESSION['register']['user_tel']=$_GET["user_tel"];
    $_SESSION['register']['credit_no']=$_GET["credit_no"];
    $_SESSION['register']['credit_code']=$_GET["credit_code"];
    $_SESSION['register']['credit_date']=date(substr(date('Y'),0,2).substr($_GET["credit_date"],2,2).substr($_GET["credit_date"],0,2).'00');
    $_SESSION['register']['credit_user']=$_GET["credit_user"];
    $_SESSION['register']['entry_date']=date('YmdHis');
    header('location:confirm.php');
  }
  // テンプレート呼び出し
  require_once './tpl/index.php';
?>