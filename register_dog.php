<?php
include './db.php';
$conn = new DBC;
$conn-> DBI();
$idx = $_POST['idx'];
$q="select * from member where id = '".$_SESSION['id']."'";
$conn->DBQ($q);
$conn->DBE();
$row=$conn->DBF();

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

  <SCRIPT src="http://dmaps.daum.net/map_js_init/postcode.v2.js"></SCRIPT>

	<!-- Stylesheets -->
	<link rel="stylesheet" href="css/bootstrap.min.css"/>
	<link rel="stylesheet" href="css/font-awesome.min.css"/>
	<link rel="stylesheet" href="css/flaticon.css"/>
	<link rel="stylesheet" href="css/slicknav.min.css"/>
	<link rel="stylesheet" href="css/jquery-ui.min.css"/>
	<link rel="stylesheet" href="css/owl.carousel.min.css"/>
	<link rel="stylesheet" href="css/animate.css"/>
	<link rel="stylesheet" href="css/style.css"/>

	<link rel="stylesheet" href="//code.jquery.com/ui/1.11.4/themes/smoothness/jquery-ui.css">
	<script src="//code.jquery.com/jquery.min.js"></script>
	<script src="//code.jquery.com/ui/1.11.4/jquery-ui.min.js"></script>
	<!--[if lt IE 9]>
		  <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
	  <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
	<![endif]-->

	<script>
	function white() {
		var namew= document.getElementById("name").value;
		if(namew==""){
			alert("이름을 입력해주세요");
			document.getElementById('name').focus();
			return false;
		}
		var kindw= document.getElementById("kind").value;
		if(kindw==""){
			alert("품종을 입력해주세요");
			document.getElementById('kind').focus();
			return false;
		}
		var lostw= document.getElementById("lost").value;
		if(lostw==""){
			alert("중성화 수술 여부를 확인해주세요.");
			document.getElementById('lost').focus();
			return false;
		}
		var sizew= document.getElementById("size").value;
		if(sizew==""){
			alert("사이즈를 입력해주세요.");
			document.getElementById('size').focus();
			return false;
		}
		var birthw= document.getElementById("birth1").value;
		if(birthw==""){
			alert("생년월일을 입력해주세요");
			document.getElementById('birth1').focus();
			return false;
	  }
		var birth2= document.getElementById("birth2").value;
		if(birth2==""){
			alert("생년월일을 입력해주세요");
			document.getElementById('birth2').focus();
			return false;
		}
		var birth3= document.getElementById("birth3").value;
		if(birth3==""){
			alert("생년월일을 입력해주세요");
			document.getElementById('birth3').focus();
			return false;
		}
		var wei= document.getElementById("weight").value;
		if(wei==""){
			alert("무게를 입력해주세요");
			document.getElementById('weight').focus();
			return false;
		}
}

	function Onr(){
	var reg = /[a-z0-9]|[ \[\]{}()<>?|`~!@#$%^&*-_+=,.;:\"'\\]/g;

	    if(reg.test(document.getElementById('kind').value))
	    {
	       alert("한글만 입력 가능합니다.");
	       document.getElementById('kind').value = "";
	       document.getElementById('kind').foucs();
	       return false;
	    }
	}
	function Onr1(){
	var reg = /[a-z0-9]|[ \[\]{}()<>?|`~!@#$%^&*-_+=,.;:\"'\\]/g;

			if(reg.test(document.getElementById('name').value))
			{
				 alert("한글만 입력 가능합니다.");
				 document.getElementById('name').value = "";
				 document.getElementById('name').foucs();
				 return false;
			}
	}


		function maxLengthCheck(object){
			if(object.value.length > object.maxLength){
				object.value = object.value.slice(0, object.maxLength);
			}
		}

		$(function() {
			var languages = [
				"포메라니안", "닥스훈트", "시츄","요크셔테리어", "리트리버",
				"골든리트리버", "말티즈", "치와와", "비숑", "푸들",
				"불독", "프렌치 불독", "진돗개", "웰시코기", "시바견(시바이누)",
				"삽살개", "퍼그", "스피츠", "슈나우저", "사모예드",
				"말라뮤트", "허스키","스코티시 테리어","카바리에 킹 찰스 스파니엘","베들링턴"
				,"재패니즈 친","보스턴 테리어","페키니즈","맨체스터 테리어"
				,"비글","보더 콜리"
			];

			$( "#kind" ).autocomplete({
				source: languages
			});
		});
	  </script>



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
								<?
								session_start();
								if(!isset($_SESSION['id'])) //세션이 존재하지 않을 때
								 echo "<a href=./mypage_gate.php>마이페이지 </a>";
								 echo "<a href=./logout.php style='margin-left:10px'>로그아웃</a>";
								?>
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
					<form class="form-horizontal" method="post" action="./register_dog_ok.php" onsubmit="return white()" enctype="multipart/form-data" data-ajax="false">
            <!--  -->
           <div style="text-align:center;"><img src="img/어서오시개 로고.png" alt=""></div><br><br>
	           <div style="text-align:center;"><h3>강아지 등록</h3></div><br><br>
	            <div class="form-group">
								<label for="name">이름</label>
								<div class="input-group">
								 <input type="text" class="form-control" name="name" id="name"value="" oninput="Onr1()" placeholder="강아지 이름을 입력하세요..">
							 </div>
						 </div>
	            <div class="form-group">
	             <label for="kind">종류</label>
	             <div class="input-group">
	              <input type="text" class="form-control" name="kind" value="" oninput="Onr()" id='kind' placeholder="품종을 입력하세요..">
	            </div>
	          </div>
	          <div class="form-group">
	            <label for="gender">성별</label>
	            <div class="input-group">
               <select name="gender" id="gender">
	              <option value="">성별</option><option>남</option><option>여</option>
               </select>
	            </div>
	          </div>
	          <div class="form-group">
	            <label for="lost">중성화 수술</label>
	            <div class="input-group">
                <select name="lost" id="lost">
									<option value="">중성화 수술</option>
									<option>O</option> <option>X</option>
                </select>
	            </div>
	          </div>
            <div class="form-group">
	            <label for="size">크기</label>
	            <div class="input-group">
                <select name="size" id="size">
									<option value="">크기</option>
									<option>대형</option> <option>중형</option> <option>소형</option>
                </select>
	            </div>
	          </div>
            <div class="form-group">
             <label for="weight">무게(kg)</label>
             <div class="input-group">
               <input type="number" class="form-control" name="weight" id="weight" maxlength="2" value="" style="text-align:center" oninput="maxLengthCheck(this)"  placeholder="무게를 입력하세요.."><p>kg</p>
             </div>
           </div>
					 <div class="form-group">
						<label class="control-label col-sm-3">생년월일 <span class="text-danger">*</span></label>
						 <div class="col-xs-8">
							 <div class="form-inline">
								 <div class="form-group" >
									 <select name="birth1" class="form-control" id="birth1">
										 <option value="0">연도</option>
										  <option value="1990" >1990 </option><option value="1991" >1991 </option><option value="1992" >1992 </option><option value="1993" >1993 </option><option value="1994" >1994 </option><option value="1995" >1995 </option><option value="1996" >1996 </option><option value="1997" >1997 </option><option value="1998" >1998 </option><option value="1999" >1999 </option><option value="2000" >2000 </option><option value="2001" >2001 </option><option value="2002" >2002 </option><option value="2003" >2003 </option><option value="2004" >2004 </option><option value="2005" >2005 </option><option value="2006" >2006 </option> <option value="2007" >2007 </option> <option value="2008" >2008 </option><option value="2009" >2009 </option><option value="2010" >2010 </option> <option value="2011" >2011 </option> <option value="2012" >2012 </option><option value="2013" >2013 </option> <option value="2014" >2014 </option> <option value="2015" >2015 </option><option value="2016" >2016 </option><option value="2017" >2017 </option><option value="2018" >2018 </option><option value="2019" >2019 </option>           </select>
								 </div>
								 <div class="form-group">
									 <select name="birth2" class="form-control" id="birth2">
										 <option value="">월</option>
										 <option value="1">01</option><option value="2">02</option><option value="3">03</option><option value="4">04</option><option value="5">05</option><option value="6">06</option><option value="7">07</option><option value="8">08</option><option value="9">09</option><option value="10">10</option><option value="11">11</option><option value="12">12</option>                </select>
								 </div>
								 <div class="form-group">
									 <select name="birth3" class="form-control" id="birth3">
										 <option value="">일</option>
										 <option value="1" >01 </option><option value="2" >02 </option><option value="3" >03 </option><option value="4" >04 </option><option value="5" >05 </option><option value="6" >06 </option><option value="7" >07 </option><option value="8" >08 </option><option value="9" >09 </option><option value="10" >10 </option><option value="11" >11 </option><option value="12" >12 </option><option value="13" >13 </option><option value="14" >14 </option><option value="15" >15 </option><option value="16" >16 </option><option value="17" >17 </option><option value="18" >18 </option><option value="19" >19 </option><option value="20" >20 </option><option value="21" >21 </option><option value="22" >22 </option><option value="23" >23 </option><option value="24" >24 </option><option value="25" >25 </option><option value="26" >26 </option><option value="27" >27 </option><option value="28" >28 </option><option value="29" >29 </option><option value="30" >30 </option><option value="31" >31 </option>                </select>
								 </div>
							 </div>
						 </div>
					 </div>
					<input type = "hidden" name = "member_idx" id="member_idx" value = "<? echo $row['idx'];?>">
	           <!--  -->
             <br> <html><hr color="gray" width=98%></html>
							  <div class="login-register" style="text-align:center;">
                  <span><a href="./index.php"><button type="button" class="btn btn-warning">애완견이 없어요!</button></a></span>
	              <button type="submit" class="btn btn-warning" style="margin-left:10px">등록</button>
		          </div>
						</form>
						<iframe src="" id="ifrm1" scrolling=no frameborder=no width=0 height=0 name="ifrm1"></iframe>
					</div>
	      </div>
	      <!-- /col-lg-6 -->

	      <div class="col-lg-3">
	      </div>
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
