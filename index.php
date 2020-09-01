<?php
include 'db.php';

  $conn = new DBC;
  $conn-> DBI();
  $q = "select * from member where id = '".$idd."' ";
  $conn -> DBQ($q);
  $conn -> DBE();
  $idd = $_POST["id"];
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
					<div class="col-lg-4 ">
						<!-- logo -->
					</div>
					<div class="col-lg-5">
            <a href="./index.php" class="site-logo">
              <img src="img/logo.png" alt="">
            </a>
					</div>
					<div class="col-lg-3">
						<div class="user-panel">
							<div class="up-item">
								<i class="flaticon-profile"></i>
                <?
                session_start();
                if(!isset($_SESSION['id'])) //세션이 존재하지 않을 때
                {
                    header ('Location: ./login.php');
                }
                 echo "<a href=./mypage_gate.php>마이페이지 </a>";
                 echo "<a href=./logout.php style='margin-left:10px'>로그아웃</a>";
                ?>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
		<nav class="main-navbar">
			<div class="container">
				<!-- menu -->
				<ul class="main-menu" style="text-align:center">
					<li><a href="./board.php">강아지를 부탁해</a>
						<ul class="sub-menu">
							<li><a href="./board.php">동물병원/예방접종</a></li>
							<li><a href="./cafe_board.php">애견 카페</a></li>
							<li><a href="./salon_board.php">애견 미용실</a></li>
						</ul>
					</li>
					<li><a href="walk.php">산책 같이해요</a></li>
					<li><a href="sitter.php">펫시터 예약</a>
					</li>
					<li><a href="./dogstagram.php">도그스타그램</a></li>

				</ul>
			</div>
		</nav>
	<!-- Header section end -->



	<!-- Hero section -->
  <section class="hero-section">
		<div class="hero-slider owl-carousel">
			<div class="hs-item set-bg" data-setbg="./img/투개더.jpg">
				<div class="container">
					<div class="row">
						<div class="col-xl-6 col-lg-7 text-white">
							<span>New</span>
							<h3>펫시터 상세 선택기능 추가!</h3>
							<p>더 전문적인 펫시터를 만나보세요!</p>
							<a href="#" class="site-btn sb-line">DISCOVER</a>
							<a href="#" class="site-btn sb-white">ADD TO CART</a>
						</div>
					</div>
					<div class="offer-card text-white">
						<span>지금</span>
						<h3>바로가기</h3>
						<p>click</p>
					</div>
				</div>
			</div>
			<div class="hs-item set-bg" data-setbg="./img/logo.png">
				<div class="container">
					<div class="row">
						<div class="col-xl-6 col-lg-7 text-black">
							<span>도그스타그램</span>
							<h2>Event</h2>
							<p>추천이 가장 많은 사진 5개 까지 어쩌고저쩌고 </p>
							<a href="#" class="site-btn sb-line">DISCOVER</a>
							<a href="#" class="site-btn sb-white">ADD TO CART</a>
						</div>
					</div>
					<div class="offer-card text-white">
						<span>사진등록</span>
						<h3>Event</h3>
						<p>click</p>
					</div>
				</div>
			</div>
		</div>
		<div class="container">
			<div class="slide-num-holder" id="snh-1"></div>
		</div>
	</section>
	<!-- Hero section end -->

	<!-- Features section -->
<html><hr color="black" width=99%></html>
	<section class="features-section">
		<div class="container-fluid">
			<div class="row">
				<div class="col-md-4 p-0 feature">
					<div class="feature-inner">
						<div class="feature-icon" >
							<img src="img/icons/3.png" color="black" alt="#">
						</div>
						<h2>강아지를 부탁해 best</h2>
					</div>
					<div class="col-md-6">
          <div class="form-group" >
            <div class="input-group">
							<a href="./board" class="image full"><img src="img/hospital1.png" alt=""></a>
  						<div class="col-sm-6"><p>Porttitor eu, tempus id, varius non, nibh.</p></div>
            </div>
           </div>
				 </div>
				</div>
				<div class="col-md-4 p-0 feature">
					<div class="feature-inner">
						<div class="feature-icon">
							<img src="img/icons/2.png" alt="#">
						</div>
						<h2>도그스타그램 best</h2>
					</div>
          <div class="form-group">
            <div class="input-group">
             <a href="#" class="image full"><img src="./img/product/1.jpg" alt=""></a>
						 <p>사료ddd</p>
           </div>
				</div>
			</div>
				<div class="col-md-4 p-0 feature">
					<div class="feature-inner">
						<div class="feature-icon">
							<img src="img/icons/3.png" alt="#">
						</div>
						<h2>산책 같이해요</h2>
					</div>
        <div class="form-group">
            <div style="margin-left:10px" class="form-control"><a href="#">오늘 화정공원에서 산책해요</a></div><br>
						<div style="margin-left:10px" class="form-control"><a href="#">오늘 대화역에서 산책해요</a></div><br>
					  <div style="margin-left:10px" class="form-control"><a href="#">오늘 압구정에서 산책해요</a></div><br>
						<div style="margin-left:10px" class="form-control"><a href="#">오늘 용산에서 산책해요</a></div><br>
        </div>
			 </div>
			</div>
		</div>
	</section>
	<!-- Features section end -->


	<!-- letest product section -->
	<section class="top-letest-product-section">
						<html><hr color="gray" width=95%></html>
		<div class="container">
			<div class="section-title">
				<h2>신상품</h2>
			</div>
			<div class="product-slider owl-carousel">
				<div class="product-item">
					<div class="pi-pic">
						<img src="./img/product/1.jpg" alt="">
						<div class="pi-links">
							<a href="#" class="add-card"><i class="flaticon-bag"></i><span>ADD TO CART</span></a>
							<a href="#" class="wishlist-btn"><i class="flaticon-heart"></i></a>
						</div>
					</div>
					<div class="pi-text">
						<h6>$35,00</h6>
						<p>Flamboyant Pink Top </p>
					</div>
				</div>
				<div class="product-item">
					<div class="pi-pic">
						<div class="tag-new">New</div>
						<img src="./img/product/2.jpg" alt="">
						<div class="pi-links">
							<a href="#" class="add-card"><i class="flaticon-bag"></i><span>ADD TO CART</span></a>
							<a href="#" class="wishlist-btn"><i class="flaticon-heart"></i></a>
						</div>
					</div>
					<div class="pi-text">
						<h6>$35,00</h6>
						<p>Black and White Stripes Dress</p>
					</div>
				</div>
				<div class="product-item">
					<div class="pi-pic">
						<img src="./img/product/3.jpg" alt="">
						<div class="pi-links">
							<a href="#" class="add-card"><i class="flaticon-bag"></i><span>ADD TO CART</span></a>
							<a href="#" class="wishlist-btn"><i class="flaticon-heart"></i></a>
						</div>
					</div>
					<div class="pi-text">
						<h6>$35,00</h6>
						<p>Flamboyant Pink Top </p>
					</div>
				</div>
				<div class="product-item">
						<div class="pi-pic">
							<img src="./img/product/4.jpg" alt="">
							<div class="pi-links">
								<a href="#" class="add-card"><i class="flaticon-bag"></i><span>ADD TO CART</span></a>
								<a href="#" class="wishlist-btn"><i class="flaticon-heart"></i></a>
							</div>
						</div>
						<div class="pi-text">
							<h6>$35,00</h6>
							<p>Flamboyant Pink Top </p>
						</div>
					</div>
				<div class="product-item">
						<div class="pi-pic">
							<img src="./img/product/6.jpg" alt="">
							<div class="pi-links">
								<a href="#" class="add-card"><i class="flaticon-bag"></i><span>ADD TO CART</span></a>
								<a href="#" class="wishlist-btn"><i class="flaticon-heart"></i></a>
							</div>
						</div>
						<div class="pi-text">
							<h6>$35,00</h6>
							<p>Flamboyant Pink Top </p>
						</div>
					</div>
			</div>
		</div>
	</section>
	<!-- letest product section end -->



	<!-- Product filter section -->
	<section class="product-filter-section">
		<html><hr color="gray" width=95%></html>
		<div class="container">
			<div class="section-title">
				<h2>세일중인 상품</h2>
			</div>
			<ul class="product-filter-menu">
				<li><a href="#">사료</a></li>
				<li><a href="#">간식</a></li>
				<li><a href="#">건강관리</a></li>
				<li><a href="#">위생/배변</a></li>
				<li><a href="#">미용/목욕</a></li>
				<li><a href="#">급식기/급수기</a></li>
				<li><a href="#">하우스/울타리</a></li>
				<li><a href="#">이동장</a></li>
			</ul>
			<html><hr color="gray" width=100%></html>
			<div class="row">
				<div class="col-lg-3 col-sm-6">
					<div class="product-item">
						<div class="pi-pic">
							<img src="./img/product/5.jpg" alt="">
							<div class="pi-links">
								<a href="#" class="add-card"><i class="flaticon-bag"></i><span>ADD TO CART</span></a>
								<a href="#" class="wishlist-btn"><i class="flaticon-heart"></i></a>
							</div>
						</div>
						<div class="pi-text">
							<h6>$35,00</h6>
							<p>Flamboyant Pink Top </p>
						</div>
					</div>
				</div>
				<div class="col-lg-3 col-sm-6">
					<div class="product-item">
						<div class="pi-pic">
							<div class="tag-sale">ON SALE</div>
							<img src="./img/product/6.jpg" alt="">
							<div class="pi-links">
								<a href="#" class="add-card"><i class="flaticon-bag"></i><span>ADD TO CART</span></a>
								<a href="#" class="wishlist-btn"><i class="flaticon-heart"></i></a>
							</div>
						</div>
						<div class="pi-text">
							<h6>$35,00</h6>
							<p>Black and White Stripes Dress</p>
						</div>
					</div>
				</div>
				<div class="col-lg-3 col-sm-6">
					<div class="product-item">
						<div class="pi-pic">
							<img src="./img/product/7.jpg" alt="">
							<div class="pi-links">
								<a href="#" class="add-card"><i class="flaticon-bag"></i><span>ADD TO CART</span></a>
								<a href="#" class="wishlist-btn"><i class="flaticon-heart"></i></a>
							</div>
						</div>
						<div class="pi-text">
							<h6>$35,00</h6>
							<p>Flamboyant Pink Top </p>
						</div>
					</div>
				</div>
				<div class="col-lg-3 col-sm-6">
					<div class="product-item">
						<div class="pi-pic">
							<img src="./img/product/8.jpg" alt="">
							<div class="pi-links">
								<a href="#" class="add-card"><i class="flaticon-bag"></i><span>ADD TO CART</span></a>
								<a href="#" class="wishlist-btn"><i class="flaticon-heart"></i></a>
							</div>
						</div>
						<div class="pi-text">
							<h6>$35,00</h6>
							<p>Flamboyant Pink Top </p>
						</div>
					</div>
				</div>
				<div class="col-lg-3 col-sm-6">
					<div class="product-item">
						<div class="pi-pic">
							<img src="./img/product/9.jpg" alt="">
							<div class="pi-links">
								<a href="#" class="add-card"><i class="flaticon-bag"></i><span>ADD TO CART</span></a>
								<a href="#" class="wishlist-btn"><i class="flaticon-heart"></i></a>
							</div>
						</div>
						<div class="pi-text">
							<h6>$35,00</h6>
							<p>Flamboyant Pink Top </p>
						</div>
					</div>
				</div>
				<div class="col-lg-3 col-sm-6">
					<div class="product-item">
						<div class="pi-pic">
							<img src="./img/product/10.jpg" alt="">
							<div class="pi-links">
								<a href="#" class="add-card"><i class="flaticon-bag"></i><span>ADD TO CART</span></a>
								<a href="#" class="wishlist-btn"><i class="flaticon-heart"></i></a>
							</div>
						</div>
						<div class="pi-text">
							<h6>$35,00</h6>
							<p>Black and White Stripes Dress</p>
						</div>
					</div>
				</div>
				<div class="col-lg-3 col-sm-6">
					<div class="product-item">
						<div class="pi-pic">
							<img src="./img/product/11.jpg" alt="">
							<div class="pi-links">
								<a href="#" class="add-card"><i class="flaticon-bag"></i><span>ADD TO CART</span></a>
								<a href="#" class="wishlist-btn"><i class="flaticon-heart"></i></a>
							</div>
						</div>
						<div class="pi-text">
							<h6>$35,00</h6>
							<p>Flamboyant Pink Top </p>
						</div>
					</div>
				</div>
				<div class="col-lg-3 col-sm-6">
					<div class="product-item">
						<div class="pi-pic">
							<img src="./img/product/12.jpg" alt="">
							<div class="pi-links">
								<a href="#" class="add-card"><i class="flaticon-bag"></i><span>ADD TO CART</span></a>
								<a href="#" class="wishlist-btn"><i class="flaticon-heart"></i></a>
							</div>
						</div>
						<div class="pi-text">
							<h6>$35,00</h6>
							<p>Flamboyant Pink Top </p>
						</div>
					</div>
				</div>
			</div>
			<div class="text-center pt-5">

			</div>
		</div>
	</section>
	<!-- Product filter section end -->


	<!-- Banner section -->
	<section class="banner-section">
		<div class="container">
			<div class="banner set-bg" data-setbg="./img/logo.png">
				<div class="tag-new">NEW</div>
				<span>새로운 기능 추가!</span>
				<h2>산책 같이해요..</h2>
				<a href="#" class="site-btn">TOGETHER NOW</a>
			</div>
		</div>
		<div class="container">
			<div class="banner set-bg" data-setbg="./img/togethers.jpg">
				<div class="tag-new">HOT</div>
				<span>애견 웨딩 업체 1위!</span>
				<h2>투개더..</h2>
				<a href="#" class="site-btn">WEDDING NOW</a>
		</div>
	</div>







	<!-- Banner section end  -->


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
						<p>ccitb</p>
						<img src="img/cards.png" alt="">
					</div>
				</div>
				<div class="col-lg-3 col-sm-6">
					<div class="footer-widget about-widget">
						<h2>스토리보드</h2>
						<ul>
							<li><a href="https://docs.google.com/presentation/d/1ru2VzS7lSjxnrxdH1hkbMk2UKlIEnB1Fnk42yEzCBgo/edit?usp=sharing">ccitb 스토리보드</a></li>
						</ul>
					</div>
				</div>
        <div class="col-lg-3 col-sm-6">
          <div class="footer-widget about-widget">
            <h2>일정표</h2>
            <ul>
              <li><a href="https://docs.google.com/presentation/d/1ru2VzS7lSjxnrxdH1hkbMk2UKlIEnB1Fnk42yEzCBgo/edit?usp=sharing">ccitb 일정표</a></li>
            </ul>
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
					<a href="" class="tumblr"><i class="fa fa-tumblr-square"></i><span>CCitb</span></a>
				</div>

<!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
<p class="text-white text-center mt-5">Copyright &copy;<script>document.write(new Date().getFullYear());</script> All rights reserved | This template is made with <i class="fa fa-heart-o" aria-hidden="true"></i> by <a href="#" target="_blank">Ccitb</a></p>
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
