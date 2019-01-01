<?php
  include __DIR__."/server/config.php";
  include __DIR__."/model/model.php";
  $data = new Model();
?>
<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title><?php echo $title ?></title>
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
        <div class="body-content">
            <div class='loading'></div>
            <div class="ui grid introduce">
                <?php $data->userInfor($_SESSION['id']) ?>
            </div>
        </div>
    </div>
</body>
<div class='alert'></div>
<script>
    $('.preload').hide();
    for(var i=0;i<3;i++)
    {
        $('.loading').append('<div class="ui fluid placeholder" style="margin-top:30px;"><div class="paragraph"> <div class="line"></div><div class="line"></div><div class="line"></div><div class="line"></div><div class="line"></div></div><div class="paragraph"><div class="line"></div><div class="line"></div><div class="line"></div></div></div>')
    }
    $(document).ready(function(){
        $('.loading').hide();
        $('.preload').show();
    });
    $('.ui.sticky').sticky({
        context: '.header'
    });
</script>
<html>