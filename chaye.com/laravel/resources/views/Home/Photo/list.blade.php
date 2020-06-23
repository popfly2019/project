@extends('Home.layouts.index')
@section('content')
<!-- main -->
<div class="container">
  <div class="row"><!-- right -->
    <div class="col-xs-12 col-sm-8 col-md-9" style="float:right">
      <div class="list_box">
        <h2 class="left_h1">{{$manage->category->name}}</h2>
        <!-- showpic -->
        <div class="col-sm-11 col-md-8 col-md-offset-2" style="margin-bottom:30px; margin-top:20px;">
          <ul class="showpic_flash">
            <li><a class="example-image-link" href="javascript:;" data-lightbox="example-set" target="_blank"><img class="example-image" src="/chaye.com/laravel/public/{{$manage->picture}}" alt="员工员工01"/></a></li>
          </ul>
        </div>
        <div class="product_con">
        描述描述描述</div>
        <div class="point">
        <span class="to_prev col-xs-12 col-sm-6 col-md-6">上一个
          @if($prev)
          <a href="/chaye.com/laravel/public/photo/list/{{$prev->id}}" title="{{$prev->name}}">{{$prev->name}}</a>  
          @else
          <a href="#" title="没有了">没有了</a>
          @endif
        </span>
        <span class="to_next col-xs-12 col-sm-6 col-md-6">下一个：
          @if($next)
          <a href="/chaye.com/laravel/public/photo/list/{{$next->id}}" title="{{$next->name}}">{{$next->name}}</a>
          @else
          <a href="#" title="没有了">没有了</a>
          @endif
        </span>
        </div>
      </div>
      <div class="list_related">
        <h1 class="left_h1">相关图片</h1>
        <div class="product_list related_list">
          @foreach($about as $vo)
          <div class="col-sm-4 col-md-3 col-mm-6 product_img"><a href="/photo/list/{{$vo->id}}"><img  src="/chaye.com/laravel/public/{{$vo->picture}}" class="img-thumbnail" alt="{{$vo->name}}"/></a>
            <p class="product_title"><a href="/chaye.com/laravel/public/photo/list/{{$vo->id }}" title="{{$vo->name}}">{{$vo->name}}</a></p>
            <p class="product_desc">SEO描述SEO描述...</p>
          </div>
          @endforeach
        </div>
      </div>
    </div>
    <!-- left -->
    <div class="col-xs-12 col-sm-4 col-md-3">
      <div class="left_nav" id="categories">
        <h1 class="left_h1">栏目导航</h1>
        <ul class="left_nav_ul" id="firstpane">
          @foreach($category as $cate)
          <li><a class="biglink" href="/chaye.com/laravel/public/photo/category/{{$cate->id}}">{{$cate->name}}</a><span class="menu_head">+</span>
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
          <li><a href="/chaye.com/laravel/public/article/list/{{$vo->id}}" title="{{$vo->title}}">{{$vo->title}}</a><span class='news_time'>2013-09-28</span></li>
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