<?php
  include __DIR__."/server/config.php";
  include __DIR__."/model/model.php";
  $data = new Model();
  $web = $data->config('website');
?>
<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title><?php echo $data->config('title') ?></title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" type="text/css" media="screen" href="assets/css/core.css" />
    <script src="assets/js/main.js"></script>
    <!-- Semantic CSS -->
    <link rel="stylesheet" type="text/css" href="https://semantic-ui.com/dist/semantic.min.css">
    <script src="https://code.jquery.com/jquery-3.1.1.min.js" integrity="sha256-hVVnYaiADRTO2PzUGmuLJr8BLUSjGIZsDYGmIJLv2b8=" crossorigin="anonymous"></script>
    <script src="https://semantic-ui.com/dist/semantic.min.js"></script>
    <!-- UIkit CSS -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/uikit/3.0.0-rc.25/css/uikit.min.css" />
    <!-- UIkit JS -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/uikit/3.0.0-rc.25/js/uikit.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/uikit/3.0.0-rc.25/js/uikit-icons.min.js"></script>
    <link rel='stylesheet' href='https://cdn.rawgit.com/t4t5/sweetalert/v0.2.0/lib/sweet-alert.css'>
    <script src='https://cdn.rawgit.com/t4t5/sweetalert/v0.2.0/lib/sweet-alert.min.js'></script>
</head>
<body>
  <!-- Header -->
  <?php include __DIR__."/template/header.php"; ?>
    <div class="body">
        <center><img class='head-image' src="https://i.imgur.com/mNvX53F.png" width="80%"></center>
        <div class="body-content">
            <div class='loading'></div>
            <div class="ui grid introduce">
                <?php $data->userInfor($_SESSION['id']) ?>
            </div>
        </div>
        <center><img class='foot-image user-foot-image' src="https://i.imgur.com/mNvX53F.png" width="80%"></center>
    </div>
    <div class="footer">
        <?php $data->footer() ?>
    </div>
</body>
<div class='alert'></div>
<script>
    $(document).ready(function(){
        <?php
          switch ($_GET['action']) {
              case 'nap-the':
                 echo "$('.nap-the').click();";
              break;
              case 'lich-su':
                 echo "$('.lich-su').click();";
              break;
          }
        ?>
    });
    $('.ui.sticky').sticky({
        context: '.header'
    });
</script>
<html>