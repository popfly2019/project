@extends('Home.layouts.index')
@section('title','公司简介')
@section('keyword','公司简介')
@section('description','公司简介')
@section('content')
<div class="container">
  <div class="row"><!-- right -->
    <div class="col-xs-12 col-sm-8 col-md-9" style="float:right">
      <div class="list_box">
        <h2 class="left_h1">公司简介</h2>
        <div class="contents">
          公司简介
          <div> <br />
          </div>
        </div>
      </div>
    </div>
    <!-- left -->
    <div class="col-xs-12 col-sm-4 col-md-3">
      <div class="left_nav" id="categories">
        <h1 class="left_h1">栏目导航</h1>
        <ul class="left_nav_ul" id="firstpane">
          <li><a class="biglink" href="javascript:;">公司简介</a><span class="menu_head">+</span>
            <ul class="left_snav_ul menu_body">
            </ul>
          </li>
          <li><a class="biglink" href="javascript:;">联系我们</a><span class="menu_head">+</span>
            <ul class="left_snav_ul menu_body">
            </ul>
          </li>
          <li><a class="biglink" href="javascript:;">我们的服务优势</a><span class="menu_head">+</span>
            <ul class="left_snav_ul menu_body">
            </ul>
          </li>
        </ul>
      </div>
      <div class="left_news">
        <h1 class="left_h1">新闻中心</h1>
        <ul class="index_news">
          @foreach($article as $vo)
          <li><a href="/chaye.com/laravel/public/article/list/{{$vo->id}}" title="{{$vo->title}}">{{$vo->title}}</a><span class='news_time'>{{$vo->date}}</span>
          </li>
          @endforeach
        </ul>
      </div>
      <div class="index_contact">
        <h1 class="title_h1">联系我们</h1>
        <span class="title_span">CONTACT US</span>
        <p style="padding-top:20px;">联系人：{{$config['contact_name']}}</p>
        <p>手机：{{$config['phone']}}</p>
        <p>电话：{{$config['telphone']}}</p>
        <p>邮箱：{{$config['email']}}</p>
        <p>地址：{{$config['address']}}</p>
      </div>
    </div>
  </div>
</div>
@endsection
