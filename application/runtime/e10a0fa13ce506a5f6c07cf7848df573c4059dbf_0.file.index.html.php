<?php
/* Smarty version 3.1.30, created on 2017-07-26 10:20:07
  from "D:\php\wamp\www\php\BaiJiaHao\application\views\home\index.html" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_5977fc57b2c1d8_61175314',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'e10a0fa13ce506a5f6c07cf7848df573c4059dbf' => 
    array (
      0 => 'D:\\php\\wamp\\www\\php\\BaiJiaHao\\application\\views\\home\\index.html',
      1 => 1501035601,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:home/footer.html' => 1,
  ),
),false)) {
function content_5977fc57b2c1d8_61175314 (Smarty_Internal_Template $_smarty_tpl) {
?>
<!DOCTYPE html>
<html lang="en">
	<head>
	    <meta charset="UTF-8">
	    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
	   
		<title>首页-百家号</title>
	
		<!-- 首页自定义样式 -->
		<link rel="stylesheet" href="public/css/style.css" type="text/css" />
	</head>
	
	<body>

		<!-- 导航栏 -->
		<nav class="navbar navbar-default">
			<div class="container">
				
				<div class="navbar-header">
					<a href="application/views/home/index.html" class="navbar-brand">
						<img src="public/imgs/logos/logo.png" class="navbar-logo" />
					</a>
				</div>
				
				<ul class="nav nav-pills">
					<li class="active">
						<a href="?m=main">首页</a>
					</li>
					<li>
						<a href="?m=keJi">科技</a>
					</li>
					<li>
						<a href="javascript:;">影视娱乐</a>
					</li>
					<li>
						<a href="javascript:;">财经</a>
					</li>
					<li>
						<a href="javascript:;">体育</a>
					</li>
					<li>
						<a href="javascript:;">文化</a>
					</li>
				</ul>
				
				<ul class="nav nav-tabs">
						<li>
							<a href="?m=main">成为百家号作者</a>
						</li>
						<li>
							<a href="javascript:;" id="btn">登录</a>
						</li>
						<li>
							<a href="javascript:;">百度首页</a>
						</li>
				</ul>
				
			</div>
		</nav>
		
		<!-- 登录表单 -->
		<div class="modal fade" id="myModal">
			<!--<div id="myModal">-->
			<div class="modal-dialog modal-sm">
				<div class="modal-content">
					<div class="modal-header">
						<button class="close" type="button" data-dismiss="modal">
							<span>&times;</span>
						</button>
						<h4>登录</h4>
					</div>
					<div class="zhanghao-login">
						<div class="modal-body">
							<a href="javascript:;" class="modal-body-login-quikly"><img src="public/imgs/icons/phone.png" class="modal-logo-phone">&nbsp; 短信快捷登录</a>
							<form action="" method="" id="">
								<input type="text" class="form-control form-control-user"  value="" placeholder="     手机/邮箱/用户名" id="username" />
								<input type="password" class="form-control form-control-pwd" value="" placeholder="     密码" id="pwd" />
								<input type="checkbox" checked="checked" id="checked" />下次自动登录
								<a href="javascript:;" class="modal-body-a">登录遇到问题</a>
								<input type="submit" class="form-control-button btn btn-primary" id="send" name="send" value="登录" />
								<a href="?m=register" class="modal-body-a" target="_blank">立即注册</a>
							</form>
						</div>
						<div class="modal-footer">
							<p>可以使用以下方式登录</p>
							<img src="public/imgs/icons/weibo-login.png" class="modal-logo-weibo" />
							<img src="public/imgs/icons/qq-login.png" class="modal-logo-qq" />
						</div>
						<a class="modal-logo-erweima" href="javascript:;">
							<img src="public/imgs/icons/pass_login_icons_erweima.png">
						</a>
					</div>

					<div class="erweima-login">
						<div class="modal-body">
							<h1 class="erweima-login-h1"><strong>请使用<a>手机百度APP扫码</a>登录</strong></h1>
							<img src="public/imgs/icons/qrcode.png" class="erweima-login-img">
							<p class="erweima-login-p">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;百度技术加密，保障您的隐私安全</p>
						</div>
						<a class="modal-logo-zhanghao" href="javascript:;">
							<img src="public/imgs/icons/pass_login_icons_zhanghao.png">
						</a>
					</div>
				</div>
			</div>
		</div>
		
		
		<!-- 主图轮播以及侧边图片 -->
		<section class="carousel-container">
			<div class="container">
				<div class="row">
					
					<!-- 轮播图 -->
					<div class="col-lg-8 col-md-8 col-sm-8 col-xs-8">
						
						<div id="myLb" class="carousel slide">
							
							<!-- 轮播游标 -->
							<ol class="carousel-indicators">
								<li data-target = "#myLb" data-slide-to = "0" class="active"></li>
								<li data-target = "#myLb" data-slide-to = "1"></li>
								<li data-target = "#myLb" data-slide-to = "2"></li>
								<li data-target = "#myLb" data-slide-to = "3"></li>
							</ol>
							
							<!-- 轮播内容 -->
							<div class="carousel-inner">
								
								<div class="item active">
									<p class="carousel-p">&nbsp;&nbsp;&nbsp;&nbsp;起底苦逼的充电桩行业：超43家入局，蒙眼狂奔3年！</p>
									<img src="public/imgs/temps/carousel-1.jpg" alt=""/>
								</div>
								
								<div class="item">
									<p class="carousel-p">&nbsp;&nbsp;&nbsp;&nbsp;起底苦逼的充电桩行业：超43家入局，蒙眼狂奔3年！</p>
									<img src="public/imgs/temps/carousel-2.jpg" alt=""/>
								</div>
								
								<div class="item">
									<p class="carousel-p">&nbsp;&nbsp;&nbsp;&nbsp;起底苦逼的充电桩行业：超43家入局，蒙眼狂奔3年！</p>
									<img src="public/imgs/temps/carousel-3.jpg" alt=""/>
								</div>
								
								<div class="item">
									<p class="carousel-p">&nbsp;&nbsp;&nbsp;&nbsp;起底苦逼的充电桩行业：超43家入局，蒙眼狂奔3年！</p>
									<img src="public/imgs/temps/carousel-4.jpg" alt=""/>
								</div>
								
							</div>
							
							<!-- 轮播控制杆 -->
							<a href="#myLb" data-slide="prev" class="carousel-control left">&lsaquo;</a>
							<a href="#myLb" data-slide="next" class="carousel-control right">&rsaquo;</a>
							
						</div>
					</div>
					
					<!-- 侧边图片 -->
					<div class="col-lg-4 col-md-4 col-sm-4 col-xs-4">
									
									<div class="carousel-side-div">
										
										<a href="javascript:;">往期专辑&nbsp;></a>
										<div class="carousel-logo-img"> </div>
										<h3>王者荣耀是毒药？</h3>
										
										<div class="carousel-side-text">
											<p class="carousel-p0"><em>VS</em></p>
											<p class="carousel-p1">75%</p>
											<p class="carousel-p2">严肃整治</p>
											<p class="carousel-p3">25%</p>
											<p class="carousel-p4">不应苛责</p>
											
											<div class="progress">
												<div class="progress-bar progress-bar-danger" style="width: 75%;"></div>
												<div class="progress-bar" style="width: 25%;"></div>
											</div>
											
										</div>
										
									</div>
									
									<img src="public/imgs/temps/side-1.jpg" alt=""/>
									
					</div>
					
				</div>
			</div>
		</section>
		
		<!--  主体新闻部分  -->
		<section class="media-part">
			<div class="container">
				<div class="row">
					
					<div class="col-lg-8 col-md-8 col-sm-8 col-xs-8">
						<ul class="media-list">

							<li class="media">
								<div class="media-div">
									<div class="media-body">
										<a class="media-heading" href="javascript:;">华大基因要冲击17个涨停，人人都能长命百岁？</a>

										<div class="media-img row">

											<div class="col-lg-3 col-md-3 col-sm-3 col-xs-3">
												<img src="public/imgs/temps/news-1.jpg" />
											</div>

											<div class="col-lg-3 col-md-3 col-sm-3 col-xs-3">
												<img src="public/imgs/temps/news-1.jpg" />
											</div>

											<div class="col-lg-3 col-md-3 col-sm-3 col-xs-3">
												<img src="public/imgs/temps/news-1.jpg" />
											</div>

											<div class="col-lg-3 col-md-3 col-sm-3 col-xs-3">
												<img src="public/imgs/temps/news-1.jpg" />
											</div>

										</div>

										<div class="media-text">

											<a href="javascript:;">华商韬略</a>
											<p>10:35</p>
											<p>阅读（616）</p>

											<p>
												<i class="fa fa-share-alt"></i>
												&nbsp;分享&nbsp;
												<i class="fa fa-qq fa-style"></i>
												<i class="fa fa-weibo fa-style"></i>
												<i class="fa fa-weixin fa-style"></i>
											</p>

										</div>
									</div>
								</div>

								<hr>

							</li>

							<li class="media">
								<div class="media-div">
									<div class="media-body">

										<div class="media-img row">
											<div class="col-lg-2 col-md-2 col-sm-2 col-xs-2">
												<img src="public/imgs/temps/news-1.jpg" />
											</div>

											<div class="media-text-part col-lg-10 col-md-10 col-sm-10 col-xs-10">
												<a class="media-heading" href="javascript:;">华大基因要冲击17个涨停，人人都能长命百岁？</a>
												<div class="media-text">
													<a href="javascript:;">华商韬略</a>
													<p>10:35</p>
													<p>阅读（616）</p>
													<p>
														<i class="fa fa-share-alt"></i>
														&nbsp;分享&nbsp;
														<i class="fa fa-qq fa-style"></i>
														<i class="fa fa-weibo fa-style"></i>
														<i class="fa fa-weixin fa-style"></i>
													</p>
												</div>
											</div>
										</div>

									</div>
								</div>

								<hr>

							</li>

							<li class="media">
								<div class="media-div">
									<div class="media-body">

										<div class="media-img row">
											<div class="col-lg-2 col-md-2 col-sm-2 col-xs-2">
												<img src="public/imgs/temps/news-1.jpg" />
											</div>

											<div class="media-text-part col-lg-10 col-md-10 col-sm-10 col-xs-10">
												<a class="media-heading" href="javascript:;">华大基因要冲击17个涨停，人人都能长命百岁？</a>
												<div class="media-text">
													<a href="javascript:;">华商韬略</a>
													<p>10:35</p>
													<p>阅读（616）</p>
													<p>
														<i class="fa fa-share-alt"></i>
														&nbsp;分享&nbsp;
														<i class="fa fa-qq fa-style"></i>
														<i class="fa fa-weibo fa-style"></i>
														<i class="fa fa-weixin fa-style"></i>
													</p>
												</div>
											</div>
										</div>

									</div>
								</div>

								<hr>

							</li>


							<li class="main-part-last-li">
								<h4>查看更多</h4>
							</li>

						</ul>
					</div>
					
					<div class="col-lg-4 col-md-4 col-sm-4 col-xs-4">
						<ul class="media-side media-list">

							<li class="media">
								<div class="media-body">
									<h4 class="meida-side-heading media-heading">文章排行</h4>
								</div>
							</li>

							<li class="media">
								<ul>
									<a href="javascript:;"><li class="active media-side-date" id="dayclick">日榜</li></a>
									<a href="javascript:;"><li id="weekclick">周榜</li></a>
								</ul>
							</li>

							<div id="day">

								<li class="media-side-li-3 media">
									<div class="media-body">
										<p>1</p>
										<h4 class="media-heading">
											<a href="javascript:;">只为圈地 共享单车竞争惨烈 ​微博传出疑似ofo运维人员被…</a>
										</h4>
									</div>
								</li>

								<li class="media-side-ul-li media">
									<div class="media-body">
										<p>2</p>
										<h4 class="media-heading">
											<a href="javascript:;">人工智能最强年中盘点：…</a>
										</h4>
										<a class="media-side-author" href="javascript:;">智东西</a>
									</div>
								</li>

								<li class="media-side-ul-li media">
									<div class="media-body">
										<p>3</p>
										<h4 class="media-heading">
											<a href="javascript:;">人工智能最强年中盘点：…</a>
										</h4>
										<a class="media-side-author" href="javascript:;">智东西</a>
									</div>
								</li>

							</div>

							<div id="week">

								<li class="media-side-li-3 media">
									<div class="media-body">
										<p>1</p>
										<h4 class="media-heading">
											<a href="javascript:;">自动驾驶汽车为何加装多种传感器？一张图给你答案</a>
										</h4>
									</div>
								</li>

								<li class="media-side-ul-li media">
									<div class="media-body">
										<p>2</p>
										<h4 class="media-heading">
											<a href="javascript:;">人工智能最强年中盘点：…</a>
										</h4>
										<a class="media-side-author" href="javascript:;">智东西</a>
									</div>
								</li>

								<li class="media-side-ul-li media">
									<div class="media-body">
										<p>3</p>
										<h4 class="media-heading">
											<a href="javascript:;">人工智能最强年中盘点：…</a>
										</h4>
										<a class="media-side-author" href="javascript:;">智东西</a>
									</div>
								</li>

							</div>

						</ul>
					</div>
					
				</div>
			</div>
		</section>


		<!-- 固定二维码返回顶部 -->
		<ul class="erweima">
			<li id="showerweima"></li>
			<li id="scrolltop"></li>
		</ul>
			<div class="download-qrcode">
				<div class="qrcode-img">
					<img src="public/imgs/logos/news-qrcode_8fe3c4d.png">
				</div>
				<div class="qrcode-slogan">
					<h3>百度新闻客户端</h3>
					<ul>
						<li>扫描二维码下载</li>
						<li>订阅“百家”频道</li>
						<li>观看更多百家精彩新闻</li>
					</ul>
				</div>
			</div>

		<!--  页尾部分   -->
		<?php $_smarty_tpl->_subTemplateRender("file:home/footer.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

		
		<!-- 自定义操作 -->
		<?php echo '<script'; ?>
 src="public/js/operation.js"><?php echo '</script'; ?>
>


		
	</body>
</html><?php }
}
