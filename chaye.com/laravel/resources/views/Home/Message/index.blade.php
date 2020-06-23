@extends('Home.layouts.index')
@section('content')
<!-- main -->
<div class="container">
  <div class="row"><!-- right -->
    <div class="col-xs-12 col-sm-8 col-md-9" style="float:right">
      <div class="list_box">
        <h2 class="left_h1">在线留言</h2>
        <div class="feedback">
          <form id="myform" name="myform" class="form-horizontal" method="post" action="/chaye.com/laravel/public/message" onSubmit="return CheckJob()">
          {{csrf_field()}}
            <div class="form-group">
              <label for="title"class="col-sm-3 control-label">留言标题：</label>
              <div class="col-sm-6">
                <input type="text" name="title" class="form-control" id="title" placeholder="必填">
              </div>
            </div>
            <div class="form-group">
              <label for="username" class="col-sm-3 control-label">您的姓名：</label>
              <div class="col-sm-6">
                <input type="text" name="name" class="form-control" id="username" placeholder="必填">
              </div>
            </div>
            <div class="form-group">
              <label for="tel" class="col-sm-3 control-label">联系电话：</label>
              <div class="col-sm-6">
                <input type="text" name="phone" class="form-control" id="tel" placeholder="必填">
              </div>
            </div>
            <div class="form-group">
              <label for="inputEmail" class="col-sm-3 control-label">电子邮箱：</label>
              <div class="col-sm-6">
                <input type="email" name="email" class="form-control" id="inputEmail">
              </div>
            </div>
            <div class="form-group">
              <label for="add" class="col-sm-3 control-label">联系地址：</label>
              <div class="col-sm-6">
                <input type="text" name="address" class="form-control" id="add">
              </div>
            </div>
            <div class="form-group">
              <label for="contents" class="col-sm-3 control-label">留言内容：</label>
              <div class="col-sm-6">
                <textarea name="content" class="form-control" rows="3"></textarea>
              </div>
            </div>
            <!-- <div class="form-group">
              <label for="code" class="col-xs-12 col-sm-3 control-label">验证码：</label>
              <div class="col-xs-7 col-sm-2">
                <input type="text" name="code" class="form-control" id="code" placeholder="验证码">
              </div>
              <div class="col-xs-2 col-sm-1"><img class="codeimg" src="/T03/common/verify.html" onclick='this.src=this.src+"?"+Math.random()'/></div>
            </div> -->
            <div class="form-group">
              <div class="col-sm-offset-3 col-sm-10">
                <button type="submit" name="button" value="Send" class="btn btn-danger page-btn">提交留言</button>
                &nbsp;
                <button type="reset" name="reset" class="btn btn-default grey-btn">重新填写</button>
              </div>
            </div>
           
          </form>
        </div>
      </div>
    </div>
    <!-- left -->
    <div class="col-xs-12 col-sm-4 col-md-3">
      <div class="left_nav" id="categories">
        <h1 class="left_h1">栏目导航</h1>
        <ul class="left_nav_ul" id="firstpane">
        @foreach($category as $cate)
          <li><a class="biglink" href="javascript:;">{{$cate['name']}}</a><span class="menu_head">+</span>
          @if(isset($cate['nav_son']) && !empty($cate['nav_son']))
            <ul class="left_snav_ul menu_body">
              @foreach($cate['nav_son'] as $v)
                <li><a href="javascript:;">{{$v['name']}}</a></li>
              @endforeach
            </ul>
          @endif
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