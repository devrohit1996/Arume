
<!DOCTYPE html>
<html>
<head>
<title>arume</title>
<meta charset='utf-8'>
<meta content='IE=edge' http-equiv='X-UA-Compatible'>
<meta content='width=device-width, initial-scale=1.0, user-scalable=no' name='viewport'>

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
<!-- ページメイン -->
<div class='sp-container with-header'>

<?php include("parts/headmenu.php"); ?>
<div class='search-container'>
<div class='search-for-you-tabs parallel-buttons'>
<a class="button half-button search-for-you-button is-active" href="#">
  さがす
</a>
<a class="button half-button search-for-you-button with-badge" href="#">
  おすすめ
</a>
</div>

<!-- <div class='head-accessories_solid-type-search'>
<div class='search-controller_solid-type'>
<div class='search-controller_frame_solid-type'>
<a class="search-controller_conditions-wrap" href="edit.php">
<div class='search-controller_conditions'>
<span class='icon-search'></span>
<span class='size4 text-weak'>検索条件を設定する</span>
</div>
</a>
<div class='search-controller_sort js-enable-touching open-dialog' data-dialog-id='search-sort'></div>
</div>

<div class='search-controller_summary'>
<span class='size2 text-weak span-text'><?php echo $count; ?> 人</span>
</div>
</div>
</div> -->

<div class='dialog' id='search-sort'>
<div class='cross-button close-dialog'></div>
<form class="new_search_form" id="new_search_form" action="/search" accept-charset="UTF-8" method="post">
  <input type="hidden" name="_method" value="patch" /><input type="hidden" name="authenticity_token" value="+1W9UJ5Zt/Dh1gxzInR7kcNE0Xn3O+HvWs0rX1bQZ39YkNuatBlHCrGRazolptpa+/ZLWE2uY1lzewkwZrRf7A==" /><input value="0" type="hidden" name="search_form[sort_order]" id="search_form_sort_order" />
<button name="button" type="button" class="large-button sort-dialog-button js-search-sort-button is-active" data-available="true"><input type="hidden" name="this_sort_order" id="this_sort_order" value="0" />
<span>おすすめ順</span>
<span class='selected-mark'></span>
</button>
<button name="button" type="button" class="large-button sort-dialog-button js-search-sort-button" data-available="false"><input type="hidden" name="this_sort_order" id="this_sort_order" value="1" />
<span>いいね！の多い順</span>
<img class="vip-tag" src="//cdn.with.is/assets/shared/icons/vip_tag-35752bea7811e061b7ff8b18ef2c3f96dcd4617211f7fa4d011cb146af047cfd.svg" />
</button>
<button name="button" type="button" class="large-button sort-dialog-button js-search-sort-button" data-available="false"><input type="hidden" name="this_sort_order" id="this_sort_order" value="3" />
<span>登録日が新しい順</span>
<img class="vip-tag" src="//cdn.with.is/assets/shared/icons/vip_tag-35752bea7811e061b7ff8b18ef2c3f96dcd4617211f7fa4d011cb146af047cfd.svg" />
</button>
</form></div>




<div class='autopager'>
<div class='grid'>

<!-- ユーザ情報 -->

<?php while ($data = mysqli_fetch_assoc($uresult)){ ?>
<div class='user-card-small is-basic touching-effect-user-card user-area' >
<div class='user-card_transition-bg'></div>
<a class="link-area needsclick append-anchor" id="user_5655888620" href="users.php?usrid=<?php echo $data['id'] ?>">
<div class='user-card-small_main-area newface_1day-frame'>
<img alt="" class="user-card-small_main-photo lazyload" src="<?php echo 'uploads'.'/'.$data['imgname']; ?>" />

</div>
</a>
<div class='user-card-small_sub-area size3'>
<div class='user-card-small_primary-info'><div class='user-card-small_profiles'>
<?php $age = floor(($now - $data['birthday'])/10000); ?>
<?php echo $data['name'] ?>
<?php echo $age ?>歳
<?php echo $data['pname'] ?>
</div>
</div>
<div class='user-card-small_tweet size4'><?php echo $data['tweet'] ?></div>
</div>
</div>
<?php } ?>






</div>


</div>
    <!-- Facebook Pixel Code -->


</div>



<div class='footer_copyright plain'>
<img class="footer_logo mbs" src="img/arume.png" />

<div class='size6 text-center'>
(c) arume
</div>
</div>

</div>




</body>
</html>
