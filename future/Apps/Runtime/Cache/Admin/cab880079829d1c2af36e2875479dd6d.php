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
        <li class="active"><a href="#"><span class="glyphicon glyphicon-home"></span></a></li>
      </ol>
    </div>
    <div class="container">
		<div class="col-md-9">
			<div id="docs-content">
				<h2 class="page-header margin-top-none">个人信息</h2>
				<table class="table">
					<tr>
					<td colspan="2">您好，<?php echo (session('name')); ?></td>
					</tr>
					<tr>
					<td width="100">最后登录时间:</td>
					<td>2015-01-02 13：20</td>
					</tr>
					<tr>
					<td>最后登录IP:</td>
					<td>127.0.0.1</td>
					</tr>
				</table>

				<h2 class="page-header margin-top-none">系统信息</h2>
				<table class="table">
				  <tr>
				    <td width="100">操作系统：</td>
				    <td>Linux</td>
				  </tr>
				  <tr>
				    <td>PHP 版本:</td>
				    <td>5.2.9</td>
				  </tr>
				  <tr>
				    <td>MySQL 版本:</td>
				    <td>5.1.33</td>
				  </tr>
				</table>
			</div>
		</div>
    </div> 
  </section>
  <!-- End: Content --> 
</div>
<!-- End: Main --></body>

</html>