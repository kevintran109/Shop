<?php
    error_reporting(0);
    if(!isset($_SESSION)) 
    { 
        session_start(); 
    }
    include __DIR__."../../server/connect.php";
    class Model extends Connection
    {
        public function product($page)
        {
            $get = $this->connect->prepare("SELECT * FROM account WHERE status=0");
            $get->execute();
            $limit = 9;
            $page = $_SESSION['page'] * $limit;
            if($page < 0)
            {
                $page = 0;
            }
            elseif($page > $get->rowCount())
            {
                $page = 0;
                $_SESSION['page'] = 0;
            }
            $stsm = $this->connect->prepare("SELECT * FROM account WHERE status=0 LIMIT $page,$limit");
            $stsm->execute();
            foreach($stsm->fetchAll(PDO::FETCH_OBJ) as $rows)
            {
                ?>
                    <div class="card">
                        <div class="blurring dimmable image">
                        <div class="ui dimmer">
                            <div class="content">
                            <div class="center">
                                <div class="ui inverted button">TÀI KHOẢN #<?php echo $rows->id ?></div>
                            </div>
                            </div>
                        </div>
                        <img src="<?php echo $rows->thumnail ?>">
                        </div>
                        <div class="content">
                            <div class="meta">
                                <p>TÀI KHOẢN : #<?php echo $rows->id ?></p>
                                <p class="date">
                                TƯỚNG : <?php echo $rows->champ ?> 
                                <i class="star icon"></i> 
                                TRANG PHỤC : <?php echo $rows->skin ?> 
                                <i class="star icon"></i> 
                                NGỌC : <?php echo $rows->runes ?> 
                                <i class="star icon"></i> 
                                RANK : <?php $this->formatRank($rows->rank) ?>
                                <i class="star icon"></i> 
                                VÀNG : <?php echo number_format($rows->gold,0,',','.')?> GOLD</p>
                            </div>
                        </div>
                        <div class="extra content">
                            <a href="<?php echo $this->config('website') ?>/lien-quan/tai-khoan-so-<?php echo $rows->id ?>"><center><button class="ui right labeled icon button buy-now-btn">
                                <i class="cart icon"></i>
                                MUA NGAY ( <?php echo number_format($rows->price,0,',','.') ?> VNĐ )
                            </button></center></a>
                        </div>
                    </div>
                <?php
            }
        }
        public function account($id)
        {
            $uid = isset($_SESSION['id']) ? $_SESSION['id'] : 1;
            $web = $this->config('website');
            $stsm = $this->connect->prepare("SELECT * FROM account WHERE id=$id");
            $stsm->execute();
            if($stsm->rowCount() == 1)
            {
                foreach($stsm->fetchAll(PDO::FETCH_OBJ) as $rows)
                {
                    ?>                        
                        <div class="body-content xas" style="background:#fff;">
                        <div class='loading'></div>
                            <img width="100%" style='margin-bottom:10px;' src="<?php echo $rows->thumnail ?>">
                            <?php 
                                if($rows->status == 1)
                                {
                                    ?>
                                        <div style='margin-left:10px' class="ui labeled button" tabindex="0">
                                            <div class="ui black button buy-btn">
                                                <i class="cart icon"></i> TÀI KHOẢN ĐÃ ĐƯỢC BÁN
                                            </div>
                                            <a class="ui basic black left pointing label">
                                                <s><?php echo number_format($rows->price,0,',','.') ?> VNĐ</s>
                                            </a>
                                        </div>
                                        <div class="ui labeled button" tabindex="0">
                                            <div class="ui red button">
                                                <i class="cart icon"></i> TÀI KHOẢN ĐÃ ĐƯỢC BÁN
                                            </div>
                                            <a class="ui basic red left pointing label">
                                                <s><?php echo number_format($rows->price,0,',','.') ?> VNĐ</s>
                                            </a>
                                        </div>
                                    <?php
                                }
                                else
                                {
                                    ?>
                                        <div style='margin-left:10px' class="ui labeled button" tabindex="0">
                                            <div onclick='buyThisAcc(<?php echo $id ?>)' class="ui black button buy-btn">
                                                <i class="cart icon"></i> MUA BẰNG THẺ CÀO
                                            </div>
                                            <a class="ui basic black left pointing label">
                                                <?php echo number_format($rows->price,0,',','.') ?> VNĐ
                                            </a>
                                        </div>
                                        <div class="ui labeled button" tabindex="0">
                                            <div onclick='buyThisAccATM(<?php echo $id.",". $uid?>)' class="ui red button">
                                                <i class="cart icon"></i> MUA QUA ATM
                                            </div>
                                            <a class="ui basic red left pointing label">
                                                <?php echo number_format($rows->price,0,',','.') ?> VNĐ
                                            </a>
                                        </div>
                                    <?php
                                }
                            ?>
                            <table class="uk-table uk-table-striped">
                                <thead>
                                    <tr>
                                        <th>MÃ SỐ</th>
                                        <th>RANK</th>
                                        <th>TƯỚNG</th>
                                        <th>TRANG PHỤC</th>
                                        <th>BẢNG NGỌC</th>
                                        <th>VÀNG</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td>#<?php echo $rows->id ?></td>
                                        <td><?php $this->formatRank($rows->rank) ?></td>
                                        <td><?php echo $rows->champ ?></td>
                                        <td><?php echo $rows->skin ?></td>
                                        <td><?php echo $rows->runes ?></td>
                                        <td><?php echo number_format($rows->gold,0,',','.') ?></td>
                                    </tr>
                                </tbody>
                            </table>
                            <div class='account-body'>
                                <?php echo $rows->infor ?>
                            </div>
                        </div>
                    <?php
                }
            }
            else
            {
                header("Location: $web");
                exit();
            }
        }
        public function add($champ,$skin,$rank,$price,$content,$runes,$type,$gold,$username,$password)
        {
            $thumnail = $this->randomThumnail();
            $stsm = $this->connect->prepare("INSERT INTO account(champ,skin,rank,price,infor,runes,thumnail,account_type,username,password,gold) VALUES($champ,$skin,$rank,'{$price}','{$content}',$runes,'{$thumnail}',$type,'{$username}','{$password}','{$gold}')");
            if($stsm->execute())
            {
                echo 'Thêm account thành công !';
            }
            else
            {
                echo 'Đã có lỗi xảy ra xin thử lại';
            }
        }
        public function search($rank,$champ,$cost,$gold)
        {
            switch ($cost) {
                case 'co-0':
                    $co = "price > 0 AND price <= 20000";
                break;
                case 'co-1':
                    $co = "price >= 20000 AND price <= 50000";
                break;
                case 'co-2':
                    $co = "price >= 50000 AND price <= 100000";
                break;
                case 'co-3':
                    $co = "price >= 100000 AND price <= 200000";
                break;
                case 'co-4':
                    $co = "price >= 200000 AND price <= 500000";
                break;
                case 'co-5':
                    $co = "price >= 500000 AND price <= 1000000";
                break;
                case 'co-6':
                    $co = "price >= 1000000";
                break;
                default:
                    $co = "price >= 0";
                break;
            }
            switch ($champ) {
                case 'c-0':
                    $c = "champ > 0 AND champ <= 10";
                break;
                case 'c-1':
                    $c = "champ >= 20 AND champ <= 30";
                break;
                case 'c-2':
                    $c = "champ >= 30 AND champ <= 50";
                break;
                case 'c-3':
                    $c = "champ >= 50";
                break;
                default:
                    $c = "champ >= 0";
                break;
            }
            switch ($rank) {
                case 'r-0':
                    $r = "rank=0";
                break;
                case 'r-1':
                    $r = "rank=1";
                break;
                case 'r-2':
                    $r = "rank=2";
                break;
                case 'r-3':
                    $r = "rank=3";
                break;
                case 'r-4':
                    $r = "rank=4";
                break;
                case 'r-5':
                    $r = "rank=5";
                break;
                default:
                    $r = "rank >= 0 AND rank < 6";
                break;
            }
            if(!trim($gold) || $gold == '')
            {
                $g = "gold >=0";
            }
            else
            {
                $g = "gold >= $gold";
            }
            $stsm = $this->connect->prepare("SELECT * FROM account WHERE $r AND $c AND $co AND $g AND status=0");
            $stsm->execute();
            $record = $stsm->rowCount();
            if($stsm->rowCount() == 0)
            {
                echo "<script>swal('Lỗi', 'Không tìm thấy tài khoản theo yêu cầu !', 'error')</script>"; 
            }
            else
            {
                echo "<script>swal('Thành công', 'Tìm thấy $record tài khoản theo yêu cầu !', 'success')</script>"; 
                foreach($stsm->fetchAll(PDO::FETCH_OBJ) as $rows)
                {
                    ?>
                        <div class="card">
                            <div class="blurring dimmable image">
                            <div class="ui dimmer">
                                <div class="content">
                                <div class="center">
                                    <div class="ui inverted button">TÀI KHOẢN #<?php echo $rows->id ?></div>
                                </div>
                                </div>
                            </div>
                            <img src="<?php echo $rows->thumnail ?>">
                            </div>
                            <div class="content">
                                <div class="meta">
                                    <p>TÀI KHOẢN : #<?php echo $rows->id ?></p>
                                    <p class="date">
                                    TƯỚNG : <?php echo $rows->champ ?> 
                                    <i class="star icon"></i> 
                                    TRANG PHỤC : <?php echo $rows->skin ?> 
                                    <i class="star icon"></i> 
                                    NGỌC : <?php echo $rows->runes ?> 
                                    <i class="star icon"></i> 
                                    RANK : <?php $this->formatRank($rows->rank) ?>
                                    <i class="star icon"></i> 
                                    VÀNG : <?php echo number_format($rows->gold,0,',','.')?> GOLD</p>
                                </div>
                            </div>
                            <div class="extra content">
                                <a href="<?php echo $this->config('website') ?>/lien-quan/tai-khoan-so-<?php echo $rows->id ?>"><center><button class="ui right labeled icon button buy-now-btn">
                                    <i class="cart icon"></i>
                                    MUA NGAY ( <?php echo number_format($rows->price,0,',','.') ?> VNĐ )
                                </button></center></a>
                            </div>
                        </div>
                    <?php
                }
            }
        }
        public function buyThisAcc($productId)
        {
            if(!isset($_SESSION['id']))
            {
                echo "<script>swal('Lỗi', 'Bạn phải đăng nhập để thực hiện chức năng này !', 'error')</script>"; 
            }
            else
            {
                $id = $_SESSION['id'];
                $username = $_SESSION['fullname'];
                $time = date('d-m-Y');
                $stsm = $this->connect->prepare("SELECT * FROM account WHERE id=$productId AND status=0");
                $stsm->execute();
                if($stsm->rowCount() == 1)
                {
                    foreach($stsm->fetchAll(PDO::FETCH_OBJ) as $rows)
                    {
                        $checkUser = $this->connect->prepare("SELECT * FROM user WHERE uid=$id");
                        $checkUser->execute();
                        if($checkUser->rowCount() == 1)
                        {
                            foreach($checkUser->fetchAll(PDO::FETCH_OBJ) as $user)
                            {
                                if($rows->price > $user->coin)
                                {
                                    echo "<script>swal('Lỗi', 'Bạn không đủ tiền xin vui lòng nạp thêm tiền để tiếp tục !', 'error')</script>"; 
                                    return false;
                                }
                                else
                                {
                                    $updateUserCoin = $this->connect->prepare("UPDATE user SET coin=coin-$rows->price");
                                    $updateAccount = $this->connect->prepare("UPDATE account SET status=1 WHERE id=$productId");
                                    $insertTrade = $this->connect->prepare("INSERT INTO log_trade(uid,username,product_price,date_buy,account,password,product_id,account_type) VALUES('{$id}','{$username}','{$rows->price}','{$time}','{$rows->username}','{$rows->password}',$rows->id,$rows->account_type)");
                                    if($updateAccount->execute() && $updateUserCoin->execute() && $insertTrade->execute())
                                    {
                                        echo "<script>swal('Thành công', 'Giao dịch thành công ! Vui lòng vào lịch sử giao dịch để xem thông tin tài khoản', 'success')</script>";
                                    }
                                    else
                                    {
                                        echo "<script>swal('Lỗi', 'Đã có lỗi xảy ra xin thử lại', 'error')</script>"; 
                                        return false;
                                    }
                                }
                            }
                        }
                        else
                        {
                            echo "<script>swal('Lỗi', 'Đã có lỗi xảy ra xin thử lại !', 'error')</script>"; 
                            return false;
                        }
                    }
                }
                else
                {
                    echo "<script>swal('Lỗi', 'Đã có lỗi xảy ra xin thử lại !', 'error')</script>"; 
                }
            }
        }
        public function user($id)
        {
            date_default_timezone_set('Asia/Ho_Chi_Minh');
            $date = date('d/m/Y');
            $web = $this->config('website');
            $fullname = $_SESSION['fullname'];
            $stsm = $this->connect->prepare("SELECT * FROM user WHERE uid=$id");
            $stsm->execute();
            if($stsm->rowCount() == 0)
            {
                $insert = $this->connect->prepare("INSERT INTO user(uid,date_join,coin,fullname) VALUES($id,'{$date}',0,'{$fullname}')");
                $insert->execute();
            }
            header("Location: $web");
            exit();
        }
        public function footer()
        {
            $stsm = $this->connect->prepare("SELECT * FROM account WHERE status=0");
            $stsm->execute();
            $user = $this->connect->prepare("SELECT * FROM user");
            $user->execute();
            $bought = $this->connect->prepare("SELECT * FROM log_trade");
            $bought->execute();
            ?>
                <div class="ui grid">
                    <div class="six wide column">
                        <strong><h5>LIÊN QUÂN SHOP</h5></strong>
                        <p>Shop đáp ứng nhu cầu cần nơi mua bán acc liên quân ngày càng lớn của các game thủ. Shop là điểm đến của tất cả game thủ. Shop cung cấp đầy đủ loại từ bán acc liên quân 20k, nick liên quân vip .Các bạn có thể thoải mái lựa chọn và mua nick liên quân!</p>
                    </div>
                    <div class="five wide column">
                        <strong><h5>HỖ TRỢ</h5></strong>
                        <p style='margin-bottom:5px !important;'><i class="facebook icon"></i> <a target="_blank" href="https://www.facebook.com/profile.php?id=100030699883523">Nguyễn Văn Khanh</a></p>
                        <p style='margin:0px !important;'><i class="phone icon"></i> 0965407642</p>
                        <p style='margin-top:5px !important;'><i class="map marker alternate icon"></i> Ha Noi</p>
                    </div>
                    <div class="five wide column">
                        <strong><h5>THỐNG KÊ</h5></strong>
                        <div class="mini ui statistics">
                            <div class="statistic">
                                <div class="value">
                                 <?php echo $stsm->rowCount() ?>
                                </div>
                                <div class="label">
                                TK ĐANG BÁN
                                </div>
                            </div>
                            <div class="statistic">
                                <div class="value">
                                <?php echo $user->rowCount() ?>
                                </div>
                                <div class="label">
                                THÀNH VIÊN
                                </div>
                            </div>
                            <div class="statistic">
                                <div class="value">
                                <?php echo $bought->rowCount() ?>
                                </div>
                                <div class="label">
                                TK ĐÃ BÁN
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            <?php
        }
        public function userInfor($id)
        {
            $web = $this->config('website');
            $this->checkSession();
            $stsm = $this->connect->prepare("SELECT * FROM user WHERE uid=$id");
            $stsm->execute();
            if($stsm->rowCount() == 1)
            {
                foreach($stsm->fetchAll(PDO::FETCH_OBJ) as $rows)
                {
                    ?>
                        <div class="ui width grid xas preload white" style='margin-top:-10px;background:#fff;padding:0px !important'>
                            <div class="sixteen wide column bg-image" style='background-image:url(<?php echo $this->randomThumnail() ?>);padding-bottom:160px'>
                                <a style='text-transform:uppercase' class="ui red ribbon label"><?php echo $_SESSION['fullname']; ?> ( <?php echo $rows->date_join ?> ) </a><br><br>
                                <img class='circle' src='https://graph.facebook.com/v2.10/<?php echo $id ?>/picture?type=normal'>
                            </div>
                            <div class="four wide column center aligned xs">
                                <div class="ui red mini statistic">
                                    <div class="value">
                                        #<?php echo $rows->id ?>
                                    </div>
                                    <div class="label">
                                        SỐ TÀI KHOẢN
                                    </div>
                                </div>
                            </div>
                            <div class="four wide column center aligned xs">
                                <div class="ui orange mini statistic">
                                    <div class="value">
                                        <?php echo number_format($rows->coin,0,',','.') ?>
                                    </div>
                                    <div class="label">
                                    VNĐ
                                    </div>
                                </div>
                            </div>
                            <div class="four wide column center aligned xs">
                                <div class="ui orange mini statistic">
                                    <div class="value">
                                        <?php 
                                            $gd = $this->connect->prepare("SELECT * FROM log_trade WHERE uid=$id"); 
                                            $gd->execute();
                                            echo $gd->rowCount();
                                        ?>
                                    </div>
                                    <div class="label">
                                        GIAO DỊCH
                                    </div>
                                </div>
                            </div>
                            <div class="four wide column center aligned xs">
                            <div class="ui orange mini statistic">
                                    <div class="value">
                                        <?php 
                                            $nap = $this->connect->prepare("SELECT * FROM log_card WHERE user_id=$id"); 
                                            $nap->execute();
                                            echo $nap->rowCount();
                                        ?>
                                    </div>
                                    <div class="label">
                                    LẦN NẠP
                                    </div>
                                </div>
                            </div>
                            <ul class="uk-subnav uk-subnav-pill" uk-switcher>
                                <li class='lich-su'><a href="#" class='swt'>LỊCH SỬ GIAO DỊCH <i class="history icon"></i></a></li>
                                <li class='nap-the'><a href="#nap-the" class='swt nap-the'>NẠP TIỀN THẺ CÀO <i class="dollar sign icon"></i></a></li>
                                <li><a href="#" class='swt'>LIÊN HỆ BÁN ACC <i class="dolly faltbed icon"></i></a></li>
                            </ul>
                            <ul class="uk-switcher uk-margin" style="width:100%">
                                <li>
                                    <table width="100%" class="ui celled table last-trade">
                                        <thead>
                                            <tr><th>STT</th>
                                            <th>LIÊN KẾT</th>
                                            <th>THÔNG TIN</th>
                                            <th>GIÁ BÁN</th>
                                            <th>NGÀY MUA</th>
                                        </tr></thead>
                                        <tbody class='list-trade'>
                                            <p><small><i>*Lưu ý : Lịch sử săp xếp theo tài khoản mua gần nhất</i></small></p>
                                            <?php $this->trade($id) ?>
                                            <div class="ui buttons">
                                                <button class="ui labeled icon button" onclick="load_page_trade(0)">
                                                    <i class="left chevron icon"></i>
                                                    TRƯỚC
                                                </button>
                                                <button class="ui right labeled icon button" onclick="load_page_trade(1)">
                                                    SAU
                                                    <i class="right chevron icon"></i>
                                                </button>
                                            </div>
                                        </tbody>
                                    </table>
                                </li>
                                <li>
                                    <?php 
                                        $this->payment($id);
                                    ?>
                                </li>
                                <li>Bazinga!</li>
                            </ul>
                        </div>
                    <?php
                }
            }
            else
            {
                header("Location: $web");
            }
        }
        public function trade($id)
        {
            $web = $this->config('website');
            $stsm = $this->connect->prepare("SELECT * FROM log_trade WHERE uid=$id ORDER BY id DESC");
            $stsm->execute();
            $i=1;
            foreach($stsm->fetchAll(PDO::FETCH_OBJ) as $rows)
            {
                ?>
                    <tr>
                        <td data-label="Name"><?php echo $i++ ?></td>
                        <td data-label="Name"><a href="<?php echo $web ?>/lien-quan/tai-khoan-so-<?php echo $rows->product_id ?>" target="_blank"><?php echo $this->config('website') ?>/lien-quan/tai-khoan-so-<?php echo $rows->product_id ?></a></td>
                        <td data-label="Age"><button onclick="viewAcc('<?php echo $rows->account.'$$$'.$rows->password . '$$$' . $rows->account_type ?>')" class="ui icon button"><i class="eye icon"></i></button></td>
                        <td data-label="Job"><?php echo number_format($rows->product_price,0,',','.')?> VNĐ</td>
                        <td data-label="Job"><?php echo $rows->date_buy ?></td>
                    </tr>
                <?php
            }
        }
        public function payment($id)
        {
            ?>
                <div class="ui error message">
                    <i class="close icon"></i>
                    <ul class="list">
                        <li>Ưu tiên nạp thẻ Viettel để nạp.</li>
                        <li>Nạp thẻ mệnh giá 100K được cộng 90K ( chiết khấu 10% )</li>
                        <li>Vui lòng chọn đúng mệnh giá sai mệnh giá sẽ không được cộng tiền</li>
                        <li>Bạn có tối đa 10 lần nạp sai nếu quá số lần tài khoản của bạn sẽ bị khóa</li>
                    </ul>
                </div>
                <fieldset class="uk-fieldset">
                    <input class="uk-input" type="hidden" value="<?php echo uniqid() ?>">
                    <label class="uk-form-label" for="form-horizontal-text">Chọn loại thẻ</label>
                    <div class="uk-margin" style='margin:5px 0px !important'>
                        <select class="uk-select card-type cf">
                            <option value='1'>VIETTEL</option>
                            <option value='2'>MOBIFONE</option>
                            <option value='3'>VINAPHONE</option>
                        </select>
                    </div>
                    <label class="uk-form-label" for="form-horizontal-text">Chọn mệnh giá</label>
                    <div class="uk-margin" style='margin:5px 0px !important'>
                        <select class="uk-select card-cost cf">
                            <option value='10000'>10.000 </option>
                            <option value='20000'>20.000 </option>
                            <option value='50000'>50.000 </option>
                            <option value='100000'>100.000 </option>
                            <option value='200000'>200.000 </option>
                            <option value='500000'>500.000 </option>
                        </select>
                    </div>
                    <label class="uk-form-label" for="form-horizontal-text">Mã thẻ</label>
                    <div class="uk-margin" style='margin:5px 0px !important'>
                        <input class="uk-input card-code cf" type="text" placeholder="Nhập mã thẻ">
                    </div>
                    <label class="uk-form-label" for="form-horizontal-text">Mã seri</label>
                    <div class="uk-margin" style='margin:5px 0px !important'>
                        <input class="uk-input seri-code cf" type="text" placeholder="Nhập mã seri">
                    </div>
                    <div class="ui negative animated button" tabindex="0">
                        <div class="visible content nap-tien">NẠP TIỀN</div>
                        <div class="hidden content" onclick="payment()">
                            <i class="right arrow icon"></i>
                        </div>
                    </div>
                </fieldset>
                <table width="100%" class="ui celled table last-trade">
                    <thead>
                        <tr><th>STT</th>
                        <th>MỆNH GIÁ</th>
                        <th>LOẠI THẺ</th>
                        <th>MÃ THẺ</th>
                        <th>MÃ SERI</th>
                        <th>NGÀY NẠP</th>
                    </tr></thead>
                    <tbody class='list-trade'>
                        <?php 
                            $historyCharge = $this->connect->prepare("SELECT * FROM log_card WHERE user_id=$id");
                            $historyCharge->execute();
                            $i=1;
                            foreach($historyCharge->fetchAll(PDO::FETCH_OBJ) as $histories)
                            {
                                ?>
                                    <tr>
                                        <td data-label="Name">#<?php echo $i++ ?></td>
                                        <td data-label="Age"><?php echo number_format($histories->card_value,0,',','.') ?> VNĐ</td>
                                        <td data-label="Job">
                                        <?php 
                                            switch ($histories->card_type) {
                                                case 1:
                                                   echo 'VIETTEL';
                                                break;
                                                case 2:
                                                   echo 'MOBIFONE';
                                                break;
                                                case 3:
                                                   echo 'VINAPHONE';
                                                break;
                                            }
                                        ?>
                                        </td>
                                        <td data-label="Job"><?php echo $histories->card_code ?></td>
                                        <td data-label="Job"><?php echo $histories->card_pin ?></td>
                                        <td data-label="Job"><?php echo $histories->day_charge ?></td>
                                    </tr>
                                <?php
                            }
                        ?>
                    </tbody>
                </table>
            <?php
        }
        public function recharge($cardType,$cardCost,$cardCode,$cardSeri)
        {
            switch ($cardType) {
                case 1:
                    $mang = 'Viettel';
                break;
                case 2:
                    $mang = 'Mobifone';
                break;
                case 3:
                    $mang = 'Vinaphone';
                break;
                default:
                    $mang = 'Viettel';
                break;
            }
            $roundCharge = isset($_SESSION['charge']) ? $_SESSION['charge'] : 1;
            $limitCharge = 10 - $roundCharge;
            if($limitCharge <= 0)
            {
                echo "<script>swal('Lỗi', 'Bạn đã nạp quá số lần được cho phép', 'error');</script>";
                return 0;
            }
            $merchant_id = '3389';
            $api_email = 'lequangvy2k@gmail.com';
            $secure_code = '97752db806f9df40fae5ce90584408f7';
            $trans_id = time();
            $time = date('H:i:s d-m-Y');
            $api_url = 'http://api.napthengay.com/v2/';
            $arrayPost = array(
                'merchant_id'=>intval($merchant_id),
                'api_email'=>trim($api_email),
                'trans_id'=>trim($trans_id),
                'card_id'=>trim($cardType),
                'card_value'=> intval($cardCost),
                'pin_field'=>trim($cardCode),
                'seri_field'=>trim($cardSeri),
                'algo_mode'=>'hmac'
            );
            $data_sign = hash_hmac('SHA1',implode('',$arrayPost),$secure_code);
            $arrayPost['data_sign'] = $data_sign;
            $curl = curl_init($api_url);
            curl_setopt_array($curl, array(
                CURLOPT_POST=>true,
                CURLOPT_HEADER=>false,
                CURLINFO_HEADER_OUT=>true,
                CURLOPT_TIMEOUT=>120,
                CURLOPT_RETURNTRANSFER=>true,
                CURLOPT_SSL_VERIFYPEER => false,
                CURLOPT_POSTFIELDS=>http_build_query($arrayPost)
            ));
            $data = curl_exec($curl);
            $status = curl_getinfo($curl, CURLINFO_HTTP_CODE);
            $result = json_decode($data,true);   
            if($status==200){
                if($result['code'] == 100){
                    $coin = $result['amount'];
                    $id = $_SESSION['id'];
                    $username = $_SESSION['fullname'];
                    $stsm = $this->connect->prepare("SELECT * FROM user WHERE uid= ?");
                    $stsm->execute(array($id));
                    if($stsm->rowCount() == 1)
                    {
                        $charge = $this->connect->prepare("UPDATE user SET coin=coin+? WHERE uid=?");
                        if($charge->execute(array($coin,$id)))
                        {
                            $log = $this->connect->prepare("INSERT INTO log_card(user_name,user_id,card_type,card_value,card_code,card_pin,day_charge) VALUES('{$username}','{$id}',$cardType,'{$cardCost}','{$cardCode}','{$cardSeri}','{$time}')");
                            $log->execute();
                            echo "<script>swal('Thành công', 'Nạp thẻ thành công ( + $coin VNĐ )', 'success');</script>";
                        }
                    }
                }
                else
                {
                    $_SESSION['charge']+=1;
                    echo "<script>swal('Lỗi', 'Nạp thẻ thất bại ( Bạn còn $limitCharge lần )', 'error');</script>";
                }
            }
            else{ 
                echo "<script>swal('Lỗi', 'Đã có lỗi xảy ra, vui lòng thử lại sau', 'error');</script>"; 
            }                
        }
        public function randomThumnail()
        {
            $random = [
                'https://lienquan.garena.vn/files/skin/993888a58cfa6b43a287c56a83b0358a583ff038f18f5.jpg',
                'https://lienquan.garena.vn/files/skin/74c07022219dce077da6a570e4a79a8558770e406aad2.jpg',
                'https://lienquan.garena.vn/files/skin/0a45ad90483db97aca43d58f916f48335a20d7dddbba7.jpg',
                'https://lienquan.garena.vn/files/skin/cdf91413fe4e299b6d0689d4293d33a85b1f97c032216.jpg',
                'https://lienquan.garena.vn/files/skin/2f101e51144e1a9f6891e4bd7a3da3b25b399f679b9b5.jpg',
                'https://lienquan.garena.vn/files/skin/2010b7e41dd78615e8b3a2f35b09ff7f589a8bd78c5b0.jpg',
                'https://lienquan.garena.vn/files/skin/cbe2652845823b9dd52cfc17b8eab6d25be144d912dd8.jpg',
                'https://lienquan.garena.vn/files/skin/4d45a450e664e8c3dfb8aee1c67f7a225983e749201bf.jpg',
                'https://lienquan.garena.vn/files/skin/55b9bf4fb03f6003cfd70c03f75075b25c0def90947e0.jpg',
                'https://lienquan.garena.vn/files/skin/0c808c311e0aeedfc4e39e25a53de72259f830b48dac6.jpg',
                'https://lienquan.garena.vn/files/skin/5f9961c48b8e706d66c6f2b0db56881458cb97a134819.jpg',
                'https://lienquan.garena.vn/files/skin/90b107838232d5d8db37eb34f4fa5f70590bf51876ccd.jpg',
                'https://lienquan.garena.vn/files/skin/babe3eb47dc52d776d8ef4effcab0e4f5a6ec8598a5ca.jpg',
                'https://lienquan.garena.vn/files/skin/f8aa14696ccc1cf02e6d2be8bb0676cc5b191602b9089.jpg',
                'https://lienquan.garena.vn/files/skin/9ae7cb88ce4c3899cce03dd23b611cd55b1916825d891.jpg',
                'https://lienquan.garena.vn/files/skin/7cf166510b07a9996810020bc87d806a5b88ea310908e.jpg',
                'https://lienquan.garena.vn/files/skin/58922be4a508108552db403fb6c031295b88ea54cffa1.jpg',
                'https://lienquan.garena.vn/files/skin/774475336079e3d014b6e462e419cba85bd7d95d6ebbb.jpg',
                'https://lienquan.garena.vn/files/skin/8ecc35d079463abfc3fd50d96e0897cd5bf778de39e71.jpg',
                'https://lienquan.garena.vn/files/skin/8a7b6485518cba883064bc884b248bcd5bf778ff159b6.jpg'
            ];
            return $random[array_rand($random)];
        }
        public function formatRank($number)
        {
            switch ($number) {
                case 0:
                    echo 'ĐỒNG';
                break;
                case 1:
                    echo 'BẠC';
                break;
                case 2:
                    echo 'VÀNG';
                break;
                case 3:
                    echo 'BẠCH KIM';
                break;
                case 4:
                    echo 'KIM CƯƠNG';
                break;
                case 5:
                    echo 'CAO THỦ';
                break;
            }
        }
        public function sale($percent,$price)
        {
            echo ($percent/100)*$price;
        }
        public function checkSession()
        {
            $web = $this->config('website');
            if(!isset($_SESSION['id']))
            {
                header("Location: $web");
            }
        }
        public function config($object)
        {
            $stsm = $this->connect->prepare("SELECT * FROM config WHERE id=1");
            $stsm->execute();
            foreach($stsm->fetchAll(PDO::FETCH_OBJ) as $rows)
            {
                return $rows->$object;
            }
        }
        public function topCharge()
        {
            $stsm = $this->connect->prepare("SELECT user_id,SUM(card_value) FROM log_card GROUP BY user_id LIMIT 5");
            $stsm->execute();
            $i = 1;
            foreach($stsm->fetchAll(PDO::FETCH_ASSOC) as $rows)
            {
               $id = $rows['user_id'];
               $checkAcc = $this->connect->prepare("SELECT * FROM user WHERE uid=$id");
               $checkAcc->execute();
               if($checkAcc->rowCount() == 1)
               {
                    foreach($checkAcc->fetchAll(PDO::FETCH_OBJ) as $acc)
                    {
                        ?>
                            <tr>
                                <td data-label="Name"><?php echo $i++ ?></td>
                                <td data-label="Age"><?php echo $acc->fullname; ?></td>
                                <td data-label="Job"><?php echo number_format($rows['SUM(card_value)'],0,',','.') ?> VNĐ</td>
                            </tr>
                        <?php
                    }
               }
            }
        }
        public function spin()
        {
            echo 1;
        }
    }
?>