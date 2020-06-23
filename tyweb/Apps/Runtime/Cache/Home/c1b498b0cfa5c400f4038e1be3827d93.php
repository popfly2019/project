<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
	<head>
		<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
		<title>泰一文化传播</title>
		<link rel="stylesheet" type="text/css" href="/tyweb/Public/Home/css/base.css" />
		<link rel="stylesheet" type="text/css" href="/tyweb/Public/Home/css/index.css" />
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
			<div class="banner">
				<div class="hd">
					<a class="prev"></a>
					<a class="next"></a>
				</div>
				<div class="bd">
					<ul>
						<?php if(is_array($ad)): foreach($ad as $key=>$ad): ?><li><img src="/<?php echo ($ad["img"]); ?>" title="广告" alt="banner"/></li><?php endforeach; endif; ?>
					</ul>
				</div>
			</div>
			<div class="index_title">
				<h3>Latest Works</h3>			
				<a href="case.html" class="more">+ more..</a>
				<div class="clear"></div>
			</div>
			<div class="left">
				<a href="#" class="show" title="展示墙"><img src="/<?php echo ($news[0]["img"]); ?>" style="width: 315px;height: 175px;border-radius: 5px;" /></a>
				<h3 class="block_title">关于泰一文化传播</h3>	
				<div class="description">
					<p><a href="about_us.html">广州市泰一文化传播有限公司(Target)</a> 是一家集品牌策划/公关活动/3D影视制作/媒体传播为一体的文化传播公司。</p>
					<p>别具创想的策划、新锐的设计以及优质的服务使泰一文化(Target) )迅速成为行内的新型文化传播先锋。</p>
					<p>至今，已成为融合科技文化、时尚发布、大型会议等优势资源的综合实力雄厚的公司。</p>
				</div>
				<a href="#" class="more"><img src="/tyweb/Public/Home/img/index/more.gif" /></a>
			</div>
			<div class="center">
				<a href="#" class="show" title="展示墙"><img src="/<?php echo ($news[1]["img"]); ?>" style="width: 315px;height: 175px;border-radius: 5px;" /></a>
				<h3 class="block_title">业务体系</h3>	
				<div class="description">
					<ul class="arr_list">
						<?php if(is_array($yewu)): foreach($yewu as $key=>$news_1): ?><li><a href="<?php echo U('news/'.$news_1[id]);?>"><?php echo ($news_1["name"]); ?></a></li><?php endforeach; endif; ?>
					</ul>
				</div>
				<a href="#" class="more"><img src="/tyweb/Public/Home/img/index/more.gif" /></a>
			</div>
			<div class="right">
				<a href="#" class="show" title="展示墙"><img src="/<?php echo ($news[2]["img"]); ?>" style="width: 315px;height: 175px;border-radius: 5px;" /></a>
				<h3 class="block_title">公司动态</h3>	
				<div class="description">
					<dl class="arr_list">
						<?php if(is_array($gsnews)): foreach($gsnews as $key=>$news_2): ?><dt class="first"><a href="#"><?php echo ($news_2["name"]); ?></a></dt>
							<dd><p><?php echo ($news_2["description"]); ?></p></dd><?php endforeach; endif; ?>
					</dl>
				</div>
				<a href="#" class="more"><img src="/tyweb/Public/Home/img/index/more.gif" /></a>
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



</html>