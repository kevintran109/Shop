<?php
    session_start();
    error_reporting(0);
    set_time_limit(0);
    date_default_timezone_set('Asia/Ho_Chi_Minh');
    include __DIR__."../../model/model.php";
    $data = new Model();
    switch ($_POST['action']) {
        case 'loadPage':
            if($_POST['type'] == 1)
            {
                $_SESSION['page']+=1;
            }
            elseif($_POST['type'] == 0)
            {
                if($_SESSION['page'] >= 1)
                {
                    $_SESSION['page']-=1;
                }
                else{
                    $_SESSION['page']=0;
                }
            }
            $data->product($_SESSION['page']+1);
        break;
        case 'payment':
            $cardType = (int)addslashes(htmlspecialchars($_POST['card_type']));
            $cardCost = (int)addslashes(htmlspecialchars($_POST['card_cost']));
            $cardCode = addslashes(htmlspecialchars($_POST['card_code']));
            $cardSeri = addslashes(htmlspecialchars($_POST['card_seri']));
            if(!trim($cardType) || !trim($cardCost) || !trim($cardCode) || !trim($cardSeri))
            {
                echo '<script>swal("Lỗi", "Không được để trống !", "error")</script>';      
            }
            else
            {
                $data->recharge($cardType,$cardCost,$cardCode,$cardSeri);         
            }
        break;
        case 'buyThisAcc':
            $productId = (int)addslashes(htmlspecialchars($_POST['productId']));     
            if(!trim($productId) || $productId == '')
            {
                echo "<script>swal('Lỗi', 'Đã có lỗi xảy ra xin thử lại !', 'error')</script>"; 
            }
            else
            {
                $data->buyThisAcc($productId);
            }
        break;
        case 'viewAcc';
            $acc = addslashes(htmlspecialchars($_POST['acc']));
            if(!trim($acc))
            {
                echo "<script>swal('Lỗi', 'Không có thông tin về tài khoản này !', 'error')</script>"; 
            }
            else
            {
                $ex = explode('$$$',$acc);
                $tk = $ex[0];
                $mk = $ex[1];
                if($ex[2] == 0){$type = 'Facebook';}elseif($ex[2] == 1){$type = 'Garena';}
                echo "<script>swal('THÔNG TIN TÀI KHOẢN','Đăng nhập qua : $type ★ Tài khoản : $tk ★ Mật khẩu : $mk','success');</script>"; 
            }
        break;
        case 'noti':
            echo $noti = $data->config('noti');
        break;
        case 'search':
            $rank = htmlspecialchars(addslashes($_POST['rank']));
            $champ = htmlspecialchars(addslashes($_POST['champ']));
            $cost = htmlspecialchars(addslashes($_POST['cost']));
            $gold = htmlspecialchars(addslashes($_POST['gold']));
            $data->search($rank,$champ,$cost,$gold);
        break;
    }
?>