<?php 
    include __DIR__."../../model/model.php"; 
    $data = new Model();
?>
<!DOCTYPE html>
<html>
   <head>
      <meta charset="utf-8">
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
      <meta charset="utf-8">
      <link rel="stylesheet" type="text/css" href="https://semantic-ui.com/dist/semantic.min.css">
      <script src="https://code.jquery.com/jquery-3.1.1.min.js" integrity="sha256-hVVnYaiADRTO2PzUGmuLJr8BLUSjGIZsDYGmIJLv2b8=" crossorigin="anonymous"></script>
      <script src="https://semantic-ui.com/dist/semantic.min.js"></script>
      <meta name="viewport" content="width=device-width, height=device-height, initial-scale=1.0, maximum-scale=1.0"/>
      <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.4.0/css/font-awesome.min.css">
      <link rel="stylesheet" href="css/froala_editor.css">
      <link rel="stylesheet" href="css/froala_style.css">
      <link rel="stylesheet" href="css/plugins/code_view.css">
      <link rel="stylesheet" href="css/plugins/draggable.css">
      <link rel="stylesheet" href="css/plugins/colors.css">
      <link rel="stylesheet" href="css/plugins/emoticons.css">
      <link rel="stylesheet" href="css/plugins/image_manager.css">
      <link rel="stylesheet" href="css/plugins/image.css">
      <link rel="stylesheet" href="css/plugins/line_breaker.css">
      <link rel="stylesheet" href="css/plugins/table.css">
      <link rel="stylesheet" href="css/plugins/char_counter.css">
      <link rel="stylesheet" href="css/plugins/video.css">
      <link rel="stylesheet" href="css/plugins/fullscreen.css">
      <link rel="stylesheet" href="css/plugins/file.css">
      <link rel="stylesheet" href="css/plugins/quick_insert.css">
      <link rel="stylesheet" href="css/plugins/help.css">
      <link rel="stylesheet" href="css/third_party/spell_checker.css">
      <link rel="stylesheet" href="css/plugins/special_characters.css">
      <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/codemirror/5.3.0/codemirror.min.css">
      <style>
         body {
         text-align: center;
         }
         div#editor {
         width: 100%;
         margin: auto;
         }
         .ss {
         background-color: red;
         }
      </style>
   </head>
   <body>
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
            <li class="active"><a href="product.php">Sản phẩm</a></li>
            <li class="active"><a href="new-product.php">Thêm sản phẩm mới</a></li>
         </ol>
         <div class="col-xs-12">
            <form id="admin-form" class="form-horizontal col-xl-9 col-lg-10 col-md-12 col-sm-12" method="post" action="" enctype="multipart/form-data" role="form">
               <input name="id" type="hidden" value="0">
               <div class="form-group">
                  <label for="type_product" class="col-sm-3 control-label required">Chọn loại tài khoản liên kết</label>
                  <div class="col-sm-9">
                     <select name="acc-type" id="type_product" class="form-control">
                        <option value="111">Facebook</option>
                        <option value="123">Garena</option>
                     </select>
                  </div>
               </div>
               <div class="form-group">
                  <label for="masp" class="col-sm-3 control-label required">Tài khoản</label>
                  <div class="col-sm-9">
                     <input name="username" type="text" class="form-control" id="masp" placeholder="Nhập tài khoản" required="" maxlength="100">
                  </div>
               </div>
               <div class="form-group">
                  <label for="masp" class="col-sm-3 control-label required">Mật khẩu</label>
                  <div class="col-sm-9">
                     <input name="password" type="text" class="form-control" id="masp" placeholder="Nhập mật khẩu" required="" maxlength="100">
                  </div>
               </div>
               <div class="form-group">
                  <label for="masp" class="col-sm-3 control-label required">Số lượng tướng ( Champ )</label>
                  <div class="col-sm-9">
                     <input name="slchamp" type="number" class="form-control" id="masp" placeholder="Số lượng tướng" required="" maxlength="100">
                  </div>
               </div>
               <div class="form-group">
                  <label for="title" class="col-sm-3 control-label required">Số lượng trang phục ( Skin )</label>
                  <div class="col-sm-9">
                     <input name="slskin" type="number" class="form-control" id="title" placeholder="Số lượng trang phục" required="" maxlength="100">
                  </div>
               </div>
               <div class="form-group">
                  <label for="title" class="col-sm-3 control-label required">Số lượng ngọc ( Runes )</label>
                  <div class="col-sm-9">
                     <input name="slrunes" type="number" class="form-control" id="title" placeholder="Số lượng ngọc" required="" maxlength="100">
                  </div>
               </div>
               <div class="form-group">
                  <label for="title" class="col-sm-3 control-label required">Số lượng vàng ( Gold )</label>
                  <div class="col-sm-9">
                     <input name="slgold" type="number" class="form-control" id="title" placeholder="Số lượng vàng" required="" maxlength="100">
                  </div>
               </div>
               <div class="form-group">
                  <label for="type_product" class="col-sm-3 control-label required">Rank</label>
                  <div class="col-sm-9">
                     <select name="rank" id="type_product" class="form-control">
                        <option value="0">Đồng</option>
                        <option value="1">Bạc</option>
                        <option value="2">Vàng</option>
                        <option value="3">Bạch Kim</option>
                        <option value="4">Kim Cương</option>
                        <option value="5">Cao Thủ</option>
                     </select>
                  </div>
               </div>
               <div class="form-group">
                  <label for="price" class="col-sm-3 control-label required">Giá</label>
                  <div class="col-sm-9">
                     <input name="price" type="number" class="form-control" id="price" placeholder="Giá sản phẩm (đơn vị: VNĐ)">
                  </div>
               </div>
               <div class="form-group">
                   <strong>Thông tin thêm : </strong><p>Nội dung ( Bao gồm hình ảnh + thông tin về account )</p>
                  <label for="content" class="col-sm-3 control-label">Nội dung ( Bao gồm hình ảnh + thông tin về account )</label>
                  <div class="col-sm-16">
                     <div id="editor">
                        <textarea name='content' class='content' id='edit' style="margin-top: 30px;"></textarea>
                        </div>
                     </div>
                     <div class="form-group">
                        <div class="col-sm-offset-3 col-sm-9">
                           <button type="submit" onclick="confirm('Xác nhận thêm account ?');" name='add' class="btn btn-submit"><small><i class="fa fa-plus"></i></small> Thêm mới</button>
                           <a class="btn btn-warning" href="#"><small><i class="fa fa-reply"></i></small> Trở về</a>
                        </div>
                     </div>
                     <?php
                        if(isset($_POST['add']))
                        {
                            $champ = htmlspecialchars(addslashes($_POST['slchamp']));
                            $skin = htmlspecialchars(addslashes($_POST['slskin']));
                            $runes = htmlspecialchars(addslashes($_POST['slrunes']));
                            $rank = htmlspecialchars(addslashes($_POST['rank']));
                            $price = htmlspecialchars(addslashes($_POST['price']));
                            $type = htmlspecialchars(addslashes($_POST['acc-type']));
                            $gold = htmlspecialchars(addslashes($_POST['slgold']));
                            $username = htmlspecialchars(addslashes($_POST['username']));
                            $password = htmlspecialchars(addslashes($_POST['password']));
                            $content = ($_POST['content']);
                            if(!trim($champ) || !trim($skin) || !trim($runes) || !trim($price) || !trim($type) || !trim($gold) || !trim($username) || !trim($password))
                            {
                                echo 'Không được bỏ trống !';
                            }
                            else
                            {
                                $data->add($champ,$skin,$rank,$price,$content,$runes,$type,$gold,$username,$password);
                            }
                        }
                     ?>
            </form>
            </div>
            </div>
            <!--END #main-->
         </div>
         <style>
            .btn {margin-bottom: 10px;}
         </style>
         <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/jquery/1.11.0/jquery.min.js"></script>
         <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/codemirror/5.3.0/codemirror.min.js"></script>
         <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/codemirror/5.3.0/mode/xml/xml.min.js"></script>
         <script type="text/javascript" src="js/froala_editor.min.js" ></script>
         <script type="text/javascript" src="js/plugins/align.min.js"></script>
         <script type="text/javascript" src="js/plugins/char_counter.min.js"></script>
         <script type="text/javascript" src="js/plugins/code_beautifier.min.js"></script>
         <script type="text/javascript" src="js/plugins/code_view.min.js"></script>
         <script type="text/javascript" src="js/plugins/colors.min.js"></script>
         <script type="text/javascript" src="js/plugins/draggable.min.js"></script>
         <script type="text/javascript" src="js/plugins/emoticons.min.js"></script>
         <script type="text/javascript" src="js/plugins/entities.min.js"></script>
         <script type="text/javascript" src="js/plugins/file.min.js"></script>
         <script type="text/javascript" src="js/plugins/font_size.min.js"></script>
         <script type="text/javascript" src="js/plugins/font_family.min.js"></script>
         <script type="text/javascript" src="js/plugins/fullscreen.min.js"></script>
         <script type="text/javascript" src="js/plugins/image.min.js"></script>
         <script type="text/javascript" src="js/plugins/image_manager.min.js"></script>
         <script type="text/javascript" src="js/plugins/line_breaker.min.js"></script>
         <script type="text/javascript" src="js/plugins/inline_style.min.js"></script>
         <script type="text/javascript" src="js/plugins/link.min.js"></script>
         <script type="text/javascript" src="js/plugins/lists.min.js"></script>
         <script type="text/javascript" src="js/plugins/paragraph_format.min.js"></script>
         <script type="text/javascript" src="js/plugins/paragraph_style.min.js"></script>
         <script type="text/javascript" src="js/plugins/quick_insert.min.js"></script>
         <script type="text/javascript" src="js/plugins/quote.min.js"></script>
         <script type="text/javascript" src="js/plugins/table.min.js"></script>
         <script type="text/javascript" src="js/plugins/save.min.js"></script>
         <script type="text/javascript" src="js/plugins/url.min.js"></script>
         <script type="text/javascript" src="js/plugins/video.min.js"></script>
         <script type="text/javascript" src="js/plugins/help.min.js"></script>
         <script type="text/javascript" src="js/plugins/print.min.js"></script>
         <script type="text/javascript" src="js/third_party/spell_checker.min.js"></script>
         <script type="text/javascript" src="js/plugins/special_characters.min.js"></script>
         <script type="text/javascript" src="js/plugins/word_paste.min.js"></script>
         <script>
            $(function(){
              $('#edit').froalaEditor()
            });
         </script>
   </body>
</html>