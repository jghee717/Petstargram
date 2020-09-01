<?php
include 'db.php';

$conn = new DBC;
$conn-> DBI();

$q = 'select * from member';
$conn -> DBQ($q);
$conn -> DBE();
$var = $conn->DBF();

 ?>
<!DOCTYPE html>
<html lang="zxx">
<head>
	<title>어서오시개 | eCommerce Template</title>
	<meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge"/>
  <meta name="viewport" content="user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0, width=device-width"/>
  <title>API Demo - Kakao JavaScript SDK</title>
  <script src="//developers.kakao.com/sdk/js/kakao.min.js"></script>
  <link href="//maxcdn.bootstrapcdn.com/bootstrap/3.3.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
  <script src="//maxcdn.bootstrapcdn.com/bootstrap/3.3.0/js/bootstrap.min.js"></script>
  <script src="//code.jquery.com/jquery-1.11.1.min.js"></script>

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
  <script>
  function Onr(){
    var reg = /[a-z0-9]|[ \[\]{}()<>?|`~!@#$%^&*-_+=,.;:\"'\\]/g;

        if(reg.test(document.getElementById('uaddress').value))
        {
           alert("한글만 가능합니다.");
           document.getElementById('uaddress').value = "";
           document.getElementById('uaddress').foucs();
           return false;
        }
  }
  function num(x){
    var reg = /[^0-9]/g;

    if(x == 1)
    {
      if(reg.test(document.getElementById('phone').value))
      {
         alert("숫자만 가능합니다.");
         document.getElementById('phone').value = "";
         document.getElementById('phone').foucs();
         return false;
      }
    }
    else if(x == 2)
    {
      if(reg.test(document.getElementById('phone').value))
      {
         alert("숫자만 가능합니다.");
         document.getElementById('phone').value = "";
         document.getElementById('phone').foucs();
         return false;
       }
    }
  }
  </script>
  <style>
  /* .bo_content {
    margin-left: 2px;
  } */
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
                <a href="./login.php">로그인</a>/<a href="./register_agree.php">회원가입</a>
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
			<div class="container" style="text-align:center">
				<!-- menu -->
				<ul class="main-menu">
					<li><a href="./board.php">강아지를 부탁해</a>
						<ul class="sub-menu">
							<li><a href="./board.php">동물병원/예방접종</a></li>
							<li><a href="./board.php">애견 카페</a></li>
							<li><a href="./board.php">애견 미용실</a></li>
						</ul>
					</li>
					<li><a href="#">산책 같이해요</a></li>
					<li><a href="#">펫시터 예약</a>
						<ul class="sub-menu">
							<li><a href="#">위탁 펫시터</a></li>
							<li><a href="#">방문 펫시터</a></li>
						</ul>
					</li>
					<li><a href="./dogstagram.php">도그스타그램</a></li>
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

  <section class="category-section spad">
    <div class="container">
      <div class="row mt">
      <div class="col-lg-3">
      </div>

        <div class="col-lg-6">
         <div class="main-login main-center">
					<form class="form-horizontal" method="post" action="./login_check.php">
            <!--  -->
           <div style="text-align:center;"><img src="img/어서오시개 로고.png" alt="" ></div><br><br>
					  <div style="text-align:center;"><h4>로그인</h4	></div><br><br>
						 <div class="form-group">
							<label for="idx">아이디</label>
							 <div class="input-group">
								<input type="text" class="form-control" name="id" id="idx"  placeholder="아이디를 입력하세요..">
							 </div>
							</div>
							<div class="form-group">
							<label for="password">비밀번호</label>
							<div class="input-group">
							 <input type="password" class="form-control" name="password" id="pw"  placeholder="비밀번호를 입력하세요..">
							</div>
		         </div>



            <div class="panel-body" style="text-align:center;">
             <span><button type="submit" class="btn btn-warning" style="margin-right: 15px; height:47px; width:220px;"><div style="font-size:16px;">로그인</div></button></span><a id="kakao-login-btn"></a> <br><br><br>
            </div>
           </div>
            <div class="form-group" style="text-align:center">
              <a href="./register_agree.php"><button type="button" class="btn btn-warning" >회원가입</button>
              <a href="./find_id.php"><button type="button" class="btn btn-warning" style="margin-left:15px">아이디 찾기</button>
              <a href="./find_password.php" ><button type="button"  class="btn btn-warning" style="margin-left:15px">비밀번호 찾기</button>
            </div>
            <script type='text/javascript'>
              //<![CDATA[

              // 1cf4885573510d2b8cfa39ebe13a8a55

                // 사용할 앱의 JavaScript 키를 설정해 주세요.
                Kakao.init('89af7c06839a68e413b4506f75382953');
                // 카카오 로그인 버튼을 생성합니다.
                Kakao.Auth.createLoginButton({
                  container: '#kakao-login-btn',
                  success: function(authObj) {
                    // 로그인 성공시, API를 호출합니다.
                    Kakao.API.request({
                      url: '/v2/user/me',
                      success: function(res) {
                        alert(JSON.stringify(res));
                      },
                      fail: function(error) {
                        alert(JSON.stringify(error));
                      }
                    });
                  },
                  fail: function(err) {
                    alert(JSON.stringify(err));
                  }
                });
              //]]>
            </script>
					</form>
				</div>
      </div>

      <!-- /col-lg-6 -->
      <div class="col-lg-3">
      </div>
    </div>
   </section>
  <!-- /category-section -->

  <!-- Footer section -->
	<section class="footer-section">
		<div class="container">
			<div class="footer-어서오시개 원본.png text-center">
				<a href="index.php"><img src="./img/어서오시개 원본.png" alt=""></a>
			</div>
			<div class="row">
				<div class="col-lg-3">
					<div class="footer-widget about-widget">
						<h2>About</h2>
						<p>Donec vitae purus nunc. Morbi faucibus erat sit amet congue mattis. Nullam frin-gilla faucibus urna, id dapibus erat iaculis ut. Integer ac sem.</p>
						<img src="img/cards.png" alt="">
					</div>
				</div>
				<div class="col-lg-3">
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
				<div class="col-lg-3">
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
				<div class="col-lg-3">
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
