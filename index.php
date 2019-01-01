<?php
  session_start();
  include __DIR__."\server\config.php";
  include __DIR__."\model\model.php";
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
    <!-- SEO TAGS -->
    <meta name="Description" content="<?php echo $data->config('description') ?>">
    <meta name="Keywords" content="<?php echo $data->config('keywords') ?>">
    <meta name="robots" content="index, follow">
    <meta name="csrf-token" content="<?php echo md5(uniqid(rand(), TRUE)); ?>">
    <meta property="fb:app_id" content="100012668051362">
    <meta property="og:url" content="<?php echo $web ?>">
    <meta property="og:title" content="Shop Liên Quân">
    <meta property="og:description" content="<?php echo $data->config('description') ?>">
    <meta property="og:site_name" content="Liên Quân Siêu Rẻ">
    <meta property="og:image" content="https://lienquansieure.com/assets/img/lienquan/og-image.jpg">
    <link rel="shortcut icon" href="https://lienquansieure.com/assets/img/favicons/favicon.png">
</head>
<body>
    <!-- Header -->
    <?php include __DIR__."/template/header.php"; ?>
    <div class="body">
    <center><img class='head-image' src="https://i.imgur.com/mNvX53F.png" width="80%"></center>
        <div class="body-content xas">
            <div class='loading'></div>
            <div class="ui grid introduce">
                <div class="two column row">
                    <div class="column preload oix" style='width:100% !important'>
                        <div class="uk-position-relative uk-visible-toggle uk-light" uk-slideshow="autoplay: true">
                            <ul class="uk-slideshow-items">
                                <li>
                                    <img src="assets/image/thum2.jpg" alt="" uk-cover>
                                </li>
                                <li>
                                    <img src="assets/image/thum3.jpg" alt="" uk-cover>
                                </li>
                            </ul>
                            <a class="uk-position-center-left uk-position-small uk-hidden-hover" href="#" uk-slidenav-previous uk-slideshow-item="previous"></a>
                            <a class="uk-position-center-right uk-position-small uk-hidden-hover" href="#" uk-slidenav-next uk-slideshow-item="next"></a>
                            <ul class="uk-slideshow-nav uk-dotnav uk-flex-center uk-margin"></ul>
                        </div>
                    </div>
                    <div class="column preload" style='width:100% !important'>
                    <div class="ui placeholder" style='width:100% !important'>
                        <table class="ui celled table last-trade">
                            <thead>
                                <tr><th colspan="3">
                                TOP NẠP THẺ
                                </th>
                            </tr></thead>
                            <tbody class='list-trade'>
                                <?php $data->topCharge() ?>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
                <div class="ui grid equal width searching preload">
                        <div class="column c asx">
                            <div class="ui selection dropdown">
                                <input type="hidden" class='acc-cost' name="gender">
                                <i class="dropdown icon"></i>
                                <div class="default text">Giá ( VNĐ ) </div>
                                <div class="menu">
                                    <div class="item" data-value="co-0">0 - 20.000</div>
                                    <div class="item" data-value="co-1">20.0000 - 50.000</div>
                                    <div class="item" data-value="co-2">50.000 - 100.000</div>
                                    <div class="item" data-value="co-3">100.000 - 200.000 </div>
                                    <div class="item" data-value="co-3">200.000 - 500.000 </div>
                                    <div class="item" data-value="co-5">500.000 - 1.000.000 </div>
                                    <div class="item" data-value="co-6">> 1.000.000</div>
                                </div>
                            </div>
                            <script>
                                $('.dropdown').dropdown();
                            </script>
                        </div>
                        <div class="column c">
                            <div class="ui selection dropdown">
                                <input type="hidden" class='acc-rank' name="gender">
                                <i class="dropdown icon"></i>
                                <div class="default text">Rank</div>
                                <div class="menu">
                                    <div class="item" data-value="r-0">Đồng</div>
                                    <div class="item" data-value="r-1">Bạc</div>
                                    <div class="item" data-value="r-2">Vàng</div>
                                    <div class="item" data-value="r-3">Bạch Kim </div>
                                    <div class="item" data-value="r-4">Kim Cương</div>
                                    <div class="item" data-value="r-5">Cao Thủ</div>
                                </div>
                            </div>
                            <script>
                                $('.dropdown').dropdown();
                            </script>
                        </div>
                        <div class="column c">
                            <div class="ui left icon input">
                                <input type="text" class='gold-ipt' placeholder="Số vàng tối thiểu">
                                <i class="dollar icon"></i>
                            </div>
                        </div>
                        <div class="column c">
                            <div class="ui selection dropdown">
                                <input type="hidden" class='slchamp' name="gender">
                                <i class="dropdown icon"></i>
                                <div class="default text">Số tướng</div>
                                <div class="menu">
                                    <div class="item" data-value="c-0">1 - 10</div>
                                    <div class="item" data-value="c-1">20 - 30</div>
                                    <div class="item" data-value="c-2">30 - 50</div>
                                    <div class="item" data-value="c-3">> 50</div>
                                </div>
                            </div>
                            <script>
                                $('.dropdown').dropdown();
                            </script>
                        </div>
                        <div class="column c" style='padding-right: 0px !important'>
                            <div class="ui animated xui button negative" tabindex="0">
                                <div class="visible content" onclick="search()">TÌM KIẾM</div>
                                <div onclick="search()" class="hidden content">
                                    <i class="right arrow icon"></i>
                                </div>
                            </div>
                        </div>
                        <div class="column c" style='padding-left: 0px !important'>
                            <div class="ui animated xui button red" tabindex="0">
                                <div class="visible content" onclick="deleteSearch()">XÓA</div>
                                <div onclick="deleteSearch()" class="hidden content">
                                    <i class="right arrow icon"></i>
                                </div>
                            </div>
                        </div>
                </div>
                <div class='card-menu preload ' style='margin-top:50px;width:100%'>
                    <div class="ui special cards data-load">
                    <!-- CARD ITEMS -->
                        <?php 
                            /* session_destroy(); */
                            $page = isset($_SESSION['page']) ? $_SESSION['page'] : 0;
                            $data->product($page); 
                        ?>
                    <!-- END CARD ITEMS-->
                        <script>
                            $('.special.cards .image').dimmer({
                                on: 'hover'
                            });
                        </script>
                    </div>
                    <center style='margin-top:30px;' class='pagnation'><div class="ui buttons pagnation">
                        <button class="ui labeled icon button" onclick="load_page(0)">
                            <i class="left chevron icon"></i>
                            TRƯỚC
                        </button>
                        <button class="ui right labeled icon button" onclick="load_page(1)">
                            SAU
                            <i class="right chevron icon"></i>
                        </button>
                    </div></center>
                </div>
            </div>
        </div>
            <center><img class='foot-image' src="https://i.imgur.com/mNvX53F.png" width="80%"></center>
    </div>
    <div class="footer">
        <?php $data->footer() ?>
    </div>
    <div class='noti'></div>
</body>
<script>
    $(document).ready(function(){
        $('.loading').hide();
        var wrapper = document.createElement('div');
        wrapper.innerHTML = '<p>Vui l&ograve;ng&nbsp;sử dụng <span style="color:#e74c3c"><strong>Viettel </strong></span>để nạp sẽ duyệt nhanh nh&eacute;</p><p>Kh&ocirc;ng ưu ti&ecirc;n <s><strong><span style="color:#e74c3c">Vinaphone </span></strong></s>vui l&ograve;ng nạp <strong><span style="color:#e74c3c">Viettel</span></strong><br />Đua tốp nạp thẻ tốp 1 cuối th&aacute;ng nhận 3000 qu&acirc;n huy<br />SDT + Zalo : 0948.48.38.46</p>';
        $.ajax({
            url:'http://localhost/shop/controller/controller.php',
            method:'POST',
            data:{
                'action':'noti'
            },
            success:function(data)
            {
                swal('THÔNG BÁO',data,'info');
            }
        });
    });
    $('.ui.sticky').sticky({
        context: '.header'
    });
function load_page(ele)
{
    $('.data-load').html('<div class="hollow-dots-spinner" :style="spinnerStyle"><div class="dot"></div><div class="dot"></div><div class="dot"></div></div>');
    $.ajax({
        url:'http://localhost/shop/controller/controller.php',
        method: 'POST',
        data:{
            'action':'loadPage',
            'type':ele,
            'page':<?php echo $page ?>
        },
        success:function(data)
        {
            setTimeout(function(){
                $('.data-load').html(data);
                $('html, body').animate({
                    scrollTop: $("div.searching").offset().top
                }, 1300);
            },2000);
        }
    });
}
</script>
</html>