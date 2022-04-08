
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
<img src="img/welcome.png" />
</div>
<form class="new_sign_up_form" id="new_sign_up_form" action="signup.php" accept-charset="UTF-8" method="post">

<div class='sign-up_form'>
<div class='profile-item' style='margin-top:0'>
<div class='text-black87'>
<label for="sign_up_form_nickname">ニックネーム</label>
</div>
<div class='form-text-field form-text-field-sign-up'>
<input placeholder="入力してください" class="form-input form-input-nickname size4" maxlength="15" size="15" type="text" name="name" required />
<div class='counter form-input-nickname-count'></div>
</div>
</div>
<div class='profile-item type-table'>
<div>
<div class='type-table_heading profile-heading-cell text-black87'>
<label for="sign_up_form_gender">性別</label>
</div>
<div class='profile-body-cell form-select-cell'>
<select class="is-prompt-selected" name="sign_up_form[gender]" id="sign_up_form_gender" required>
<option value="">選択してください</option>
<option value="1">男性</option>
<option value="2">女性</option></select>
</div>
</div>
</div>
<div class='profile-item type-table'>
<div>
<div class='type-table_heading profile-heading-cell text-black87'>
<label for="sign_up_form_address">居住地</label>
</div>
<div class='profile-body-cell form-select-cell'>
<select class="has-cities is-prompt-selected" name="sign_up_form[address]" id="sign_up_form_address"required>
  <option value="">選択してください</option>
  <?php while ($pdata = mysqli_fetch_assoc($presult)){ ?>
  <option value="<?php echo $pdata['pid']; ?>"><?php echo $pdata['pname']; ?></option>
  <?php } ?>
</select>
</div>
</div>

</div>
<div class='profile-item' style='border:none;'>
<div class='sign-up_birthday'>
<div class='text-black87'>
<label for="sign_up_form_birthday">生年月日</label>
</div>
<div class='sign-up_birthday_input-items'>
<input maxlength="1" no_error_wrap="true" size="1" type="tel" name="sign_up_form[birthday_0]" onkeyup="nextfeild(this)"required />
<input maxlength="1" no_error_wrap="true" size="1" type="tel" name="sign_up_form[birthday_1]" onkeyup="nextfeild(this)"required />
<input maxlength="1" no_error_wrap="true" size="1" type="tel" name="sign_up_form[birthday_2]" onkeyup="nextfeild(this)" required/>
<input maxlength="1" no_error_wrap="true" size="1" type="tel" name="sign_up_form[birthday_3]" onkeyup="nextfeild(this)" required/>
<div class='text-black87'>年</div>
<input maxlength="1" no_error_wrap="true" size="1" type="tel" name="sign_up_form[birthday_4]" onkeyup="nextfeild(this)"required />
<input maxlength="1" no_error_wrap="true" size="1" type="tel" name="sign_up_form[birthday_5]" onkeyup="nextfeild(this)" required/>
<div class='text-black87'>月</div>
<input maxlength="1" no_error_wrap="true" size="1" type="tel" name="sign_up_form[birthday_6]" onkeyup="nextfeild(this)" required/>
<input maxlength="1" no_error_wrap="true" size="1" type="tel" name="sign_up_form[birthday_7]" onkeyup="nextfeild(this)" required/>
<div class='text-black87'>日</div>
</div>
<div>

</div>
</div>
</div>
<div class='sign-up_profile-note size10'>
<span class='text-primary'>※正しくない場合はご利用になれません</span>
</div>
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
<input class="form-input size4" type="password" name="pass" required />
</div>
</div>

<div class='profile-item mbs'>
<div class='text-black87'>
<label for="sign_up_form_email">確認用パスワード</label>
</div>
<div class='form-text-field form-text-field-sign-up'>
<input class="form-input size4" type="password" name="spass" required />
</div>
</div>

<div class='size10'>※性格診断のご案内等をお送りします。後から配信停止も可能です</div>
<div class='size10'>※ニックネーム、居住地、メールアドレスは後から変更可能です</div>
<div class='sign-up_agree'>
<div class='sign-up_agree-text'>
<input type="checkbox" name="sign_up_form_agree_age" id="sign_up_form_agree_age" value="0" class="toggle-checkbox"required />
<label for="sign_up_form_agree_age"></label>
<div class='sign-up_checked-text'>
私は18歳以上です。
</div>
</div>
<div class='sign-up_agree-text'>
<input type="checkbox" name="sign_up_form_agree_terms" id="sign_up_form_agree_terms" value="0" class="toggle-checkbox"required />
<label for="sign_up_form_agree_terms"></label>
<div class='sign-up_checked-text'>
arumeの<a class="text-link text-primary" target="_blank" href="riyo">利用規約</a>・
<a class="text-link text-primary" target="_blank" href="privacy">プライバシーポリシー</a>の内容を確認のうえ、同意します。
</div>
</div>
<div class='sign-up_agree-text-sub-container'>
<div class='sign-up_agree-text-sub'>
※『利用規約』『プライバシーポリシー』をタップすると内容をご覧いただけます
</div>
</div>
</div>
<input type="hidden" name="sendnew" value="">
<button name="button" type="submit" class="button large-button button-primary sign-up_start-button">arumeをはじめる
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
