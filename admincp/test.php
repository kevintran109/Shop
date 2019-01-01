
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
          width: 81%;
          margin: auto;
          text-align: left;
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
            <form id="admin-form" class="form-horizontal col-xl-9 col-lg-10 col-md-12 col-sm-12" method="post" action="#" enctype="multipart/form-data" role="form">
               <input name="id" type="hidden" value="0">
               <div class="form-group">
                  <label for="type_product" class="col-sm-3 control-label required">Loại sản phẩm</label>
                  <div class="col-sm-9">
                     <select name="type_product" id="type_product" class="form-control">
                     <option value="">Chọn danh mục</option>
                     <option value="">Loại sản phẩm 1</option>
                     <option value="">Loại sản phẩm 2</option>
                     <option value="">Loại sản phẩm 3</option>
                     </select>
                  </div>
               </div>
               <div class="form-group">
                  <label for="masp" class="col-sm-3 control-label required">Mã sản phẩm</label>
                  <div class="col-sm-9">
                     <input name="masp" type="text" value="" class="form-control" id="masp" placeholder="Mã sản phẩm" required="" maxlength="100">
                  </div>
               </div>
               <div class="form-group">
                  <label for="title" class="col-sm-3 control-label required">Tên sản phẩm</label>
                  <div class="col-sm-9">
                     <input name="title" type="text" value="" class="form-control" id="title" placeholder="Tên sản phẩm ( ~ 70 ký tự )" required="" maxlength="100">
                  </div>
               </div>
               <div class="form-group">
                  <label for="keywords" class="col-sm-3 control-label">Từ khóa</label>
                  <div class="col-sm-9">
                     <input name="keywords" type="text" value="" class="form-control" id="keywords" placeholder="meta keywords" maxlength="255">
                  </div>
               </div>
               <div class="form-group">
                  <label for="description" class="col-sm-3 control-label">Mô tả</label>
                  <div class="col-sm-9">
                     <textarea name="description" class="form-control" id="description" placeholder="meta description ( ~ 160 ký tự )" maxlength="255"></textarea>
                  </div>
               </div>
               <div class="form-group">
                  <label for="price" class="col-sm-3 control-label required">Giá</label>
                  <div class="col-sm-9">
                     <input name="price" type="text" value="" class="form-control" id="price" placeholder="Giá sản phẩm (đơn vị: VNĐ)" maxlength="255">
                  </div>
               </div>
               <div class="form-group">
                  <label for="content" class="col-sm-3 control-label">Nội dung</label>
                  <div class="col-sm-9">
  <div id="editor">
      <div id='edit' style="margin-top: 30px;">
        <h1>Full Featured</h1>

        <p>This is the full featured Froala WYSIWYG HTML editor.</p>

        <img class="fr-fir fr-dii" src="img/photo1.jpg" alt="Old Clock" width="300"/>Lorem  <strong>ipsum</strong> dolor sit amet, consectetur <strong>adipiscing <em>elit.</em> Donec</strong> facilisis diam in odio iaculis blandit. Nunc eu mauris sit amet purus <strong>viverra</strong><em> gravida</em> ut a dui.<br/>
        <ul><li>Vivamus nec rutrum augue, pharetra faucibus purus. Maecenas non orci sagittis, vehicula lorem et, dignissim nunc.</li> <li>Suspendisse suscipit, diam non varius facilisis, enim libero tincidunt magna, sit amet iaculis eros libero sit amet eros. Vestibulum a rhoncus felis.<ol><li>Nam lacus nulla, consequat ac lacus sit amet, accumsan pellentesque risus. Aenean viverra mi at urna mattis fermentum.</li> <li>Curabitur porta metus in tortor elementum, in semper nulla ullamcorper. Vestibulum mattis tempor tortor quis gravida. In rhoncus risus nibh. Nullam condimentum dapibus massa vel fringilla. Sed hendrerit sed est quis facilisis. Ut sit amet nibh sem. Pellentesque imperdiet mollis libero.</li></ol></li></ul>

        <table style="width: 100%;">
          <tr>
            <td style="width: 25%;"></td>
            <td style="width: 25%;"></td>
            <td style="width: 25%;"></td>
            <td style="width: 25%;"></td>
          </tr>
          <tr>
            <td style="width: 25%;"></td>
            <td style="width: 25%;"></td>
            <td style="width: 25%;"></td>
            <td style="width: 25%;"></td>
          </tr>
        </table>

        <a href="http://google.com" title="Aenean sed hendrerit">Aenean sed hendrerit</a> velit. Nullam eu mi dolor. Maecenas et erat risus. Nulla ac auctor diam, non aliquet ante. Fusce ullamcorper, ipsum id tempor lacinia, sem tellus malesuada libero, quis ornare sem massa in orci. Sed dictum dictum tristique. Proin eros turpis, ultricies eu sapien eget, ornare rutrum ipsum. Pellentesque eros nisl, ornare nec ipsum sed, aliquet sollicitudin erat. Nulla tincidunt porta <strong>vehicula.</strong><br/>
      </div>
  </div>
  <div class="form-group" >
                     <label class="col-sm-3 control-label">Ảnh</label>
                      <div class="col-sm-9 col-sm-offset-3">
                      <ul class="nav nav-tabs" role="tablist">
                       <li class="active"><a href="#img-file" role="tab" data-toggle="tab">Upload từ máy tính</a></li>
                       <li><a href="#img-url" role="tab" data-toggle="tab">Lấy từ URL</a></li>
                     </ul>
                      <div class="tab-content" style="margin-top: 15px; min-height: 100px;">
                          <div class="tab-pane active" id="img-file">
                              <label for="image" class="col-sm-3 control-label">Từ máy tính</label>
                              <div class="col-sm-9">
                                 <input name="image" type="file" class="form-control" id="image" accept="image/*">
                              </div>
                          </div>
                          <div class="tab-pane" id="img-url">
                              <label for="url" class="col-sm-3 control-label"> Từ URL</label>
                              <div class="col-sm-9">
                                 <input name="image" type="text" value="" class="form-control" id="url" placeholder="Đường dẫn tới hình ảnh" maxlength="255">
                              </div>
                          </div>
                        </div>
                     </div>
                  </div>
                  <div class="form-group">
                     <div class="col-sm-offset-3 col-sm-9">
                         <button type="submit" class="btn btn-submit"><small><i class="fa fa-plus"></i></small> Thêm mới</button>
                        <button type="submit" class="btn btn-danger"><small><i class="fa fa-save"></i></small> Lưu nháp</button>
                        <a class="btn btn-warning" href="#"><small><i class="fa fa-reply"></i></small> Trở về</a>
                     </div>
                  </div>
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