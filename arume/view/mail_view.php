
<!DOCTYPE html>
<html lang='ja'>
<head>
<title>with</title>
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

<div class='sp-container'>
<div class='title-area'>
お問い合わせ
<a class="title-area_back-link" href="javascript:history.back()"><span class='icon-arrow-left'></span>
</a>
</div>

<form class="new_contact_form" id="new_contact_form" data-js="draft" action="tthanks.php" accept-charset="UTF-8" method="post">
<div class='plain box-padding'>
<div class='size2 text-primary mbs'>
お問い合わせに関して
</div>
<div class='size3'>
arumeをご利用くださいまして、誠にありがとうございます。
</div>
</div>

<div class='plain box-padding'>
<div class='type-block_heading size3 mbs'>
お問い合わせ内容
<span class='text-primary'>（必須）</span>
</div>
<div class='form-select-column' style='width: 230px;overflow: hidden;'>
<select name="contact_form[inquiry_category]" id="contact_form_inquiry_category"><option value="">未選択</option>
<option value="10">お支払いに関して</option>
<option value="20">不快なユーザーがいる</option>
<option value="30">サイトの技術的な問題に関して</option>
<option value="41">複数のアカウントができた</option>
<option value="42">利用停止になった</option>
<option value="43">ログインできない</option>
<option value="44">本人確認ができない</option>
<option value="99">その他のお問い合わせ</option>
<option value="60">退会について</option></select>
</div>
</div>
<div class='plain box-padding'>
<div class='type-block_heading size3 mbs'>
詳しい内容
<span class='text-primary'>（必須）</span>
</div>
<div class='form-text-field'>
<textarea class="contacts-textarea form-textarea size3" maxlength="400" required="required" placeholder="お問い合わせ内容を選んでください" name="contact_form[inquiry_detail]">
</textarea>
</div>
</div>
<div class='plain box-padding'>
<div class='type-block_heading size3'>
連絡先メールアドレス
<span class='text-primary'>（必須）</span>
</div>
<div class='form-text-field'>
<input class="form-input size4 mbs" placeholder="xxx@example.com" required="required" type="text" value="<?php if(isset($email)){echo $email;} ?>" name="email"/>
<span class='form-delete-text-button'></span>
</div>
</div>
<div class='plain box-padding'>
<div class='size5 text-weak mbl'>
※ メール受信できる設定になっていることをご確認下さい。
</div>
<button name="button" type="submit" class="button large-button flat-button button-primary">入力内容を確認
</button></div>
</form>



<?php include("parts/botom.php"); ?>
<?php include("parts/footer.php"); ?>
</div>


</body>
</html>
