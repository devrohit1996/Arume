
<!DOCTYPE html>
<html>
<head>
<title>
arume
</title>
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

<div class='header_banner'></div>



<input type="hidden" name="toast" id="toast" value="" />
<div class='title-area'>
自己紹介文の編集
<a class="title-area_back-link" data-js="prevent-disposal" href="edit.php"><span class='icon-arrow-left'></span>
</a><div class='title-area_info-link open-dialog' data-dialog-id='introduction-description'>
<div class='icon-info'></div>
</div>
</div>

<div class='plain'>
<form class="new_profile_introduction_form" action="" accept-charset="UTF-8" method="post">
<textarea class="profile_introduction-textarea_square form-textarea size3"
<?php if(isset($dedata['body']) and $dedata['body'] != ''){ ?>
  placeholder="<?php echo $dedata['body']; ?>"
<?php }else{ ?>
placeholder="
自己紹介文を入力してください
【記入例】
・ 趣味や休日の過ごし方
・ 仕事の内容
・ 最近ハマっていること
・ 好きな食べ物"
<?php } ?>
data-js="word-counter" data-maximum="1000" data-minimum="20" name="body" id="profile_introduction_form_body">
</textarea>

<div class='counter size12 text-weak text-right' style='padding: 5px 15px;'>0000/1000</div>


<div class='box-padding'>
<button name="button" type="submit" class="button large-button flat-button button-primary">保存する
</button></div>
</form>
</div>

<div class='dialog' id='introduction-description'>
<div class='cross-button close-dialog'></div>
<div class='dialog_title'>
<div class='size15'>自己紹介文に関しまして</div>
</div>
<div class='size13 text-strong mbm'>
arumeではすべての自己紹介文の内容を審査しています。下記のような内容が含まれる場合は掲載できませんので、ご了承ください。
</div>
<div class='size10 text-strong' style='line-height: 2;'>
・性的行為を連想させる表現、その他卑猥な表現の禁止
<br>
・閲覧者を不快にする可能性がある内容
<br>
・個人を特定できる情報が含まれている内容（フルネーム、電話番号、住所、他サービスのアカウント情報など）
<br>
・場所を特定できる情報が含まれている内容
<br>
・目的外利用と判断できる内容
<br>
（友達募集、勧誘行為、金銭授受など）
<br>
・利用規約違反と判断できる内容
<br>
・その他当社が不適切であると判断した内容
</div>
</div>

<?php include("parts/botom.php"); ?>
<?php include("parts/footer.php"); ?>

</div>
    <!-- Facebook Pixel Code -->


</body>
</html>
