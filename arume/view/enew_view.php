
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

</head>

<body class=''>
<div class='sp-container with-header'>

<?php include("parts/headmenu.php"); ?>


<div class='header_banner'></div>
<div class="title-area no-border">
本人確認
<a class="title-area_back-link" data-js="go-back" href="#"><span class="icon-arrow-left"></span>
</a>
</div>

<form class="new_identification_form" id="new_identification_form" enctype="multipart/form-data" action="enew.php" accept-charset="UTF-8" method="post">

<div class="identification is-initial" id="tageteA">
<div class="age-auth_choice">
<div class="single-fixed-bottom-button js-enable-touching">
本人確認書類を提出する
<input class="identification-photo" accept=".jpg,.gif,.png,image/gif,image/jpeg,image/png" type="file" name="identification" onChange="imgPreView(event)">
</div>
</div>
<div class="box-padding">
<div class="mbl text-center text-primary size14 text-bold">書類全体が写った画像を提出してください</div>
<img class="identification-screen-image is-license" src="//cdn.with.is/assets/age_auth/screen_shots/license-99f7c0ba33c2c0c7ca7adfbadb631e25374b23c0fc266c1d8011cc3ba79c332d.png">
<img style="margin-bottom: 10px;width: 100%" src="//cdn.with.is/assets/age_auth/bad_examples/license-32a4e0ea24a07b2ae5356a877f70f2811ed63533dbb604abc953e1c276af8ab2.png">
</div>
</div>

<div class="identification is-edited" id="tageteB">
<div class="plain box-padding">
<div class="identification-preview illust-full text-center mbl" id="preview"></div>
<div class="identification-birthday mbl size15 text-bold">
<div>
  <?php echo   $year; ?>年
  <?php echo   $month; ?>月
  <?php echo   $day; ?>日
</div>
登録中の生年月日
</div>
<div class="mbl size13">
<span class="text-primary">確認書類と現在登録中の生年月日が異なる場合は、審査を通過できません。</span>
正しい生年月日に修正してから提出するを押してください。
</div>
<div class="form-checkbox mbl">
<input type="checkbox" value="1" name="identification_form[agree]" id="identification_form_agree">
</div>
<input type="hidden" name="upid" value="<?php echo $id; ?>">
<button name="button" type="submit" class="button large-button flat-button button-primary">提出する</button>
</div>
</div>
</form>


<?php include("parts/botom.php"); ?>
<?php include("parts/footer.php"); ?>
<script type="text/javascript">
function imgPreView(event){
  var file = event.target.files[0];
  var reader = new FileReader();
  var preview = document.getElementById("preview");
  var previewImage = document.getElementById("previewImage");
  document.querySelector('#tageteA').classList.remove('is-initial');
  document.querySelector('#tageteA').classList.add('identification','is-edited');
  document.querySelector('#tageteB').classList.remove('is-edited');
  document.querySelector('#tageteB').classList.add('identification','is-initial');

  if(previewImage != null)
    preview.removeChild(previewImage);

  reader.onload = function(event) {
     var img = document.createElement("img");
     img.setAttribute("src", reader.result);
     img.setAttribute("id", "previewImage");
     preview.appendChild(img);

  };

  reader.readAsDataURL(file);
}

</script>


</div>
</body>
</html>
