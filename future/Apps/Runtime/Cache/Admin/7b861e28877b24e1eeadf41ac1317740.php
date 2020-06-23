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

	<!-- Core CSS  -->
	<link rel="stylesheet" type="text/css" href="/future/Public/Admin/css/bootstrap.css">
	
	<!-- Theme CSS -->
	<link rel="stylesheet" type="text/css" href="/future/Public/Admin/css/theme.css">
	<link rel="stylesheet" type="text/css" href="/future/Public/Admin/css/pages.css">
	<link rel="stylesheet" type="text/css" href="/future/Public/Admin/css/plugins.css">
	<link rel="stylesheet" type="text/css" href="/future/Public/Admin/css/responsive.css">

	<!-- Boxed-Layout CSS -->
	<link rel="stylesheet" type="text/css" href="/future/Public/Admin/css/boxed.css">

	<!-- Demonstration CSS -->
	<link rel="stylesheet" type="text/css" href="/future/Public/Admin/css/demo.css">

	<!-- Your Custom CSS -->
	<link rel="stylesheet" type="text/css" href="/future/Public/Admin/css/custom.css">

</head>

<body class="login-page">

<!-- Start: Main -->
<div id="main">
  <div class="container">
    <div class="row">
      <div id="page-logo"></div>
    </div>
    <div class="row">
      <div class="panel">
        <div class="panel-heading">
          <div class="panel-title">CMS内容管理系统</div>
		</div>
        <form action="<?php echo U('login/index');?>" class="cmxform" id="altForm" method="post">
          <div class="panel-body">
            <div class="form-group">
              <div class="input-group"> <span class="input-group-addon">用户名</span>
                <input type="text" name="name" class="form-control phone" maxlength="10" autocomplete="off" placeholder="">
              </div>
            </div>
            <div class="form-group">
              <div class="input-group"> <span class="input-group-addon">密&nbsp;&nbsp;&nbsp;码</span>
                <input type="password" name="password" class="form-control product" maxlength="10" autocomplete="off" placeholder="">
              </div>
            </div>
                      </div>
          <div class="panel-footer"> <span class="panel-title-sm pull-left" style="padding-top: 7px;"></span>
            <div class="form-group margin-bottom-none">
              <input class="btn btn-primary pull-right" type="submit" value="登 录" />
              <div class="clearfix"></div>
            </div>
          </div>
        </form>
      </div>
    </div>
  </div>
</div>
<!-- End: Main --> 

<!-- Core Javascript - via CDN --> 
<script src="/future/Public/Admin/js/jquery.min.js"></script> 
<script src="/future/Public/Admin/js/jquery-ui.min.js"></script> 
<script src="/future/Public/Admin/js/bootstrap.min.js"></script> <!-- Theme Javascript --> 
<script type="text/javascript" src="/future/Public/Admin/js/uniform.min.js"></script> 
<script type="text/javascript" src="/future/Public/Admin/js/main.js"></script>
<script type="text/javascript" src="/future/Public/Admin/js/custom.js"></script> 
<script type="text/javascript">

jQuery(document).ready(function() {

	// Init Theme Core 	  
	Core.init();   
	
});

</script>
</body>

</html>