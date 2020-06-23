<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">
    <title>未来生活</title>
    <link href="/future/Public/Home/css/bootstrap.min.css" rel="stylesheet">
    <link href="/future/Public/Home/css/bootstrap-theme.min.css" rel="stylesheet">
    <link href="/future/Public/Home/css/theme.css" rel="stylesheet">
    <link href="/future/Public/Home/css/event.css" rel="stylesheet">
    <script src="/future/Public/Home/assets/js/ie-emulation-modes-warning.js"></script>

  </head>

  <body role="document">

    <!-- Fixed navbar -->
    <nav class="navbar navbar-inverse navbar-fixed-top">
      <div class="container">
        <div class="navbar-header">
          <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
          <a class="navbar-brand" href="/">未来生活</a>
        </div>
        <div id="navbar" class="navbar-collapse collapse">
          <ul class="nav navbar-nav">
            <li class="active"><a href="">科技</a></li>
            <li><a href="">文化</a></li>
            <li><a href="">生活</a></li>
            <li class="dropdown">
              <a href="" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">关于我们 <span class="caret"></span></a>
              <ul class="dropdown-menu">
                <li><a href="">关于我们</a></li>
                <li><a href="">联系我们</a></li>
              </ul>
            </li>
          </ul>

          <form class="header-search pull-right hidden-sm hidden-xs" action="/search">
            <button class="btn btn-link" type="submit"><span class="sr-only">搜索</span><span class="glyphicon glyphicon-search"></span></button>
            <input type="text" value="" class="form-control" placeholder="输入关键字搜索" name="q" id="searchBox" style="width: 180px;">
          </form>
        </div><!--/.nav-collapse -->
      </div>
    </nav>
<div class="warp">
    <div class="blog-header">
      <div class="container">
        <h1 class="blog-title"><?php echo ($manage["title"]); ?></h1>
        <p class="blog-post-meta"><?php echo ($manage["date"]); ?> by <a href="#"><?php echo ($manage["author"]); ?></a></p>
      </div>
    </div>

    <div class="container">



      <div class="row">

        <div class="col-sm-8 blog-main">

          <div class="blog-post">
  
              <?php echo (htmlspecialchars_decode($manage["content"])); ?>

          </div><!-- /.blog-post -->



          <nav>
            <ul class="pager">
              <?php if($uparticle == ''): ?><li><a href="#">没有数据</a></li>
              <?php else: ?>
                <li><a href="<?php echo U('news/'.$uparticle['id']);?>"><?php echo ($uparticle["title"]); ?></a></li><?php endif; ?>

              <?php if($nextarticle == ''): ?><li><a href="#">没有数据</a></li>
              <?php else: ?>
                <li><a href="<?php echo U('news/'.$nextarticle['id']);?>"><?php echo ($nextarticle["title"]); ?></a></li><?php endif; ?>
            </ul>
          </nav>

        </div><!-- /.blog-main -->

        <div class="col-sm-3 col-sm-offset-1 blog-sidebar">
          <div class="sidebar-module">
            <h4>热点文章</h4>
            <ol class="list-unstyled">
              <li><a href="#">网络专车能这么管吗？</a></li>
              <li><a href="#">有些事情，罗永浩没有在发布会上告诉你</a></li>
              <li><a href="#">离开索尼的 VAIO 要用什么产品走出日本</a></li>
            </ol>
          </div>

        </div><!-- /.blog-sidebar -->

      </div><!-- /.row -->

    </div><!-- /.container -->

</div>
    <footer id="footer">
      <div class="container">
        <div class="row hidden-xs">
          <dl class="col-sm-2 site-link">
            <dt>网站相关</dt>
            <dd><a href="#">关于我们</a></dd>
            <dd><a href="#">服务条款</a></dd>
            <dd><a href="#">帮助中心</a></dd>
          </dl>
          <dl class="col-sm-2 site-link">
            <dt>联系合作</dt>
            <dd><a href="#">联系我们</a></dd>
            <dd><a href="#">加入我们</a></dd>
            <dd><a href="#">合作伙伴</a></dd>
            <dd><a href="#">建议反馈</a></dd>
          </dl>
          <dl class="col-sm-2 site-link">
            <dt>常用链接</dt>
            <dd><a href="#">关于我们</a></dd>
            <dd><a href="#">服务条款</a></dd>
            <dd><a href="#">帮助中心</a></dd>
          </dl>
          <dl class="col-sm-2 site-link">
            <dt>关注我们</dt>
            <dd><a href="#"><img src="/future/Public/Home/images/qrcode_weixin.png" alt=""/></a></dd>
          </dl>
        </div>
        <div class="copyright">
          Copyright &copy; 2015. <a rel="nofollow" href="http://www.miibeian.gov.cn/">粤ICP备15000000号-2</a>
        </div>
      </div>
    </footer>
    <script src="http://cdn.bootcss.com/jquery/1.11.3/jquery.js"></script>
    <script src="/future/Public/Home/js/bootstrap.min.js"></script>
    <script src="/future/Public/Home/js/docs.min.js"></script>
    <script src="/future/Public/Home/js/ie10-viewport-bug-workaround.js"></script>
  </body>
</html>