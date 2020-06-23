
<!DOCTYPE html PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd">
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
<title>DouPHP 管理中心</title>
<meta name="Copyright" content="Douco Design." />
<link href="{{URL::asset('Admin/css/public.css')}}" rel="stylesheet" type="text/css">
<script type="text/javascript" src="{{URL::asset('Admin/js/jquery.min.js')}}"></script>
<script type="text/javascript" src="{{URL::asset('Admin/js/global.js')}}"></script>
</head>
<body>
<div id="dcWrap"> <div id="dcHead">
 <div id="head">
  <div class="logo"><a href="index.html"><img src="{{URL::asset('Admin/images/dclogo.gif')}}" alt="logo"></a></div>
  <div class="nav">
   <ul class="navRight">
    <li class="M noLeft"><a href="JavaScript:void(0);">您好，{{Session::get('name')}}</a>
    </li>
    <li class="noRight"><a href="/chaye.com/laravel/public/admin/login/logout">退出</a></li>
   </ul>
  </div>
 </div>
</div>
<!-- dcHead 结束 -->