@extends('Home.layouts.index')
@section('title','产品中心')
@section('keyword','产品中心')
@section('description','产品中心')
@section('content')
<!-- main -->
<div class="container">
  <div class="row"><!-- right -->
    <div class="col-xs-12 col-sm-8 col-md-9" style="float:right">
      <div class="list_box">
        <h2 class="left_h1">产品中心</h2>
        <div class="product_list product_list2">
          @foreach($list as $vo)
          <div class="col-sm-4 col-md-3 col-mm-6 product_img"><a href="/chaye.com/laravel/public/product/list/{{$vo->id}}"><img  src="/chaye.com/laravel/public/{{$vo->avatar}}" class="img-thumbnail" alt="{{$vo->name}}"/></a>
            <p class="product_title"><a href="javascript:;" title="{{$vo->name}}">{{$vo->name}}</a></p>
          </div>
          @endforeach
        </div>
        {{$list->links()}}
      </div>
    </div>
    <!-- left -->
    <div class="col-xs-12 col-sm-4 col-md-3">
      <div class="left_nav" id="categories">
        <h1 class="left_h1">栏目导航</h1>
        <ul class="left_nav_ul" id="firstpane">
          <!-- <li><a class="biglink" href="">产品大类1</a><span class="menu_head">+</span>
            <ul class="left_snav_ul menu_body">
              <li><a href="">产品小类1_1</a></li>
              <li><a href="">产品小类1_2</a></li>
              <li><a href="">产品小类1_3</a></li>
            </ul>
          </li> -->
          @foreach($category as $cate)
          <li><a class="biglink" href="{{url('/product/category',$cate->id)}}">{{$cate->name}}</a><span class="menu_head">+</span>
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