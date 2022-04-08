
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
<script src="//cdn.with.is/assets/plugin-b7c3fa8276587fc7df31df19bee395792152b2ec288b4fb6de13321ca6ed09ed.js"></script>
<script src="//cdn.with.is/assets/application-1dd117a2e86cf6f1daccaa46ea578697e49d79129e070d935bf3e05054ac427b.js"></script>



</head>
<body class=''>






<div class='sp-container with-header'>
<?php include("parts/headmenu.php"); ?>
<div class='header_banner'>

</div>

<div id='topic-header'>
<a class="topic-header_back-link" href="messegelist.php">
  <span class='topic-header_back-link_icn'></span>
</a>
<div class='topic-header_contents'>
<a class="topic-header_contents_user-link" href="users.php?usrid=<?php echo $user ?>"><div>
  <img class="topic-header_contents_thumb" src="<?php echo "uploads/".$userdata['imgname']; ?>" />
</div>
<div class='topic-header_contents_name text-ellipsis'><?php echo $userdata['name']; ?></div>
</a>
</div>
<div class='topic-header_config-btn open-dialog' data-dialog-id='sub-actions-2585054654'></div>
</div>

<div class='messages'>

<!-- <div class="message_date-separator">2月9日（水）</div> -->

<?php while ($pdata = mysqli_fetch_assoc($likedresult)){ ?>
 <?php if($pdata['id'] == $myid){ $str = 'me';$poji = 'is-left'; }elseif($pdata['id'] == $user){ $str = 'partner';$poji = 'is-right';}?>
<div class='message_balloon has-message' data-sender='<?php echo $str; ?>'>
<p><?php echo $pdata['btext']; ?></p>
<div class='message_sent-at <?php echo $poji; ?>'>
19:25
</div>
</div>
<?php } ?>

<div style='clear: both;'></div>

</div>

<div class="topic-footer" style="height: 55px;">
<form class="topic-footer_message-form" id="messages_2585054654" action="messege.php" accept-charset="UTF-8" method="post">
  <input type="hidden" value="<?php echo $user; ?>" name="usrid" >

<div class="topic-footer_message-form_photo is-disabled" type="button">
</div>
<textarea placeholder="メッセージを入力" rows="1" class="topic-footer_message-form_body" name="messagebody" id="message_form_body" style="height: 37px;"></textarea>
<button name="button" type="submit" class="topic-footer_message-form_submit is-active" disabled=""></button>
</form>
</div>




<!-- / ダイアログ -->
<div class='dialog' id='sub-actions-2585054654'>
<div class='cross-button close-dialog'></div>
<a class="favorite button button-m mbm button-primary" data-remote="true" rel="nofollow" data-method="post" href="/users/2585054654/favorite">
<span class='icon-favorite is-off icon-left'></span>
お気に入り登録する
</a>
<a class="button button-m mbm button-gray" href="/users/2585054654/permissions/new">非表示・ブロックする</a>
<a class="button button-m button-gray report-button" data-target-id="2585054654" href="#">違反報告する</a>
</div>



<div style='clear: both;'></div>

</div>


</body>
</html>
