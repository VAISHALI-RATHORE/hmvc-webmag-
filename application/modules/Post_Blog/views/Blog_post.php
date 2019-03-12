
		<!-- Page Header -->
			<div id="post-header" class="page-header">
				<div class="background-img" style="background-image: url('<?php echo base_url();?>assets/img/<?php echo $data_article->image; ?>');"></div>
				<div class="container">
					<div class="row">
						<div class="col-md-10">
							<div class="post-meta">
								<a class="post-category cat-2" href="category.html"><?php echo $data_article->category; ?></a>
								<span class="post-date"><?php echo $data_article->date; ?></span>
							</div>
							<h1><?php echo $data_article->title; ?></h1>
						</div>
					</div>
				</div>
			</div>
			<!-- /Page Header -->
    <input type="hidden" name="id" value="<?php echo  $data_article->id; ?>" id="blog_id">
       
		<!-- section -->
		<div class="section">
			<!-- container -->
			<div class="container">
				<!-- row -->
				<div class="row">
					<!-- Post content -->
					<div class="col-md-8">
						<div class="section-row sticky-container">
							<div class="main-post">
								<h3>Lorem Ipsum: when, and when not to use it</h3>
								<p><?php echo $data_article->description; ?></p>
								<p><?php echo $data_article->description; ?></p>
								<figure class="figure-img">
									<img class="img-responsive" src="<?php echo base_url();?>assets/img/<?php echo $data_article->image; ?>" alt="">
									<figcaption>So Lorem Ipsum is bad (not necessarily)</figcaption>
								</figure>
								<p><?php echo $data_article->description; ?></p>
								
								<blockquote class="blockquote">
									I’ve heard the argument that “lorem ipsum” is effective in wireframing or design because it helps people focus on the actual layout, or color scheme, or whatever. What kills me here is that we’re talking about creating a user experience that will (whether we like it or not) be DRIVEN by words. The entire structure of the page or app flow is FOR THE WORDS.
								</blockquote>
							
							</div>
							<div class="post-shares sticky-shares">
								<a href="#" class="share-facebook"><i class="fa fa-facebook"></i></a>
								<a href="#" class="share-twitter"><i class="fa fa-twitter"></i></a>
								<a href="#" class="share-google-plus"><i class="fa fa-google-plus"></i></a>
								<a href="#" class="share-pinterest"><i class="fa fa-pinterest"></i></a>
								<a href="#" class="share-linkedin"><i class="fa fa-linkedin"></i></a>
								<a href="#"><i class="fa fa-envelope"></i></a>
							</div>
						</div>

							<!-- ad -->
						<div class="section-row text-center">
							<a href="#" style="display: inline-block;margin: auto;">
								<img class="img-responsive" src="<?php echo base_url('');?>assets/img/about-4.jpg" alt="">
							</a>
						</div>
						<!-- ad -->
						
						<!-- author -->
						<div class="section-row">
							<div class="post-author">
								<div class="media">
									<div class="media-left">
										<img class="media-object" src="./img/author.png" alt="">
									</div>
									<div class="media-body">
										<div class="media-heading">
											<h3>John Doe</h3>
										</div>
										<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</p>
										<ul class="author-social">
											<li><a href="#"><i class="fa fa-facebook"></i></a></li>
											<li><a href="#"><i class="fa fa-twitter"></i></a></li>
											<li><a href="#"><i class="fa fa-google-plus"></i></a></li>
											<li><a href="#"><i class="fa fa-instagram"></i></a></li>
										</ul>
									</div>
								</div>
							</div>
						</div>
						<!-- /author -->

						<!-- comments -->
						<div class="section-row">
							<div class="section-title">
								<h2>3 Comments</h2>
							</div>

							<div class="post-comments">
								<!-- comment -->
								<!-- <?php foreach ($data_comment as $data) :
									?>
								<div class="media">
									<div class="media-left">
										<img class="media-object" src="<?php echo  base_url('') ?>assets/img/avatar.png" alt="">
									</div>
									<div class="media-body">
										<div class="media-heading">
											<h4><?php echo $data->name ; ?></h4>
											<span class="time"><?php echo $data->date_submit ; ?></span>
											<a href="#" class="reply">Reply</a>
										</div>
										<p><?php echo $data->comment ; ?></p>

									
										
									</div>
								</div>
								/comment -->
								<!-- <?php endforeach; ?>  -->

							
							</div>
							<div id="commment_section"></div>
						</div>
						<!-- /comments -->

						<!-- reply -->
						<div class="section-row">
							<div class="section-title">
								<h2>Leave a reply</h2>
								<p>your email address will not be published. required fields are marked *</p>
							</div>

							<form class="post-reply" method="POST">
								<div class="row">
									<div class="col-md-4">
										<div class="form-group">
											<span>Name *</span>
											<input class="input" type="text" name="name" id="name">
										</div>
									</div>
									<div class="col-md-4">
										<div class="form-group">
											<span>Email *</span>
											<input class="input" type="email" name="email" id="email">
										</div>
									</div>
									<div class="col-md-4">
										<div class="form-group">
											<span>Website</span>
											<input class="input" type="text" name="website" id="website">
										</div>
									</div>
									<div class="col-md-12">
										<div class="form-group">
											<textarea class="input" name="message" id ="comment" placeholder="Message"></textarea>
										</div>
										<button type="button" class="primary-button" id="submit" >Submit</button>
									</div>
								</div>
							</form>
						</div>
						<!-- /reply -->
					</div>
					<!-- /Post content -->

					<!-- aside -->
					<div class="col-md-4">
						<!-- ad -->
						<div class="aside-widget text-center">
							<a href="#" style="display: inline-block;margin: auto;">
								<img class="img-responsive" src="<?php echo base_url('');?>assets/img/about-3.jpg" alt="">
							</a>
						</div>
						<!-- /ad -->
<!-- 
					
						post widget -->
						<div class="aside-widget">
							<div class="section-title">
								<h2>Featured Posts</h2>
							</div>
							<?php  foreach ($promoted_articles as $data): ?>	
					<!-- post -->
					
						<div class="post post-thumb">
							<a class="post-img" href="<?php echo base_url('Post_Blog/Post_Blog/post_data/'.$data->id) ?> "><img src="<?php echo base_url();?>assets/img/<?php echo $data->image; ?> " alt=""></a>
							<div class="post-body">
								<div class="post-meta">
									<a class="post-category cat-2" href="<?php echo  base_url('category/Category/category_data/'.$data->category);?>"><?php echo $data->category; ?> </a>
									<span class="post-date"><?php echo $data->date; ?> </span>
								</div>
								<h3 class="post-title"><a href="<?php echo base_url('Post_Blog/Post_Blog/post_data/'.$data->id) ?>"><?php echo $data->title; ?> </a></h3>
							</div>
						</div>
					</div>
					<!-- /post -->

			     <?php endforeach; ?>

				
						<!-- /post widget -->
						
						<!-- catagories -->
					<!-- 	<div class="aside-widget">
							<div class="section-title">
								<h2>Catagories</h2>
							</div>
							<div class="category-widget">
								<ul>
									<li><a href="#" class="cat-1">Web Design<span>340</span></a></li>
									<li><a href="#" class="cat-2">JavaScript<span>74</span></a></li>
									<li><a href="#" class="cat-4">JQuery<span>41</span></a></li>
									<li><a href="#" class="cat-3">CSS<span>35</span></a></li>
								</ul>
							</div>
						</div> -->
						<!-- /catagories -->
						
						<!-- tags -->
						<div class="aside-widget">
							<div class="tags-widget">
								<ul>
									<li><a href="#">Chrome</a></li>
									<li><a href="#">CSS</a></li>
									<li><a href="#">Tutorial</a></li>
									<li><a href="#">Backend</a></li>
									<li><a href="#">JQuery</a></li>
									<li><a href="#">Design</a></li>
									<li><a href="#">Development</a></li>
									<li><a href="#">JavaScript</a></li>
									<li><a href="#">Website</a></li>
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
									<li><a href="#">January 2018</a></li>
									<li><a href="#">Febuary 2018</a></li>
									<li><a href="#">March 2018</a></li>
								</ul>
							</div>
						</div>
						<!-- /archive -->
					</div>
					<!-- /aside -->
				</div>
				<!-- /row -->
			</div>
			<!-- /container -->
		</div>
		<!-- /section -->

		<!-- /section -->
	  <script src="http://code.jquery.com/jquery-1.11.0.min.js"></script>
<script type="text/javascript">
    $(document).ready(function(){
        $("#submit").click(function(){ 
        
           var comment = $('#comment').val();
           var name = $('#name').val();
           var email = $('#email').val();
           var website = $('#website').val();
           var blog_id = $('#blog_id').val();
            $.ajax({
                url: "<?php echo base_url('Post_Blog/Post_Blog/insert'); ?>",
            	type : 'POST',
            	data: {
                comment: comment,
                name: name,
                email: email,
                website: website,
                blog_id : blog_id,
                },
           
                success : function(res) {
                    array = JSON.parse(res);
                    
			        list = appendHTML(array);
			   
			   
				$('#comment_section').html(list);
                }
            });
        }); 
	});
	function appendHTML(array) {
				var htmlcode = '';
		        for (var i = 0; i < array.length; i++) {
		               		  
					htmlcode += '<div class="post-comments">'+
								
								   '<div class="media">'+
									   '<div class="media-left">'+
										 '<img class="media-object" src="assets/img/avatar.png" alt="">'+
									    '</div>'+
									        '<div class="media-body">'+
										        '<div class="media-heading">'+
											          '<h4>'+
											          array[i].name+
											          '</h4>'+
											         '<span class="time">'+array[i].date_submit+'</span>'+
											          '<a href="#" class="reply">Reply</a>'+
										        '</div>'+
										         '<p>'+array[i].comment+'</p>'+
                                            '</div>'+
								    '</div>'+
							    '</div>'	
		        }
			 	return htmlcode;
			}
</script>



</script>
