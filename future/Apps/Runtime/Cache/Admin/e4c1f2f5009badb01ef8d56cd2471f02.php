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
        <li class="active">系统管理员</li>
      </ol>
    </div>
    <div class="container">

	 <div class="row">
        <div class="col-md-12">
			<div class="panel">
                <div class="panel-heading">
                  <div class="panel-title">管理员列表</div>
                  <a href="<?php echo U('admin/add');?>" class="btn btn-info btn-gradient pull-right"><span class="glyphicons glyphicon-plus"></span> 添加管理员</a>
                </div>
                <form action="" method="post">
                <div class="panel-body">
                  <h2 class="panel-body-title">互联网</h2>
                  <table class="table table-striped table-bordered table-hover dataTable">
                      <tr class="active">
                        <th class="text-center" width="100"><input type="checkbox" value="" id="checkall" class=""> 全选</th>
                        <th>名称</th>
                        <th>密码</th>
                        <th width="200">操作</th>
                      </tr>
                      <?php if(is_array($list)): foreach($list as $key=>$list): ?><tr class="success">
                          <td class="text-center"><input type="checkbox" value="<?php echo ($list["id"]); ?>" name="idarr[]" class="cbox"><?php echo ($list["id"]); ?></td>
                          <td><?php echo ($list["name"]); ?></td>
                          <td><?php echo ($list["password"]); ?></td>
                          <td>
  		                      <div class="btn-group">
  		                        <a href="<?php echo U('admin/edit',array('id'=>$list['id']));?>" class="btn btn-default btn-gradient"><span class="glyphicons glyphicon-pencil"></span></a>
  		                        <a href="<?php echo U('admin/delete',array('id'=>$list['id']));?>" class="btn btn-default btn-gradient dropdown-toggle"><span class="glyphicons glyphicon-trash"></span></a>
  		                      </div>
                          
                          </td>
                        </tr><?php endforeach; endif; ?>
                  </table>
                  
                  <div class="pull-left">
                  	<button type="submit" class="btn btn-default btn-gradient pull-right delall"><span class="glyphicons glyphicon-trash"></span></button>
                  </div>
                  
                  <div class="pull-right">
                    <ul class="pagination" id="paginator-example">
                      <?php echo ($page_str); ?>
                    </ul>
                  </div>
                  
                </div>
                </form>
              </div>
          </div>
        </div>
    </div>
  </section>
  <!-- End: Content --> 
</div>
<!-- End: Main --> 
</body>
</html>