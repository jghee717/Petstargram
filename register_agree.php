<?php
include 'db.php';

  $conn = new DBC;
  $conn-> DBI();
  $q = "select * from member where id = '".$redd."' ";
  $conn -> DBQ($q);
  $conn -> DBE();
  $redd = $_POST["id"];
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
  <script type="text/javascript">
  function chk(){
   var req = document.form.req.checked;
   var num = 0;
   if(req == true){
    num = 1;
   }
   if(num==1){
    document.form.submit();
   }else{
    alert("개인정보 약관에 동의하셔야 합니다.");
   }
  }
  function nochk(){
   alert("동의하지 않으면 가입하실 수 없습니다");
  return false;}
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
							<li><a href="./visit.php">위탁 펫시터</a></li>
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
		</nav><br>
	<!-- Header section end -->


  <meta http-equiv="Content-Type" content="text/html; charset=EUC-KR">
  <form   action="./register.php" name="form" method="post">
   <table width="1400" height="650" align="center">
     <td width="100%" height="50%" align="center">
<div class="col-lg-12">
    <h4><div style="text-align:center">어서오시개 약관동의</h4>
     <br>
     <textarea
       rows="20" cols="150" >가. 수집하는 개인정보의 항목첫째, 회사는 회원가 입, 원활한 고객상담, 각종 서비스의 제공을 위해 최초 회원가입 당시 아래와 같은 최소한의 개인정보를 필수항목으로 수집하고 있습니다.
  회원가입
  - 이름, 생년월일, 성별, 아이디, 비밀번호, 별명, 연락처(메일주소, 휴대폰 번호 중 선택), 가입인증정보
  만14세 미만 아동 회원가입
  - 이름, 생년월일, 성별, 법정대리인 정보, 아이디, 비밀번호, 연락처 (메일주소, 휴대폰 번호 중 선택), 가입인증정보
  단체아이디 회원가입
  - 단체아이디, 회사명, 대표자명, 대표 전화번호, 대표 이메일 주소, 단체주소, 관리자 아이디, 관리자 연락처, 관리자 부서/직위
  - 선택항목 : 대표 홈페이지, 대표 팩스번호
  둘째, 서비스 이용과정이나 사업처리 과정에서 아래와 같은 정보들이 자동으로 생성되어 수집될 수 있습니다.
  - IP Address, 쿠키, 방문 일시, 서비스 이용 기록, 불량 이용 기록
  셋째, 네이버 아이디를 이용한 부가 서비스 및 맞춤식 서비스 이용 또는 이벤트 응모 과정에서 해당 서비스의 이용자에 한해서만 개인정보 추가 수집이 발생할 수 있으며, 이러한 경우 별도의 동의를 받습니다.
  넷째, 성인컨텐츠, 유료/게임 등 일부 서비스 이용시 관련 법률 준수를 위해 본인인증이 필요한 경우, 아래와 같은 정보들이 수집될 수 있습니다.
  - 이름, 생년월일, 성별, 중복가입확인정보(DI), 암호화된 동일인 식별정보(CI), 휴대폰 번호(선택), 아이핀 번호(아이핀 이용시), 내/외국인 정보
  다섯째, 유료 서비스 이용 과정에서 아래와 같은 결제 정보들이 수집될 수 있습니다.
  - 신용카드 결제시 : 카드사명, 카드번호 등
  - 휴대전화 결제시 : 이동전화번호, 통신사, 결제승인번호 등
  - 계좌이체시 : 은행명, 계좌번호 등
  - 상품권 이용시 : 상품권 번호
  나. 개인정보 수집방법회사는 다음과 같은 방법으로 개인정보를 수집합니다.
  - 홈페이지, 서면양식, 팩스, 전화, 상담 게시판, 이메일, 이벤트 응모, 배송요청
  - 협력회사로부터의 제공
  - 생성정보 수집 툴을 통한 수집
     </textarea>
     <br>
   </div>
 </div>

 <div class="col-lg-12" style="text-align:center;" name="req">
   <label style="color:red;" name="req">
      <input type="checkbox" name="req" value="">
      <span class="text" name="req"></span>
      개인정보 수집 및 이용에 동의합니다.
  </label>
 </div>
  <!-- <div class ="col-lg-6" style="text-align:right">
    <input type="checkbox" name="dd">
  </div>

  <div class="col-lg-6" style="text-align:left">
    <p type="text" name="req"  style="color:red;"> 개인정보 수집 및 이용에 동의합니다.</p>
  </div> -->
     <div class="col-lg-12" style="text-align:center">  <input type="button" value="동의" onclick="chk()"/>
      <input type="button" value="동의하지 않습니다" onclick="nochk()"/>
    </div>
  </td>
 </table>
</form>


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
