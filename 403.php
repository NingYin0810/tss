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
<meta charset="utf-8">
<title>暮光之魂我的世界服务器官网-403错误</title>
<meta name="description" content="">
<meta name="author" content="">
<meta name="keywords" content="">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<!-- Mobile Specific Meta  -->
<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">

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
					<h2>403 Forbidden</h2>
					<p>网页正在制作中，您暂时不能访问哦！</p>
					<div class="slide-action text-center">
						<a class="scroller" href="#" onClick="javascript :history.back(-1);">返回上一页</a>
					</div>
				</div>
			</div>
		</div>
	</div>
</section>
<!-- slider area end -->
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
