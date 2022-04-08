
<!DOCTYPE html>
<html lang='ja'>
<head>
<title>arume</title>
<meta charset='utf-8'>
<meta content='IE=edge' http-equiv='X-UA-Compatible'>

<meta content='width=device-width, initial-scale=1.0, user-scalable=no' name='viewport'>
<meta content='telephone=no' name='format-detection'>
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

<body class='sign-up'>
  <div class='sp-container without-footer'>

<div class='sign-up_head'>
<img src="img/wogin.png" />
</div>
<form class="new_sign_up_form" id="new_sign_up_form" action="signin.php" accept-charset="UTF-8" method="post">

<div class='sign-up_form'>
<?php if (isset($_SESSION['error']) and $_SESSION['error'] != '' ) {
  echo '<p style="color:red">'.$_SESSION['error'].'</p>';
} ?>

<div class='profile-item mbs'>
<div class='text-black87'>
<label for="sign_up_form_email">メールアドレス</label>
</div>
<div class='form-text-field form-text-field-sign-up'>
<input placeholder="example@arume.com" class="form-input size4" maxlength="100" size="100" type="text" name="email"
<?php if(isset($mail)){ ?>value="<?php echo $mail; } ?>"/>
</div>
</div>

<div class='profile-item mbs'>
<div class='text-black87'>
<label for="sign_up_form_email">パスワード</label>
</div>
<div class='form-text-field form-text-field-sign-up'>
<input class="form-input size4" maxlength="100" size="100" type="password" name="pass"required />
</div>
</div>




<div class='sign-up_agree'>

<div class='sign-up_agree-text'>
<input type="checkbox" name="sign_up_form_agree_terms" id="sign_up_form_agree_terms" value="0" class="toggle-checkbox"/>
<label for="sign_up_form_agree_terms"></label>
<div class='sign-up_checked-text'>
ログインを状態にする。
</div>
</div>
<div class='sign-up_agree-text-sub-container'>
<div class='sign-up_agree-text-sub'>

</div>
</div>
</div>
<input type="hidden" name="sendnew" value="">
<button name="button" type="submit" class="button large-button button-primary sign-up_start-button">ログイン
</button></div>
</form>

</div>

<script type="text/javascript">
function nextfeild(str) {
     if (str.value.length >= str.maxLength) {
         for (var i = 0, elm = str.form.elements; i < elm.length; i++) {
             if (elm[i] == str) {
                 (elm[i + 1] || elm[0]).focus();
                 break;
             }
         }
     }
     return (str);
 }
</script>


</body>
</html>
