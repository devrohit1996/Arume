


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


<div class='likes-container-grid'>
<div class='title-area'>
<a class="title-area_back-link" href="/mypages"><span class='icon-arrow-left'></span>
</a>????????????
</div>

<div class='header_banner'>

<form class="" action="serfri.php" method="post" name="serch">
  <div class='plain'>
  <div class='profile-item type-block' data-anchor style='padding-top: 30px;'>
  <div class='type-block_heading'>
  <label for="search_form_free_word">ID??????</label>
  </div>
  <div class='form-text-field'>
  <input class="form-input" maxlength="20" style="background-color: #f3f3f3;border: none;border-radius: 20px;" size="20" type="text" name="uid" />
  <span class='form-delete-text-button'></span>
  </div>
  </div>
  </div>
???<button name="button" type="submit" class="button  button-primary sign-up_start-button">??????</button>
</form>
</div>

<div class='autopager'>
<div class='grid'>

<?php if(isset($detail)){ ?>
        <div class='user-fri-small is-basic touching-effect-user-card user-area'>
        <div class='user-card_transition-bg'></div>
        <a class="link-area needsclick append-anchor" id="user_2565056389" href="/users/2565056389?visit_from=1">
        <div class='user-card-small_main-area'>
        <img alt="" class="user-card-small_main-photo" src="<?php echo 'uploads'.'/'.$detail['imgname']; ?>" />
        <div class='user-card-small_lower-area'>
        <div class='user-card-small_lower-icons'>
        <div class='user-card-small_lower-right-icons'>
        </div>
        </div>
        </div>
        </div>
        </a>
        <div class='user-card-small_sub-area size3'>
        <div class='user-card-small_primary-info'>
          <div class='user-card-small_profiles'>
            <?php echo $detail['name']; ?>
        </div>
        </div>
        <a href="serfri.php?add=<?php echo $detail['id']; ?>">
        <button name="button" type="submit" class="button  button-primary sign-up_start-button">????????????</button>
        </a>
        </div>
        </div>
<?php } ?>

</div>



</div>
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
