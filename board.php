<?php
	include "./db.php";
	include "layout/layout.php";

	$conn = new DBC;
	$conn-> DBI();

	$layout = new Layout;
	$q = "select * from board order by update_time desc";
	$conn->DBQ($q);
	$conn->DBE();
?>

<!DOCTYPE html>
<html lang="zxx">
<?$layout->head($head);?>

<!-- Page Preloder -->
<div id="preloder">
	 <div class="loader"></div>
 </div>

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

<style>

nav > .nav.nav-tabs{

  border: none;
    color:#fff;
    background:#272e38;
    border-radius:0;

}
nav > div a.nav-item.nav-link,
nav > div a.nav-item.nav-link.active
{
  border: none;
    padding: 18px 25px;
    color:#fff;
    background:#272e38;
    border-radius:0;
}

nav > div a.nav-item.nav-link.active:after
 {
  content: "";
  position: relative;
  bottom: -60px;
  left: -10%;
  border: 15px solid transparent;
  border-top-color: #e74c3c ;
}
.tab-content{
  background: #fdfdfd;
    line-height: 25px;
    border: 1px solid #ddd;
    border-top:5px solid #e74c3c;
    border-bottom:5px solid #e74c3c;
    padding:30px 25px;
}

nav > div a.nav-item.nav-link:hover,
nav > div a.nav-item.nav-link:focus
{
  border: none;
    background: #e74c3c;
    color:#fff;
    border-radius:0;
    transition:background 0.20s linear;
}
</style>

<body>

  <!-- 여기서부터 쓸꺼 쓰쎔--><!-- 여기서부터 쓸꺼 쓰쎔--><!-- 여기서부터 쓸꺼 쓰쎔--><!-- 여기서부터 쓸꺼 쓰쎔--><!-- 여기서부터 쓸꺼 쓰쎔--><!-- 여기서부터 쓸꺼 쓰쎔-->
	<section class="mb-5">
	  <div class="container">
	    <div class="row title py-3">
	        <div class="col-md-12">
	            <div style="text-align:"><h5><strong>강아지를 부탁해</strong></h5>/동물병원</div>
	        </div>
	    </div>

	    <div class="row">
	        <div class="col-md-3">
			<!--row mb-3-->
	          <div class="row mb-3">
	              <div class="col-md-12">
	                  <div class="card">
	                      <div class="card-body">
	                          <strong><p>강아지를 부탁해</p></strong>
	                          <ul class="list-unstyled">
	                             <a href="./board.php"> <li>동물 병원</li></a>
	                             <a href="./cafe_board.php"> <li>애견 카페<li></a>
	                             <a href="./salon_board.php"> <li>애견 미용실</li></a>
	                          </ul>
	                      </div>
	                  </div>
	              </div>
	          </div>
			  <!--row mb-3 end-->

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
			<!--col-md-3 end-->

	        <div class="col-md-9">
	            <div class="row mb-3">
	                <div class="col-md-12">
					  <nav>
						<div class="nav nav-tabs nav-fill" id="nav-tab" role="tablist">
						  <a class="nav-item nav-link active" id="nav-home-tab" data-toggle="tab" href="#nav-home">최신순</a>
						  <a class="nav-item nav-link" id="nav-profile-tab" data-toggle="tab" href="#nav-profile">평가순</a>
						  <a class="nav-item nav-link" id="nav-contact-tab" data-toggle="tab" href="#nav-contact">거리순</a>
						</div>
					  </nav>
					  <!--블록페이징-->
						<?php
							if(isset($_GET['page'])){
								$page = $_GET['page'];
									}else{
										$page = 1;
									}
										$s = "select * from board";
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

										$s2 = "select * from board order by idx desc limit $start_num, $list";
										$conn->DBQ($s2);
										$conn->DBE();

							?>
				  <!--최신순 정렬-->
				  <div class="tab-content py-3 px-3 px-sm-0" id="nav-tabContent">
                    <div class="tab-pane fade show active" id="nav-home" role="tabpanel" aria-labelledby="nav-home-tab">
					<?php while($board = $conn->DBF()) {?>
	                    <div class="card">
	                        <div class="card-body">
	                            <div class="row">
	                                <div class="col-md-3">
	                                   <a href="./hospital.php"><img src=<?php echo $board['img'];?>></a>
	                                </div>
	                                <div class="col-md-7">
	                                    <h5><a href='./hospital.php?idx=<?php echo $board["idx"];?>'><?php echo $board['title']; ?></a></h5>
	                                    <small>평점</small>
										<?php 
											if($board['star'] == 1) { echo '★';}
											else if($board['star'] == 2) {echo '★★';}
											else if($board['star'] == 3) {echo '★★★';}
											else if($board['star'] == 4) {echo '★★★★';}
											else if($board['star'] == 5) {echo '★★★★★';}
										?>
	                                    <p><small>위치</small></p>
										<?php echo $board['locate']?>
	                                </div>
	                            </div>
	                        </div>
	                    </div>
					<?php } ?>
					</div>

				<!--평점순 정렬-->
				<div class="tab-pane fade" id="nav-profile" role="tabpanel" aria-labelledby="nav-profile-tab">
					<?php
						$p = "select * from board order by star desc";
						$conn->DBQ($p);
						$conn->DBE();
						while($board2 = $conn->DBF()) {?>
	                    <div class="card">
	                        <div class="card-body">
	                            <div class="row">
	                                <div class="col-md-3">
	                                   <a href="./hospital.php"><img src=<?php echo $board['img'];?>></a>
	                                </div>
	                                <div class="col-md-7">
	                                    <h5><a href='./hospital.php?idx=<?php echo $board2["idx"];?>'><?php echo $board2['title']; ?></a></h5>
	                                    <small>평점</small>
										<?php 
											if($board2['star'] == 1) { echo '★';}
											else if($board2['star'] == 2) {echo '★★';}
											else if($board2['star'] == 3) {echo '★★★';}
											else if($board2['star'] == 4) {echo '★★★★';}
											else if($board2['star'] == 5) {echo '★★★★★';}
										?>
	                                    <p><small>위치</small></p>
										<?php echo $board2['locate']?>
	                                </div>
	                            </div>
	                        </div>
	                    </div>
					<?php } ?>
				</div>
				
				<!--거리순 정렬-->	
				<div class="tab-pane fade" id="nav-contact" role="tabpanel" aria-labelledby="nav-contact-tab">
					<?php
						$p = "select * from board order by distance asc";
						$conn->DBQ($p);
						$conn->DBE();
						while($board3 = $conn->DBF()) {?>
	                    <div class="card">
	                        <div class="card-body">
	                            <div class="row">
	                                <div class="col-md-3">
	                                   <a href="./hospital.php"><img src=<?php echo $board['img'];?>></a>
	                                </div>
	                                <div class="col-md-7">
	                                    <h5><a href='./hospital.php?idx=<?php echo $board3["idx"];?>'><?php echo $board3['title']; ?></a></h5>
	                                    <small>평점</small>
										<?php 
											if($board3['star'] == 1) { echo '★';}
											else if($board3['star'] == 2) {echo '★★';}
											else if($board3['star'] == 3) {echo '★★★';}
											else if($board3['star'] == 4) {echo '★★★★';}
											else if($board3['star'] == 5) {echo '★★★★★';}
										?>
	                                    <p><small>위치</small></p>
										<?php echo $board3['locate']?>
	                                </div>
	                            </div>
	                        </div>
	                    </div>
					<?php } ?>
				</div>
				<!--거리순 정렬 end-->
				</div>
				</div>
				 </div>
				 <!--col-md-9 end-->
	            </div>
				<!--tab-content py-3 px-3 px-sm-0 end-->
	          </div>
			  <!--container end-->

			  <!--블록페이징-->
				<nav aria-label="Page navigation example">
					<div class="container" id="page_num">
					<ul class="pagination justify-content-center">
						<?php
							if($page <= 1)
							{ //만약 page가 1보다 크거나 같다면
								echo "<li class='fo_re'>처음</li>"; //처음이라는 글자에 빨간색 표시
							}else{
								echo "<li><a href='?page=1'>처음</a></li>"; //알니라면 처음글자에 1번페이지로 갈 수있게 링크
							}
							if($page <= 1)
							{ //만약 page가 1보다 크거나 같다면 빈값

							}else{
							$pre = $page-1; //pre변수에 page-1을 해준다 만약 현재 페이지가 3인데 이전버튼을 누르면 2번페이지로 갈 수 있게 함
								echo "<li><a href='?page=$pre'>이전</a></li>"; //이전글자에 pre변수를 링크한다. 이러면 이전버튼을 누를때마다 현재 페이지에서 -1하게 된다.
							}
							for($i=$block_start; $i<=$block_end; $i++){
								//for문 반복문을 사용하여, 초기값을 블록의 시작번호를 조건으로 블록시작번호가 마지박블록보다 작거나 같을 때까지 $i를 반복시킨다
								if($page == $i){ //만약 page가 $i와 같다면
									echo "<li class='fo_re'>[$i]</li>"; //현재 페이지에 해당하는 번호에 굵은 빨간색을 적용한다
								}else{
									echo "<li><a href='?page=$i'>[$i]</a></li>"; //아니라면 $i
								}
							}
							if($block_num >= $total_block){ //만약 현재 블록이 블록 총개수보다 크거나 같다면 빈 값
							}else{
								$next = $page + 1; //next변수에 page + 1을 해준다.
								echo "<li><a href='?page=$next'>다음</a></li>"; //다음글자에 next변수를 링크한다. 현재 4페이지에 있다면 +1하여 5페이지로 이동하게 된다.
							}
							if($page >= $total_page){ //만약 page가 페이지수보다 크거나 같다면
								echo "<li class='fo_re'>마지막</li>"; //마지막 글자에 긁은 빨간색을 적용한다.
							}else{
								echo "<li><a href='?page=$total_page'>마지막</a></li>"; //아니라면 마지막글자에 total_page를 링크한다.
							}
						?>
					</ul>
				</div>
				</nav>
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
	<?$layout->footer($footer);?>
	<?$layout->JsFile("");?>
	<?$layout->js($js);?>

	</body>
</html>
