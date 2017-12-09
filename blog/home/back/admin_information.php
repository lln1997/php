<?php
require_once("../../admin/back/admin_information.php");
?>
<!DOCTYPE html>
<html>
<head>

<!-- for-mobile-apps -->
<head>
	<meta charset="UTF-8">
	<title>管理员信息</title>
	<link rel="stylesheet" href="../../css/navigation.css" type="text/css">

	<script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false);
		function hideURLbar(){ window.scrollTo(0,1); } </script>
	<!-- //for-mobile-apps -->
	<link href="../../css/bootstrap.css" rel="stylesheet" type="text/css" media="all" />
	<link href="../../css/style0.css" rel="stylesheet" type="text/css" media="all" />
	<!-- js -->
	<script src="../../js/jquery-1.11.1.min.js"></script>
	<script src="../../js/loading.js"></script>

	<!-- //js -->
	<!-- <link href='http://fonts.useso.com/css?family=Open+Sans:400,300,300italic,400italic,600,600italic,700,700italic,800,800italic' rel='stylesheet' type='text/css'>
	<link href='http://fonts.useso.com/css?family=Great+Vibes' rel='stylesheet' type='text/css'>
	<link href='http://fonts.useso.com/css?family=Comfortaa:400,300,700' rel='stylesheet' type='text/css'> -->
</head>
	
<body>
<!-- banner-body -->
	<div class="banner-body">
		<div class="container">
			<div class="banner-body-content">
			<div class="col-xs-3 banner-body-left">
				<div class="logo">
					<img src="../../images/2.png" id="pic">
				</div>
				<div class="top-nav">
					<nav class="navbar navbar-default">
					<!-- Brand and toggle get grouped for better mobile display -->
						<div class="navbar-header">
						  <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
							<span class="sr-only">Toggle navigation</span>
							<span class="icon-bar"></span>
							<span class="icon-bar"></span>
							<span class="icon-bar"></span>
						  </button>
						</div>
						<!-- Brand and toggle get grouped for better mobile display -->
						<div class="navbar-header">
						  <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
							<span class="sr-only">Toggle navigation</span>
							<span class="icon-bar"></span>
							<span class="icon-bar"></span>
							<span class="icon-bar"></span>
						  </button>
						</div>

						<!-- Collect the nav links, forms, and other content for toggling -->
						<div class="collapse navbar-collapse nav-wil" id="bs-example-navbar-collapse-1">
							<nav class="stroke">
								<ul class="nav navbar-nav">
									<li><a href="back-stage.html" class="hvr-underline-from-left"><i class="home1"></i>后台管理</a></li>
									<li><a href="all_persons.php" class="hvr-underline-from-left"><i class="picture1"></i>用户</a></li>
									<li><a href="all_blogs.php" class="hvr-underline-from-left"><i class="edit1"></i>博文</a></li>
									<li class="active"><a href="all_admins.php"><i class="text-size"></i>管理员</a></li>
									<li><a href="../fore/all_blogs.php" class="hvr-underline-from-left"><i class="envelope1"></i>返回前台</a></li>
								</ul>
							</nav>
						</div>
						<!-- /.navbar-collapse -->
					</nav>
				</div>
			</div>
			<div class="col-xs-9 banner-body-right">
			<a href="../../../index.html" class="logout">退出</a>
					<br><br><br>
				<div class="banner-bottom">
			<br><br><br><br><br><br>
		<span>&nbsp; &nbsp;昵 &nbsp; 称: &nbsp; <?php echo $rows['name'];?></span><br><br><br>
		<span>&nbsp; &nbsp;手机号:&nbsp;<?php echo $rows['telphone'];?></span><br><br><br>
		<span>&nbsp; &nbsp;QQ &nbsp; 号: &nbsp; <?php echo $rows['QQ'];?></span><br><br><br>
		<span>&nbsp; &nbsp;邮 &nbsp; 箱: &nbsp; <?php echo $rows['email'];?> &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; <br><br><br><br><br>&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; </span>
		
		&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;<!-- <a href="all_admins.php">返回</a> -->
					<div class="clearfix"></div>
				</div>
			</div>
			<div class="clearfix"> </div>
			
			
			<div class="clearfix"> </div>
			<div class="footer">
				<div class="footer-left">
					<p>Copyright © 2016 HYBL Team, All Rights Reserved</p>
	                <p>回忆不老团队 版权所有</p>
				</div>
				<div class="footer-right">
					<ul class="social-nav model-3">
						<li><a href="#" class="icon icon-border facebook"></a></li>
						<li><a href="#" class="icon icon-border twitter"></a></li>
						 <li><a href="#" class="icon icon-border googleplus"></a></li>
						 <li><a href="#" class="icon icon-border github"></a></li>
						 <li><a href="#" class="icon icon-border rss"></a></li>
					</ul>
				</div>
				<div class="clearfix"> </div>
			</div>
		</div>
		</div>
	</div>
<!-- //banner-body -->
<!-- for bootstrap working -->
	<script src="../../js/bootstrap.js"></script>
<!-- //for bootstrap working -->
</body>
</html>