
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

<div class='head-accessories_solid-type-search'>
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
<span class='size2 text-weak span-text'>1 人</span>
</div>
</div>
</div>

<div class='dialog' id='search-sort'>
<div class='cross-button close-dialog'></div>
<form class="new_search_form" id="new_search_form" action="/search" accept-charset="UTF-8" method="post"><input type="hidden" name="_method" value="patch" /><input type="hidden" name="authenticity_token" value="+1W9UJ5Zt/Dh1gxzInR7kcNE0Xn3O+HvWs0rX1bQZ39YkNuatBlHCrGRazolptpa+/ZLWE2uY1lzewkwZrRf7A==" /><input value="0" type="hidden" name="search_form[sort_order]" id="search_form_sort_order" />
<button name="button" type="button" class="large-button sort-dialog-button js-search-sort-button is-active" data-available="true"><input type="hidden" name="this_sort_order" id="this_sort_order" value="0" />
<span>おすすめ順</span>
<span class='selected-mark'></span>
</button><button name="button" type="button" class="large-button sort-dialog-button js-search-sort-button" data-available="true"><input type="hidden" name="this_sort_order" id="this_sort_order" value="2" />
<span>ログインが新しい順</span>
</button><button name="button" type="button" class="large-button sort-dialog-button js-search-sort-button" data-available="true"><input type="hidden" name="this_sort_order" id="this_sort_order" value="5" />
<span>診断で相性◎が多い順</span>
</button><button name="button" type="button" class="large-button sort-dialog-button js-search-sort-button" data-available="false"><input type="hidden" name="this_sort_order" id="this_sort_order" value="4" />
<span>Facebookの友達の多い順</span>
<img class="vip-tag" src="//cdn.with.is/assets/shared/icons/vip_tag-35752bea7811e061b7ff8b18ef2c3f96dcd4617211f7fa4d011cb146af047cfd.svg" />
</button><button name="button" type="button" class="large-button sort-dialog-button js-search-sort-button" data-available="false"><input type="hidden" name="this_sort_order" id="this_sort_order" value="1" />
<span>いいね！の多い順</span>
<img class="vip-tag" src="//cdn.with.is/assets/shared/icons/vip_tag-35752bea7811e061b7ff8b18ef2c3f96dcd4617211f7fa4d011cb146af047cfd.svg" />
</button><button name="button" type="button" class="large-button sort-dialog-button js-search-sort-button" data-available="false"><input type="hidden" name="this_sort_order" id="this_sort_order" value="3" />
<span>登録日が新しい順</span>
<img class="vip-tag" src="//cdn.with.is/assets/shared/icons/vip_tag-35752bea7811e061b7ff8b18ef2c3f96dcd4617211f7fa4d011cb146af047cfd.svg" />
</button></form></div>

<div class='dialog' id='platinum-sort-order'>
<div class='cross-button close-dialog'></div>
<div class='dialog_title size15'>
<span class='text-vip'>VIPオプション限定機能です</span>
</div>
<div class='dialog_body'>
<div class='size13 mbl text-center text-black87'>
VIPオプションを契約すると
<br>
お使いいただけます
</div>
<a class="button button-vip large-button flat-button" href="/products/platinum_subscriptions?return_path=%2F">詳細を見る
</a></div>
</div>



<div class='autopager'>
<div class='grid'>

<!-- ユーザ情報 -->
<div class='user-card-small is-basic touching-effect-user-card user-area' data-user-id='5655888620'>
<div class='user-card_transition-bg'></div>
<a class="link-area needsclick append-anchor" id="user_5655888620" href="users.php"><div class='user-card-small_main-area newface_1day-frame'>
<img alt="" class="user-card-small_main-photo lazyload" data-src="//cdn.with.is/uploads/user_photo/image/42221333/thumb_1644225283908.jpg" src="//cdn.with.is/assets/lazyload/256-c60bb8aed5caff9d5064d783f36c48c07e4ceae22d4de36e583a23d5b8e7c48f.gif" />
<img class="user-card-newface-flag" src="//cdn.with.is/assets/shared/atoms/icons/today_user_grid-c6bffe2605556da08dc455b74a329cd4f0310c7ce07f25cbb1caa00a7184ef6a.svg" />
<div class='user-card-small_lower-area'>
<div class='user-card-small_lower-icons'>
<div class='user-card-small_lower-right-icons'>
<div class='user-card-small_sub-photos size3'>
3
</div>
</div>
</div>
<div class='lower-line newface_1day-line size4 text-bold'>
マッチングしやすい
</div>
</div>
</div>
</a><div class='user-card-small_sub-area size3'>
<div class='user-card-small_primary-info'><div class='online-badge is-online'></div><div class='user-card-small_profiles'>
26歳
東京
</div>
</div>
<div class='user-card-small_tweet size4'>らんといいます</div>
</div>
</div>



<div class='user-card-small is-basic touching-effect-user-card user-area' data-user-id='8588536658'>
<div class='user-card_transition-bg'></div>
<a class="link-area needsclick append-anchor" id="user_8588536658" href="/users/8588536658?number=2&amp;visit_from=1"><div class='user-card-small_main-area newface_1day-frame'>
<img alt="" class="user-card-small_main-photo lazyload" data-src="//cdn.with.is/uploads/user_photo/image/42220371/thumb_image_220207173823.jpg" src="//cdn.with.is/assets/lazyload/256-c60bb8aed5caff9d5064d783f36c48c07e4ceae22d4de36e583a23d5b8e7c48f.gif" />
<img class="user-card-newface-flag" src="//cdn.with.is/assets/shared/atoms/icons/today_user_grid-c6bffe2605556da08dc455b74a329cd4f0310c7ce07f25cbb1caa00a7184ef6a.svg" />
<div class='user-card-small_lower-area'>
<div class='user-card-small_lower-icons'>
</div>
<div class='lower-line newface_1day-line size4 text-bold'>
マッチングしやすい
</div>
</div>
</div>
</a><div class='user-card-small_sub-area size3'>
<div class='user-card-small_primary-info'><div class='online-badge is-in-24h'></div><div class='user-card-small_profiles'>
27歳
東京
</div>
</div>
<div class='user-card-small_tweet size4'>今すぐ彼氏が欲しいです！</div>
</div>
</div>



<div class='user-card-small is-basic touching-effect-user-card user-area' data-user-id='8855245686'>
<div class='user-card_transition-bg'></div>
<a class="link-area needsclick append-anchor" id="user_8855245686" href="/users/8855245686?number=3&amp;visit_from=1"><div class='user-card-small_main-area newface_1day-frame'>
<img alt="" class="user-card-small_main-photo lazyload" data-src="//cdn.with.is/uploads/user_photo/image/42220906/thumb_image_220207175919.jpg" src="//cdn.with.is/assets/lazyload/256-c60bb8aed5caff9d5064d783f36c48c07e4ceae22d4de36e583a23d5b8e7c48f.gif" />
<img class="user-card-newface-flag" src="//cdn.with.is/assets/shared/atoms/icons/today_user_grid-c6bffe2605556da08dc455b74a329cd4f0310c7ce07f25cbb1caa00a7184ef6a.svg" />
<div class='user-card-small_lower-area'>
<div class='user-card-small_lower-icons'>
<div class='user-card-small_lower-right-icons'>
<div class='user-card-small_sub-photos size3'>
3
</div>
</div>
</div>
<div class='lower-line newface_1day-line size4 text-bold'>
マッチングしやすい
</div>
</div>
</div>
</a><div class='user-card-small_sub-area size3'>
<div class='user-card-small_primary-info'><div class='online-badge is-in-24h'></div><div class='user-card-small_profiles'>
24歳
東京
</div>
</div>
<div class='user-card-small_tweet size4'>よろしくお願いします♪</div>
</div>
</div>



<div class='user-card-small is-basic touching-effect-user-card user-area' data-user-id='8685985654'>
<div class='user-card_transition-bg'></div>
<a class="link-area needsclick append-anchor" id="user_8685985654" href="/users/8685985654?number=4&amp;visit_from=1"><div class='user-card-small_main-area newface_1day-frame'>
<img alt="" class="user-card-small_main-photo lazyload" data-src="//cdn.with.is/uploads/user_photo/image/42220236/thumb_image_220207173207.jpg" src="//cdn.with.is/assets/lazyload/256-c60bb8aed5caff9d5064d783f36c48c07e4ceae22d4de36e583a23d5b8e7c48f.gif" />
<img class="user-card-newface-flag" src="//cdn.with.is/assets/shared/atoms/icons/today_user_grid-c6bffe2605556da08dc455b74a329cd4f0310c7ce07f25cbb1caa00a7184ef6a.svg" />
<div class='user-card-small_lower-area'>
<div class='user-card-small_lower-icons'>
<div class='user-card-small_lower-right-icons'>
<div class='user-card-small_sub-photos size3'>
2
</div>
</div>
</div>
<div class='lower-line newface_1day-line size4 text-bold'>
マッチングしやすい
</div>
</div>
</div>
</a><div class='user-card-small_sub-area size3'>
<div class='user-card-small_primary-info'><div class='online-badge is-online'></div><div class='user-card-small_profiles'>
21歳
神奈川
</div>
</div>
<div class='user-card-small_tweet size4'>こんにちは！</div>
</div>
</div>










</div>
<div class='paging' data-paging-info='{&quot;current_page&quot;:1}'>
888569 人中
1 〜 60人目表示中
<div>
<span class='paging_current size2 text-primary'>
1 ページ目
</span>
<div class='paging_prev'>
<div class='paging_prev-button is-disabled text-weak size2'>
<div class='icon-arrow-left'></div>
<span>
前へ
</span>
</div>
</div>
<div class='paging_next'>
<a href="/?page=2&amp;paging_order=0"><div class='paging_next-button text-weak.size2 '>
<span>
次へ
</span>
<div class='icon-arrow-right'></div>
</div>
</a></div>
</div>
</div>

</div>
    <!-- Facebook Pixel Code -->


</div>



<div class='footer_copyright plain'>
<img class="footer_logo mbs" src="//cdn.with.is/assets/footer/logo-352945482e1aeaa9ce774ddb7db6694aa4e4eb7faff1052c4f36d2598cb6e68b.png" />
<div class='size6 text-center'>
インターネット異性紹介事業　届出済み
<br>
（受理番号 30150043000）
</div>
<div class='size6 text-center'>
(c) with
</div>
</div>

</div>




</body>
</html>
