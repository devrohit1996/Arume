
<!DOCTYPE html>
<html lang='ja'>
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

<link rel="stylesheet" media="all" href="css/app.css" />
<link rel="stylesheet" media="all" href="css/style.css" />

</head>
<body class=''>


<div class='sp-container without-footer'>
<div class='sign-up-photo'>
  <form class="new_sign_up_photo_form"  name="contactForm" method="post" action="signup3.php"enctype="multipart/form-data" >
<div class='sign-up-photo-state is-initial'>
<div class='sign-up-photo_head'>
あなたの顔が写っている
<br>
メイン写真を登録しましょう
</div>

<div class='sign-up-photo_photo'>
<div class='sign-up-photo_input-box js-enable-touching'>
<img id="preview" src="data:image/gif;base64,R0lGODlhAQABAAAAACH5BAEKAAEALAAAAAABAAEAAAICTAEAOw==" style="max-width:200px;">
<input class="sign-up-photo_input" type="file" name="userfile" id="sign_up_photo_form_photo" />
</div>
</div>

<div class='sign-up-photo_actions'>
<div class='sign-up-photo_preview-button'>
<div class='button button-primary button-m'id="inputbuton" style="display:block" >
<input data-js="input-photo" type="file" name="userfile" accept='image/*' onchange="previewImage(this);" />
写真を登録する
</div>
</div>
<div class='sign-up-photo_action-note'>
※写真はあとから変更可能です
</div>
<div class='button button-primary button-m'id="inputout" style="display:none" >
<button name="button" type="submit" class="half-button button button-primary button-m"  >この写真で登録する</button>
</div>
</div>

</div>


</form>
<!-- なんか写真入れよっと -->
<div class='sign-up-photo_footer'>
<img class="illust-full" src="//cdn.with.is/assets/sign_up_photos/sign_up_photo_ng-e316d2e85248eb0d6b75ce318e5f5b3ee8467664ecdf352eb61fad58d24aa2e9.png" />
</div>
</div>




</div>

<script>
function previewImage(obj)
{
	var fileReader = new FileReader();
	fileReader.onload = (function() {
    document.getElementById("inputbuton").style.display = "none";
    document.getElementById("inputout").style.display = "block";
		document.getElementById('preview').src = fileReader.result;
	});
	fileReader.readAsDataURL(obj.files[0]);

}
</script>


</body>
</html>
