<?php
	include "./db.php";
	include "layout/layout.php";

	$conn = new DBC;
	$conn-> DBI();

	$layout = new Layout;
	$q = "select idx from member where id = '".$_SESSION['id']."'";
	$conn->DBQ($q);
	$conn->DBE();
	$row = $conn->DBF();

	$q = "select * from dog where member_idx = '".$row['idx']."'";
	$conn->DBQ($q);
	$conn->DBE();
  $res=$conn->DBF();


?>

<!DOCTYPE html>
<html lang="zxx">
<?$layout->head($head);?>
<style>
.bo_line {
  width:100%;
    height:1px;
    background: gray;
    margin-top:20px;
    margin-bottom: 20px;

}

</style>
<link href="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
<script src="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js"></script>
<script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>

<script>
function white() {
	var idw= document.getElementById("name").value;
	if(idw==""){
		alert("이름을 입력해주세요");
		document.getElementById('name').focus();
		return false;
	}
	var namew= document.getElementById("weight").value;
	if(namew==""){
		alert("무게를 입력해주세요");
		document.getElementById('weight').focus();
		return false;
	}
function maxLengthCheck(object){
	if(object.value.length > object.maxLength){
		object.value = object.value.slice(0, object.maxLength);
		return false;
	}
 }
}
</script>
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
<?$layout->headerS($headerS);?>
	<!-- Header section end -->



	<!-- Hero section -->

            <div class="container emp-profile">

            <div class="row">
              <div class="col-lg-3">
								<br><br><h5>마이페이지</h5><br><br>
                       <div class="card">
                       <div class="card-body">

                       <strong><p>My page</p></strong>
                       <ul class="list-unstyled">
                          <a href="./mypage.php"> <li>내 프로필</li></a>
                          <a href="./mydog.php"> <li>내 강아지<li></a>
                          <a href="./delete_member.php"> <li>회원 탈퇴</li></a>
                         </ul>
                     </div>
                 </div>
              </div>
								 <form class="form-horizontal" method="post" id="chk_form" action="./mydog_ok.php" onsubmit="return white()" data-ajax="false">
                  <div class="col-lg-9">
                    <div class="profile-head"><br><br><br><br><br>
                    <h5>
                        내 강아지
                    </h5>
                        <ul class="nav nav-tabs" id="myTab" role="tablist">
                          <li class="nav-item">
                            <a class="nav-link active" id="home-tab" data-toggle="tab" href="#home" role="tab" aria-controls="home" aria-selected="true">About</a>
                          </li>
                      </ul>
                  </div>
              </div>
							<div class="col-md-12" style="margin-left:300px">
								 <span><button type="submit" class="profie-edit-btn">정보 수정</button></span>
              </div>

                <div class="row">
                 <div class="col-md-12">
                  <div class="tab-content profile-tab" id="myTabContent">
                      <div class="tab-pane fade show active" id="home" role="tabpanel" aria-labelledby="home-tab">
                        <div class="bo_line"></div>
                        <div class="row">
                            <div class="col-md-3">
                                <label>이름</label>
                            </div>
                            <div class="col-md-9">
                               <input type="text" class="form-control" name="name" id="name" value="<? echo $res['name'];?>" >
                            </div>
                        </div>
                        <div class="bo_line"></div>
                        <div class="row">
                            <div class="col-md-3">
                                <label>종류</label>
                            </div>
                            <div class="col-md-9">
                                 <input type="text" class="form-control" readonly="" name="kind" id="kind" value="<? echo $res['kind'];?>" >
                            </div>
                        </div>
												<div class="bo_line"></div>
                        <div class="row">
                            <div class="col-md-3">
                                <label>성별</label>
                            </div>
                            <div class="col-md-9">
                                 <input type="text" class="form-control" readonly="" name="gender" id="gender" value="<? echo $res['gender'];?>" >
                            </div>
                        </div>
												<div class="bo_line"></div>
                        <div class="row">
                            <div class="col-md-3">
                                <label style="font-size:10px">중성화 수술</label>
                            </div>
														<script>$(document).ready(function(){
														$("select option[value='<?echo $res['lost'];?>']").attr("selected", true);
														});</script>
                            <div class="col-md-9">
															<select  name="lost" class"form-control"  selected="selected">
															 <option value="O">O</option><option value="X">X</option>
														 </select>
                            </div>
                        </div>
												<div class="bo_line"></div>
                        <div class="row">
                            <div class="col-md-3">
                                <label>크기</label>
                            </div>
														<script>$(document).ready(function(){
														$("select option[value='<?echo $res['size'];?>']").attr("selected", true);
												  	});</script>
                            <div class="col-md-9">
															<select  name="size" class"form-control"  selected="selected" >
																<option value="소형">소형</option><option value="중형">중형</option><option value="대형">대형</option>
															</select>
                            </div>
                        </div>
												<div class="bo_line"></div>
                        <div class="row">
                            <div class="col-md-3">
                                <label>무게(kg)</label>
                            </div>
                            <div class="col-md-9">
                              <input type="number" class="form-control" name="weight" id="weight" value="<? echo $res['weight'];?>" maxlength="2" oninput="maxLengthCheck(this)"/>
                            </div>
                        </div>
                        <div class="bo_line"></div>
                        <div class="row">
                            <div class="col-md-3">
                                <label style="font-size:14px">생년월일</label>
                            </div>
                            <div class="col-md-9">
                                 <input type="text" class="form-control" readonly="" name="birth"id="birth" value="<? echo $res['birth'];?>" >
                            </div>
                        </div>
												<input type="hidden" name="member_idx" value="<? echo $res['member_idx'];?>">
													<input type="hidden" name="idx" value="<? echo $res['idx'];?>">
                        <div class="bo_line"></div>
												<div class="col-md-2">

												</div>
												<div class="col-md-10">

												</div>
                      </div>
                  </div>
              </div>
          </div>
      </form>
  </div>
</div>

<!-- 여기까지 -->


<!--cta section-->
  	<section class="py-4 bg-orange">
  	   <div class="container">
  		    <div class="row">
  		    </div>
  		</div>
  	</section>

	<!-- Hero section end -->

	<!-- Features section -->





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
