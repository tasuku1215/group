<?php
  // コンフィグ呼び出し
  require_once './../../config.php';
  // ファンクション呼び出し
  require_once './../../func/func.php';

  $link = mysqli_connect(HOST , DB_USER , DB_PASS , DB_NAME);

  mysqli_set_charset($link , 'utf8');
  

  $sql = "SELECT video_id,video_name,video_msg,user_id FROM video WHERE user_id = '".$_SESSION['login']['id']."'";
// var_dump($sql);

$result = mysqli_query($link , $sql);
$video_list=array();
while($row = mysqli_fetch_assoc($result)){
  $video_list[] = $row; 
}
// var_dump($video_list);
  

  mysqli_close($link);

  // テンプレート呼び出し
  require_once './tpl/index.php';
?>