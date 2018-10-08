<?php
  // コンフィグ呼び出し
  require_once './../../config.php';
  // ファンクション呼び出し
  require_once './../../func/func.php';


  $link = mysqli_connect(HOST , DB_USER , DB_PASS , DB_NAME);
  if(!$link){
    exit;
  }
  mysqli_set_charset($link , 'utf8');
  

  $sql = "SELECT video_id,video_name,video_msg,user_id FROM video";


  $result = mysqli_query($link , $sql);
  if(!$result){
    return $result;
  }

  while($row = mysqli_fetch_assoc($result)){
    $video_list[] = $row; 
  }

  mysqli_close($link);





  // テンプレート呼び出し
  require_once './tpl/index.php';
?>