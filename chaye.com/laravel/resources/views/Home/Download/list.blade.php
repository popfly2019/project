@extends('Home.layouts.index')
@section('title','下载详细')
@section('keyword','下载详细')
@section('description','下载详细')
@section('content')
<!-- main -->
<div class="container">
  <div class="row"><!-- right -->
    <div class="col-xs-12 col-sm-8 col-md-9" style="float:right">
      <div class="list_box">
        <h2 class="left_h1">{{$manage->category->name}}</h2>
        <div class="contents">
          <h1 class="contents_title">{{$manage->name}}</h1>
          <p class="download_btn"><a href="/chaye.com/laravel/public/download/download/{{$manage->id}}" class="btn btn-info page-btn" role="button" target="_blank"><span class="glyphicon glyphicon-download-alt" aria-hidden="true"></span> &nbsp;点击下载 </a></p>
          {{$manage->content}}
        </div>
        <div class="point">
          <span class="to_prev col-xs-12 col-sm-6 col-md-6">上一个：
            @if($prev)
            <a href="/chaye.com/laravel/public/download/list/{{$prev->id}}" title="{{$prev->name}}">{{$prev->name}}</a>
            @else
            <a href="#" title="没有了">没有了</a>
            @endif
          </span>

          <span class="to_next col-xs-12 col-sm-6 col-md-6">下一个：
          @if($next)
            <a href="/chaye.com/laravel/public/download/list/{{$next->id}}" title="{{$next->id}}">{{$next->name}}</a>
          @else
            <a href="#" title="没有了">没有了</a>
          @endif
          </span>
        </div>
      </div>
      <div class="list_related">
        <h1 class="related_h1">相关下载</h1>
        <ul class="list_news related_news">
        @foreach($about as $vo)
          <li><a href="/chaye.com/laravel/public/download/list/{{$vo->id}}">{{$vo->name}}</a><span class="news_time">{{$vo->date}}</span>
          </li>
        @endforeach
        </ul>
      </div>
    </div>
    <!-- left -->
    <div class="col-xs-12 col-sm-4 col-md-3">
      <div class="left_nav" id="categories">
        <h1 class="left_h1">栏目导航</h1>
        <ul class="left_nav_ul" id="firstpane">
        @foreach($category as $cate)
          <li><a class="biglink" href="/download category/{{$cate->id}}">{{$cate->name}}</a><span class="menu_head">+</span>
            <ul class="left_snav_ul menu_body">
            </ul>
          </li>
        @endforeach
        </ul>
      </div>
      <div class="left_news">
        <h1 class="left_h1">新闻中心</h1>
        <ul class="index_news">
          @foreach($article as $vo)
          <li>
            <a href="/chaye.com/laravel/public/article/list/{{$vo->id}}" title="{{$vo->title}}">{{$vo->title}}</a>
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