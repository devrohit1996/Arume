
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


<div class='title-area'>
arumeポイント購入
<a id="point-purchase" class="title-area_back-link" href="mypage.php"><span class='icon-arrow-left'></span>
</a></div>
<div class='plain box-padding'>
<div class='points mbl'>

<div class='points_row'>
<div class='points_heading size3'>
ポイント残高
</div>
<div class='points_body'>
<img class="point-icon" src="img/coin.svg" />
<span class='text-primary size1'>
<?php echo $pdata['arumepoint']; ?>
</span>
<span class='text-primary'>pt</span>
</div>
</div>

<div class='points_row'>
<div class='points_heading size3'>
いいね！残高
</div>
<div class='points_body'>
<span class='text-primary size1'>
<?php echo $pdata['good']; ?>
</span>
<span class='text-primary'>いいね！</span>
</div>
</div>
</div>

<div class='size3 mbl'>
ご希望のarumeポイントをお選びください。
</div>
<div class='button-points-frame'>
<form action="cofirm.php" accept-charset="UTF-8" method="post">
<input type="hidden" name="product_id" id="product_id" value="407" />
 <input type="hidden" name="point" value="400" />
 <input type="hidden" name="fee" value="29400" />

<button name="button" type="submit" class="button-points mbl purchase-point-button" data-id="407" data-point="400" data-money="29400" disabled="disabled">
  <div class='button-points_left'>
<div class='button-points_point'>
400
<br>
<span class='size13'>ポイント</span>
</div>
</div>
<div class='button-points_right'>
<div>
<div class='button-points_right_above'>
<div class='button-points_value'>29,400</div>
<span class='button-points_value_unit'>円</span>
<span class='button-points_value_tax'>(税込)</span>
</div>
<div class='button-points_balloon'>
14,600円お得！
</div>
</div>
</div>

</button>
</form>

<form action="cofirm.php" accept-charset="UTF-8" method="post"><input type="hidden" name="authenticity_token" value="1iu92uyLgoFbj9bRVs+WYQtQ695UMYscdY/RdvzlG0DQ7LDpIuzX+4JJ64AC8ZYu80t5xjsjaIuRa76dL0PD5A==" /><input type="hidden" name="product_id" id="product_id" value="406" />
  <input type="hidden" name="point" value="120" />
  <input type="hidden" name="fee" value="10000" />
<button name="button" type="submit" class="button-points mbl purchase-point-button" data-id="406" data-point="120" data-money="10000" disabled="disabled"><div class='button-points_left'>
<div class='button-points_point'>
120
<br>
<span class='size13'>ポイント</span>
</div>
</div>
<div class='button-points_right'>
<div>
<div class='button-points_right_above'>
<div class='button-points_value'>10,000</div>
<span class='button-points_value_unit'>円</span>
<span class='button-points_value_tax'>(税込)</span>
</div>
<div class='button-points_balloon'>
3,200円お得！
</div>
</div>
</div>

</button></form><form action="cofirm.php" accept-charset="UTF-8" method="post"><input type="hidden" name="authenticity_token" value="6/sjywAGzf4D9/dQhmUXcSGWOooeDnME60mi6EDSGjftPC74zmGYhNoxygHSWxc+2Y2oknEckJMPrc0Dk3TCkw==" /><input type="hidden" name="product_id" id="product_id" value="405" />
  <input type="hidden" name="point" value="80" />
  <input type="hidden" name="fee" value="7000" />
<button name="button" type="submit" class="button-points mbl purchase-point-button" data-id="405" data-point="80" data-money="7000" disabled="disabled"><div class='button-points_left'>
<div class='button-points_point'>
80
<br>
<span class='size13'>ポイント</span>
</div>
</div>
<div class='button-points_right'>
<div>
<div class='button-points_right_above'>
<div class='button-points_value'>7,000</div>
<span class='button-points_value_unit'>円</span>
<span class='button-points_value_tax'>(税込)</span>
</div>
<div class='button-points_balloon'>
1,800円お得！
</div>
</div>
</div>

</button></form><form action="cofirm.php" accept-charset="UTF-8" method="post"><input type="hidden" name="authenticity_token" value="bpknmvBeHXRhc8GQqqB20ERQfLuH8Yj3Nt4kxqmnnkhoXiqpPjlIDri1/MH+nnafvEvuo+jja2DSOkstegFG7A==" /><input type="hidden" name="product_id" id="product_id" value="404" />
  <input type="hidden" name="point" value="55" />
  <input type="hidden" name="fee" value="4900" />
<button name="button" type="submit" class="button-points mbl purchase-point-button" data-id="404" data-point="55" data-money="4900" disabled="disabled"><div class='button-points_left'>
<div class='button-points_point'>
55
<br>
<span class='size13'>ポイント</span>
</div>
</div>
<div class='button-points_right'>
<div>
<div class='button-points_right_above'>
<div class='button-points_value'>4,900</div>
<span class='button-points_value_unit'>円</span>
<span class='button-points_value_tax'>(税込)</span>
</div>
<div class='button-points_balloon'>
1,150円お得！
</div>
</div>
</div>

</button></form><form action="cofirm.php" accept-charset="UTF-8" method="post"><input type="hidden" name="authenticity_token" value="P3D93iWJhFZfD86xmG9c2es0TB/gk2Cf9XFmc3yN0TE5t/Dt6+7RLIbJ8+DMUVyWEy/eB4+BgwgRlQmYrysJlQ==" /><input type="hidden" name="product_id" id="product_id" value="403" />
  <input type="hidden" name="point" value="33" />
  <input type="hidden" name="fee" value="3100" />
<button name="button" type="submit" class="button-points mbl purchase-point-button" data-id="403" data-point="33" data-money="3100" disabled="disabled"><div class='button-points_left'>
<div class='button-points_point'>
33
<br>
<span class='size13'>ポイント</span>
</div>
</div>
<div class='button-points_right'>
<div>
<div class='button-points_right_above'>
<div class='button-points_value'>3,100</div>
<span class='button-points_value_unit'>円</span>
<span class='button-points_value_tax'>(税込)</span>
</div>
<div class='button-points_balloon'>
530円お得！
</div>
</div>
</div>

</button></form><form action="cofirm.php" accept-charset="UTF-8" method="post"><input type="hidden" name="authenticity_token" value="XoLSQ82soHj4e0NPYkeD5gIFW6s6MrcgN7c9WApdsR5YRd9wA8v1AiG9fh42eYOp+h7Js1UgVLfTU1Kz2ftpug==" /><input type="hidden" name="product_id" id="product_id" value="402" />
  <input type="hidden" name="point" value="21" />
  <input type="hidden" name="fee" value="2100" />
<button name="button" type="submit" class="button-points mbl purchase-point-button" data-id="402" data-point="21" data-money="2100" disabled="disabled"><div class='button-points_left'>
<div class='button-points_point'>
21
<br>
<span class='size13'>ポイント</span>
</div>
</div>
<div class='button-points_right'>
<div>
<div class='button-points_right_above'>
<div class='button-points_value'>2,100</div>
<span class='button-points_value_unit'>円</span>
<span class='button-points_value_tax'>(税込)</span>
</div>
<div class='button-points_balloon'>
210円お得！
</div>
</div>
</div>

</button></form><form action="cofirm.php" accept-charset="UTF-8" method="post"><input type="hidden" name="authenticity_token" value="dXs1HwZJvxYxlr3hlrlH5AnOBPiwSL0Vyxzvt/7BM7hzvDgsyC7qbOhQgLDCh0er8dWW4N9aXoIv+IBcLWfrHA==" /><input type="hidden" name="product_id" id="product_id" value="401" />
  <input type="hidden" name="point" value="10" />
  <input type="hidden" name="fee" value="1100" />
<button name="button" type="submit" class="button-points mbl purchase-point-button" data-id="401" data-point="10" data-money="1100" disabled="disabled"><div class='button-points_left'>
<div class='button-points_point'>
10
<br>
<span class='size13'>ポイント</span>
</div>
</div>
<div class='button-points_right'>
<div>
<div class='button-points_right_above'>
<div class='button-points_value'>1,100</div>
<span class='button-points_value_unit'>円</span>
<span class='button-points_value_tax'>(税込)</span>
</div>
<div class='text-bold text-right'>通常価格</div>
</div>
</div>

</button></form></div>
</div>



<div class='dialog' id='purchase-points-confirm'>
<div class='cross-button close-dialog'></div>
<div class='dialog_title'>
<div class='dialog_balloon'>
<img src="img/coin.svg" />
<div class='description text-white size16'>
毎月30いいね! GET!!
<br>
メッセージし放題！
</div>
<a class="button button-primary_invert large-button flat-button" href="/products/monthly_subscriptions?return_path=%2Fproducts%2Fpoints">詳細を見る
</a></div>
</div>
<div class='dialog_body mbm size15 text-bold text-center'>
<span class='text-primary'><span class='point'>20</span><span>ポイントを</span><span class='money'>2000</span><span>円</span></span>
<span>で購入します</span>
<br>
よろしいですか？
</div>
<div class='button large-button flat-button button-primary'>
ポイントを購入する
</div>
</div>


<div class='plain'>
<div class='box-padding'>
<div class='points mbl'>
<div class='points_row'>
<div class='points_heading size3'>
ポイント残高
</div>
<div class='points_body'>
<img class="point-icon" src="img/coin.svg" />
<span class='text-primary size1'>
<?php echo $pdata['arumepoint']; ?>
</span>
<span class='text-primary'>pt</span>
</div>
</div>
<div class='points_row'>
<div class='points_heading size3'>
いいね！残高
</div>
<div class='points_body'>
<span class='text-primary size1'>
<?php echo $pdata['good']; ?>
</span>
<span class='text-primary'>いいね！</span>
</div>
</div>
</div>
<div class='table size4 mbl'>
<div class='table_row size4'>
<div class='table_heading is-primary text-center'>
交換内容
</div>
<div class='table_heading is-primary text-center'>
消費ポイント
</div>
<div class='table_heading is-primary text-center'></div>
</div>
<div class='table_row'>
<div class='table_body text-primary'>

5

いいね!
</div>
<div class='table_body text-right'>
<span class='size2'>
5
</span>
pt
</div>
<div class='table_body text-center'>
<div class='button minimum-button button-primary open-dialog' data-dialog-id='point-exchange-1'>
交換
</div>

<div class='dialog' id='point-exchange-1'>
<div class='cross-button close-dialog'></div>
<div class='dialog_title size2'>
<span class='text-primary'>ポイントを交換しますか？</span>
</div>

<a class="button large-button flat-button button-primary" href="changepoint.php?point=5">ポイントを交換する
</a>
</div>


</div>
</div>
<div class='table_row'>
<div class='table_body text-primary'>

10

いいね!
</div>
<div class='table_body text-right'>
<span class='size2'>
10
</span>
pt
</div>
<div class='table_body text-center'>
<div class='button minimum-button button-primary open-dialog' data-dialog-id='point-exchange-2'>
交換
</div>
<div class='dialog' id='point-exchange-2'>
<div class='cross-button close-dialog'></div>
<div class='dialog_title size2'>
<span class='text-primary'>ポイントを交換しますか？</span>
</div>

<a class="button large-button flat-button button-primary" href="changepoint.php?point=10">ポイントを交換する
</a></div>


</div>
</div>
<div class='table_row'>
<div class='table_body text-primary'>

20

いいね!
</div>
<div class='table_body text-right'>
<span class='size2'>
20
</span>
pt
</div>
<div class='table_body text-center'>
<div class='button minimum-button button-primary open-dialog' data-dialog-id='point-exchange-3'>
交換
</div>

<div class='dialog' id='point-exchange-3'>
<div class='cross-button close-dialog'></div>
<div class='dialog_title size2'>
<span class='text-primary'>ポイントを交換しますか？</span>
</div>

<a class="button large-button flat-button button-primary" href="changepoint.php?point=20">ポイントを交換する
</a>
</div>


</div>
</div>
<div class='table_row'>
<div class='table_body text-primary'>

30

いいね!
</div>
<div class='table_body text-right'>
<span class='size2'>
30
</span>
pt
</div>
<div class='table_body text-center'>
<div class='button minimum-button button-primary open-dialog' data-dialog-id='point-exchange-4'>
交換
</div>
<div class='dialog' id='point-exchange-4'>
<div class='cross-button close-dialog'></div>
<div class='dialog_title size2'>
<span class='text-primary'>ポイントを交換しますか？</span>
</div>

<a class="button large-button flat-button button-primary" href="changepoint.php?point=30">ポイントを交換する
</a></div>


</div>
</div>
<div class='table_row'>
<div class='table_body text-primary'>

50

いいね!
</div>
<div class='table_body text-right'>
<span class='size2'>
50
</span>
pt
</div>
<div class='table_body text-center'>
<div class='button minimum-button button-primary open-dialog' data-dialog-id='point-exchange-5'>
交換
</div>
<div class='dialog' id='point-exchange-5'>
<div class='cross-button close-dialog'></div>
<div class='dialog_title size2'>
<span class='text-primary'>ポイントを交換しますか？</span>
</div>

<a class="button large-button flat-button button-primary" href="changepoint.php?point=50">ポイントを交換する
</a></div>


</div>
</div>
</div>
<div class='size5 text-weak'>
※ 「いいね！」をポイントに交換することはできません。
</div>
</div>

</div>

<?php include("parts/botom.php"); ?>
<?php include("parts/footer.php"); ?>

</div>
    <!-- Facebook Pixel Code -->


</body>
</html>
