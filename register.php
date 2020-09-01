<?php
include './db.php';
$conn = new DBC;
$conn-> DBI();


$q = 'select * from member';
$conn -> DBQ($q);
$conn -> DBE();
$var = $conn->DBF();
$id = $_POST['id'];
$password=$_POST['password'];
$name=$_POST['name'];
$email=$_POST['email'];
$birth=$_POST['birth'].$_POST['birth2'].$_POST['birth3'];
$address=$_POST['address'];
$address2=$_POST['address2'];
$address3=$_POST['address3'];

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


		  <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
	  <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>


<script>
function white() {

	var idw= document.getElementById("id").value;
	if(idw==""){
		alert("아이디를 입력해주세요");
		document.getElementById('id').focus();
		return false;
	}
	var pww= document.getElementById("password").value;
	if(pww==""){
		alert("비밀번호를 입력해주세요");
		document.getElementById('password').focus();
		return false;
	}
	var pwwc= document.getElementById("passwordcheck").value;
	if(pwwc==""){
		alert("비밀번호확인을 입력해주세요");
		document.getElementById('passwordcheck').focus();
		return false;
	}
	var namew= document.getElementById("name").value;
	if(namew==""){
		alert("이름을 입력해주세요");
		document.getElementById('name').focus();
		return false;
	}
	var emailw= document.getElementById("email").value;
	if(emailw==""){
		alert("이메일을 입력해주세요");
		document.getElementById('email').focus();
		return false;
	}
	var phonew= document.getElementById("phone").value;
	if(phonew==""){
		alert("휴대전화 번호를 입력해주세요");
		document.getElementById('phone').focus();
		return false;
	}
	var birthw= document.getElementById("birth1").value;
	if(birthw==""){
		alert("생년월일을 입력해주세요");
		document.getElementById('birth1').focus();
		return false;
	}
	var birthww= document.getElementById("birth2").value;
	if(birthww==""){
		alert("생년월일을 입력해주세요");
		document.getElementById('birth2').focus();
		return false;
	}
	var birthwww= document.getElementById("birth3").value;
	if(birthwww==""){
		alert("생년월일을 입력해주세요");
		document.getElementById('birth3').focus();
		return false;
	}
	var addressw= document.getElementById("address1").value;
	if(addressw==""){
		alert("주소를 입력해주세요");
		document.getElementById('address1').focus();
		return false;
 }
}




	function chkchk()
	{
		<?
		$q="select id from member";
		$conn->DBQ($q);
		$conn->DBE();
		$cntPro_code = $conn->resultRow();
		for($i=0; $i<$cntPro_code; $i++){$id[$i] = $conn->DBF();}
		for($i=0; $i<$cntPro_code; $i++){$id_arr[$i] = $id[$i]['id'];}
		?>

		var users =<?php echo json_encode($id_arr); ?>;
		var userId = document.getElementById("id").value;

		for(var i=0; i < users.length; i++)
		{
			if(userId == users[i])
			{
				document.getElementById("id").focus();
				document.getElementById("id").value="";
				return alert(userId + "는 존재하는 아이디 입니다.");
			}
		}

		var chkmachine = /^[A-za-z0-9]{5,19}/g;
		if(!chkmachine.test($("input[name=id]").val()))
		{
			alert("아이디 형식에 맞지 않습니다.");
			document.getElementById("id").focus();
			document.getElementById("id").value="";
			return false;
		}
		else {
			{
				alert("'"+ document.getElementById("id").value + "' 는 사용가능한 아이디 입니다.");
				document.getElementById("password").focus();
				return true;
			}
		}
	}




function execDaumPostcode(){
			new daum.Postcode({
				oncomplete: function(data){
					var fullRoadAddr = data.roadAddress; //도로명 주소 변수
					var extraRoadAddr = ''; // 도로명 조합형 주소 변수

					if(data.bname !== '' && /[동|로|가]$/g.test(data.bname)){
						extraRoadAddr += data.bname;
					}
					if(data.buildingName !== '' && data.apartment ==='Y'){
						extraRoadAddr += (extraRoadAddr !== '' ? ', '+ data.buildingName : data.build)
					}
					if(extraRoadAddr !==''){
						extraRoadAddr= ' ('+extraRoadAddr + ')';
					}
					if(fullRoadAddr !== ''){
						fullRoadAddr += extraRoadAddr;
					}
					//우편번호와 주소정보를 해당 필등레 넣기
					document.getElementById('address').value = data.zonecode;
					document.getElementById('address2').value= fullRoadAddr;
					document.getElementById('address3').focus();
					}
			}).open();
		}

function tocheckpw2() {
    var pw = document.getElementById("password").value;
    var pwck = document.getElementById("passwordcheck").value;

    if (pw != pwck) {
      document.getElementById('pwsame').innerHTML = '비밀번호가 맞지 않습니다. 다시 입력해 주세요';
			document.getElementById('passwordcheck').value = "";
			document.getElementById('passwordcheck').focus();
      return false;
  }
	else{
		document.getElementById('pwsame').innerHTML = '비밀번호가 맞습니다.';
	}
}
function idd(){
	var idReg = /^[a-z]+[a-z0-9]{5,19}$/g;
    if( !idReg.test( $("input[name=id]").val() ) ) {
        alert("아이디는 영문자로 시작하는 6~20자 영문자 또는 숫자이어야 합니다.");
				document.getElementById('id').value = "";
				document.getElementById('id').focus();
        return false;
    }
	}

	function pw(){
		var pwReg = /^(?=.*[a-zA-Z])(?=.*[^a-zA-Z0-9])(?=.*[0-9]).{9,19}$/;
      if( !pwReg.test( $("input[name=password]").val() ) ) {
          alert("비밀번호는 10~20자 영문,숫자,특수문자의 조합으로 입력해주세요.")
					document.getElementById('password').value = "";
					document.getElementById('password').focus();
          return false;
      }
		}


function Onr(){
var reg = /[a-z0-9]|[ \[\]{}()<>?|`~!@#$%^&*-_+=,.;:\"'\\]/g;

    if(reg.test(document.getElementById('name').value))
    {
       alert("한글만 입력 가능합니다.");
       document.getElementById('name').value = "";
       document.getElementById('name').foucs();
       return false;
    }
}

	function emaill(){
		var pwReg =/^[a-z]+[a-z0-9]{4,19}$/g;
			if( !pwReg.test( $("input[name=email]").val() ) ) {
					alert("이메일 형식이 올바르지 않습니다.")
					document.getElementById('email').value = "";
					document.getElementById('email').focus();
					return false;
			}
		}

	function maxLengthCheck(object){
		if(object.value.length > object.maxLength){
			object.value = object.value.slice(0, object.maxLength);
			alert("11자리를 입력해주세요.");
			document.getElementById('phone').value="";
			document.getElementById('phone').focus();
			return false;
		}
		var idReg =/^01([0|1]?)-?([0-9]{4})-?([0-9]{4})$/;
	    if( !idReg.test( $("input[name=phone]").val() ) ) {
	        alert("휴대전화 입력이 올바르지 않습니다.");
					document.getElementById('phone').value="";
					document.getElementById('phone').focus();
	        return false;
	    }
		}


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
					<form class="form-horizontal" method="post" id="chk_form" action="./register_ok.php" onsubmit="return white()" data-ajax="false">


            <!--  -->
           <div style="text-align:center;"><img src="img/어서오시개 로고.png" alt=""></div><br><br>
	           <div style="text-align:center;"><h3>회원가입</h3></div><br><br>
	            <div class="form-group">
								<label for="id">아이디</label>
								<div class="input-group">

								 <input type="id" class="form-control" name="id" id="id" minlength="6"   value="" onchange="chkchk()" placeholder="영문자로 시작하는 6~20자 영문자 또는 숫자">


							 </div>
						 </div>
	            <div class="form-group">
	             <label for="password">비밀번호</label>
	             <div class="input-group">
	              <input type="password" class="form-control" name="password" minlength="9" value="" onchange="pw()" id="password"placeholder="10~20자의 영문,숫자,특수문자의 조합">
	            </div>
	          </div>
	          <div class="form-group">
	            <label for="passwordcheck">비밀번호 확인</label>
	            <div class="input-group">
	              <input type="password" class="form-control" name="passwordcheck" id="passwordcheck" value="" onchange="tocheckpw2()" placeholder="비밀번호확인"><br><p id="pwsame" style="color:red;"></p>
	            </div>
	          </div>
	          <div class="form-group">
	            <label for="name">이름</label>
	            <div class="input-group">
	              <input type="text" class="form-control" name="name" id="name" value="" oninput="Onr()" placeholder="이름을 입력하세요..">
	            </div>
	          </div>
	          <div class="form-group">
	            <label for="email">이메일</label>
	            <div class="input-group">
	              <input type="text" class="form-control" name="email" id="email" value="" onchange="emaill()" placeholder="이메일 아이디를 입력하세요.."> @
	              <select name = "email2">
									<option>naver.com</option> <option>gmail.com</option> <option>nate.com</option> <option>daum.net</option>
								</select>
	            </div>
	          </div>
	          <div class="form-group">
	            <label for="phone">휴대전화</label>
	              <div class="input-group">
									<input class="form-control" placeholder="ㅡ 제외한 11자리 입력" type="varchar" minlength="11"  maxlength="11" name="phone" id="phone" style="text-align:center" value="" onchange="maxLengthCheck(this)"/>
	            </div>
	          </div>
						<div class="form-group">
		         <label class="control-label col-sm-3">생년월일 <span class="text-danger">*</span></label>
		          <div class="col-xs-8">
		            <div class="form-inline">
									<div class="form-group" >
		                <select name="birth1" class="form-control" id="birth1">
		                  <option value="0">연도</option>
		                  <option value="1950" >1950 </option><option value="1951" >1951 </option><option value="1952" >1952 </option><option value="1953" >1953 </option><option value="1954" >1954 </option><option value="1955" >1955 </option><option value="1956" >1956 </option><option value="1957" >1957 </option><option value="1958" >1958 </option><option value="1959" >1959 </option><option value="1960" >1960 </option><option value="1961" >1961 </option><option value="1962" >1962 </option><option value="1963" >1963 </option><option value="1964" >1964 </option><option value="1965" >1965 </option><option value="1966" >1966 </option><option value="1967" >1967 </option><option value="1968" >1968 </option><option value="1969" >1969 </option><option value="1970" >1970 </option><option value="1971" >1971 </option><option value="1972" >1972 </option><option value="1973" >1973 </option><option value="1974" >1974 </option><option value="1975" >1975 </option><option value="1976" >1976 </option><option value="1977" >1977 </option><option value="1978" >1978 </option><option value="1979" >1979 </option><option value="1980" >1980 </option><option value="1981" >1981 </option><option value="1982" >1982 </option><option value="1983" >1983 </option><option value="1984" >1984 </option><option value="1985" >1985 </option><option value="1986" >1986 </option><option value="1987" >1987 </option><option value="1988" >1988 </option><option value="1989" >1989 </option><option value="1990" >1990 </option><option value="1991" >1991 </option><option value="1992" >1992 </option><option value="1993" >1993 </option><option value="1994" >1994 </option><option value="1995" >1995 </option><option value="1996" >1996 </option><option value="1997" >1997 </option><option value="1998" >1998 </option><option value="1999" >1999 </option><option value="2000" >2000 </option><option value="2001" >2001 </option><option value="2002" >2002 </option><option value="2003" >2003 </option><option value="2004" >2004 </option><option value="2005" >2005 </option><option value="2006" >2006 </option> <option value="2007" >2007 </option> <option value="2008" >2008 </option><option value="2009" >2009 </option><option value="2010" >2010 </option> <option value="2011" >2011 </option> <option value="2012" >2012 </option><option value="2013" >2013 </option> <option value="2014" >2014 </option> <option value="2015" >2015 </option><option value="2016" >2016 </option><option value="2017" >2017 </option><option value="2018" >2018 </option>          </select>
		              </div>
									<div class="form-group">
		                <select name="birth2" class="form-control"id="birth2">
		                  <option value="">월</option>
		                  <option value="1">01</option><option value="2">02</option><option value="3">03</option><option value="4">04</option><option value="5">05</option><option value="6">06</option><option value="7">07</option><option value="8">08</option><option value="9">09</option><option value="10">10</option><option value="11">11</option><option value="12">12</option>                </select>
		              </div>
		              <div class="form-group">
		                <select name="birth3" class="form-control"id="birth3">
		                  <option value="">일</option>
		                  <option value="1" >01 </option><option value="2" >02 </option><option value="3" >03 </option><option value="4" >04 </option><option value="5" >05 </option><option value="6" >06 </option><option value="7" >07 </option><option value="8" >08 </option><option value="9" >09 </option><option value="10" >10 </option><option value="11" >11 </option><option value="12" >12 </option><option value="13" >13 </option><option value="14" >14 </option><option value="15" >15 </option><option value="16" >16 </option><option value="17" >17 </option><option value="18" >18 </option><option value="19" >19 </option><option value="20" >20 </option><option value="21" >21 </option><option value="22" >22 </option><option value="23" >23 </option><option value="24" >24 </option><option value="25" >25 </option><option value="26" >26 </option><option value="27" >27 </option><option value="28" >28 </option><option value="29" >29 </option><option value="30" >30 </option><option value="31" >31 </option>                </select>
		              </div>
		            </div>
		          </div>
		        </div>
	          <div class="form-group">
	            <label for="name">주소</label>
	              <div class="input-group"><input type="text" class="form-control" readonly="" name="address" id="address" value="" placeholder="주소를 입력하세요.." ><button type="button" onclick="execDaumPostcode()">우편번호 검색</button></div>
								<input type="text" class="form-control" name="address2"  readonly="" id="address2" value="">
								<input type="text" class="form-control" name="address3" id="address3" >
	          </div>
	           <!--  -->
							  <div class="login-register" style="text-align:center;">
	               <span><button type="button" class="btn btn-warning" onclick="history.back(  )">취소</button></span>
	              <button type="submit" class="btn btn-warning">회원가입</button>
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
