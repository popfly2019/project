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
					<p class="time">Update<br />2011.06.07</p>
					<div class="title">
						<h3>2011年南京市动漫协会年会纪实</h3>
					</div>
					<div class="intro">
						<p>广州市泰一文化传播有限公司(Target) 是一家集品牌策划/公关活动/3D影视制作/媒体传播为一体的文化传播公司。别具创想的策划、新锐的设计以及优质的服务使泰一文化(Target) )迅速成为行内的新型文化传播先锋。 </p>
						<p>至今，已成为融合科技文化、时尚发布、大型会议等优势资源的综合实力雄厚的公司。广州市泰一文化传播有限公司(Target) 是一家集品牌策划/公关活动/3D影视制作/媒体传播为一体的文化传播公司。别具创想的策划、新锐的设计以及优质的服务使泰一文化(Target) )迅速成为行内的新型文化传播先锋。 </p>
						<p>至今，已成为融合科技文化、时尚发布、大型会议等优势资源的综合实力雄厚的公司。2011.5.13 《建设领域应用软件测评通用规范》修订编制组成立会于北京召开。丝路数码技术有限公司作为15家编委会成员之一，集团总裁李萌迪，北京丝路总经理李鹏邀出席会议</p>
					</div>
				</div>
				<ul class="next_news">
					<li>
						<a href="#" class="backward buttom">PREV</a>
						<a href="#" class="content first">获批省级项目《岭南建筑文化》三维动画制作以及策划推广</a>
					</li>
					<li>
						<a href="@" class="forward buttom">NEXT</a>
						<a href="#" class="content">联合华工科技大学建筑学院举办《国际建筑文化论坛》</a>
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
					<li class="current"><a href="#">品牌策划</a></li>
					<li><a href="#">公关活动</a></li>
					<li><a href="#">3D影视制作</a></li>
					<li><a href="#">媒体传播</a></li>
				</ul>
				<div class="r_block_title t2">
					<h3>更新要闻</h3>
					<span>NEWS</span>
					<div class="clear"></div>
				</div>
				<ul class="list_new">
					<li>
						<a href="#">2011年南京市动漫协会...</a> 
						<p>News 2011.06.07</p>
					</li>
					<li>
						<a href="#">2011年南京市动漫协会...</a> 
						<p>News 2011.06.07</p>
					</li>
					<li>
						<a href="#">2011年南京市动漫协会...</a> 
						<p>News 2011.06.07</p>
					</li>
					<li>
						<a href="#">2011年南京市动漫协会...</a> 
						<p>News 2011.06.07</p>
					</li>
					<li>
						<a href="#">2011年南京市动漫协会...</a> 
						<p>News 2011.06.07</p>
					</li>
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
</html>