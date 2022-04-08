
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
<body class='sign-up-profile'>





<div class='sp-container without-footer'>
<div id='sign-up-profile'>
<div class='size15 text-center text-black60 text-bold' style='padding: 20px 0 15px;'>
あなたのプロフィールを教えてください
</div>
<form class="new_sign_up_profile_form"  action="signup2.php" accept-charset="UTF-8" method="post">

<div class='profile-edit_lists'>
<div class='profile-item type-table'>
<div>
<div class='narrow-cell'>
<label for="sign_up_profile_form_education">学歴</label>
</div>
<div class='form-select-cell wide-cell'>
<select class="is-blank is-required" name="sign_up_profile_form[education]" id="sign_up_profile_form_education">
  <option value="">選択してください</option>
  <?php while ($edata = mysqli_fetch_assoc($eresult)){ ?>
  <option value="<?php echo $edata['e_id']; ?>"><?php echo $edata['e_name']; ?></option>
  <?php } ?>
</select>
</div>
</div>
</div>

<div class='profile-item type-table'>
<div>
<div class='narrow-cell'>
<label for="sign_up_profile_form_job">職種</label>
</div>
<div class='form-select-cell wide-cell'>
<select class="is-blank is-required" name="sign_up_profile_form[job]" id="sign_up_profile_form_job">
  <option value="">選択してください</option>
  <?php while ($jdata = mysqli_fetch_assoc($jresult)){ ?>
  <option value="<?php echo $jdata['j_id']; ?>"><?php echo $jdata['j_name']; ?></option>
  <?php } ?>
</select>
</div>
</div>
</div>

<div class='profile-item type-table'>
<div>
<div class='narrow-cell'>
<label for="sign_up_profile_form_height">身長</label>
</div>
<div class='form-select-cell wide-cell'>
<select class="is-blank is-required" name="sign_up_profile_form[height]" id="sign_up_profile_form_height"><option value="">選択してください</option>
  <?php while ($hdata = mysqli_fetch_assoc($hresult)){ ?>
  <option value="<?php echo $hdata['h_id']; ?>"><?php echo $hdata['h_name']; ?></option>
  <?php } ?>
</select>
</div>
</div>
</div>


<div class='profile-item type-table'>
<div>
<div class='narrow-cell'>
<label for="sign_up_profile_form_habitus">体型</label>
</div>
<div class='form-select-cell wide-cell'>
<select class="is-blank is-required" name="sign_up_profile_form[habitus]" id="sign_up_profile_form_habitus">
  <option value="">選択してください</option>
  <?php while ($bdata = mysqli_fetch_assoc($bresult)){ ?>
  <option value="<?php echo $bdata['b_id']; ?>"><?php echo $bdata['b_name']; ?></option>
  <?php } ?>
</select>
</div>
</div>
</div>




<div class='profile-item type-table'>
<div>
<div class='narrow-cell'>
<label for="sign_up_profile_form_marriage_time">利用目的</label>
</div>
<div class='form-select-cell wide-cell'>
<select class="is-blank is-required" name="sign_up_profile_form[marriage_time]" id="sign_up_profile_form_marriage_time"><option value="">選択してください</option>
  <?php while ($odata = mysqli_fetch_assoc($oresult)){ ?>
  <option value="<?php echo $odata['o_id']; ?>"><?php echo $odata['o_name']; ?></option>
  <?php } ?>
</select>
</div>
</div>
</div>




</div>
<div class='sign-up-profile_footer'>
<div class='text-center size11 text-black40 mbm'>
※内容はあとから変更可能です
</div>

<input type="hidden" name="sigunpu2" value="">
<button name="button" type="submit" class="button large-button button-primary sign-up-profile_save">保存して次へ
</button></div>
</form>
</div>

</div>
    <!-- Facebook Pixel Code -->


</body>
</html>
