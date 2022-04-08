
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
<script src="//cdn.with.is/assets/load_image-6c202ac0600e4dfceec7ca354f44ce88e229c88bf61dd02ca3a57e076d2f32b3.js"></script>
</head>

<body class=''>
<div class='sp-container with-header'>

<?php include("parts/headmenu.php"); ?>
<div class="title-area no-border">
POINT交換
<a class="title-area_back-link" data-js="go-back" href="#"><span class="icon-arrow-left"></span>
</a>
</div>

<?php if(isset($pointerror)){ ?>
  <div class="plain box-padding">
  <div class="size3 mbs">
  arumeポイントが不足してます。
  </div>
  </div>

<?php }else{ ?>


<div class="plain box-padding">
<div class="size3 mbs">
arumeポイントといいね！を交換します。
<br>
よろしいですか？
</div>
<form class="new_point_exchange_form" action="point_exchanges.php" accept-charset="UTF-8" method="post">
  <div class="point-exchange-figure mbl">
<div class="point-exchange-figure_left">
<input type="hidden" value="<?php echo $changepoint; ?>" name="cpoint">
<div class="table has-border-radius size4">
<div class="table_row size4">
<div class="table_heading text-center">
<img class="point-icon" src="//cdn.with.is/assets/products/with_points/icn_point-e7e588665ccdf44f335881b6aeb3b59d205474c9c07ebe1becc09e32b1ba6c98.png">
</div>
</div>
<div class="table_row size4">
<div class="table_body text-primary text-center">
<span class="size2">
<label for="point_exchange_form_point"><?php echo $changepoint; ?></label>
</span>
pt
</div>
</div>
</div>
</div>
<div class="point-exchange-figure_right">
<div class="table has-border-radius size4">
<div class="table_row size4">
<div class="table_heading text-center">
<img class="point-icon" src="//cdn.with.is/assets/shared/icn_like_exchange-582032aa03d9d913f3057f23819ef5a025d84cb643e4a2c5c4e22ada5ca32269.png">
</div>
</div>
<div class="table_row size4">
<div class="table_body text-primary text-center">
<span class="size2">
<label for="point_exchange_form_like_point"><?php echo $changepoint; ?></label>
</span>
いいね!
</div>
</div>
</div>
</div>
<img class="point-exchange-balloon" src="//cdn.with.is/assets/products/with_points/point-exchange-balloon-15e0f159359a9a08789ea5ee7291d806c9f6cd7271431023535452f0aacb4e48.png">
<img class="point-exchange-arrow" src="//cdn.with.is/assets/products/with_points/point-exchange-arrow-9a358ba7afad0bbe08caa3267e049189b6559d352c75bc8720f2d0a7caa96fad.png">
</div>
<div class="parallel-buttons">
<a class="button half-button flat-button button-gray" href="point.php">キャンセル</a>
<button name="button" type="submit" class="button half-button flat-button button-primary">交換する</button>
</div>
</form>
</div>

<?php } ?>




<?php include("parts/botom.php"); ?>
<?php include("parts/footer.php"); ?>



</div>
</body>
</html>
