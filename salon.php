<?php
include 'db.php';
$conn = new DBC;
$conn-> DBI();
$q = 'select * from board';
$conn -> DBQ($q);
$conn -> DBE();
 ?>
<!DOCTYPE html>
<html lang="zxx">
<head>
	<title>어서오시개 | eCommerce Template</title>
	<meta charset="UTF-8">
	<meta name="description" content=" 어서오시개 | eCommerce Template">
	<meta name="keywords" content="어서오시개, eCommerce, creative, html">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<!-- Favicon -->
	<link href="img/favicon.ico" rel="shortcut icon"/>

	<!-- Google Font -->
	<link href="https://fonts.googleapis.com/css?family=Josefin+Sans:300,300i,400,400i,700,700i" rel="stylesheet">
	<link href="//maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
	<script src="//maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
	<script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>


	<!-- Stylesheets -->
	<link rel="stylesheet" href="css/bootstrap.min.css"/>
	<link rel="stylesheet" href="css/font-awesome.min.css"/>
	<link rel="stylesheet" href="css/flaticon.css"/>
	<link rel="stylesheet" href="css/slicknav.min.css"/>
	<link rel="stylesheet" href="css/jquery-ui.min.css"/>
	<link rel="stylesheet" href="css/owl.carousel.min.css"/>
	<link rel="stylesheet" href="css/animate.css"/>
	<link rel="stylesheet" href="css/style.css"/>


	<!--[if lt IE 9]>
		  <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
	  <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
	<![endif]-->

</head>
<body>
	<!-- Page Preloder -->
	<div id="preloder">
		<div class="loader"></div>
	</div>

	<!-- Header section -->
	<header class="header-section">
		<div class="header-top">
			<div class="container">
				<div class="row">
					<div class="col-lg-2 text-center text-lg-left">
						<!-- logo -->
						<a href="./index.php" class="site-logo">
							<img src="img/logo.png" alt="">
						</a>
					</div>
					<div class="col-xl-6 col-lg-5">
						<form class="header-search-form">
							<input type="text" placeholder="Search on 어서오시개 ....">
							<button><i class="flaticon-search"></i></button>
						</form>
					</div>
					<div class="col-xl-4 col-lg-5">
						<div class="user-panel">
							<div class="up-item">
								<i class="flaticon-profile"></i>
								<a href="./login.php">로그인</a>/<a href="./register.php">회원가입</a>
							</div>
							<div class="up-item">
								<div class="shopping-card">
									<i class="flaticon-bag"></i>
									<span>0</span>
								</div>
								<a href="./cart.php">장바구니</a>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
		<nav class="main-navbar">
			<div class="container">
				<!-- menu -->
				<ul class="main-menu">
					<li><a href="#">용품/사료</a>
						<ul class="sub-menu">
							<li><a href="./category.php">새 상품</a></li>
							<li><a href="#">중고 상품</a></li>
						</ul>
					</li>
          <li><a href="./board.php">강아지를 부탁해</a>
            <ul class="sub-menu">
              <li><a href="./board.php">동물병원/예방접종</a></li>
              <li><a href="./cafe.php">애견 카페</a></li>
              <li><a href="./salon.php">애견 미용실</a></li>
						</ul>
					</li>
					<li><a href="#">산책 같이해요</a></li>
          <li><a href="#">강아지 분양</a>
						<ul class="sub-menu">
							<li><a href="#">입양</a></li>
							<li><a href="#">분양</a></li>
						</ul>
					</li>
					<li><a href="#">펫시터 예약</a>
						<ul class="sub-menu">
							<li><a href="#">위탁 펫시터</a></li>
							<li><a href="#">방문 펫시터</a></li>
						</ul>
					</li>
					<li><a href="./dogstagram.php">도그스타그램</a></li>
					<li><a href="#">강아지 Q&A</a></li>
					<li><a href="#">Pages</a>
						<ul class="sub-menu">
							<li><a href="./product.php">Product Page</a></li>
							<li><a href="./category.php">Category Page</a></li>
							<li><a href="./cart.php">Cart Page</a></li>
							<li><a href="./checkout.php">Checkout Page</a></li>
							<li><a href="./contact.php">Contact Page</a></li>
						</ul>
					</li>
				</ul>
			</div>
		</nav>
	</header><br>
	<!-- Header section end -->

  <!-- 여기서부터 쓸꺼 쓰쎔--><!-- 여기서부터 쓸꺼 쓰쎔--><!-- 여기서부터 쓸꺼 쓰쎔--><!-- 여기서부터 쓸꺼 쓰쎔--><!-- 여기서부터 쓸꺼 쓰쎔--><!-- 여기서부터 쓸꺼 쓰쎔-->
	<section class="mb-5">
	    <div class="container">
	    <div class="row title py-3">
	        <div class="col-md-12">
	            <div style="text-align:left"><h5><strong>애견 미용실</strong></h5></div>
	        </div>
	    </div>
	    <div class="row">
	        <div class="col-md-3">
	          <div class="row mb-3">
	              <div class="col-md-12">
	                  <div class="card">
	                      <div class="card-body">
	                          <strong><p>강아지를 부탁해</p></strong>
	                          <ul class="list-unstyled">
	                             <a href="./board.php"> <li>동물 병원 / 예방 접종</li></a>
	                             <a href="./cafe.php"> <li>애견 카페<li></a>
	                             <a href="./salon.php"> <li>애견 미용실</li></a>
	                          </ul>
	                      </div>
	                  </div>
	              </div>
	          </div>
	          <div class="row mb-3">
	              <div class="col-md-12">
	                  <div class="card">
	                      <div class="card-body">
	                          <button type="button" class="btn btn-outline bg-orange btn-block">Contat Now</button></button>
	                      </div>
	                  </div>
	              </div>
	          </div>
	          <div class="row mb-3">
	              <div class="col-md-12">
	                  <div class="card">
	                      <div class="card-body">
	                          <button type="button" class="btn btn-outline bg-orange btn-block">Contat Now</button></button>
	                      </div>
	                  </div>
	              </div>
	          </div>
	        </div>
	        <div class="col-md-9">
	            <div class="row mb-3">
	                <div class="col-md-12">
	                    <div class="card">
	                        <div class="card-body">
	                            <div class="row">
	                                <div class="col-md-3">
	                                   <a href="./contact.php"><img src="https://s3.envato.com/files/248072868/Screenshot/01_preview.jpg"></a>
	                                </div>
	                                <div class="col-md-7">
	                                    <h5><a href="./contact.php">Msexchange contributes senior UX Designer</a></h5>
	                                    <small>Jopitor Inc., India</small>
	                                    <p><small>11907 Dyuuleves Incorpotatestion, South west, Newzealer</small></p>
	                                </div>
	                                <div class="col-md-2">
	                                    <button type="button" class="btn btn-outline bg-orange">Get Quotes</button>
	                                    <small>Published on Nov 27, 2017</small>
	                                </div>
	                            </div>

	                        </div>
	                    </div>
	                </div>
	            </div>
	            <div class="row mb-3">
	                <div class="col-md-12">
	                    <div class="card">
	                        <div class="card-body">
	                            <div class="row">
	                                <div class="col-md-3">
	                                   <img src="https://s3.envato.com/files/248072868/Screenshot/01_preview.jpg">
	                                </div>
	                                <div class="col-md-7">
	                                    <h5>Msexchange contributes senior UX Designer</h5>
	                                    <small>Jopitor Inc., India</small>
	                                    <p><small>11907 Dyuuleves Incorpotatestion, South west, Newzealer</small></p>
	                                </div>
	                                <div class="col-md-2">
	                                    <button type="button" class="btn btn-outline bg-orange">Get Quotes</button>
	                                    <small>Published on Nov 27, 2017</small>
	                                </div>
	                            </div>

	                        </div>
	                    </div>
	                </div>
	            </div>
	            <div class="row mb-3">
	                <div class="col-md-12">
	                    <div class="card">
	                        <div class="card-body">
	                            <div class="row">
	                                <div class="col-md-3">
	                                   <img src="https://s3.envato.com/files/248072868/Screenshot/01_preview.jpg">
	                                </div>
	                                <div class="col-md-7">
	                                    <h5>Msexchange contributes senior UX Designer</h5>
	                                    <small>Jopitor Inc., India</small>
	                                    <p><small>11907 Dyuuleves Incorpotatestion, South west, Newzealer</small></p>
	                                </div>
	                                <div class="col-md-2">
	                                    <button type="button" class="btn btn-outline bg-orange">Get Quotes</button>
	                                    <small>Published on Nov 27, 2017</small>
	                                </div>
	                            </div>

	                        </div>
	                    </div>
	                </div>
                  <div class="row mb-3">
    	                <div class="col-md-12">
    	                    <div class="card">
    	                        <div class="card-body">
    	                            <div class="row">
    	                                <div class="col-md-3">
    	                                   <img src="https://s3.envato.com/files/248072868/Screenshot/01_preview.jpg">
    	                                </div>
    	                                <div class="col-md-7">
    	                                    <h5>Msexchange contributes senior UX Designer</h5>
    	                                    <small>Jopitor Inc., India</small>
    	                                    <p><small>11907 Dyuuleves Incorpotatestion, South west, Newzealer</small></p>
    	                                </div>
    	                                <div class="col-md-2">
    	                                    <button type="button" class="btn btn-outline bg-orange">Get Quotes</button>
    	                                    <small>Published on Nov 27, 2017</small>
    	                                </div>
    	                            </div>

    	                        </div>
    	                    </div>
    	                </div>
    	            </div>
                  <div class="row mb-3">
    	                <div class="col-md-12">
    	                    <div class="card">
    	                        <div class="card-body">
    	                            <div class="row">
    	                                <div class="col-md-3">
    	                                   <img src="https://s3.envato.com/files/248072868/Screenshot/01_preview.jpg">
    	                                </div>
    	                                <div class="col-md-7">
    	                                    <h5>Msexchange contributes senior UX Designer</h5>
    	                                    <small>Jopitor Inc., India</small>
    	                                    <p><small>11907 Dyuuleves Incorpotatestion, South west, Newzealer</small></p>
    	                                </div>
    	                                <div class="col-md-2">
    	                                    <button type="button" class="btn btn-outline bg-orange">Get Quotes</button>
    	                                    <small>Published on Nov 27, 2017</small>
    	                                </div>
    	                            </div>

    	                        </div>
    	                    </div>
    	                </div>
    	            </div>
                  <div class="row mb-3">
    	                <div class="col-md-12">
    	                    <div class="card">
    	                        <div class="card-body">
    	                            <div class="row">
    	                                <div class="col-md-3">
    	                                   <img src="https://s3.envato.com/files/248072868/Screenshot/01_preview.jpg">
    	                                </div>
    	                                <div class="col-md-7">
    	                                    <h5>Msexchange contributes senior UX Designer</h5>
    	                                    <small>Jopitor Inc., India</small>
    	                                    <p><small>11907 Dyuuleves Incorpotatestion, South west, Newzealer</small></p>
    	                                </div>
    	                                <div class="col-md-2">
    	                                    <button type="button" class="btn btn-outline bg-orange">Get Quotes</button>
    	                                    <small>Published on Nov 27, 2017</small>
    	                                </div>
    	                            </div>

    	                        </div>
    	                    </div>
    	                </div>
    	            </div>
                  <div class="row mb-3">
    	                <div class="col-md-12">
    	                    <div class="card">
    	                        <div class="card-body">
    	                            <div class="row">
    	                                <div class="col-md-3">
    	                                   <img src="https://s3.envato.com/files/248072868/Screenshot/01_preview.jpg">
    	                                </div>
    	                                <div class="col-md-7">
    	                                    <h5>Msexchange contributes senior UX Designer</h5>
    	                                    <small>Jopitor Inc., India</small>
    	                                    <p><small>11907 Dyuuleves Incorpotatestion, South west, Newzealer</small></p>
    	                                </div>
    	                                <div class="col-md-2">
    	                                    <button type="button" class="btn btn-outline bg-orange">Get Quotes</button>
    	                                    <small>Published on Nov 27, 2017</small>
    	                                </div>
    	                            </div>

    	                        </div>
    	                    </div>
    	                </div>
    	            </div>
                  <div class="row mb-3">
    	                <div class="col-md-12">
    	                    <div class="card">
    	                        <div class="card-body">
    	                            <div class="row">
    	                                <div class="col-md-3">
    	                                   <img src="https://s3.envato.com/files/248072868/Screenshot/01_preview.jpg">
    	                                </div>
    	                                <div class="col-md-7">
    	                                    <h5>Msexchange contributes senior UX Designer</h5>
    	                                    <small>Jopitor Inc., India</small>
    	                                    <p><small>11907 Dyuuleves Incorpotatestion, South west, Newzealer</small></p>
    	                                </div>
    	                                <div class="col-md-2">
    	                                    <button type="button" class="btn btn-outline bg-orange">Get Quotes</button>
    	                                    <small>Published on Nov 27, 2017</small>
    	                                </div>
    	                            </div>

    	                        </div>
    	                    </div>
    	                </div>
    	            </div>
                  <div class="row mb-3">
    	                <div class="col-md-12">
    	                    <div class="card">
    	                        <div class="card-body">
    	                            <div class="row">
    	                                <div class="col-md-3">
    	                                   <img src="https://s3.envato.com/files/248072868/Screenshot/01_preview.jpg">
    	                                </div>
    	                                <div class="col-md-7">
    	                                    <h5>Msexchange contributes senior UX Designer</h5>
    	                                    <small>Jopitor Inc., India</small>
    	                                    <p><small>11907 Dyuuleves Incorpotatestion, South west, Newzealer</small></p>
    	                                </div>
    	                                <div class="col-md-2">
    	                                    <button type="button" class="btn btn-outline bg-orange">Get Quotes</button>
    	                                    <small>Published on Nov 27, 2017</small>
    	                                </div>
    	                            </div>

    	                        </div>
    	                    </div>
    	                </div>
    	            </div>
                  <div class="row mb-3">
    	                <div class="col-md-12">
    	                    <div class="card">
    	                        <div class="card-body">
    	                            <div class="row">
    	                                <div class="col-md-3">
    	                                   <img src="https://s3.envato.com/files/248072868/Screenshot/01_preview.jpg">
    	                                </div>
    	                                <div class="col-md-7">
    	                                    <h5>Msexchange contributes senior UX Designer</h5>
    	                                    <small>Jopitor Inc., India</small>
    	                                    <p><small>11907 Dyuuleves Incorpotatestion, South west, Newzealer</small></p>
    	                                </div>
    	                                <div class="col-md-2">
    	                                    <button type="button" class="btn btn-outline bg-orange">Get Quotes</button>
    	                                    <small>Published on Nov 27, 2017</small>
    	                                </div>
    	                            </div>

    	                        </div>
    	                    </div>
    	                </div>
    	            </div>
	            </div>

	        </div>
	    </div>
	</div>
	</section>
	<!--cta section-->
	<section class="py-4 bg-orange">
	   <div class="container">
	    <div class="row">
	        <div class="col-md-8">
	            <h2>Best Place to Find information</h2>
	        </div>
	        <div class="col-md-4">
	            <buttton type="button" class="btn btn-outline-light">Find Out Now</buttton>
	        </div>

	    </div>
	</div>
	</section>

  <!-- 여기까지 쓰고싶은거 마무리 --><!-- 여기까지 쓰고싶은거 마무리 --><!-- 여기까지 쓰고싶은거 마무리 --><!-- 여기까지 쓰고싶은거 마무리 --><!-- 여기까지 쓰고싶은거 마무리 -->

	<!-- Footer section -->
	<section class="footer-section">
		<div class="container">
			<div class="footer-어서오시개 원본.png text-center">
				<a href="index.php"><img src="./img/어서오시개 원본.png" alt=""></a>
			</div>
			<div class="row">
				<div class="col-lg-3 col-sm-6">
					<div class="footer-widget about-widget">
						<h2>About</h2>
						<p>Donec vitae purus nunc. Morbi faucibus erat sit amet congue mattis. Nullam frin-gilla faucibus urna, id dapibus erat iaculis ut. Integer ac sem.</p>
						<img src="img/cards.png" alt="">
					</div>
				</div>
				<div class="col-lg-3 col-sm-6">
					<div class="footer-widget about-widget">
						<h2>Questions</h2>
						<ul>
							<li><a href="">About Us</a></li>
							<li><a href="">Track Orders</a></li>
							<li><a href="">Returns</a></li>
							<li><a href="">Jobs</a></li>
							<li><a href="">Shipping</a></li>
							<li><a href="">Blog</a></li>
						</ul>
						<ul>
							<li><a href="">Partners</a></li>
							<li><a href="">Bloggers</a></li>
							<li><a href="">Support</a></li>
							<li><a href="">Terms of Use</a></li>
							<li><a href="">Press</a></li>
						</ul>
					</div>
				</div>
				<div class="col-lg-3 col-sm-6">
					<div class="footer-widget about-widget">
						<h2>Questions</h2>
						<div class="fw-latest-post-widget">
							<div class="lp-item">
								<div class="lp-thumb set-bg" data-setbg="img/blog-thumbs/1.jpg"></div>
								<div class="lp-content">
									<h6>what shoes to wear</h6>
									<span>Oct 21, 2018</span>
									<a href="#" class="readmore">Read More</a>
								</div>
							</div>
							<div class="lp-item">
								<div class="lp-thumb set-bg" data-setbg="img/blog-thumbs/2.jpg"></div>
								<div class="lp-content">
									<h6>trends this year</h6>
									<span>Oct 21, 2018</span>
									<a href="#" class="readmore">Read More</a>
								</div>
							</div>
						</div>
					</div>
				</div>
				<div class="col-lg-3 col-sm-6">
					<div class="footer-widget contact-widget">
						<h2>Questions</h2>
						<div class="con-info">
							<span>C.</span>
							<p>Your Company Ltd </p>
						</div>
						<div class="con-info">
							<span>B.</span>
							<p>1481 Creekside Lane  Avila Beach, CA 93424, P.O. BOX 68 </p>
						</div>
						<div class="con-info">
							<span>T.</span>
							<p>+53 345 7953 32453</p>
						</div>
						<div class="con-info">
							<span>E.</span>
							<p>office@youremail.com</p>
						</div>
					</div>
				</div>
			</div>
		</div>
		<div class="social-links-warp">
			<div class="container">
				<div class="social-links">
					<a href="" class="instagram"><i class="fa fa-instagram"></i><span>instagram</span></a>
					<a href="" class="google-plus"><i class="fa fa-google-plus"></i><span>g+plus</span></a>
					<a href="" class="pinterest"><i class="fa fa-pinterest"></i><span>pinterest</span></a>
					<a href="" class="facebook"><i class="fa fa-facebook"></i><span>facebook</span></a>
					<a href="" class="twitter"><i class="fa fa-twitter"></i><span>twitter</span></a>
					<a href="" class="youtube"><i class="fa fa-youtube"></i><span>youtube</span></a>
					<a href="" class="tumblr"><i class="fa fa-tumblr-square"></i><span>tumblr</span></a>
				</div>

<!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
<p class="text-white text-center mt-5">Copyright &copy;<script>document.write(new Date().getFullYear());</script> All rights reserved | This template is made with <i class="fa fa-heart-o" aria-hidden="true"></i> by <a href="https://colorlib.com" target="_blank">Colorlib</a></p>
<!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->

			</div>
		</div>
	</section>
	<!-- Footer section end -->



	<!--====== Javascripts & Jquery ======-->
	<script src="js/jquery-3.2.1.min.js"></script>
	<script src="js/bootstrap.min.js"></script>
	<script src="js/jquery.slicknav.min.js"></script>
	<script src="js/owl.carousel.min.js"></script>
	<script src="js/jquery.nicescroll.min.js"></script>
	<script src="js/jquery.zoom.min.js"></script>
	<script src="js/jquery-ui.min.js"></script>
	<script src="js/main.js"></script>

	</body>
</html>
