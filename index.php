<?php 
	include 'conexion.php'; 

	$sql = "SELECT * FROM tbl_estelares";
    $stmt = $pdo->prepare($sql);
    $stmt->execute();

    // Obtener los resultados como un array asociativo
    $resultados = $stmt->fetchAll(PDO::FETCH_ASSOC);
?>
<!doctype html>
<html lang="en">
<head>
	<?php
		include 'app/head.php';	
	?>
</head>
<body>

	<!-- Container -->
	<div id="container">
		<!-- Header
		    ================================================== -->
		<header class="clearfix header-style3">
			<?php
				include 'app/nav.php';	
			?>
		</header>
		<!-- End Header -->

		<!-- top-images-section 
			================================================== -->
		<section class="top-photo-section">
			<?php
				include 'components/home/slider.php';
			?>
		</section>
		<!-- End top-images section -->

		<!-- fresh-section2 
			================================================== -->
		<?php
			// include 'components/home/banner.php';
		?>
		<!-- End fresh section -->

		<!-- advertise section 
			================================================== -->
		<section class="advertise-section no-padding mt-4" >
			<div class="container">
				<div class="advertise-box">
					<a href="https://snavecloud.com/" title="Descarga de recursos Premium de Freepik, Envato y Motion."><img src="images/home/anuncio.png" alt=""></a>
				</div>
			</div>
		</section>
		<!-- End advertise section -->

		<!-- image-posts section 
			================================================== -->
		<!--<section class="image-posts-section">
			<div class="container">
				<div class="row">
					<div class="col-md-6">
						<div class="news-post image-post">
							<img src="upload/blog/home6/img1.jpg" alt="">
							<div class="hover-post">
								<a class="category-link" href="#">Food</a>
								<h2><a href="single-post.html">Praesent placerat quiseros.</a></h2>
								<ul class="post-tags">
									<li>3 days ago</li>
									<li><a href="#">2 comments</a></li>
									<li>by <a href="#">John Smith</a></li>
								</ul>
							</div>
						</div>
					</div>
					<div class="col-md-6">
						<div class="news-post image-post">
							<img src="upload/blog/home6/img2.jpg" alt="">
							<div class="hover-post">
								<a class="category-link" href="#">Travel</a>
								<h2><a href="single-post.html">Fusce pellentesque suscipit.</a></h2>
								<ul class="post-tags">
									<li>3 days ago</li>
									<li><a href="#">2 comments</a></li>
									<li>by <a href="#">John Smith</a></li>
								</ul>
							</div>
						</div>
					</div>
				</div>
			</div>
		</section>-->
		<!-- End image-posts section -->

		<!-- blog section 
			================================================== -->
		<section class="blog-section">
			<div class="container">
				<div class="title-section text-center">
					<h1>Noticias Actuales de Perú y el Mundo</h1>
				</div>
				<div class="blog-box grid-style text-center">
					<div class="row">
						<div class="col-lg-4 col-md-6">
							<div class="news-post article-post">
								<div class="image-holder">
									<img src="upload/blog/c9.jpg" alt="">
								</div>
								<a class="text-link" href="#">Lifestyle</a>
								<h2><a href="single-post.html">Nullam malesuada eratut turpis.</a></h2>
								<ul class="post-tags">
									<li>3 days ago</li>
									<li><a href="#">3 comments</a></li>
									<li>by <a href="#">John Smith</a></li>
								</ul>
								<p>Praesent dapibus, neque id cursus faucibus, tortor neque egestas auguae, eu vulputate magna eros eu erat. Aliquam erat volutpat ...</p>
							</div>
						</div>
						<div class="col-lg-4 col-md-6">
							<div class="news-post article-post">
								<div class="image-holder">
									<img src="upload/blog/c10.jpg" alt="">
								</div>
								<a class="text-link" href="#">Lifestyle</a>
								<h2><a href="single-post.html">Morbi in sem quisdui placerat ornare.</a></h2>
								<ul class="post-tags">
									<li>3 days ago</li>
									<li><a href="#">3 comments</a></li>
									<li>by <a href="#">John Smith</a></li>
								</ul>
								<p>Praesent dapibus, neque id cursus faucibus, tortor neque egestas auguae, eu vulputate magna eros eu erat. Aliquam erat volutpat ...</p>
							</div>
						</div>
						<div class="col-lg-4 col-md-6">
							<div class="news-post article-post">
								<div class="image-holder">
									<img src="upload/blog/c11.jpg" alt="">
								</div>
								<a class="text-link" href="#">Lifestyle</a>
								<h2><a href="single-post.html">Morbi in sem quisdui placerat ornare.</a></h2>
								<ul class="post-tags">
									<li>3 days ago</li>
									<li><a href="#">3 comments</a></li>
									<li>by <a href="#">John Smith</a></li>
								</ul>
								<p>Praesent dapibus, neque id cursus faucibus, tortor neque egestas auguae, eu vulputate magna eros eu erat. Aliquam erat volutpat ...</p>
							</div>
						</div>
					</div>
					<div class="row">
						<div class="col-lg-4 col-md-6">
							<div class="news-post article-post">
								<div class="image-holder">
									<img src="upload/blog/f1.jpg" alt="">
								</div>
								<a class="text-link" href="#">Food</a>
								<h2><a href="single-post.html">Cras iaculis ultricies nulla.</a></h2>
								<ul class="post-tags">
									<li>3 days ago</li>
									<li><a href="#">3 comments</a></li>
									<li>by <a href="#">John Smith</a></li>
								</ul>
								<p>Praesent dapibus, neque id cursus faucibus, tortor neque egestas auguae, eu vulputate magna eros eu erat. Aliquam erat volutpat ...</p>
							</div>
						</div>
						<div class="col-lg-4 col-md-6">
							<div class="news-post article-post">
								<div class="image-holder">
									<img src="upload/blog/f2.jpg" alt="">
								</div>
								<a class="text-link" href="#">Food</a>
								<h2><a href="single-post.html">Cras iaculis ultricies nulla.</a></h2>
								<ul class="post-tags">
									<li>3 days ago</li>
									<li><a href="#">3 comments</a></li>
									<li>by <a href="#">John Smith</a></li>
								</ul>
								<p>Praesent dapibus, neque id cursus faucibus, tortor neque egestas auguae, eu vulputate magna eros eu erat. Aliquam erat volutpat ...</p>
							</div>
						</div>
						<div class="col-lg-4 col-md-6">
							<div class="news-post article-post">
								<div class="image-holder">
									<img src="upload/blog/f3.jpg" alt="">
								</div>
								<a class="text-link" href="#">Food</a>
								<h2><a href="single-post.html">Cras iaculis ultricies nulla.</a></h2>
								<ul class="post-tags">
									<li>3 days ago</li>
									<li><a href="#">3 comments</a></li>
									<li>by <a href="#">John Smith</a></li>
								</ul>
								<p>Praesent dapibus, neque id cursus faucibus, tortor neque egestas auguae, eu vulputate magna eros eu erat. Aliquam erat volutpat ...</p>
							</div>
						</div>
					</div>
					<div class="center-button no-padding">
						<a class="button-one" href="#">Load More</a>
					</div>
				</div>
			</div>
		</section>
		<!-- End blog section -->

		<!-- widgets-area section 
			================================================== -->
		<section class="widgets-area-section background-grey">
			<div class="container">
				<div class="sidebar">
					<div class="row">

						<div class="col-lg-4">
							<div class="widget list-widget">
								<h2>Últimos Usuarios</h2>
								<ul class="list-posts">
									<li>
										<a class="text-link" href="#">Nuevo</a>
										<h2><a href="single-post.html">Carlos Martinez</a></h2>
										<ul class="post-tags">
											<li>2 days ago</li>
											<li><a href="#">0 comments</a></li>
										</ul>
									</li>
									<li>
										<a class="text-link" href="#">Nuevo</a>
										<h2><a href="single-post.html">Maria Martinez</a></h2>
										<ul class="post-tags">
											<li>2 days ago</li>
											<li><a href="#">3 comments</a></li>
										</ul>
									</li>
									<li>
										<a class="text-link" href="#">Nuevo</a>
										<h2><a href="single-post.html">Mathias Martinez</a></h2>
										<ul class="post-tags">
											<li>4 days ago</li>
											<li><a href="#">0 comments</a></li>
										</ul>
									</li>
								</ul>
							</div>							
						</div>

						<div class="col-lg-4">
							<div class="widget popular-video-widget">
								<h2>Videos Populares</h2>
								<div class="owl-wrapper">
					
									<div class="owl-carousel" data-num="1">
									
										<div class="item">
											<div class="news-post video-post">
												<div class="image-holder">
													<img src="upload/blog/v1.jpg" alt="">
													<div class="hover-video">
														<a class="video-link iframe" href="https://vimeo.com/81102131"><span><i class="fa fa-play"></i></span></a>
													</div>
												</div>
												<a class="text-link" href="#">Food</a>
												<h2><a href="single-post.html">Aliquam tincidunt mauris eu risus.</a></h2>
												<ul class="post-tags">
													<li>3 days ago</li>
												</ul>
											</div>
										</div>
									
										<div class="item">
											<div class="news-post video-post">
												<div class="image-holder">
													<img src="upload/blog/v2.jpg" alt="">
													<div class="hover-video">
														<a class="video-link iframe" href="https://vimeo.com/81102131"><span><i class="fa fa-play"></i></span></a>
													</div>
												</div>
												<a class="text-link" href="#">Lifestyle</a>
												<h2><a href="single-post.html">Praesent placerat quiseros.</a></h2>
												<ul class="post-tags">
													<li>3 days ago</li>
												</ul>
											</div>
										</div>
									
										<div class="item">
											<div class="news-post video-post">
												<div class="image-holder">
													<img src="upload/blog/v3.jpg" alt="">
													<div class="hover-video">
														<a class="video-link iframe" href="https://vimeo.com/81102131"><span><i class="fa fa-play"></i></span></a>
													</div>
												</div>
												<a class="text-link" href="#">Travel</a>
												<h2><a href="single-post.html">Vestibulum auctor dapibus neque.</a></h2>
												<ul class="post-tags">
													<li>3 days ago</li>
												</ul>
											</div>
										</div>

									</div>
								</div>
							</div>
						</div>

						<div class="col-lg-4">

							<div class="widget category-widget">
								<h2>Categorias</h2>
								<ul class="category-list">
									<li>
										<a href="#">
											Travel <span>24</span>
										</a>
									</li>
									<li>
										<a href="#">
											Lifestyle <span>16</span>
										</a>
									</li>
									<li>
										<a href="#">
											Food <span>8</span>
										</a>
									</li>
								</ul>
							</div>

							<div class="widget social-widget">
								<h2>Social</h2>
								<ul class="social-list">
									<li>
										<a href="#">
											<i class="fa fa-facebook"></i>
											facebook
											<span>25k likes</span>
										</a>
									</li>
									<li>
										<a href="#">
											<i class="fa fa-twitter"></i>
											twitter
											<span>31k followers</span>
										</a>
									</li>
									<li>
										<a href="#">
											<i class="fa fa-instagram"></i>
											instagram
											<span>31k followers</span>
										</a>
									</li>
								</ul>
							</div>
						</div>

					</div>
				</div>
			</div>
		</section>
		<!-- End widgets-area section -->

		<!-- instagram section 
			================================================== -->
		<section class="instagram-section">
			<?php
				// include 'components/instagram.php';	
			?>			
		</section>
		<!-- End instagram section -->

		<!-- footer 
			================================================== -->
		<footer>
			<?php
				include 'app/footer.php';	
			?>
		</footer>
		<!-- End footer -->

	</div>
	<!-- End Container -->

	<div class="preloader">
		<img alt="" src="images/loader.gif">
	</div>
	
	<script src="js/mite-plugins.min.js"></script>
	<script src="js/popper.js"></script>
	<script src="js/bootstrap.min.js"></script>

	<script src="js/script.js"></script>
	
</body>
</html>