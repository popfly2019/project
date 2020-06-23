<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html>
<head>
  <meta http-equiv="content-type" content="text/html; charset=UTF-8">
  <!-- Meta, title, CSS, favicons, etc. -->
  <meta charset="utf-8">
  <title>CMS内容管理系统</title>
  <meta name="keywords" content="Admin">
  <meta name="description" content="Admin">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" type="text/css" href="/future/Public/Admin/css/bootstrap.css">
  <link rel="stylesheet" type="text/css" href="/future/Public/Admin/css/glyphicons.min.css">
  <link rel="stylesheet" type="text/css" href="/future/Public/Admin/css/theme.css">
  <link rel="stylesheet" type="text/css" href="/future/Public/Admin/css/pages.css">
  <link rel="stylesheet" type="text/css" href="/future/Public/Admin/css/plugins.css">
  <link rel="stylesheet" type="text/css" href="/future/Public/Admin/css/responsive.css">
  <link rel="stylesheet" type="text/css" href="/future/Public/Admin/css/boxed.css">
  <link rel="stylesheet" type="text/css" href="/future/Public/Admin/css/demo.css">
  <link rel="stylesheet" type="text/css" href="/future/Public/Admin/css/custom.css">
  <script type="text/javascript" src="/future/Public/Admin/js/jquery.min.js"></script> 
  <script type="text/javascript" src="/future/Public/Admin/js/jquery-ui.min.js"></script> 
  <script type="text/javascript" src="/future/Public/Admin/js/bootstrap.min.js"></script> 
  <script type="text/javascript" src="/future/Public/Admin/js/uniform.min.js"></script> 
  <script type="text/javascript" src="/future/Public/Admin/js/main.js"></script>
  <script type="text/javascript" src="/future/Public/Admin/js/custom.js"></script> 
</head>

<body>
<!-- Start: Header -->
<header class="navbar navbar-fixed-top" style="background-image: none; background-color: rgb(240, 240, 240);">
  <div class="pull-left"> <a class="navbar-brand" href="#">
    <div class="navbar-logo"><img src="/future/Public/Admin/images/logo.png" alt="logo"></div>
    </a> </div>
  <div class="pull-right header-btns">
    <a class="user"><span class="glyphicons glyphicon-user"></span> <?php echo (session('name')); ?></a>
    <a href="<?php echo U('login/logout');?>" class="btn btn-default btn-gradient" type="button"><span class="glyphicons glyphicon-log-out"></span> 退出</a>
  </div>
</header>
<!-- End: Header -->
<!-- End: Header -->

<!-- Start: Main -->
<div id="main">
    <!-- Start: Sidebar -->
      <aside id="sidebar" class="affix">
    <div id="sidebar-search">
    		<div class="sidebar-toggle"><span class="glyphicon glyphicon-resize-horizontal"></span></div>
    </div>
    <div id="sidebar-menu">
      <ul class="nav sidebar-nav">
        <li>
          <a href="<?php echo U('index/index');?>"><span class="glyphicons glyphicon-home"></span><span class="sidebar-title">后台首页</span></a>
        </li>
        <li>
          <a href="<?php echo U('news/index');?>"><span class="glyphicons glyphicon-list"></span><span class="sidebar-title">文章管理</span></a>
        </li>
        <li>
          <a href="<?php echo U('nav/index');?>"><span class="glyphicons glyphicon-list"></span><span class="sidebar-title">文章分类管理</span></a>
        </li>
        <li>
          <a href="<?php echo U('admin/index');?>"><span class="glyphicons glyphicon-list"></span><span class="sidebar-title">系统管理员</span></a>
        </li>
      </ul>
    </div>
  </aside>
    <!-- End: Sidebar -->
    <!-- Start: Content -->
    <section id="content">
        <div id="topbar" class="affix">
            <ol class="breadcrumb">
                <li><a href="#"><span class="glyphicon glyphicon-home"></span></a></li>
                <li class="active">添加资讯</li>
            </ol>
        </div>
        <div class="container">

            <div class="row">
                <div class="col-md-10 col-lg-8 center-column">
                    <form action="<?php echo U('news/add');?>" method="post" class="cmxform" enctype="multipart/form-data">
                        <div class="panel">
                            <div class="panel-heading">
                                <div class="panel-title">添加文章</div>
                                <div class="panel-btns pull-right margin-left">
                                    <a href="article_list.html"
                                       class="btn btn-default btn-gradient dropdown-toggle"><span
                                            class="glyphicon glyphicon-chevron-left"></span></a>
                                </div>
                            </div>
                            <div class="panel-body">
                                <div class="col-md-7">
                                    <div class="form-group">
                                        <div class="input-group"><span class="input-group-addon">分类</span>
                                            <select name="cateid" id="standard-list1" class="form-control">
                                                <option>请选择</option>
                                                <?php if(is_array($category)): foreach($category as $key=>$cate): ?><option value="<?php echo ($cate["id"]); ?>"><?php echo ($cate["name"]); ?></option><?php endforeach; endif; ?>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <div class="input-group"><span class="input-group-addon">标题</span>
                                            <input type="text" name="title" value="" class="form-control">
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <div class="input-group"><span class="input-group-addon">作者</span>
                                            <input type="text" name="author" value="" class="form-control">
                                        </div>
                                    </div>
                                </div>
                                <div class="form-group col-md-12">
                                      <label for="article-content" class="sr-only">内容</label>
                                      <script id="article-content" name="content" type="text/plain"></script>
                                </div>
                                <div class="form-group col-md-12">
                                  <h2 class="add-article-box-title"><span>标题图片</span></h2>
                                  <div class="add-article-box-content">
                                    <input type="text" class="form-control" placeholder="点击按钮选择图片" id="pictureUpload" name="img" autocomplete="off">
                                  </div>
                                  <div class="add-article-box-footer">
                                    <button class="btn btn-default" type="button" ID="upImage" style="float: right;margin-top: 5px;background: #30bef3;color: #fff;border:none;">选择</button>
                                  </div>
                                </div>
                                <div class="col-md-7">
                                    <div class="form-group">
                                        <input type="hidden" value="<?php echo date('Y年m月d日 H:i:s',time());?>" name="date">
                                        <input type="submit" value="提交" class="submit btn btn-blue">
                                    </div>
                                </div>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
    </section>
    <!-- End: Content -->
</div>
<!-- End: Main -->
<link type="text/css" rel="stylesheet" href="/future/Public/Admin/umeditor/themes/default/_css/umeditor.css">
<script src="/future/Public/Admin/ueditor/ueditor.config.js"></script> 
<script src="/future/Public/Admin/ueditor/ueditor.all.min.js"> </script> 
<script src="/future/Public/Admin/ueditor/lang/zh-cn/zh-cn.js"></script>  
<script id="uploadEditor" type="text/plain" style="display:none;"></script>
<script type="text/javascript">
var editor = UE.getEditor('article-content');
window.onresize=function(){
    window.location.reload();
}
var _uploadEditor;
$(function () {
    //重新实例化一个编辑器，防止在上面的editor编辑器中显示上传的图片或者文件
    _uploadEditor = UE.getEditor('uploadEditor');
    _uploadEditor.ready(function () {
        //设置编辑器不可用
        //_uploadEditor.setDisabled();
        //隐藏编辑器，因为不会用到这个编辑器实例，所以要隐藏
        _uploadEditor.hide();
        //侦听图片上传
        _uploadEditor.addListener('beforeInsertImage', function (t, arg) {
            //将地址赋值给相应的input,只去第一张图片的路径
            $("#pictureUpload").attr("value", arg[0].src);
            //图片预览
            //$("#imgPreview").attr("src", arg[0].src);
        })
        //侦听文件上传，取上传文件列表中第一个上传的文件的路径
        _uploadEditor.addListener('afterUpfile', function (t, arg) {
            $("#fileUpload").attr("value", _uploadEditor.options.filePath + arg[0].url);
        })
    });
});
//弹出图片上传的对话框
$('#upImage').click(function () {
    var myImage = _uploadEditor.getDialog("insertimage");
    myImage.open();
});
//弹出文件上传的对话框
function upFiles() {
    var myFiles = _uploadEditor.getDialog("attachment");
    myFiles.open();
}
</script>
</body>

</html>