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

    <div class="container theme-showcase" role="main">

      <p>
        <a href="/future" class="btn btn-sm btn-default">全部</a>
        <?php if(is_array($nav)): foreach($nav as $key=>$nav): if($_GET['id'] == $nav['id']): ?><a href="<?php echo U('index/'.$nav['id']);?>" class="btn ban-sm btn-default active"><?php echo ($nav["name"]); ?></a>
          <?php else: ?>
            <a href="<?php echo U('index/'.$nav['id']);?>" class="btn btn-sm btn-default"><?php echo ($nav["name"]); ?></a><?php endif; endforeach; endif; ?>
      </p>

      <div class="row all-event-list mt20">
        <?php if(is_array($news)): foreach($news as $key=>$news): ?><div class="col-md-3 col-sm-4 col-xs-12">
            <div class="widget-event">
              <a href="<?php echo U('news/'.$news['id']);?>"><img class="widget-event__banner lazy" src="/<?php echo ($news["img"]); ?>"></a>
              <div class="widget-event__info">
                <h2 class="h4 title"><a href="<?php echo U('news/'.$news['id']);?>"><?php echo ($news["title"]); ?></a></h2>
                <ul class="widget-event__meta">
                  <li>时间：<?php echo ($news["date"]); ?></li>
                </ul>
                <a class="btn btn-default btn-sm" href="<?php echo U('news/'.$news['id']);?>">查看</a>
              </div>
            </div>
          </div><?php endforeach; endif; ?>
      </div>


      <div class="text-center">
        <ul class="pagination">
         <?php echo ($page_str); ?>
        </ul>
      </div>


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