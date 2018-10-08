<?php
/**
* h
* 引数$strに入っている文字列からHTMLタグを無効化する
* @param $str文字列HTMLタグが入っている可能性がある
* @return HTMLを無効化した文字列を返す
*/
function h($str){
  return htmlspecialchars($str,ENT_QUOTES);
}

/**
* session_delete
* すべてのsessionを削除する
*/
function session_delete(){
  $_SESSION = array();
  if(isset($_COOKIE[SESSION_name()])){
    setcookie(session_name(),'',time()-42000);
  }
  session_destroy();
}
// ログインID、PASS検証あっていればTRUE
function login($id,$pass,$dbLink){
  $sql="select count(*) from login where login_id = '".$_GET['id']."' and pass = '".$_GET['pass']."'";
  $result=mysqli_query($link,$sql);
  if($result){
    if(mysqli_fetch_assoc($result)['count(*)']==1){
      return true;
    }
  }
  return false;
  mysqli_close($link);
}
// ファイルアップロード
function filePath($path){
  move_uploaded_file($_FILES['up_file']['tmp_name'],$path);
}
session_start();
?>