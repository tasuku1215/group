<?php
  // コンフィグ呼び出し
  require_once './../../config.php';
  // ファンクション呼び出し
  require_once './../../func/func.php';
  
  $video_id = $_GET['video_id'];

  $link = mysqli_connect(HOST , DB_USER , DB_PASS , DB_NAME);
  mysqli_set_charset($link , 'utf8');
  

  $sql = "SELECT * FROM video WHERE video_id = ".$video_id;
  // var_dump($sql);

  // $video_list=array();
  $result = mysqli_query($link , $sql);
  while($row = mysqli_fetch_assoc($result)){
    $video_list[] = $row; 
  }

  mysqli_close($link);
  // var_dump($video_list);


  // テンプレート呼び出し
  require_once './tpl/index.php';
?>