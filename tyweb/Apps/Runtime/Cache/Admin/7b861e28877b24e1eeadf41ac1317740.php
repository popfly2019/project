<?php if (!defined('THINK_PATH')) exit();?><!doctype html>
<html lang="zh-CN">
<head>
<meta charset="utf-8">
<meta name="renderer" content="webkit">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1">
<title>异清轩博客管理系统</title>
<link rel="stylesheet" type="text/css" href="/tyweb/Public/Admin/css/bootstrap.min.css">
<link rel="stylesheet" type="text/css" href="/tyweb/Public/Admin/css/style.css">
<link rel="stylesheet" type="text/css" href="/tyweb/Public/Admin/css/login.css">
<script src="/tyweb/Public/Admin/js/jquery-2.1.4.min.js"></script>
</head>

<body class="user-select">
<div class="container">
  <div class="siteIcon"><img src="/tyweb/Public/Admin/images/icon/icon.png" alt="" data-toggle="tooltip" data-placement="top" title="欢迎使用异清轩博客管理系统" draggable="false" /></div>
  <form action="" method="post" autocomplete="off" class="form-signin">
    <h2 class="form-signin-heading">管理员登录</h2>
    <label for="userName" class="sr-only">用户名</label>
    <input type="text" id="userName" name="name" class="form-control" placeholder="请输入用户名" required autofocus autocomplete="off" maxlength="10">
    <label for="userPwd" class="sr-only">密码</label>
    <input type="password" id="userPwd" name="password" class="form-control" placeholder="请输入密码" required autocomplete="off" maxlength="18">
    <label for="userCODE" class="sr-only">密码</label>
    <input type="text" id="userCODE" name="imgcode" class="form-control" placeholder="请输入密码" required autocomplete="off" maxlength="18">
    <img src="<?php echo U('login/imgcode');?>" alt="" onClick="this.src=this.src+'?'+Math.random()" width="300" style="margin-top: 20px;margin-bottom: 20px;">
    <a href="main.html"><button class="btn btn-lg btn-primary btn-block" type="submit" id="signinSubmit">登录</button></a>
  </form>
</div>
<script src="js/bootstrap.min.js"></script> 
<script>
$('[data-toggle="tooltip"]').tooltip();
window.oncontextmenu = function(){
	//return false;
};
$('.siteIcon img').click(function(){
	window.location.reload();
});
$('#signinSubmit').click(function(){
	if($('#userName').val() === ''){
		$(this).text('用户名不能为空');
	}else if($('#userPwd').val() === ''){
		$(this).text('密码不能为空');
	}else{
		$(this).text('请稍后...');
	}
});
</script>
</body>
</html>