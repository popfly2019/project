@extends('Home.layouts.index')
@section('title','文章详细')
@section('keyword','文章详细')
@section('description','文章详细')
@section('content')
<!-- main -->
<div class="container">
  <div class="row"><!-- right -->
    <div class="col-xs-12 col-sm-8 col-md-9" style="float:right">
      <div class="list_box">
        <h2 class="left_h1">{{$manage->article->name}}</h2>
        <div class="contents">
          <h1 class="contents_title">{{$manage->title}}</h1>
          <span style="color:#505050;font-family:Verdana, Arial, Helvetica, sans-serif;font-size:14px;line-height:22px;">
          {{$manage->content}}
          </span>
          </div>
        <div class="point">
        @if($prev)
        <span class="to_prev col-xs-12 col-sm-6 col-md-6">上一个：
          <a href="/chaye.com/laravel/public/article/list/{{$prev->id}}" title="{{$prev->title}}">{{$prev->title}}</a>
        </span>
        @else
        <span class="to_prev col-xs-12 col-sm-6 col-md-6">上一个：
          <a href="#" title="没有了">没有了</a>
        </span>
        @endif

        @if($next)
        <span class="to_next col-xs-12 col-sm-6 col-md-6">下一个：
          <a href="/chaye.com/laravel/public/article/list/{{$next->id}}" title="{{$next->title}}">{{$next->title}}</a>
        </span>
        @else
        <span class="to_next col-xs-12 col-sm-6 col-md-6">下一个：
          <a href="" title="没有了">没有了</a>
        </span>
        @endif
        </div>
      </div>
      <div class="list_related">
        <h1 class="left_h1">相关新闻</h1>
        <ul class="list_news related_news">
        @foreach($about as $vo)
          <li><a href="/chaye.com/laravel/public/article/list/{{$vo->id}}" title="{{$vo->title}}">{{$vo->title}}</a></li>
          @endforeach
        </ul>
      </div>
    </div>
    <!-- left -->
    <div class="col-xs-12 col-sm-4 col-md-3">
      <div class="left_nav" id="categories">
        <h1 class="left_h1">栏目导航</h1>
        <ul class="left_nav_ul" id="firstpane">
          <!-- <li><a class="biglink" href="javascript:;">公司新闻</a><span class="menu_head">+</span>
            <ul class="left_snav_ul menu_body">
              <li><a href="javascript:;">部门新闻</a></li>
            </ul>
          </li> -->
          @foreach($category as $cate)
          <li><a class="biglink" href="/chaye.com/laravel/public/article/category/{{$cate->id}}">{{$cate->name}}</a><span class="menu_head">+</span>
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
          <li><a href="/chaye.com/laravel/public/article/list/{{$vo->id}}" title="{{$vo->title}}">{{$vo->title}}</a></li>
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