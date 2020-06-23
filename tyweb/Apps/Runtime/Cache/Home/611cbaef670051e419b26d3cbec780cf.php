<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
	<head>
		<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
		<title>泰一文化传播</title>
		<link rel="stylesheet" type="text/css" href="/tyweb/Public/Home/css/base.css" />
		<link rel="stylesheet" type="text/css" href="/tyweb/Public/Home/css/news.css" />
	</head>
	<body>
		<style>
	#header ul li:first-child a{border: none;}
</style>
<div id="header_bg">
	<div id="header">
		<a href="index.html" class="logo"><img src="/tyweb/Public/Home/img/logo.png" title="泰一文化传播" alt="泰一文化传播"/></a>
		<ul class="list_land navigate">
			<?php if(is_array($nav)): foreach($nav as $key=>$nav): ?><li><a href="/tyweb<?php echo ($nav["url"]); ?>" title="{nav.name}"><?php echo ($nav["name"]); ?></a></li><?php endforeach; endif; ?>
			<div class="clear"></div>
		</ul>
		<div class="clear"></div>
	</div>
</div>

		<div id="main">
			<div class="left">
				<div class="banner">
					<div class="control"></div>
					<div class="hd">
						<ul class="list_land banner_navi">
							<li><a>1</a></li>
							<li><a>2</a></li>
							<li><a>3</a></li>
							<li><a>4</a></li>
							<li><a>5</a></li>
							<div class="clear"></div>
						</ul>
					</div>
					<div class="bd">
						<ul>
							<li><img src="/tyweb/Public/Home/img/news/banner.jpg"/></li>
							<li><img src="/tyweb/Public/Home/img/news/banner1.jpg"/></li>
							<li><img src="/tyweb/Public/Home/img/news/banner2.jpg"/></li>
							<li><img src="/tyweb/Public/Home/img/news/banner3.jpg"/></li>
							<li><img src="/tyweb/Public/Home/img/news/banner4.jpg"/></li>
						</ul>
					</div>
				</div>
				<div class="pg_block_title">
					<h2>TARGET NEWS</h2>
					<span>公司新闻</span>
					<ul class="navi list_land">
						<li><a href="#" title="上一条"><img src="/tyweb/Public/Home/img/news/left.gif" alt="上一条" /></a></li>
						<li><a href="news.html" title="返回列表"><img src="/tyweb/Public/Home/img/news/up.gif" alt="返回列表"/></a></li>
						<li><a href="#" title="下一条"><img src="/tyweb/Public/Home/img/news/right.gif" alt="下一条"/></a></li>
					</ul>
					<div class="clear"></div>
				</div>	
				<div class="detail_con">
					<p class="time">Update<br /><?php echo (date("Y.m.d",$detail["date"])); ?></p>
					<div class="title">
						<h3><?php echo ($detail["name"]); ?></h3>
					</div>
					<div class="intro">
						<?php echo (htmlspecialchars_decode($detail["content"])); ?>
					</div>
				</div>
				<ul class="next_news">
					<li>
						<a href="#" class="backward buttom">PREV</a>
						<?php if($prev['top'] == 'true'): ?><a href="#" class="content first">没有数据</a>
						<?php else: ?>
						<a href="<?php echo U('news/'.$prev['id']);?>" class="content first"><?php echo ($prev["name"]); ?></a><?php endif; ?>
					</li>
					<li>
						<a href="@" class="forward buttom">NEXT</a>

						<?php if($next['top'] == 'true' ): ?><a href="#" class="content">没有数据</a>
						<?php else: ?>
							<a href="<?php echo U('news/'.$next['id']);?>" class="content"><?php echo ($next["name"]); ?></a><?php endif; ?>
					</li>
				</ul>
				<a href="news.html" class="goback"><img src="/tyweb/Public/Home/img/news/go_back.gif" /></a>
				<a href="news.html" class="goback_arr"><img src="/tyweb/Public/Home/img/news/goback_arr.gif" /></a>
			</div>
			<div class="right">
				<div class="r_block_title t1">
					<h3>成功安例</h3>		
					<span>WORKS</span>
					<div class="clear"></div>
				</div>
				<ul class="list_vertical">
					<?php if(is_array($right_case)): foreach($right_case as $key=>$cate): ?><li><a href="#"><?php echo ($cate["name"]); ?></a></li><?php endforeach; endif; ?>
				</ul>
				<div class="r_block_title t2">
					<h3>更新要闻</h3>
					<span>NEWS</span>
					<div class="clear"></div>
				</div>
				<ul class="list_new">
					<?php if(is_array($right_news)): foreach($right_news as $key=>$news): ?><li>
						<a href="<?php echo U('news/'.$news['id']);?>"><?php echo ($news["name"]); ?></a> 
						<p>News <?php echo (date("Y.m.d",$news["date"])); ?></p>
					</li><?php endforeach; endif; ?>
				</ul>
			</div>
			<div class="clear"></div>
		</div>
		<div id="footer_bg">
	<div id="footer">
		<img src="/tyweb/Public/Home/img/logo.png" class="logo"/>
		<ul class="list_land navigate">
			<li class="import first"><a href="about_us.html" title="关于我们">关于我们</a></li>
			<li><a href="case.html" title="服务体系">服务体系</a></li>
			<li><a href="case.html" title="案例展示">案例展示</a></li>
			<li><a href="news.html" title="最新动态">最新动态</a></li>
			<li><a href="about_us.html" title="联系我们">联系我们</a></li>
			<div class="clear"></div>
		</ul>
		<p class="copyright clear">Growyex&nbsp;&copy;&nbsp;2011 : <a href="chenxin20101019@gmail.com">Privacy Policy</a></p>
		<div class="clear"></div>
	</div>
</div>
<script type="text/javascript" src="/tyweb/Public/Home/script/jquery.js"></script>
<script type="text/javascript" src="/tyweb/Public/Home/script/jquery.SuperSlide.js"></script>
<script type="text/javascript" src="/tyweb/Public/Home/script/index.js"></script>



	</body>
	<script type="text/javascript" src="/tyweb/Public/Home/script/jquery.js"></script>
	<script type="text/javascript" src="/tyweb/Public/Home/script/jquery.SuperSlide.js"></script>
	<script type="text/javascript" src="/tyweb/Public/Home/script/news_detail.js"></script>
</html>