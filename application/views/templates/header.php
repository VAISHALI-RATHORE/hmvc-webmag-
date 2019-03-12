<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="utf-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		 <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->

		<title>Blog Template</title>

		<!-- Google font -->
		<link href="https://fonts.googleapis.com/css?family=Nunito+Sans:700%7CNunito:300,600" rel="stylesheet"/> 

		<!-- Bootstrap -->


		<link type="text/css" rel="stylesheet" href="<?php echo base_url();?>assets/css/bootstrap.min.css"/>

		<!-- Font Awesome Icon -->
		<link type="text/css" rel="stylesheet" href="<?php echo base_url();?>assets/css/font-awesome.min.css"/>

		<!-- Custom stlylesheet -->
		<link type="text/css" rel="stylesheet" href="<?php echo base_url();?>assets/css/Style.css"/>

		<!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
		<!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
		<!--[if lt IE 9]>
		  <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
		  <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
		<![endif]-->
   </head>
	<body>
		<!-- Header -->
		<header id="header">
			<!-- Nav -->
			<div id="nav">
				<!-- Main Nav -->
				<div id="nav-fixed">
					<div class="container">
						<!-- logo -->
						<div class="nav-logo">
							<a href="<?php echo base_url('Home/') ?>" class="logo"><img src="<?php echo base_url();?>assets/img/logo.png" alt=""></a>
						</div>
						<!-- /logo -->

						<!-- nav -->
						<ul class="nav-menu nav navbar-nav">
							<li><a href="<?php echo base_url('Home/') ?>">News</a></li>
							<li><a href="<?php echo base_url('Home/') ?>">Popular</a></li>
                        
							<li class="cat-1"><a href="<?php echo base_url('Category/Category/category_data/WEB DESIGN') ?>">Web Design</a></li>
							<li class="cat-2"><a href="<?php echo base_url('Category/Category/category_data/JAVASCRIPT') ?>">JavaScript</a></li>
							<li class="cat-3"><a href="<?php echo base_url('Category/Category/category_data/CSS') ?>">Css</a></li>
							<li class="cat-4"><a href="<?php echo base_url('Category/Category/category_data/PHP') ?>">Php</a></li>
						</ul>
						<!-- /nav -->

						<!-- search & aside toggle -->
						<div class="nav-btns">
							<button class="aside-btn"><i class="fa fa-bars"></i></button>
							<button class="search-btn"><i class="fa fa-search"></i></button>
							<div class="search-form">
								<input class="search-input" type="text" name="search" placeholder="Enter Your Search ...">
								<button class="search-close"><i class="fa fa-times"></i></button>
							</div>
						</div>
						<!-- /search & aside toggle -->
					</div>
				</div>
				<!-- /Main Nav -->

				<!-- Aside Nav -->
				<div id="nav-aside">
					<!-- nav -->
					<div class="section-row">
						<ul class="nav-aside-menu">
							<li><a href="<?php echo base_url('Home/');?>">Home</a></li>
							<li><a href="<?php echo base_url('about/about/about_data');?>">About Us</a></li>
							<li><a href="#">Join Us</a></li>
							<li><a href="#">Advertisement</a></li>
							<li><a href="<?php echo base_url('contact/contact/contact_data');?>">Contacts</a></li>
						</ul>
					</div>
					<!-- /nav -->

					<!-- widget posts -->
					
					<div class="section-row">
						<h3>Recent Posts</h3>
						<?php foreach ($latest_articles as $article) : ?>
						<div class="post post-widget">
							<a class="post-img" href="<?php echo base_url('Post_Blog/Post_Blog/post_data/'.$article->id)?>"><img src="<?php echo  base_url('');?>assets/img/<?php echo $article->image; ?>" alt=""></a>
							<div class="post-body">
								<h3 class="post-title"><a href="<?php echo base_url('Post_Blog/Post_Blog/post_data/'.$article->id) ?>"><?php echo $article->title ;?></a></h3>
							</div>
						</div>
                    <?php endforeach ; ?>

					<!-- social links -->
					<div class="section-row" style="margin-bottom:0;">
						<ul class="nav-aside-social">
							<li><a href="#"><i class="fa fa-facebook"></i></a></li>
							<li><a href="#"><i class="fa fa-twitter"></i></a></li>
							<li><a href="#"><i class="fa fa-google-plus"></i></a></li>
							<li><a href="#"><i class="fa fa-pinterest"></i></a></li>
						</ul>
					</div>
					<!-- /social links -->

					<!-- aside nav close -->
					<button class="nav-aside-close"><i class="fa fa-times"></i></button>
					<!-- /aside nav close -->
				</div>
				<!-- Aside Nav -->
			</div>
			<!-- /Nav -->
		</header>
		<!-- /Header -->
		<!-- jQuery Plugins -->
		<script src="<?php echo base_url();?>assets/js/main.js"></script>
		<script src="<?php echo base_url();?>assets/js/jquery.min.js"></script>
		<script src="<?php echo base_url();?>assets/js/bootstrap.min.js"></script>
		

	</body>
</html>	


