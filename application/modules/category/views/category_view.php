<div class="page-header">
				<div class="container">
					<div class="row">
						<div class="col-md-10">
							<ul class="page-header-breadcrumb">
									
								<li><a href="<?php echo base_url('Home/') ?>">Home</a></li>
								<?php $data_category = $data_categories['0']; ?> 
								<li><?php echo $data_category->category;?></li>
							
							<h1><?php echo $data_category->category;?></h1>
						</div>
					</div>
				</div>
			</div>		<!-- section -->
		<div class="section">
			<!-- container -->
			<div class="container">
				<!-- row -->
				<div class="row">
					<div class="col-md-8">
						<div class="row">
					<?php 
						$index=0;
						foreach ($data_categories as $data_category) { 
							if($index==0) { ?>
							<!-- post -->
							<div class="col-md-12">
								<div class="post post-thumb">
									<a class="post-img" href="<?php echo base_url('Post_Blog/Post_Blog/post_data/'.$data_category->id) ?>"><img src="<?php echo base_url();?>assets/img/<?php echo $data_category->image; ?>" alt=""></a>
									<div class="post-body">
										<div class="post-meta">
											<a class="post-category cat-2" href="<?php echo base_url('Post_Blog/Post_Blog/post_data/'.$data_category->id) ?>"><?php echo $data_category->category; ?></a>
											<span class="post-date"><?php echo $data_category->date; ?></span>
										</div>
										<h3 class="post-title"><a href="<?php echo base_url('Post_Blog/Post_Blog/post_data/'.$data_category->id) ?>"><?php echo $data_category->title; ?></a></h3>
									</div>
								</div>
							</div>
							<!-- /post -->
					<?php } else { ?>		
							<!-- post -->
							<div class="col-md-6">
								<div class="post">
									<a class="post-img" href="<?php echo base_url('Post_Blog/Post_Blog/post_data/'.$data_category->id)  ?>"><img src="<?php echo base_url();?>assets/img/<?php echo $data_category->image; ?>" alt=""></a>
									<div class="post-body">
										<div class="post-meta">
											<a class="post-category cat-2" href="<?php echo base_url('Post_Blog/Post_Blog/post_data/'.$data_category->id)  ?>"><?php echo $data_category->category; ?></a>
											<span class="post-date"><?php echo $data_category->date; ?></span>
										</div>
										<h3 class="post-title"><a href="<?php echo base_url('Post_Blog/Post_Blog/post_data/'.$data_category->id)  ?>"><?php echo $data_category->title; ?></a></h3>
									</div>
								</div>
							</div>
							<!-- /post -->
						<?php } ?>
							<?php $index++;  }?>

							
							
							<div class="clearfix visible-md visible-lg"></div>
							
							<!-- ad -->
							<div class="col-md-12">
								<div class="section-row">
									<a href="#">
										<img class="img-responsive center-block" src="<?php echo base_url();?>assets/img/ad-2.jpg" alt="">
									</a>
								</div>
							</div>
							<!-- ad -->
							<?php foreach ($data_categories as $data_category): ?>
							<!-- post -->
							<div class="col-md-12">
								<div class="post post-row">
									<a class="post-img" href="<?php echo base_url('Post_Blog/Post_Blog/post_data/'.$data_category->id)  ?>"><img src="<?php echo base_url();?>assets/img/<?php echo $data_category->image; ?>" alt=""></a>
									<div class="post-body">
										<div class="post-meta">
											<a class="post-category cat-2" href="<?php echo base_url('Post_Blog/Post_Blog/post_data/'.$data_category->id)  ?>"><?php echo $data_category->category; ?></a>
											<span class="post-date"><?php echo $data_category->date; ?></span>
										</div>
										<h3 class="post-title"><a href="<?php echo base_url('Post_Blog/Post_Blog/post_data/'.$data_category->id)  ?>"><?php echo $data_category->title; ?></a></h3>
										<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam...</p>
									</div>
								</div>
							</div>
							<!-- /post -->
							<?php endforeach; ?>
							
							
							<div class="col-md-12">
								<div class="section-row">
									<button class="primary-button center-block">Load More</button>
								</div>
							</div>
						</div>
					</div>
					
					<div class="col-md-4">
						<!-- ad -->
						<div class="aside-widget text-center">
							<a href="#" style="display: inline-block;margin: auto;">
								<img class="img-responsive" src="./img/ad-1.jpg" alt="">
							</a>
						</div>
						<!-- /ad -->
						
						<!-- post widget -->
						<!-- <div class="aside-widget">
							<div class="section-title">
								<h2>Most Read</h2>
							</div>
                         <?php foreach($pop_articles as $pop_article) :?>
							<div class="post post-widget">
									<a class="post-img" href="<?php echo base_url('Post_Blog/Post_Blog/post_data/'.$pop_article->id) ?>"><img src="<?php echo base_url('');?>assets/img/<?php echo $pop_article->image; ?>" alt=""></a>
																<div class="post-body">
									<h3 class="post-title"><a href="<?php echo base_url('Post_Blog/Post_Blog/post_data/'.$pop_article->id);?>"><?php echo $pop_article->title; ?> </a></h3>
								</div>
							</div>
							<?php endforeach; ?>
						
						</div> -->
						<!-- /post widget -->
						
						<!-- catagories -->
						<!-- <div class="aside-widget">
							<div class="section-title">
								<h2>Catagories</h2>
							</div>
							<div class="category-widget">
								<ul>
									<li><a href="<?php echo base_url('Category/Category/category_data/WEB DESIGN') ?>" class="cat-1">Web Design<span>340</span></a></li>
									<li><a href="<?php echo base_url('Category/Category/category_data/JAVASCRIPT') ?>" class="cat-2">JavaScript<span>74</span></a></li>
									<li><a href="<?php echo base_url('Category/Category/category_data/PHP') ?>" class="cat-4">Php<span>41</span></a></li>
									<li><a href="<?php echo base_url('Category/Category/category_data/CSS') ?>" class="cat-3">CSS<span>35</span></a></li>
								</ul>
							</div>
						</div>
 -->						<!-- /catagories -->
						
						<!-- tags -->
						<div class="aside-widget">
							<div class="tags-widget">
								<ul>
									<li><a href="#">Chrome</a></li>
									<li><a href="<?php echo base_url('Category/Category/category_data/CSS') ?>">CSS</a></li>
									<li><a href="#">Tutorial</a></li>
									<li><a href="#">Backend</a></li>
									<li><a href="<?php echo base_url('Category/Category/category_data/PHP') ?>">PHP</a></li>
									<li><a href="#">Design</a></li>
									<li><a href="#">Development</a></li>
									<li><a href="<?php echo base_url('Category/Category/category_data/JAVASCRIPT')?>">JavaScript</a></li>
									<li><a href="<?php echo base_url('Home/') ?>">Website</a></li>
								</ul>
							</div>
						</div>
						<!-- /tags -->
						
						<!-- archive -->
						<div class="aside-widget">
							<div class="section-title">
								<h2>Archive</h2>
							</div>
							<div class="archive-widget">
								<ul>
									<li><a href="#">Jan 2018</a></li>
									<li><a href="#">Feb 2018</a></li>
									<li><a href="#">Mar 2018</a></li>
								</ul>
							</div>
						</div>
						<!-- /archive -->
					</div>
				</div>
				<!-- /row -->
			</div>
			<!-- /container -->
		</div>
		<!-- /section -->

		

		<!-- jQuery Plugins -->
		<!-- <script src="js/jquery.min.js"></script>
		<script src="js/bootstrap.min.js"></script>
		<script src="js/main.js"></script>

	</body>
</html> -->
