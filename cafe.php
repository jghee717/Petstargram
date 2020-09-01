<?php
	include "./db.php";
/*해당 보드 안에 컨텐츠 불러오기*/
	$conn = new DBC;
	$conn-> DBI();
	$q = "select * from board where idx = '".$_GET['idx']."' ";
	$conn -> DBQ($q);
	$conn -> DBE();
	$row = $conn->DBF();
	$r = "select * from review order by idx";
	$conn -> DBQ($r);
	$conn -> DBE();
/*해당 보드 안에 리뷰만 불러오기*/
	//$q = "select * from board where board_idx = '".$_GET['board_idx']."' ";
	//$conn -> DBQ($q);
	//$conn -> DBE();
	//$row = $conn->DBF();*/
/*리뷰 작성수만큼 불러오기*/
	$p = "select * from review order by idx ";
	$conn -> DBQ($p);
	$conn -> DBE();
	$date = date('Ymd');
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
		  <script src="https://oss.maxcdn.com/htm'l5shiv/3.7.2/html5shiv.min.js"></script>
	  <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
	<![endif]-->

<style>
.rating {
      float:left;
    }

    /* :not(:checked) is a filter, so that browsers that don’t support :checked don’t
      follow these rules. Every browser that supports :checked also supports :not(), so
      it doesn’t make the test unnecessarily selective */
    .rating:not(:checked) > input {
        position:absolute;
        clip:rect(0,0,0,0);
    }

    .rating:not(:checked) > label {
        float:right;
        width:1em;
        /* padding:0 .1em; */
        overflow:hidden;
        white-space:nowrap;
        cursor:pointer;
        font-size:300%;
        /* line-height:1.2; */
        color:#ddd;
    }

    .rating:not(:checked) > label:before {
        content: '★ ';
    }

    .rating > input:checked ~ label {
        color: dodgerblue;

    }

    .rating:not(:checked) > label:hover,
    .rating:not(:checked) > label:hover ~ label {
        color: dodgerblue;

    }

    .rating > input:checked + label:hover,
    .rating > input:checked + label:hover ~ label,
    .rating > input:checked ~ label:hover,
    .rating > input:checked ~ label:hover ~ label,
    .rating > label:hover ~ input:checked ~ label {
        color: dodgerblue;

    }

    .rating > label:active {
        position:relative;
        top:2px;
        left:2px;
    }
</style>
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
								<a href="./login.php">로그인</a> / <a href="./register_agree.php">회원가입</a>
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
				<!-- 산책 같이해요u -->
				<ul class="main-menu">
					<li><a href="#">용품/사료</a>
						<ul class="sub-menu">
							<li><a href="./category.php">새 상품</a></li>
							<li><a href="#">중고 상품</a></li>
						</ul>
					</li>
					<li><a href="#">강아지를 부탁해</a>
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
					<li><a href="./dogstagram">도그스타그램</a></li>
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
	</header>
	<!-- Header section end -->

	<!-- Page info -->
	<div class="page-top-info">
		<div class="container">
			<h4>강아지를 부탁해</h4>
			<div class="site-pagination">
				<a href="">/동물병원</a> /
				<a href="">Contact</a>
			</div>
		</div>
	</div>
	<!-- Page info end -->

	<!-- Contact section -->
	<section class="contact-section">
		<div class="container">
			<div class="row">
				<div class="col-lg-12 contact-info">
								<div class="panel-body">
									<h2><?echo $row['title'];?></h2></br>
								</div>

									<h4>서비스분야</h4>
												<div class="panel-body">
													<p><?echo $row['service'];?></p></br>
												</div>

									<h4>영업시간</h4>
												<div class="panel-body">
												<p><h5>평일</h5>
													<?echo $row['time'];?></p></br>
												</div>

									<h4>서비스정보</h4>
												<div class="panel-body">
													<p><?echo $row['information'];?></p>
												</div>

									<h4>주소</h4>
												<div class="panel-body">
													<p><?echo $row['locate'];?></p>
												</div>

									<h4>전화번호</h4>
												<div class="panel-body">
													<p><?echo $row['phone'];?></p>
												</div>

				</div>
			</div>
		</div>
		<div class="map"><iframe src=<?echo $row['address'];?>></iframe></div>
	</section>
	<!-- Contact section end -->

	<!-- Related product section -->
		<section class="related-product-section spad">
			<div class="container">
				<div class="reviews">
					<h2>리뷰</h2>
			<!--리뷰 보기-->
			    <?php
				  $s = "select * from review where board_idx ='".$_GET['idx']."'order by idx";
				  $conn -> DBQ($s);
				  $conn -> DBE();
				  ?>

				<?php while($review = $conn->DBF()) {?>
					<div class="card">
						<div class="card-body">
							<div class="row blockquote review-item">
								<div class="col-lg-3 text-center">
									<img class="rounded-circle reviewer" src="http://standaloneinstaller.com/upload/avatar.png">
										<div class="caption">
											<small>by <?echo $review['id'];?></a></small>
										</div>
								</div>
								<div class="col-lg-9">
								<h6>위생</h6>
									<?php
										if($review['rating1'] == 1) { echo '★';}
										else if($review['rating1'] == 2) {echo '★★';}
										else if($review['rating1'] == 3) {echo '★★★';}
										else if($reivew['rating1'] == 4) {echo '★★★★';}
										else if($review['rating1'] == 5) {echo '★★★★★';}
									?>
								<div class="col-lg-3">
								</div>
								<div class="col-lg-9">
								<h6>친절도</h6>
									<?php
										if($review['rating2'] == 1) { echo '★';}
										else if($review['rating2'] == 2) {echo '★★';}
										else if($review['rating2'] == 3) {echo '★★★';}
										else if($reivew['rating2'] == 4) {echo '★★★★';}
										else if($review['rating2'] == 5) {echo '★★★★★';}
									?>
								</div>
								<div class="col-lg-3">
								</div>
								<div class="col-lg-9">
									<h3><p class="review-text"><?echo $review['content'];?></p></h3>
								</div>
								<div class="col-lg-3">
								</div>
								<div class="col-lg-9">
									<small class="review-date"><?echo $review['date'];?></small>
								</div>
								<!-- <h3><p class="review-text"><?//echo $review['content'];?></p></h3>
									<small class="review-date"><?//echo $review['date'];?></small> -->
							</div>
						</div>
					</div>
				<?php }?>
			<!--리뷰 글쓰기-->
				<form accept-charset="UTF-8" action="writing_ok.php" method="POST">
				<input type="hidden" name="board_idx" value="<?echo $_GET['idx'];?>"
					<div class="card">
						<div class="card-body">
							<div class="row blockquote review-item">
								<div class="col-lg-3 text-center">
									<img class="rounded-circle reviewer" src="http://standaloneinstaller.com/upload/avatar.png">
										<div class="caption">
											<small>by <?echo $review['id'];?></a></small>
										</div>
								</div>
								<!-- <div class="co-lg-8 text-right"> -->
									<div class="co-lg-1 text-left">
										<h6>위생</h6>
									</div>
									<div class="col-lg-8">
									<div class="rating" id="rating1">
										<input type="radio" id="star5" name="rating1" value="5" /><label for="star5" title="완전좋음">5 stars</label>
										<input type="radio" id="star4" name="rating1" value="4" /><label for="star4" title="좋음">4 stars</label>
										<input type="radio" id="star3" name="rating1" value="3" /><label for="star3" title="보통">3 stars</label>
										<input type="radio" id="star2" name="rating1" value="2" /><label for="star2" title="별루">2 stars</label>
										<input type="radio" id="star1" name="rating1" value="1" /><label for="star1" title="완전별루">1 star</label>
									</div>
									</div>
									<div class="col-lg-3">
									</div>
									<div class="col-lg-1 text-left">
										<h6>친절도</h6>
									</div>
									<div class="col-lg-8">
									<div class="rating" id="rating2">
										<input type="radio" id="star10" name="rating2" value="5" /><label for="star10" title="완전좋음">5 stars</label>
										<input type="radio" id="star9" name="rating2" value="4" /><label for="star9" title="좋음">4 stars</label>
										<input type="radio" id="star8" name="rating2" value="3" /><label for="star8" title="보통">3 stars</label>
										<input type="radio" id="star7" name="rating2" value="2" /><label for="star7" title="별루">2 stars</label>
										<input type="radio" id="star6" name="rating2" value="1" /><label for="star6" title="완전별루">1 star</label>
									</div>
									</div>

										<!-- <form accept-charset="UTF-8" action="" method="post"> -->
										<div class="col-lg-3">
										</div>
										<div class="col-lg-9">
											<textarea class="form-control animated" cols="80" id="new-review" name="content" placeholder="Enter your review here..." rows="5" required></textarea></div>
											<div class="col-lg-11">
											</div>
											<div class="col-lg-1">
												<p><input type="submit" value="확인"  onclick="submitContents(this)"></p>
												</div>
										<!-- </form> -->
								<!-- </div> -->
							</div>
						</div>
					</div>
				</form>
			<!--리뷰 글쓰기 끝-->
			</div>
		</div>
	</section>
	<!-- Related product section end -->


	<!-- Footer section -->
	<section class="footer-section">
		<div class="container">
			<div class="footer-어서오시개 원본.png text-center">
				<a href="index.php"><img src="./img/어서오시개 원본.png" alt="로고사진"></a>
			</div>
			<div class="row">
				<div class="col-lg-3 col-sm-6">
					<div class="footer-widget about-widget">
						<h2>About</h2>
						<p>Donec vitae purus nunc. Morbi faucibus erat sit amet congue mattis. Nullam frin-gilla faucibus urna, id dapibus erat iaculis ut. Integer ac sem.</p>
						<img src="img/cards.png" alt="사진">
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
<p class="text-white text-center mt-5">Copyright &copy;<script>docu산책 같이해요t.write(new Date().getFullYear());</script> All rights reserved | This template is made with <i class="fa fa-heart-o" aria-hidden="true"></i> by <a href="https://colorlib.com" target="_blank">Colorlib</a></p>
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
