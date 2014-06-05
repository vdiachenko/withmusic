<?php 

session_start();


if(isset($_SESSION['login']) && isset($_SESSION['id'])){
  setcookie($_SESSION['id'],$_SESSION['login'],time()+(1000*60*60*30));
  if(isset($_COOKIE[$_SESSION['id']])){
  $auth_check = true;
}
}
else{
  $auth_check = false;
}

?>
<!doctype html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <title>withmusic</title>
  <link rel="stylesheet" href="css/styles.css">
  <link rel="stylesheet" href="css/font-awesome.css">
  <link href='http://fonts.googleapis.com/css?family=Roboto:500' rel='stylesheet' type='text/css'>
</head>
<body>
<div class="top-line"></div>
  <!-- jPlayer -->
  <div id="jp_container_1" class="jp-audio">

    <div class="jp-type-single">
      <div class="centered">
        <div id="jquery_jplayer_1" class="jp-jplayer"></div>
        <div class="current-song">
          <div class="jp-details">
            <ul>
              <li><span class="jp-title"></span></li>
            </ul>
          </div>

          <div class="jp-progress">
            <div class="jp-seek-bar">
              <div class="jp-play-bar"></div>
            </div>
          </div>

          <div class="jp-time-holder">  
            <div class="jp-current-time"></div>
            <div class="jp-duration"></div>
          </div>
        </div>
        
        <div class="auth-block">
        <?php if($auth_check == true){
                echo '<div class="header-profile">
                        <a href="logout.php" class="profile-link">'.$_SESSION["login"].'</a>
                        <img src="img/posters/319281.jpg" alt="" />
                        <ul>
                        <li><a href="">profile</a></li>
                        <li><a href="">upload</a></li>
                        <li><a href="logout.php">log out</a></li>
                        </ul>
                      </div>';
              }
              else{
                echo '<div class="sing-up-block">
                        <a href="singup.html" class="sing-up">sing up</a>
                      </div>
                      <div class="log-in-block">
                        <a href="login.html" class="log-in">log in</a>
                      </div>';  
                }
        ?>    
        </div>        

        <div class="player-wrapper">
          <div class="jp-gui jp-interface">
            <ul class="jp-controls">
              <li><a href="javascript:;" class="jp-prev" tabindex="1"><i class="fa fa-fast-backward"></i></a></li>
              <li><a href="javascript:;" class="jp-play" tabindex="1"><i class="fa fa-play"></i></a></li>
              <li><a href="javascript:;" class="jp-pause" tabindex="1"><i class="fa fa-pause"></i></a></li>
              <li><a href="javascript:;" class="jp-next" tabindex="1"><i class="fa fa-fast-forward"></i></a></li>
              <li><a href="javascript:;" class="jp-stop" tabindex="1"><i class="fa fa-stop"></i></a></li>
              <li><a href="javascript:;" class="jp-mute" tabindex="1" title="mute"><i class="fa fa-volume-up"></i></a></li>
              <li><a href="javascript:;" class="jp-unmute" tabindex="1" title="unmute"><i class="fa fa-volume-up"></i></a></li>
            </ul>
            <div class="jp-volume-bar">
              <div class="jp-volume-bar-value"></div>
            </div>
          </div>
        </div>
      </div>
      <div class="content">
        <div class="jp-playlist">
          <ul>
            <li></li> <!-- Empty <li> so your HTML conforms with the W3C spec -->
          </ul>
        </div>
        <div class="jp-no-solution">
          <span>Update Required</span>
          To play the media you will need to either update your browser to a recent version or update your <a href="http://get.adobe.com/flashplayer/" target="_blank">Flash plugin</a>.
        </div>
    </div>
  </div>
  <!-- jPlayer -->

  <!-- Include scripts -->
  <script src="//ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
  <script type="text/javascript" src="/js/jquery.jplayer.min.js"></script>
  <script type="text/javascript" src="js/jplayer.playlist.min.js"></script>
  <script type="text/javascript" src="js/script.js"></script>
</body>
</html>