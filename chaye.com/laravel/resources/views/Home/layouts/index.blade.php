<!DOCTYPE html>
<html lang="zh-cn">
<head>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1">
<title>@yield('title') -茶叶网站html模板</title>
<meta name="keywords" content="@yield('kewyword')" />
<meta name="description" content="@yield('description')" />
<meta name="applicable-device"content="pc,mobile">
<link href="{{ URL::asset('Home/css/bootstrap.css')}}" rel="stylesheet">
<link href="{{ URL::asset('Home/css/bxslider.css')}}" rel="stylesheet">
<link href="{{ URL::asset('Home/css/style.css')}}" rel="stylesheet">
<script src="{{ URL::asset('Home/js/jquery.min.js')}}"></script>
<script src="{{ URL::asset('Home/js/bxslider.min.js')}}"></script>
<!-- <script src="{{ URL::asset('Home/js/common.js')}}"></script> -->
<script src="{{ URL::asset('Home/js/bootstrap.js')}}"></script><!--[if lt IE 9]><script src="js/html5shiv.min.js"></script><script src="js/respond.min.js"></script><![endif]-->
</head>
<?php
use App\Models\Admin\Config;
  $nav = DB::table('nav')->where('parent',0)->get();
  $banner = DB::table('banner')->where('location',1)->get();
?>
<body>
<header>
  <div class="top_menu">
    <div class="container"><span class="top_name">欢迎光临~{{$config['company_name']}}</span>
      <div class="language">语言选择： <a href="javascript:;" title="中文版"><img src="{{ URL::asset('Home/images/Chinese.gif')}}" alt="中文版"></a> ∷&nbsp; <a href="javascript:;" title="English"><img src="{{ URL::asset('Home/images/English.gif')}}" alt="英文版"></a></div>
    </div>
  </div>
  <!-- Fixed navbar -->
  <nav class="navbar navbar-default navbar-fixed-top">
    <div class="container">
      <div class="navbar-header">
        <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar"><span class="sr-only">Toggle navigation</span><span class="icon-bar"></span><span class="icon-bar"></span><span class="icon-bar"></span></button>
        <p class="logo_box"><a href="javascript:;"><img src="{{ URL::asset('Home/images/53007d5b00000.png')}}" class="logo" alt=""/></a></p>
      </div>
      <div id="navbar" class="navbar-collapse collapse">
        <ul class="nav navbar-nav navbar-nav-c">
          @foreach($nav as $vo)
          <li><a href="/chaye.com/laravel/public{{$vo->url}}">{{$vo->name}}</a></li>
          @endforeach
        </ul>
      </div>
      <!--/.nav-collapse --></div>
  </nav>
  <!-- bxslider -->
  <div class="flash">
    <ul class="bxslider">
      @foreach($banner as $vo)
      <li><a href="javascript:;"><img src="/chaye.com/laravel/public/{{$vo->picture}}" alt="广告一" /></a></li>
      @endforeach
    </ul>
  </div>
  <script type="text/javascript">    $('.bxslider').bxSlider({
      adaptiveHeight: true,
      infiniteLoop: true,
      hideControlOnEnd: true,
      auto:true
    });
</script>
</header>

	@yield('content')
  
<footer>
  <div class="copyright">
    <p>CopyRight 2013 All Right Reserved &nbsp;ICP:873468834<a href="javascript:;" target="_blank">网站地图</a></p>
    <p class="copyright_p">地址：{{$config['address']}} &nbsp;电话：{{$config['telphone']}} &nbsp;传真：{{$config['fix']}}&nbsp;</p>
  </div>
</footer>