@extends('Home.layouts.index')
@section('title','产品详细')
@section('keyword','产品详细')
@section('keyword','产品详细')
@section('content')
<!-- main -->
<div class="container">
  <div class="row"><!-- right -->
    <div class="col-xs-12 col-sm-8 col-md-9" style="float:right">
      <div class="list_box">
        <h2 class="left_h1">{{$manage->category->name}}</h2>
        <!-- showpic -->
        <div class="col-sm-12 col-md-6 showpic_box">
          <ul class="showpic_flash">
            <li><a class="example-image-link" href="javascript:;" data-lightbox="example-set" target="_blank"><img class="example-image" src="/chaye.com/laravel/public/{{$manage->avatar}}" alt="{{$manage->name}}" style="width: 370px;height: 290px;" /></a></li>
          </ul>

        </div>
        <!-- product_info -->
        <div class="col-sm-12 col-md-6 proinfo_box">
          <h1 class="product_h1">{{$manage->name}}</h1>
          <ul class="product_info">
            <li>商品编号：{{$manage->ip}}</li>
            <li>拍摄角度：130度</li>
            <li>视频像素：1920*1080</li>
            <li>上架时间：{{$manage->date}}</li>
            <li>产品描述：{{$manage->description}}</li>
            <li>
              <form id="orderform" method="post" action="/T03/cn/Inquiry.html">
                <input type="hidden" name="ordername" value="/chaye.com/laravel/public/{{$manage->name}}" />
                <a href="javascript:;" class="btn btn-info page-btn"><span class="glyphicon glyphicon-triangle-right" aria-hidden="true"></span> 在线订购</a>
              </form>
            </li>
          </ul>
        </div>
        <div class="product_con">
          {{$manage->content}}
        </div>
        <div class="point">
          <span class="to_prev col-xs-12 col-sm-6 col-md-6">上一个：
            @if($prev)
            <a href="/product/list/{{$prev->id}}" title="{{$prev->name}}">{{$prev->name}}
            </a>
            @else
            <a href="#" title="没有了">没有了
            </a>
            @endif
          </span>
          <span class="to_next col-xs-12 col-sm-6 col-md-6">下一个：
            @if($next)
            <a href="/product/list/{{$next->id}}" title="{{$next->name}}">{{$next->name}}
            </a>
            @else
            <a href="#" title="没有了">没有了
            </a>
            @endif
          </span>
        </div>
      </div>
      <div class="list_related">
        <h1 class="left_h1">相关产品</h1>
        <div class="product_list related_list">
        @foreach($about as $vo)
          <div class="col-sm-4 col-md-3 col-mm-6 product_img"><a href="javascript:;"><img  src="/{{$vo->avatar}}" class="img-thumbnail" alt="{{$vo->name}}"/></a>
            <p class="product_title"><a href="/product/list/{{$vo->id}}" title="{{$vo->name}}">{{$vo->name}}</a></p>
          </div>
        @endforeach
        </div>
      </div>
    </div>
    <!-- left -->
    <div class="col-xs-12 col-sm-4 col-md-3">
      <div class="left_nav" id="categories">
        <h1 class="left_h1">导航栏目</h1>
        <ul class="left_nav_ul" id="firstpane">
         <!--  <li><a class="biglink" href="javascript:;">产品大类1</a><span class="menu_head">+</span>
           <ul class="left_snav_ul menu_body">
             <li><a href="javascript:;">产品小类1_1</a></li>
             <li><a href="javascript:;">产品小类1_2</a></li>
             <li><a href="javascript:;">产品小类1_3</a></li>
           </ul>
         </li> -->
         @foreach($category as $vo)
          <li><a class="biglink" href="/chaye.com/laravel/public/product/category/{{$vo->id}}">{{$vo->name}}</a><span class="menu_head">+</span>
          </li>
          @endforeach
        </ul>
      </div>
      <div class="left_news">
        <h1 class="left_h1">新闻中心</h1>
        <ul class="index_news">
        @foreach($article as $vo)
          <li><a href="/chaye.com/laravel/public/article/list/{{$vo->id}}" title="{{$vo->title}}">{{$vo->title}}</a>
          </li>
        @endforeach
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