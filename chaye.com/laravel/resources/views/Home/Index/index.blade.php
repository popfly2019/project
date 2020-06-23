@extends('Home.layouts.index')

@section('title','网站首页')
@section('keyword','1232312')
@section('description','1232312')
@section('content')
<!-- main -->
<div class="container-fluid">
  <div class="row">
    <div class="col-xs-12 col-sm-12 col-md-12">
      <div class="index_product">
        <div class="pro_title">
          <p>products</p>
          <span>我们的产品</span></div>
        @foreach($product as $vo)
        <div class="col-sm-4 col-md-2 col-mm-6 product_img"><a href="javascript:;"><img src="/chaye.com/laravel/public/{{$vo->avatar}}" class="img-thumbnail" alt="{{$vo->name}}"></a>
          <p class="product_title"><a href="javascript:;" title="{{$vo->name}}">{{$vo->name}}</a></p>
        </div>
        @endforeach
      </div>
    </div>
  </div>
</div>
<div class="aboutus" style="background: url(../Home/images/bg_paralax.jpg) no-repeat; background-size: cover;background-attachment: fixed;">
  <h2>欢迎来到我们的网站</h2>
  <p>
  <p class="about_contents"> 
    
   网站简介
    
    
    ...</p>
  </p>
  <a href="javascript:;" class="btn btn-info view-all" role="button"><span class="glyphicon glyphicon-triangle-right" aria-hidden="true"></span>&nbsp;查看详细</a></div>
<div class="container">
  <div class="row">
    <div class="col-xs-12 col-sm-8 col-md-7">
      <div class="news_box">
        <h1 class="title_h1">新闻中心</h1>
        <span class="title_span">NEWS CENTER</span>
        <ul class="index_news">
          @foreach($article as $vo)
          <li><a href="javascript:;" title="{{$vo->title}}">{{$vo->title}}</a><span class='news_time'>{{$vo->date}}</span>
          </li>
          @endforeach
        </ul>
      </div>
    </div>
    <div class="col-xs-12 col-sm-4 col-md-5">
      <div class="index_contact">
        <h1 class="title_h1">联系我们</h1>
        <span class="title_span">CONTACT US</span>
        <p style="padding-top:20px;">联系人：{{$config['contact_name']}}</p>
        <p>手机：{{$config['phone']}}</p>
        <p>电话：{{$config['telphone']}}</p>
        <p>邮箱：{{$config['email']}}</p>
        <p>地址：{{$config['address']}}</p>
      </div>
      <div class="btn-group dropup" style="margin-bottom:15px;">
        <button type="button" class="btn btn-default btn-sm" data-toggle="dropdown" aria-expanded="false" style="line-height:13px;">&nbsp;&nbsp;&nbsp;&nbsp;友情链接&nbsp;&nbsp;&nbsp;&nbsp;</button>
        <button type="button" class="btn btn-default dropdown-toggle btn-sm"  style="line-height:13px;"><span class="caret"></span><span class="sr-only">友情链接</span></button>
        <ul class="dropdown-menu" role="menu">
          @foreach($link as $vo)
          <li><a target="_blank" href="{{$vo->url}}">{{$vo->name}}</a></li>
          @endforeach
        </ul>
      </div>
    </div>
  </div>
</div>

@endsection
