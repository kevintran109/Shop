<div class="header">
    <div class="header-content">
        <div class="container">
            <div class="ui grid mar">
                <div class="two column row">
                    <div class="left floated column left aligned">
                        <a href="<?php $data->config('web') ?>"><img class='logo' src="https://i.imgur.com/haH5iHZ.png"></a>
                    </div>
                    <div class=" right-content right floated column right aligned">
                        <a class='help-btn' href="">TRỢ GIÚP <i class='cog icon'></i></a>
                        <span class="login-btn"><a class='login-a' href="<?php $data->config('web') ?>/login"><div class="ui animated button negative" tabindex="0">
                            <div class="visible content login-content"><?php echo isset($_SESSION['fullname']) ? $_SESSION['fullname'] : 'ĐĂNG NHẬP' ?></div>
                            <a style='color:#f8f8f8 !important' href="<?php echo isset($_SESSION['fullname']) ? $web.'/user' : 'https://www.facebook.com/dialog/oauth?client_id=145478836139756&redirect_uri=https://localhost/shop/login.php&scope=public_profile'; ?>"><div class="hidden content">
                                <i class="right arrow icon"></i>
                            </div></a>
                            </div></a>
                        </span>
                        <?php echo isset($_SESSION['fullname']) ? "<a style='color:#2c343f' uk-tooltip='Đăng xuất' href='$web/dang-xuat'><span><i class='power off icon'></i></span></a>" : '' ?>
                </div>
            </div>
        </div>
    </div>
</div>
</div>
<div class="menu-header" uk-sticky="bottom: #offset">
    <div class="main-header">
        <div class="ui six column grid">
            <div class="row">
                <a href="<?php echo $data->config('website') ?>" class="column each-menu-header">TRANG CHỦ</a>
                <a href="<?php echo $data->config('website') ?>/thu-van-may" class="column each-menu-header xv">THỬ VẬN MAY</a>
                <a href="<?php echo $data->config('website') ?>/user?action=nap-the" class="column each-menu-header xv">NẠP TIỀN</a>
                <a href="" class="column each-menu-header xv">MUA QUÂN HUY</a>
                <a href="" class="column each-menu-header xv">HƯỚNG DẪN MUA</a>
                <a href="<?php echo $data->config('website') ?>/user?action=lich-su" class="column each-menu-header xv">LỊCH SỬ</a>
            </div>
        </div>
    </div>
</div>