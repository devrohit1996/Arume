
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


<div class='header_banner'></div>




<div class='user-detail-container theme-FF6969'>
<div class='profile-thumb'>
<div class='profile-thumb_cover'>
<img alt="" class="profile-thumb_cover_img lazyload"  src="<?php echo 'sozai'.'/'.$detail['p_back']; ?>" />
<div class='profile-thumb_gradient'></div>
</div>
<div class='profile-thumb_nav'>
<div class='profile-thumb_nav_back'>
<a data-js="go-back" href="#"><img src="img/back.png" />
</a></div>
<div class='profile-thumb_nav_config open-dialog' data-dialog-id='sub-actions-1790566580'>
<img src="img/fire.png" />
</div>
</div>
<div class='profile-thumb_photo'>
<img class="profile-thumb_photo_img" data-order="0" src="<?php echo 'uploads'.'/'.$detail['imgname']; ?>" />
</div>
</div>

<div class='dialog' id='sub-actions-1790566580'>
<div class='cross-button close-dialog'></div>
<a class="favorite button button-m mbm button-primary" data-remote="true" rel="nofollow" data-method="post" href="/users/1790566580/favorite">
<span class='icon-favorite is-off icon-left'></span>
???????????????????????????
</a><a class="button button-m mbm button-gray" href="/users/1790566580/permissions/new">??????????????????????????????
</a><a class="button button-m button-gray report-button" data-target-id="1790566580" href="#">??????????????????
</a>
</div>

<div class='dialog' id='report-limit-over'>
<div class='cross-button close-dialog'></div>
<div class='dialog_title size2'>???????????????????????????????????????????????????</div>
<div class='size3 mbl text-center text-weak'>
??????????????????????????????????????????????????????????????????????????????????????????????????????????????????
</div>
<div class='parallel-buttons'>
<div class='button half-button flat-button button-gray close-dialog'>
???????????????
</div>
<a class="button half-button flat-button button-primary" href="/contacts/new">??????????????????
</a></div>
</div>

<div class='profile-sub-thumbs'>
<div class='profile-photos is-wide'>
<div class='profile-photos_item size5 is-selected' data-order='0'>
<img class="profile-photos_image" src="<?php echo 'uploads'.'/'.$detail['imgname']; ?>" />
</div>

</div>
</div>
<div class='detail-box is-top' style='position: relative;padding: 15px;'>
<div class='profile_main'>
<div class='profile_main-nickname'>
<?php echo $detail['name']; ?>
</div>
<div class='profile_main-age-address'>
<?php echo $age; ?>???
<?php echo $prefecture['pname']; ?>
</div>
</div>
<div class='profile-tweet size3'>
<span>
  <?php echo $detail['tweet']; ?>
</span>
</div>

</div>


<div class='detail-box profile-introduction'>
<div class='profile-detail_title'>
???????????????
</div>
<div class='profile-introduction_content'>


<?php echo $detail['body']; ?>

</div>
</div>


<div class='detail-box profile-detail'>
<div class='profile-detail_title has-margin'>
????????????
</div>
<table class='profile-detail_lists'>
<tr>
  <th>??????????????????</th>
  <td><?php echo $detail['name']; ?></td>
</tr>
<tr>
  <th>??????</th>
  <td><?php echo $age; ?>???</td>
</tr>



<tr><th>?????????</th><td><?php echo $prefecture['pname']; ?></td></tr>


<tr><th>??????</th><td><?php echo $detail['e_name']; ?></td></tr>
<tr><th>??????</th><td>??????</td></tr>


<tr><th>??????</th><td><?php echo $detail['h_name']; ?></td></tr>
<tr><th>??????</th><td><?php echo $detail['b_name']; ?></td></tr>
<tr><th>????????????</th><td><?php echo $detail['o_name']; ?></td></tr>

</table>
</div>
</div>


<?php if(isset($liked) and $liked != ''){ ?>
  <div class='user-detail-submit'>
<div class='user_actions' data-user-id='5788456606'>
<button name="button" type="submit" class="button-sent-like list-view-button button-disabled is-disabled" disabled="disabled">??????????????????
</button>
</div>

</div>
<?php }else{ ?>
<div class='user-detail-submit'>
<div class='user_actions' data-user-id='1790566580'>
<form class="new_like" action="likesbun.php" accept-charset="UTF-8" method="post">
  <input type="hidden" name="like" id="" value="<?php echo $usrid; ?>" />
<input type="hidden" name="action_from" id="action_from" value="1" />
<button name="button" type="submit" class="list-view-button button-like button-like-action js-enable-touching">
  <span data-displayable-action-view='like' style=''><span class='icon-like icon-like-action'></span></span>????????????
</button>
</form>
</div>
</div>
<?php } ?>






<?php include("parts/botom.php"); ?>
<?php include("parts/footer.php"); ?>

</div>



</body>
</html>
