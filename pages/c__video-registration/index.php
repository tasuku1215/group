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
  if(!empty($_FILES)&&$_FILES['upload_file']['type']=='video/mp4'&&!empty($_SESSION['login']['id'])){
    $dbh=new PDO('mysql:dbname='.DB_NAME.';host='.HOST.';charset=utf8',DB_USER,DB_PASS);
    $sql='INSERT INTO video(user_id,video_name,video_plan_id,video_msg)VALUE("'.$_SESSION['login']['id'].'","'.$_POST['video_name'].'","'.$_POST['video_plan_id'].'","'.$_POST['video_msg'].'")';
    var_dump($sql);
    $stmt=$dbh->query($sql);
    $sql='SELECT * FROM video';
    $stmt=$dbh->query($sql);
    var_dump($stmt);
    $result = $stmt->fetchAll();
    var_dump($result);
    $dbh=null;
    // if($stmt){
      // header('location:register.php');
    // }
    move_uploaded_file($_FILES['upload_file']['tmp_name'],'./../../up_videos/'.$_SESSION['login']['id'].'.mp4');
  }
  // テンプレート呼び出し
  require_once './tpl/index.php';
?>