<!DOCTYPE html>
<html>
<head>
<title>arume</title>
<meta charset='utf-8'>
<meta content='IE=edge' http-equiv='X-UA-Compatible'>
<meta content='width=device-width, initial-scale=1.0, user-scalable=no' name='viewport'>
<meta content='telephone=no' name='format-detection'>
<meta content='Wi3K2YWsNTgC6BueDv445QrdimpIcvxOUSFreX36we8' name='google-site-verification'>
<link href='/apple-touch-icon-57x57.png' rel='apple-touch-icon' sizes='57x57'>
<link href='/apple-touch-icon-60x60.png' rel='apple-touch-icon' sizes='60x60'>
<link href='/apple-touch-icon-72x72.png' rel='apple-touch-icon' sizes='72x72'>
<link href='/apple-touch-icon-76x76.png' rel='apple-touch-icon' sizes='76x76'>
<link href='/apple-touch-icon-114x114.png' rel='apple-touch-icon' sizes='114x114'>
<link href='/apple-touch-icon-120x120.png' rel='apple-touch-icon' sizes='120x120'>
<link href='/apple-touch-icon-144x144.png' rel='apple-touch-icon' sizes='144x144'>
<link href='/apple-touch-icon-152x152.png' rel='apple-touch-icon' sizes='152x152'>
<link href='/apple-touch-icon-180x180.png' rel='apple-touch-icon' sizes='180x180'>
<link href='/favicon-32x32.png' rel='icon' sizes='32x32' type='image/png'>
<link href='/android-chrome-192x192.png' rel='icon' sizes='192x192' type='image/png'>
<link href='/favicon-96x96.png' rel='icon' sizes='96x96' type='image/png'>
<link href='/favicon-16x16.png' rel='icon' sizes='16x16' type='image/png'>
<link href='/manifest.json' rel='manifest'>

<meta content='#fe6970' name='msapplication-TileColor'>
<meta content='/mstile-144x144.png' name='msapplication-TileImage'>
<meta content='#ffffff' name='theme-color'>

<link rel="stylesheet" media="all" href="css/app.css"/>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css"/>
<!-- <link rel="stylesheet" href="_shared/style.css"> -->
</head>

</head>
<body class=''>

<!-- ページメイン -->
<div class='sp-container with-header'>

<?php include("parts/headmenu.php"); ?>
    <div class="container-call">
      <!-- For two people up down -->
      <!-- <div class="room">
        <div class="remote-streams" id='syoukyoyou'>
          <video id="js-local-stream" class="video-full"></video>
          <video id="js-local-stream" class="video-full"></video>
        </div>
      </div> -->
      <!-- For two people up down -->

      <!-- For four people -->
      <div class="room">
        <div class="remote-streams-half" id='syoukyoyou'>
          <video id="js-local-stream" class="video-full"></video>
          <video id="js-local-stream" class="video-full"></video>
          <video id="js-local-stream" class="video-full"></video>
          <video id="js-local-stream" class="video-full"></video>
        </div>
      </div>
      <!-- For four people -->
      
      <input type="hidden" id="js-room-id" value="<?php echo $roomid; ?>">
    </div>

    <div class="icon-set">
      <i class="fa-solid fa-microphone fa-2x"></i>
      <i class="fa fa-headphones fa-2x" aria-hidden="true"></i>
      <i class="fa fa-phone fa-2x red" aria-hidden="true"></i>
      <i class="fa fa-video-camera fa-2x" aria-hidden="true"></i>
    </div>

<button id="js-join-trigger" class="button large-button flat-button button-primary">ビデオ飲みを開始する。</button>
<div class="statasdiv"></div>
<div class='footer_copyright plain'>
<img class="footer_logo mbs" src="img/arume.png" />
<div class='size6 text-center'>(c) arume</div>
</div>

</div>

<script src="https://cdn.webrtc.ecl.ntt.com/skyway-4.4.3.js"></script>
<script src="_shared/key.js"></script>
<script src="_shared/script.js"></script>

</body>
</html>
