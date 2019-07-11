<?php
require('conn.php');
$id = 1;
$sq = "select * from matches where id='$id'";
$rs = mysql_query($sq);
$ro = mysql_fetch_array($rs);
$table = $ro['matchtable'];
$music = $ro['matchsing'];
$musql = "select * from songs where id='$music'";
$ms = mysql_query($musql);
$murow = mysql_fetch_assoc($ms);
$soname = $murow['name'];
$sourl = $murow['url'];
$sopeople = $murow['people'];
$socover = $murow['cover'];
$solrc = $murow['lrc'];
?>
<html>
<!DOCTYPE html>
<html lang="en">

<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>暮光之魂-我的世界服务器官网</title>
<meta name="description" content="">
<meta name="author" content="">
<meta name="keywords" content="">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<!-- Mobile Specific Meta  -->
<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
<!-- Design:stev888|Audit:Ning_yin|Last Edit:2019-7-10|Creation date:2019-7-9 -->
<!-- All css files are included here. -->
<!-- APlayer css -->
<link rel="stylesheet" href="https://oss-img.4mg.top/css/APlayer.min.css">
<!-- Bootstrap fremwork main css -->
<link rel="stylesheet" href="https://oss-img.4mg.top/web/2019/tss/css/bootstrap.min.css">
<!-- Owl Carousel main css -->
<link rel="stylesheet" href="https://oss-img.4mg.top/web/2019/tss/css/owl.carousel.min.css">
<!-- This core.css file contents all plugings css file. -->
<link rel="stylesheet" href="https://oss-img.4mg.top/web/2019/tss/css/core.css">
<!-- Theme main style -->
<link rel="stylesheet" href="https://oss-img.4mg.top/web/2019/tss/css/style.css">
<!-- Responsive css -->
<link rel="stylesheet" href="https://oss-img.4mg.top/web/2019/tss/css/responsive.css">
<!-- User style -->
<link rel="stylesheet" href="https://oss-img.4mg.top/web/2019/tss/css/custom.css">
<!-- Font css-->
<link rel="stylesheet" href="https://oss-img.4mg.top/css/font-awesome.css">
<link rel="stylesheet" href="https://oss-img.4mg.top/css/font-awesome.min.css">
<!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
<!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
<!--[if lt IE 9]>
	<script src="https://oss-img.4mg.top/web/2019/tss/js/html5shiv.js"></script>
	<script src="https://oss-img.4mg.top/web/2019/tss/js/respond.min.js"></script>
	<![endif]-->
</head>
<body id="top">
<!-- preloader area start -->
<div id="preloader">
	<div class="preloader-inner">
		<div class="sk-chasing-dots">
			<div class="sk-child sk-dot1"></div>
			<div class="sk-child sk-dot2"></div>
		</div>
	</div>
</div>
<!-- preloader area end -->
<!-- header area start -->
<?php
include 'header.php';
?>
<!-- header area end -->
<!-- slider area start -->
<section class="slider-area h2-slider" id="slider">
	<!-- slider waves area start -->
	<svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1000 100" preserveAspectRatio="none">
		<path class="elementor-shape-fill" fill="#ffffff" d="M761.9,40.6L643.1,24L333.9,93.8L0.1,1H0v99h1000V1"></path>
	</svg>
	<!-- slider waves area end -->
	<!-- dot animation start-->
	<div class="dot dot-one"></div>
	<div class="dot dot-two"></div>
	<div class="dot dot-three"></div>
	<div class="dot dot-four"></div>
	<!-- dot animation end-->
	<div class="container">
		<div class="row">
			<div class="col-md-10 col-md-offset-1 col-sm-12 col-xs-12">
				<div class="slider-text text-center">
					<h2>我的世界暮光之魂服务器</h2>
					<p>带给你流畅、舒适的游戏体验。</p>
					<div class="slide-action text-center">
						<a class="scroller" href="https://oss-img.4mg.top/app/Minecraft/1.12/1.12.0.apk">立即下载</a>
					</div>
				</div>
			</div>
		</div>
	</div>
</section>
<!-- slider area end -->
<!-- featured area start -->
<section class="feature__area h2__feature" id="features">
	<div class="container">
		<div class="row">
			<div class="featured-item">
				<div class="col-md-4 col-sm-4 col-xs-12">
					<div class="single-featured">
						<div class="meta-icon">
							<svg version="1.1" xmlns="http://www.w3.org/2000/svg" width="60" height="60" viewBox="0 0 32 32">
							<path fill="#306fe0" d="M3.765 20.706h24.471v-15.059h-24.471v15.059zM5.647 7.529h20.706v11.294h-20.706v-11.294zM29.177 1.882h-26.353c-1.557 0-2.824 1.201-2.824 2.679v19.113c0 1.478 1.267 2.679 2.824 2.679h26.353c1.557 0 2.823-1.201 2.823-2.679v-19.113c0-1.478-1.267-2.679-2.823-2.679zM30.118 23.674c0 0.441-0.424 0.796-0.941 0.796h-26.353c-0.518 0-0.941-0.356-0.941-0.796v-19.113c0-0.441 0.423-0.796 0.941-0.796h26.353c0.518 0 0.941 0.356 0.941 0.796v19.113zM9.412 28.235h13.176v1.882h-13.176v-1.882z"></path>
							</svg>
						</div>
						<div class="meta-body">
							<h5>24小时在线</h5>
							<p>暮光之魂我的世界服务器承诺24小时提供服务。</p>
						</div>
					</div>
				</div>
				<div class="col-md-4 col-sm-4 col-xs-12">
					<div class="single-featured">
						<div class="meta-icon">
							<svg version="1.1" xmlns="http://www.w3.org/2000/svg" width="60" height="60" viewBox="0 0 32 32">
							<path fill="#306fe0" d="M0 0v32h32v-32h-32zM1.882 11.294h16.941v18.823h-16.941v-18.823zM30.118 30.118h-9.412v-18.823h9.412v18.823zM1.882 9.412v-7.529h28.235v7.529h-28.235z"></path>
							</svg>
						</div>
						<div class="meta-body">
							<h5>简洁游戏</h5>
							<p>暮光之魂我的世界服务器采用纯生存模式。</p>
						</div>
					</div>
				</div>
				<div class="col-md-4 col-sm-4 col-xs-12">
					<div class="single-featured">
						<div class="meta-icon">
							<svg version="1.1" xmlns="http://www.w3.org/2000/svg" width="60" height="60" viewBox="0 0 32 32">
							<path fill="#306fe0" d="M23.767 12.693l-7.686-12.561-7.927 12.565-8.469-7.215 3.273 24.636h26.080l3.272-24.612-8.544 7.187zM4.606 28.235l-0.25-1.882h23.287l-0.25 1.882h-22.786zM27.893 24.471h-23.785l-1.911-14.376 6.392 5.444 7.467-11.84 7.249 11.844 6.502-5.47-1.914 14.398z"></path>
							</svg>
						</div>
						<div class="meta-body">
							<h5>没有狗托</h5>
							<p>暮光之魂我的世界服务器禁止开启作弊模式。</p>
						</div>
					</div>
				</div>
				<div class="col-md-4 col-sm-4 col-xs-12">
					<div class="single-featured">
						<div class="meta-icon">
							<svg version="1.1" xmlns="http://www.w3.org/2000/svg" width="60" height="60" viewBox="0 0 32 32">
							<path fill="#306fe0" d="M31.232 2.168c-0.1-0.019-2.487-0.459-5.611-0.459-3.962 0-7.206 0.689-9.647 2.048-2.857-1.44-6.144-2.168-9.781-2.168-3.164 0-5.395 0.569-5.487 0.593l-0.706 0.184 0.002 26.176 1.175-0.303c0.021-0.004 2.108-0.533 5.016-0.533 2.724 0 5.216 0.452 7.454 1.323v1.559h4.706v-1.611c2.411-0.919 5.171-1.15 7.266-1.15 2.94 0 5.244 0.424 5.267 0.427l1.114 0.207v-26.148l-0.768-0.145zM1.882 26.178v-22.321c0.849-0.158 2.404-0.386 4.311-0.386 3.315 0 6.285 0.678 8.866 1.965v22.167c-2.641-1.161-5.604-1.779-8.866-1.779-1.824 0-3.337 0.19-4.311 0.354zM30.118 26.236c-1.009-0.132-2.622-0.29-4.499-0.29-3.479 0-6.364 0.561-8.678 1.609v-22.161c2.677-1.468 6.157-1.803 8.678-1.803 1.926 0 3.58 0.183 4.499 0.309v22.336z"></path>
							</svg>
						</div>
						<div class="meta-body">
							<h5>违规处罚</h5>
							<p>暮光之魂我的世界服务器将对违规玩家进行严厉处罚。</p>
						</div>
					</div>
				</div>
				<div class="col-md-4 col-sm-4 col-xs-12">
					<div class="single-featured">
						<div class="meta-icon">
							<svg version="1.1" xmlns="http://www.w3.org/2000/svg" width="60" height="60" viewBox="0 0 32 32">
							<path fill="#306fe0" d="M0 0v32h32v-32h-32zM30.118 30.118h-28.235v-28.235h28.235v28.235zM7.529 19.26v5.21h1.882v-5.21c1.389-0.41 2.411-1.683 2.411-3.202s-1.022-2.791-2.411-3.202v-5.327h-1.882v5.327c-1.389 0.41-2.411 1.683-2.411 3.202s1.022 2.793 2.411 3.202zM8.471 14.588c0.811 0 1.47 0.661 1.47 1.47s-0.659 1.47-1.47 1.47-1.47-0.659-1.47-1.47 0.659-1.47 1.47-1.47zM15.059 15.26v9.21h1.882v-9.21c1.389-0.41 2.411-1.683 2.411-3.202s-1.022-2.792-2.411-3.202v-1.327h-1.882v1.327c-1.389 0.41-2.411 1.683-2.411 3.202s1.022 2.793 2.411 3.202zM16 10.588c0.811 0 1.47 0.661 1.47 1.47s-0.659 1.472-1.47 1.472-1.47-0.661-1.47-1.472 0.659-1.47 1.47-1.47zM23.529 25.256c1.848 0 3.352-1.504 3.352-3.352 0-1.521-1.022-2.791-2.411-3.202v-11.172h-1.882v11.172c-1.389 0.41-2.411 1.683-2.411 3.202 0 1.848 1.504 3.352 3.352 3.352zM23.529 20.431c0.811 0 1.47 0.661 1.47 1.47s-0.661 1.47-1.47 1.47-1.47-0.661-1.47-1.47 0.659-1.47 1.47-1.47z"></path>
							</svg>
						</div>
						<div class="meta-body">
							<h5>游戏简易</h5>
							<p>我的世界是一款风靡全球且容易上手的游戏。</p>
						</div>
					</div>
				</div>
				<div class="col-md-4 col-sm-4 col-xs-12">
					<div class="single-featured">
						<div class="meta-icon">
							<svg version="1.1" xmlns="http://www.w3.org/2000/svg" width="60" height="60" viewBox="0 0 32 32">
							<path fill="#306fe0" d="M16.032-0.066l-16.032 6.063v20.128l16 6.001 16-6.001v-20.126l-15.968-6.065zM28.393 6.641l-4.868 1.826-12.343-4.685 4.847-1.833 12.363 4.693zM16 11.288l-12.388-4.646 4.911-1.856 12.331 4.681-4.855 1.82zM1.882 8.006l13.176 4.941v16.813l-13.176-4.941v-16.813zM16.941 29.76v-16.813l13.177-4.941v16.813l-13.176 4.941z"></path>
							</svg>
						</div>
						<div class="meta-body">
							<h5>极速服务</h5>
							<p>暮光之魂我的世界服务器采用Cloud6服务器，给您带来极速游戏体验。</p>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
</section>
<!-- featured area end -->
<!-- video area start -->
<section class="how-works parallax" data-speed="3" data-bg-image="img/bg/howit.jpg" id="video">
	<div class="container">
		<div class="row">
			<div class="row">
				<div class="col-xs-12 text-center">
					<div class="hw-headline">
						<h4>服务器宣传<b>动画</b></h4>
						<p>让我们欣赏一下服务器的美丽风光！
						</p>
					</div>
					<div class="hw-video-btn">
						<a class="video-link" href="https://oss-img.4mg.top/images/2019/mgzh/gg.png">
						<i class="fa fa-play" style="margin-top:13px">
						</i>
						</a>
					</div>
				</div>
			</div>
		</div>
	</div>
</section>
<!-- video area end -->
<!-- team member area start -->
<section class="team__area" id="team">
	<div class="container">
		<div class="row">
			<div class="col-md-6 col-md-offset-3 col-sm-12 col-xs-12">
				<div class="section-title">
					<h2>服务器<b>管理团队</b></h2>
					<p>暮光之魂的服务器管理团队将时刻对服务器进行维护。</p>
				</div>
			</div>
		</div>
		<div class="row">
			<div class="col-md-3 col-sm-3 col-xs-12">
				<div class="single__member">
					<div class="t_member_thumb">
						<img src="https://oss-img.4mg.top/web/2019/tss/img/65_avatar_big.jpg" alt="team member">
					</div>
					<div class="member__info">
						<h4>Karry</h4>
						<p>管理员</p>
						<ul class="tm__social">
							<li><a href="#"><span class="fa fa-qq"></span></a></li>
							<li><a href="#"><span class="fa fa-weixin"></span></a></li>
						</ul>
					</div>
				</div>
			</div>
			<div class="col-md-3 col-sm-3 col-xs-12">
				<div class="single__member">
					<div class="t_member_thumb">
						<img src="http://q.qlogo.cn/headimg_dl?bs=qq&dst_uin=1143359890&fid=blog&spec=640" alt="team member">
					</div>
					<div class="member__info">
						<h4>Stev888</h4>
						<p>管理员</p>
						<ul class="tm__social">
							<li><a href="#"><span class="fa fa-qq"></span></a></li>
							<li><a href="#"><span class="fa fa-weixin"></span></a></li>
						</ul>
					</div>
				</div>
			</div>
			<div class="col-md-3 col-sm-3 col-xs-12">
				<div class="single__member">
					<div class="t_member_thumb">
						<img src="http://q.qlogo.cn/headimg_dl?bs=qq&dst_uin=1361521433&fid=blog&spec=640" alt="team member">
					</div>
					<div class="member__info">
						<h4>Ning_yin</h4>
						<p>管理员</p>
						<ul class="tm__social">
							<li><a href="#"><span class="fa fa-qq"></span></a></li>
							<li><a href="#"><span class="fa fa-weixin"></span></a></li>
						</ul>
					</div>
				</div>
			</div>
			<div class="col-md-3 col-sm-3 col-xs-12">
				<div class="single__member">
					<div class="t_member_thumb">
						<img src="http://q.qlogo.cn/headimg_dl?bs=qq&dst_uin=399741771&fid=blog&spec=640" alt="team member">
					</div>
					<div class="member__info">
						<h4>Xukonvoid</h4>
						<p>管理员</p>
						<ul class="tm__social">
							<li><a href="#"><span class="fa fa-qq"></span></a></li>
							<li><a href="#"><span class="fa fa-weixin"></span></a></li>
						</ul>
					</div>
				</div>
			</div>
		</div>
	</div>
</section>
<!-- team member area end -->
<!-- joint us start -->
<section class="subscribe-area subscribe_two" id="joint us">
	<div class="container">
		<div class="row">
			<div class="col-md-6 col-md-offset-3 col-sm-12 col-xs-12">
				<div class="section-title">
					<h2>加入我们</b></h2>
					<p>关注我们的游戏交流群，我们将第一时间发送通知给你！</p>
				</div>
			</div>
		</div>
		<div class="row">
			<div class="subscribe-form">
				<div class="col-md-8 col-md-offset-2 col-sm-12 col-xs-12">
					<form action="link.php">
						<input type="text" name="qq" placeholder="输入你的QQ号" maxlength="10">
						<input type="submit" value="提交">
					</form>
				</div>
			</div>
		</div>
	</div>
</section>
<!-- joint us end -->
<!-- footer area start -->
<?php
include 'footer.php';
?>
<!-- footer area end -->
<!-- scrollup area start -->
<a class="scrollup__btn scroller" href="#top"><i class="fa fa-angle-up"  style="margin-top:6px"></i></a>
<!-- scrollup area end -->
<!-- Placed js at the end of the document so the pages load faster -->

<!-- jquery latest version -->
<script src="https://oss-img.4mg.top/web/2019/tss/js/jquery-3.2.0.min.js"></script>
<!-- Bootstrap framework js -->
<script src="https://oss-img.4mg.top/web/2019/tss/js/bootstrap.min.js"></script>
<!-- All js plugins included in this file. -->
<script src="https://oss-img.4mg.top/web/2019/tss/js/plugins.js"></script>
<!-- Theme js file that contents all jQuery plugins activation. -->
<script src="https://oss-img.4mg.top/web/2019/tss/js/theme.js"></script>
<div id="aplayer"></div>
</body>
<script src="https://oss-img.4mg.top/js/APlayer.min.js"></script>
<script>
const ap = new APlayer({
    container: document.getElementById('aplayer'),
    fixed: true,
    autoplay: true,
    theme: '#ff149300',
    loop: 'all',
    order: 'random',
    preload: 'auto',
    volume: 1,
    mutex: true,
    listFolded: false,
    listMaxHeight: 90,
    lrcType: 3,
    audio: [{
        name: '<?php echo "$soname"; ?>',
        artist: '<?php echo "$sopeople"; ?>',
        url: '<?php echo "$sourl"; ?>',
        cover: '<?php echo "$socover"; ?>',
        lrc: '<?php echo "$solrc"; ?>'
    }]
});
</script>
</html>
