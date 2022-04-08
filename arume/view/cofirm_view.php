
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

<div class='header_banner'></div>


<div class="title-area">
<?php echo $point; ?>arumeポイントお申込み
</div>
<div class="plain box-padding">
<div class="size2 text-primary mbl">
決済内容について
</div>
<div class="size3 mbl">
内容を確認の上、【申し込む】ボタンを押してお進みください
</div>
<div class="table has-border-radius size3 text-center mbl">
<div class="table_row">
<div class="table_heading">
決済内容
</div>
<div class="table_body">
<?php echo $point; ?>arumeポイント
</div>
</div>
<div class="table_row">
<div class="table_heading">
利用期間
</div>
<div class="table_body">
180日
</div>
</div>
<div class="table_row">
<div class="table_heading">
申込金額
</div>
<div class="table_body">
<?php echo $fee; ?>円
<span class="size5">(税込み)</span>
</div>
</div>
</div>
<form action="test.php">

<div class="parallel-buttons">
<button name="button" type="button" class="button half-button flat-button button-gray" data-js="go-back">キャンセル
</button><button name="button" type="submit" class="button half-button flat-button button-primary">申し込む</button>
</div>
</form>


<h3 class="lp-ttl6 text-primary">お支払いについて</h3>
<div class="contract">
<ul>
<li>クレジットカードでのお支払いとなります。</li>
<li>paypalの決済システムを利用しており、当社ではカード番号などを保持しません。</li>

</ul>
</div>




</div>






<?php include("parts/botom.php"); ?>
<?php include("parts/footer.php"); ?>





</div>
</body>
</html>
