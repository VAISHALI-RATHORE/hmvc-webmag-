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
				<!-- section -->
		<div class="section">
			<!-- container -->
			<div class="container">
				<!-- row -->
				<div class="row">
				  <?php  foreach ($promoted_articles as $article): ?>	
					<!-- post -->
					<div class="col-md-6">
						<div class="post post-thumb">
							<a class="post-img" href="<?php echo base_url('Post_Blog/Post_Blog/post_data/'.$article->id) ?>"><img src="<?php echo base_url();?>assets/img/<?php echo $article->image; ?>" alt=""></a>
							<div class="post-body">
								<div class="post-meta">
									<a class="post-category cat-2" href="<?php echo  base_url('category/Category/category_data/'.$article->category);?>"><?php echo $article->category; ?> </a>
									<span class="post-date"><?php echo $article->date; ?> </span>
								</div>
								<h3 class="post-title"><a href="<?php echo base_url('Post_Blog/Post_Blog/post_data/'.$article->id) ?>"><?php echo $article->title; ?> </a></h3>
							</div>
						</div>
					</div>
					<!-- /post -->

			     <?php endforeach; ?>
				</div>

				<!-- /row -->

				<div class="row article">
					<div class="col-md-8">
						<div class="row">
							<div class="col-md-12">
								<div class="section-title">
									<h2>Recent Posts</h2>
								</div>
							</div>
					<?php 
						$index=0;
						foreach ($latest_articles as $article) { 
							if($index==0) { ?>
							<!-- post -->
							<div class="col-md-12">
								<div class="post post-thumb">
									<a class="post-img" href="<?php echo base_url('Post_Blog/Post_Blog/post_data/'.$article->id) ?>"><img src="<?php echo base_url();?>assets/img/<?php echo $article->image; ?>" alt=""></a>
									<div class="post-body">
										<div class="post-meta">
											<a class="post-category cat-3" href="<?php echo base_url('Category/Category/category_data/'.$article->category) ?>"><?php echo $article->category; ?></a>
											<span class="post-date"><?php echo $article->date; ?></span>
										</div>
										<h3 class="post-title"><a href="<?php echo base_url('Post_Blog/Post_Blog/post_data/'.$article->id) ?>"><?php echo $article->title; ?></a></h3>
									</div>
								</div>
							</div>
							<!-- /post -->
							<?php } else { ?>
							<!-- post -->
							<div class="col-md-6">
								<div class="post">
									<a class="post-img" href="<?php echo base_url('Post_Blog/Post_Blog/post_data/'.$article->id) ?>"><img src="<?php echo base_url('');?>assets/img/<?php echo $article->image; ?>" alt=""></a>
									<div class="post-body">
										<div class="post-meta">
											<a class="post-category cat-4" href="<?php echo base_url('category/Category/category_data/'.$article->category) ?>"><?php echo $article->category; ?></a>
											<span class="post-date"><?php echo $article->date; ?></span>
										</div>
										<h3 class="post-title"><a href="<?php echo base_url('Post_Blog/Post_Blog/post_data/'.$article->id) ?>"><?php echo $article->title; ?></a></h3>
									</div>
								</div>
							</div>
							<!-- /post -->
							
							<?php } if($index%2==0) { ?>
							<div class="clearfix visible-md visible-lg"></div>
							<?php } ?>

						<?php $index++; } ?>
	
							
						 	<div class="col-md-12">
								<div class="section-row">
									<button class="primary-button center-block">Load More</button>
								</div>
							</div>

						</div>
					</div>
                 <?php 	$this->load->view('read_category') ; ?>
				</div>
				<!-- /row -->
			</div>
			<!-- /container -->
		</div>
			<!-- /section -->
			<!-- jQuery Plugins -->
		<script src="<?php echo base_url();?>assets/js/main.js"></script>

		<script src="<?php echo base_url();?>assets/js/jquery.min.js"></script>
		<script src="<?php echo base_url();?>assets/js/bootstrap.min.js"></script>
		

	</body>
</html>	

	