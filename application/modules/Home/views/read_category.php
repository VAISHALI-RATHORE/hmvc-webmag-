
					<div class="col-md-4">
						<!-- post widget -->
						<div class="aside-widget">
							<div class="section-title">
								<h2>Most Read</h2>
							</div>
                             <?php foreach($pop_articles as $pop_article) :?>
							<div class="post post-widget">
									<a class="post-img" href="<?php echo base_url('Home/post_data/'.$pop_article->id) ?>"><img src="<?php echo base_url('');?>assets/img/<?php echo $pop_article->image; ?>" alt=""></a>
								
								<div class="post-body">
									<h3 class="post-title"><a href="<?php echo base_url('home/post_data/'.$pop_article->id);?>"><?php echo $pop_article->title; ?> </a></h3>
								</div>
							</div>
							<?php endforeach; ?>
						</div>
						<!-- /post widget -->

						<div class="aside-widget">
							<div class="section-title">
								<h2>Catagories</h2>
							</div>
							<div class="category-widget">
								<ul>
									<li><a href="<?php echo base_url('home/category_data/WEB DESIGN') ?>" class="cat-1">Web Design<span>340</span></a></li>
									<li><a href="<?php echo base_url('home/category_data/JAVASCRIPT') ?>" class="cat-2">JavaScript<span>74</span></a></li>
									<li><a href="<?php echo base_url('home/category_data/PHP') ?>"class="cat-4">Php<span>41</span></a></li>
									<li><a href="<?php echo base_url('home/category_data/CSS') ?>" class="cat-3">CSS<span>35</span></a></li>
								</ul>
							</div>
						</div>
						
					</div>