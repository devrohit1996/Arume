
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

<div class='header_banner'>

</div>

<?php if(isset($messeage)){ echo $messeage;}else{?>

<ul>
  <?php for ($k=0; $k < $fcount; $k++) {?>
<li class='topic topic-list '>
<a class="topic_contents" href="messege.php?key=<?php echo $user[$k]['id'];; ?>">
<img class="topic_thumb is-list" src="<?php echo "uploads/".$user[$k]['imgname']; ?>" />
<div class='topic_partner'>
<div class='topic_names-wrap'>
<div class='topic_nickname text-ellipsis'>
<?php echo $user[$k]['name']; ?>
</div>
<div class='topic_age-address'>
26歳
東京
</div>
</div>
<div class='topic_message text-weak' data-js='ellipsis'>
<span>こんにちは
</span>
</div>
</div>
<div class='topic_info-right'>
<span class='text-black28 size11'>昨日</span>
</div>
</a>
</li>
<?php } ?>
</ul>


<div class='paging' data-paging-info='{&quot;current_page&quot;:1}'>
1 〜 5人目表示中
<div>
<span class='paging_current size2 text-primary'>
1 ページ目
</span>
<div class='paging_prev'>
<div class='paging_prev-button is-disabled text-weak size2'>
<div class='icon-arrow-left'></div>
<span>
前へ
</span>
</div>
</div>
<div class='paging_next'>
<div class='paging_next-button is-disabled text-weak size2'>
<span>
次へ
</span>
<div class='icon-arrow-right'></div>
</div>
</div>
</div>
</div>

<?php } ?>
<?php include("parts/botom.php"); ?>
<?php include("parts/footer.php"); ?>
</div>


</body>
</html>
