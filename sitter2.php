<?php
	include "./db.php";
	include "layout/layout.php";
/*해당 보드 안에 컨텐츠 불러오기*/
	$conn = new DBC;
	$layout = new Layout;
	$conn-> DBI();
	$bno= $_GET['idx'];
	$q = "select * from sitter where idx = '".$bno."'";
	$conn -> DBQ($q);
	$conn -> DBE();
	$row = $conn->DBF();
	$hit = $row['hit'] + 1;
	$f = "update sitter set hit = '".$hit."' where idx = '".$bno."'";
	$conn -> DBQ($f);
	$conn -> DBE();

	$r = "select * from sitter_review order by idx";
	$conn -> DBQ($r);
	$conn -> DBE();
/*해당 보드 안에 리뷰만 불러오기*/
	//$q = "select * from board where board_idx = '".$_GET['board_idx']."' ";
	//$conn -> DBQ($q);
	//$conn -> DBE();
	//$row = $conn->DBF();*/
/*리뷰 작성수만큼 불러오기*/
	$p = "select * from sitter_review order by idx ";
	$conn -> DBQ($p);
	$conn -> DBE();
	$date = date('Y-m-d h:m:s');

		$q = "select * from member where id = '".$_SESSION['id']."'";
		$conn->DBQ($q);
		$conn->DBE();
		$res=$conn->DBF();

		$q = "select * from dog where member_idx = '".$res['idx']."'";
		$conn->DBQ($q);
		$conn->DBE();
		$res2=$conn->DBF();
?>

<!DOCTYPE html>
<html lang="zxx">

	<!--[if lt IE 9]>
		  <script src="https://oss.maxcdn.com/htm'l5shiv/3.7.2/html5shiv.min.js"></script>
	  <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
	<![endif]-->
	<head>
		<title>어서오시개 | eCommerce Template</title>
		<meta charset="UTF-8">
		<meta name="description" content=" 어서오시개 | eCommerce Template">
		<meta name="keywords" content="어서오시개, eCommerce, creative, html">
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
		<!-- Favicon -->
		<link href="img/favicon.ico" rel="shortcut icon"/>

		<!-- Google Font -->

		<link href="//maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
		<script src="//maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
		<script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
		<script type="text/javascript" src="/js/jquery-3.2.1.min.js"></script>
		<script type="text/javascript" src="/js/jquery-ui.min.js"></script>
		<script type="text/javascript" src="./js/common2.js"></script>
		<script type="text/javascript" src="./smarteditor2/js/HuskyEZCreator.js"></script>

		<!-- Stylesheets -->
		<link rel="stylesheet" href="css/bootstrap.min.css"/>
		<link rel="stylesheet" href="css/font-awesome.min.css"/>
		<link rel="stylesheet" href="css/flaticon.css"/>
		<link rel="stylesheet" href="css/slicknav.min.css"/>
		<link rel="stylesheet" type="text/css" href="css/jquery-ui.min.css"/>
		<link rel="stylesheet" href="css/owl.carousel.min.css"/>
		<link rel="stylesheet" href="css/animate.css"/>
		<link rel="stylesheet" type="text/css" href="css/style.css"/>


		<!--[if lt IE 9]>
			  <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
		  <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
		<![endif]-->

	</head>
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
			.dat_delete {
			display: none;
			}
			.dat_edit {
			display:none;
			}
	</style>

<body>
	<!-- Page Preloder -->
	<div id="preloder">
		<div class="loader"></div>
	</div>

	<!-- Header section -->

	 <?
	 if($_SESSION['id'] == null)
	 {
		 $layout->headerF($headerF); // 로그인이 안되있을때
	 }
	 else
	 {
		 $layout->headerS($headerS); // 로그인이 되어있을때
	 }
	 ?>
	<!-- Header section end -->

	<!-- Page info -->
	<div class="page-top-info">
		<div class="container">
			<h4>펫시터</h4>
			<div class="site-pagination">
			</div>
		</div>
	</div>
	<!-- Page info end -->

	<!-- Contact section -->
	<section class="contact-section">
		<div class="container">
			<div class="row">
				<div class="col-lg-6">
								<div class="panel-body">
									<h3><?echo $row['title'];?></h3></br>
								</div>

									<h5>서비스분야</h5>
												<div class="panel-body">
													<p><?echo $row['service'];?></p>
												</div>


									<h5>전문 분야</h5>
												<div class="panel-body">
													<p>사이즈 : <?echo $row['size'];?><br>
													품종 : <?echo $row['kind'];?></p>

												</div>

									<h5>지역</h5>
												<div class="panel-body">
													<p><?echo $row['address2'];?></p>
												</div>

									<h5>전화번호</h5>
												<div class="panel-body">
													<p><?echo $res['phone'];?></p>
												</div>
												<h5>내용</h5>
												<h1><?echo $row['content'];?></h1>
											</div>
			             	</div>
									</head>
									<body>
										<div class="map" id="map"></div>
										<script type="text/javascript" src="//dapi.kakao.com/v2/maps/sdk.js?appkey=89af7c06839a68e413b4506f75382953&libraries=services"></script>
									<script>
									var Container = document.getElementById('map'), // 지도를 표시할 div
										Option = {
												center: new daum.maps.LatLng(37.71257383134439,126.89179371406749), // 지도의 중심좌표
												level: 6 // 지도의 확대 레벨
										};

									var map = new daum.maps.Map(Container, Option); // 지도를 생성합니다

									//주소 좌표 변환 객체를 생성
									var geocoder = new daum.maps.services.Geocoder();

									// 주소로 좌표를 검색합니다
									geocoder.addressSearch('<?echo $row['address2']?>', function(result, status) {

											// 정상적으로 검색이 완료됐으면
											 if (status === daum.maps.services.Status.OK) {

													var coords = new daum.maps.LatLng(result[0].y, result[0].x);

													// 결과값으로 받은 위치를 마커로 표시합니다
													var marker = new daum.maps.Marker({
															map: map,
															position: coords
													});

													// 인포윈도우로 장소에 대한 설명을 표시합니다
													var infowindow = new daum.maps.InfoWindow({
															content: '<div style="width:150px;text-align:center;padding:6px 0;">산책위치<br><a href="http://map.daum.net/link/map/Hello,<?echo $row['address2']?>" style="color:blue" target="_blank">큰지도보기</a> <a href="http://map.daum.net/link/to/,<?echo $row['address2']?>" style="color:blue" target="_blank">길찾기</a></div>'
													});
													infowindow.open(map, marker);

													// 지도의 중심을 결과값으로 받은 위치로 이동시킵니다
													map.setCenter(coords);
											}
									});
									</script>

								<div class="col-lg-4"></div>
								<div class="col-lg-8">
									<ul><br>
										<?php if($_SESSION['id'] == $sitter['id']){ ?>
										<br><br><button type="button" class="btn btn-outline-primary">
										<a href="sitter_modify.php?idx=<?php echo $row['idx']; ?>">수정</a>
										</button>
										<button type="button" class="btn btn-outline-primary">
										<a href="sitter_delete.php?idx=<?php echo $row['idx']; ?>">삭제</a>
										</button>
									<?php } else { ?>
								 <p></p>
										<?php } ?>

									</ul>
								<br>
								<section class="container">
								<a href="./sitter.php"><button type="button" class="btn btn-success" style="text-align:center">목록으로</button></a>
								</section>
								</div>
							</section>
							<br>
							<br>
				</div>
			</div>
		<html><hr color="black" width=95%></html>


		 <section class="related-product-section spad">
			 <div class="container">
				 <div class="reviews">
					 <h2>리뷰</h2></br>
					 <!--리뷰 글쓰기-->
				 <form accept-charset="UTF-8" action="sitter_review_ok.php" method="POST">
		    	<input type="hidden" name="sitter_idx" value="<?echo $_GET['idx'];?>">
					<input type="hidden" name="id" value="<?echo $_SESSION['id'];?>">
					 <div class="card">
						 <div class="card-body">
							 <div class="row blockquote review-item">
								 <div class="col-lg-3 text-center">
									 <img class="rounded-circle reviewer" src="http://standaloneinstaller.com/upload/avatar.png">
										 <div class="caption">
											 <small>by <?echo $_SESSION['id'];?></a></small>
										 </div>
								 </div>
								 <!-- <div class="co-lg-8 text-right"> -->
									 <div class=" text-left">
										 <h6>만족도</h6>
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
									 <div class="text-left">
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
												 <p><input type="submit" class="re_bt" value="확인"  onclick="submitContents(this)"></p>
												 </div>
										 <!-- </form> -->
								 <!-- </div> -->
							 </div>
						 </div>
					 </div>
				 </form><br>
			 <!--리뷰 글쓰기 끝-->
			 <!--리뷰 보기-->
			 <h4>리뷰 목록</h4>
							<?php
				 			if(isset($_GET['page'])){
				 				$page = $_GET['page'];
				 					}else{
				 						$page = 1;
				 					}
				 						$s = "select * from sitter_review where sitter_idx ='".$bno."'";
				 						$conn->DBQ($s);
				 						$conn->DBE();
				 						$row_num = $conn -> resultRow($s); //게시판 총 레코드 수
				 						$list = 5; //한 페이지에 보여줄 개수
				 						$block_ct = 5; //블록당 보여줄 페이지 개수

				 						$block_num = ceil($page/$block_ct); // 현재 페이지 블록 구하기
				 						$block_start = (($block_num - 1) * $block_ct) + 1; // 블록의 시작번호
				 						$block_end = $block_start + $block_ct - 1; //블록 마지막 번호

				 						$total_page = ceil($row_num / $list); // 페이징한 페이지 수 구하기
				 						if($block_end > $total_page) $block_end = $total_page; //만약 블록의 마지박 번호가 페이지수보다 많다면 마지박번호는 페이지 수
				 						$total_block = ceil($total_page/$block_ct); //블럭 총 개수
				 						$start_num = ($page-1) * $list; //시작번호 (page-1)에서 $list를 곱한다.

				 						$s2 = "select * from sitter_review where sitter_idx ='".$bno."'order by idx desc limit $start_num, $list";
				 						$conn->DBQ($s2);
				 						$conn->DBE();
				 						?>

				 <?php while($sitter_review = $conn->DBF()) {?>
					 <div class="card">
						 <div class="card-body">
							 <div class="row blockquote review-item">
								 <div class="col-lg-3 text-center">
									 <img class="rounded-circle reviewer" src="http://standaloneinstaller.com/upload/avatar.png">
										 <div class="caption">
											 <small>by <?echo $sitter_review['id'];?></a></small>
										 </div>
								 </div>
								 <div class="col-lg-3">
								 <h6>만족도</h6>
									 <?php
										 if($sitter_review['rating1'] == 1) { echo '★';}
										 else if($sitter_review['rating1'] == 2) {echo '★★';}
										 else if($sitter_review['rating1'] == 3) {echo '★★★';}
										 else if($sitter_review['rating1'] == 4) {echo '★★★★';}
										 else if($sitter_review['rating1'] == 5) {echo '★★★★★';}
									 ?>
								 <h6>친절도</h6>
									 <?php
										 if($sitter_review['rating2'] == 1) { echo '★';}
										 else if($sitter_review['rating2'] == 2) {echo '★★';}
										 else if($sitter_review['rating2'] == 3) {echo '★★★';}
										 else if($sitter_review['rating2'] == 4) {echo '★★★★';}
										 else if($sitter_review['rating2'] == 5) {echo '★★★★★';}
									 ?><br>
									  <small class="review-date"><?echo $sitter_review['date'];?></small>
								 </div>
								 <div class="col-lg-6">
									 <h3><p class="review-text"><?echo $sitter_review['content'];?></p></h3>
								 <!-- 목록, 수정, 삭제 -->
								 <div class="dap_lo">
									 <div class="col-lg-12">
										 <?php if($_SESSION['id'] == $sitter_review['id']){ ?>
											 <div class="" style="text-align:right">
												 <br>
												 <a class="dat_edit_bt badge badge-secondary" href="#">수정</a>
												 <a class="dat_delete_bt badge badge-secondary" href="#">삭제</a>
											 </div>
											 <?php } else { ?>
										<p></p>
											 <?php } ?>
										 </div>
										 <!-- 리뷰 수정 폼 dialog -->
										 <div class="dat_edit">
											 <form method="post" action="sitter_review_modify_ok.php">
												 <input type="hidden" name="rno" value="<?php echo $sitter_review['idx']; ?>" />
												 <input type="hidden" name="b_no" value="<?php echo $bno;?>">
												 <textarea  class="form-control" name="content"><?php echo $sitter_review['content']; ?></textarea><br>
												 <input type="submit" value="수정하기" class="re_mo_bt btn-secondary btn-sm">
											 </form>
										 </div>
										 <!-- 리뷰 삭제  -->
										 <div class='dat_delete'>
											 <form action="sitter_review_delete.php" method="post">
											 <input type="hidden" name="rno" value="<?php echo $sitter_review['idx']; ?>" />
											 <input type="hidden" name="b_no" value="<?php echo $bno;?>">
											 <input type="submit" class="btn btn-secondary btn-sm" value="확인"></p>
										   </form>
										 </div>
									 </div>
								 </div>
							 </div>
						 </div>
					 </div>
				 <?php }?>
			 </div>
		 </div>
	 </section>
	 <section class="py-4 bg-orange">
		 <div class="container">
				<div class="row">
					<div class="col-lg-5"></div>
					<nav aria-label="Page navigation example">
						<div class="container" id="page_num" >
						<ul class="pagination justify-content-center">
							<?php
								if($page <= 1)
								{ //만약 page가 1보다 크거나 같다면
									echo "<li class='fo_re'>처음</li>"; //처음이라는 글자에 빨간색 표시
								}else{
									echo "<li><a href='?idx=$bno&page=1'>처음</a></li>"; //알니라면 처음글자에 1번페이지로 갈 수있게 링크
								}
								if($page <= 1)
								{ //만약 page가 1보다 크거나 같다면 빈값

								}else{
								$pre = $page-1; //pre변수에 page-1을 해준다 만약 현재 페이지가 3인데 이전버튼을 누르면 2번페이지로 갈 수 있게 함
									echo "<li><a href='?idx=$bno&page==$pre'>이전</a></li>"; //이전글자에 pre변수를 링크한다. 이러면 이전버튼을 누를때마다 현재 페이지에서 -1하게 된다.
								}
								for($i=$block_start; $i<=$block_end; $i++){
									//for문 반복문을 사용하여, 초기값을 블록의 시작번호를 조건으로 블록시작번호가 마지박블록보다 작거나 같을 때까지 $i를 반복시킨다
									if($page == $i){ //만약 page가 $i와 같다면
										echo "<li class='fo_re'>[$i]</li>"; //현재 페이지에 해당하는 번호에 굵은 빨간색을 적용한다
									}else{
										echo "<li><a href='?idx=$bno&page=$i'>[$i]</a></li>"; //아니라면 $i
									}
								}
								if($block_num >= $total_block){ //만약 현재 블록이 블록 총개수보다 크거나 같다면 빈 값
								}else{
									$next = $page + 1; //next변수에 page + 1을 해준다.
									echo "<li><a href='?idx=$bno&page=$next'>다음</a></li>"; //다음글자에 next변수를 링크한다. 현재 4페이지에 있다면 +1하여 5페이지로 이동하게 된다.
								}
								if($page >= $total_page){ //만약 page가 페이지수보다 크거나 같다면
									echo "<li class='fo_re'>마지막</li>"; //마지막 글자에 긁은 빨간색을 적용한다.
								}else{
									echo "<li><a href='?idx=$bno&page=$total_page'>마지막</a></li>"; //아니라면 마지막글자에 total_page를 링크한다.
								}
							?>
						</ul>
				 </div>
			</nav>
	 </div>
 </div>
</section>
	<!-- Related product section end -->


	<!-- Footer section -->
	<?$layout->footer($footer);?>
	<?$layout->JsFile("");?>
	<?$layout->js($js);?>

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
