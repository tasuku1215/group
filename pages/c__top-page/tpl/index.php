<?php
//====================================================
//トップページ
//
//以下エラー文
//
//====================================================
require_once "./../../tpl/header.html";
require_once './../../tpl/main_up_menu.php';
require_once './../../tpl/left_menu.html';

?>
<div class="c__main">
  <div id="top_contents">
    <div class="directory_box">
      <a href="#" class="square_btn">TOPページ</a>
      <div class="header_font">
        <h2>TOPページ</h2>
      </div>
    </div>
    <div id="top_box">
      <div class="top_video_list">
      <ul>
<?php   foreach($video_list as $val){
          $video = $val;?>
        <a href="../c__video-show/index.php?video_id=<?php echo $video['video_id'];?>">
          <li>
          <div class="img_absolute_position">
            <img src="../../up_videos/<?php echo $video['video_id'];?>.jpg" alt="動画アイコン">
          </div>
          <div class="video_detail">
            <div class="box_float">
              <h3><?php echo $video['video_name'];?></h3>
              <!-- <img src="video_icon/i2.jpg" alt="投稿者アイコン"> -->
              <p><?php echo $video['user_id'];?></p>
            </div>
            <!--<p>お気に入り数/999</p>-->
          </div>
          </li>
        </a>
<?php   }?>
      </ul>
      </div>
    </div>
  </div>
</div>
<!-- <a href="./pages/c__channel-page/index.php">c__channel-page</a>
    <br>
    <a href="./pages/c__login/index.php">c__login</a>
    <br>
    <a href="./pages/ｃ__menber-registration/index.php">ｃ__menber-registration</a>
    <br>
    <a href="./pages/c__my_page/index.php">c__my_page</a>
    <br>
    <a href="./pages/c__top-page/index.php">c__top-page</a>
    <br>
    <a href="./pages/c__video-registration/index.php">c__video-registration</a>
    <br>
    <a href="./pages/c__video-show/index.php">c__video-show</a>
    <br>
    <p>あんぱんまんてすと</p> -->
</div>
<?php
require_once "./../../tpl/footer.html";
?>