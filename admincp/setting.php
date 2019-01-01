<?php
  include('../server/config.php');
?>
<!DOCTYPE html>
<html lang="vi">
   <head>
      <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
      <base href=".">
      <meta charset="utf-8">
      <meta http-equiv="X-UA-Compatible" content="IE=edge">
      <meta name="viewport" content="width=device-width, initial-scale=1">
      <title>Quản trị hệ thống</title>
      <link rel="shortcut icon" href="favicon.png">
      <link href="css/bootstrap.min.css" rel="stylesheet">
      <link href="css/font-awesome.min.css" rel="stylesheet">
      <link href="css/admin.css" rel="stylesheet">
      <link href="css/introjs.min.css" rel="stylesheet">
      <script type="text/javascript" src="js/jquery-1.10.2.min.js"></script>
      <script type="text/javascript" src="js/bootstrap.min.js"></script>
      <script type="text/javascript" src="js/intro.min.js"></script>
      <script type="text/javascript" src="js/admin.js"></script>
      <!--Hỗ trợ IE nhận dạng thẻ HTML5-->
      <!--[if lt IE 9]>
          <script src="js/html5shiv.min.js"></script>
          <script src="js/respond.min.js"></script>
      <![endif]-->
   </head>
   <body>
      <nav class="navbar navbar-inverse" role="navigation">
         <div class="navbar-header">
            <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            </button>
            <a class="navbar-brand" href="#"><i class="fa fa-cogs"></i> Quản trị hệ thống</a>
         </div>
         <!-- Collect the nav links, forms, and other content for toggling -->
         <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
            <ul class="nav navbar-nav navbar-right">
               <li class="dropdown">
                  <a href="#" class="dropdown-toggle" data-toggle="dropdown">Sang Nguyen<b class="caret"></b></a>
                  <ul class="dropdown-menu">
                     <li><a href="#"><i class="fa fa-user"></i> Chỉnh sửa tài khoản</a></li>
                     <li><a href="#"><i class="fa fa-power-off"></i> Đăng xuất</a></li>
                  </ul>
               </li>
            </ul>
         </div>
         <!-- /.navbar-collapse -->
      </nav>
      <div class="clearfix">
         <div id="sidebar-bg"></div>
         <div id="sidebar" role="navigation">
            <div class="panel panel-default">
               <div class="panel-heading">
                  <h3 class="panel-title">
                     <i class="fa fa-th"></i><span> Danh mục quản lý</span>
                     <b class="fa fa-plus-sign visible-xs pull-right"></b>
                  </h3>
               </div>
               <ul id="menu" class="list-group">
                  <li class="list-group-item">
                     <a href="post.php">
                     <i class="fa fa-edit"></i> <span>Tin tức</span>
                     </a>
                  </li>
                  <li class="list-group-item">
                     <a href="product.php">
                     <i class="fa fa-fire"></i><span>Sản phẩm</span>
                     </a>
                  </li>
                  <li class="list-group-item">
                     <a href="type_product.php">
                     <i class="fa fa-bars"></i> <span>Loại sản phẩm</span>
                     </a>
                  </li>
                  <li class="list-group-item">
                     <a href="contact.php">
                     <i class="fa fa-envelope-o"></i> <span>Phản hồi<span class="badge pull-right">1</span></span>
                     </a>
                  </li>
                  <li class="list-group-item">
                     <a href="slider.php">
                     <i class="fa fa-picture-o"></i> <span>Slider</span>
                     </a>
                  </li>
                  <li class="list-group-item">
                     <a href="user.php">
                     <i class="fa fa-user"></i> <span>Tài khoản</span>
                     </a>
                  </li>
                  <li class="list-group-item">
                     <a href="setting.php">
                     <i class="fa fa-wrench"></i> <span>Cấu hình</span>
                     </a>
                  </li>
               </ul>
            </div>
         </div>
         <div id="main">
            <ol class="breadcrumb">
               <li><a href="index.html"><i class="fa fa-home"></i> Trang quản trị</a></li>
               <li class="active"><a href="setting.php">Cấu hình</a></li>
            </ol>
            <div class="col-xs-12">
            <ul class="nav nav-tabs" role="tablist">
                 <li class="active"><a href="#setting" role="tab" data-toggle="tab"><i class="fa fa-cog"></i>Cấu hình chung cho website</a></li>
               </ul>
                <div class="tab-content" style="margin-top: 20px;">
                    <div class="tab-pane active" id="setting">
                        <form class="form-horizontal" method="POST" action="">
                         <div class="form-group">
                              <label for="title" class="col-sm-4 control-label required">Tiêu đề website</label>
                              <div class="col-md-6 col-sm-8">
                                 <input name="title" value="<?php echo isset($title) ? $title : '' ?>" type="text" class="form-control" id="title" placeholder="Tiêu đề ( ~ 70 ký tự )" required="" maxlength="70">
                              </div>
                         </div>
                         <div class="form-group">
                              <label for="keywords" class="col-sm-4 control-label required">Từ khóa tìm kiếm</label>
                              <div class="col-md-6 col-sm-8">
                                 <input name="keywords" value="<?php echo isset($keywords) ? $keywords : '' ?>" type="text" class="form-control" id="keywords" placeholder="Từ khóa tìm kiếm, phân cách nhau bằng dấu phẩy" required="" maxlength="180">
                              </div>
                         </div>
                         <div class="form-group">
                              <label for="description" class="col-sm-4 control-label required">Mô tả về website</label>
                              <div class="col-md-6 col-sm-8">
                                 <textarea name="description" rows="5" class="form-control" id="description" placeholder="Mô tả nội dung trang web (~ 120 kí tự)" ><?php echo isset($description) ? $description : '' ?></textarea>
                              </div>
                         </div>
                          <div class="form-group">
                             <label for="favicon" class="col-sm-4 control-label">Favicon</label>
                             <div class="col-md-6 col-sm-8">
                                <input name="favicon" type="file" class="form-control" id="favicon" accept="image/*"><br>
                                <img src="favicon.png" alt="favicon" class="img-thumbnail"> <span class="text-primary">Hình ảnh đang sử dụng.</span>
                             </div>
                          </div>
                       <div class="form-group">
                         <div class="col-sm-offset-4 col-sm-8">
                             <button type="submit" name='save' class="btn btn-danger"><i class="fa fa-save"></i> Lưu thay đổi</button>
                             <a class="btn btn-warning" href="#"><i class="fa fa-reply"></i> Trở về</a>
                         </div>
                         <div class="col-md-7 col-md-offset-3 col-sm-12 col-xs-12" style="margin-top: 15px;">
                            <strong><i class="fa fa-warning text-danger"></i>Lưu ý :</strong><span class="text-danger"> Mọi thay đổi trong phần cấu hình sẽ ảnh hưởng trực tiếp đến website đang chạy, cần cân nhắc kỹ và nên liên hệ kỹ thuật trước khi thay đổi.</span>
                         </div>
                     </div>
                   </form>
                    </div>
                   </form>
                   <?php
                       if(isset($_POST['save']))
                       {
                            $config = file_get_contents('../server/config.php');
                            $numcfg = ["{$title}","{$keywords}","{$description}"];
                            $change = [$_POST['title'],$_POST['keywords'],$_POST['description']];
                            $configNew = str_replace($numcfg, $change, $config);
                            $ConfigFile = fopen("../server/config.php", "w") or die("Không thể thay đổi file này!");
                            fwrite($ConfigFile, $configNew);
                            fclose($ConfigFile);
                            echo '<script>alert("Thay đổi thành công F5 để xem")</script>';
                       }
                   ?>
                    </div>
                  </div>
           </div>
        </div>
         <!--END #main-->
      </div>
      <style>
      .img-thumbnail{max-width: 100px;}
      </style>
   </body>
</html>
