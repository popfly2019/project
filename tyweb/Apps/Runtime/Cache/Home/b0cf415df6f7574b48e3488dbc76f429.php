<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
	<head>
		<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
		<title>泰一文化传播</title>
		<link rel="stylesheet" type="text/css" href="/tyweb/Public/Home/css/base.css" />
		<link rel="stylesheet" type="text/css" href="/tyweb/Public/Home/css/case.css" />
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
				<div class="pg_block_title">
					<h2>TARGET WORKS</h2>
					<span>成功案例</span>
					<div class="clear"></div>
				</div>	
				<div class="description">
					<img src="/tyweb/Public/Home/img/case/img.gif" alt="泰一文化传播" />
					<h3>别具创想的策划、新锐的设计以及优质的服务<span class="quot">”</span></h3>
					<ul class="list-stripe">
						<li class="first"><p>—品牌策划、推广、影视包装</p></li>
						<li><p>—公关活动策划，执行</p></li>
						<li><p>—广告投放规划</p></li>
						<li><p>—三维动画影片制作 、宣传、发布 、创意制作</p></li>
					</ul>
				</div>
				<ul class="content">
					<?php if(is_array($list)): foreach($list as $key=>$list): ?><li>
						<div class="head">
							<div class="image"><img src="/<?php echo ($list["img"]); ?>" /></div> 
							<h3><a href="#"><?php echo ($list["name"]); ?></a></h3>
						</div>
						<div class="content">
							<p>项目:珠海国际赛车场赛事推广活动</p>
							<p>客户：珠海国际赛车场</p>
							<p>时间：2011年2月</p>
						</div>
						<p class="time">Update <?php echo ($list["date"]); ?></p>
						<div class="clear"></div>
					</li><?php endforeach; endif; ?>
					<div class="clear"></div>
				</ul>
				<div class="page_navi">
					<ul class="list_land page_navi">
						<?php echo ($page_str); ?>
						<div class="clear"></div>
					</ul>
				</div>
			</div>
			<div class="right">
				<div class="r_block_title t1">
					<h3>成功案例</h3>		
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
</html>