<?php
	include "./db.php";
	include "layout/layout.php";

	$conn = new DBC;
	$conn-> DBI();

	$layout = new Layout;
	$q = "select * from sitter order by date desc";
	$conn->DBQ($q);
	$conn->DBE();

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
<?$layout->head($head);?>
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

  <!-- 여기서부터 쓸꺼 쓰쎔--><!-- 여기서부터 쓸꺼 쓰쎔--><!-- 여기서부터 쓸꺼 쓰쎔--><!-- 여기서부터 쓸꺼 쓰쎔--><!-- 여기서부터 쓸꺼 쓰쎔--><!-- 여기서부터 쓸꺼 쓰쎔-->
	<section class="mb-5">
	  <div class="container">
	    <div class="row title py-3">
	        <div class="col-md-12">
	            <div style="text-align:"><h5><strong>펫시터 구해요</strong></h5></div>
	        </div>
	    </div>

	    <div class="row">
	        <div class="col-md-3">
			<!--row mb-3-->
	          <div class="row mb-3">
	              <div class="col-md-12">
	                  <div class="card">
	                      <div class="card-body">
	                          <strong><p>펫시터</p></strong>
	                          <ul class="list-unstyled">
															<a href="./sitter.php"> <li>펫시터 해요</li></a>
															<a href="./sitter3.php"> <li>펫시터 구해요<li></a>
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
			<!--container end-->

    <div class="col-md-9">
        <div class="row mb-3">
            <div class="col-md-12">
					  <nav>
						<div class="nav nav-tabs nav-fill" id="nav-tab" role="tablist">
						  <a class="nav-item nav-link active" id="nav-home-tab" data-toggle="tab" href="#nav-newest">최신순</a>
						  <a class="nav-item nav-link" id="nav-profile-tab" data-toggle="tab" href="#nav-rating">평가순</a>
						</div>
					  </nav>
						<?php
							if(isset($_GET['page'])){
								$page = $_GET['page'];
									}else{
										$page = 1;
									}
										$s = "select * from sitter";
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

										$s2 = "select * from sitter order by idx desc limit $start_num, $list";
										$conn->DBQ($s2);
										$conn->DBE();

							?>
				  <!--최신순 정렬-->
				  <div class="tab-content py-3 px-3 px-sm-0" id="nav-tabContent">
                    <div class="tab-pane fade show active" id="nav-home" role="tabpanel" aria-labelledby="nav-home-tab">
					<?php while($sitter = $conn->DBF()) {?>
	                    <div class="card">
	                        <div class="card-body">
	                            <div class="row">
	                                <div class="col-md-6">
	                                    <h5><a href='./sitter2.php?idx=<?php echo $sitter["idx"];?>'><?php echo $sitter['title'];?></a></h5>
																			<a href='./sitter2.php?idx=<?php echo $sitter["idx"];?>'><?php echo $res['id']; ?></a>


										<?php
											if($sitter['star'] == 1) { echo '★';}
											else if($sitter['star'] == 2) {echo '★★';}
											else if($sitter['star'] == 3) {echo '★★★';}
											else if($sitter['star'] == 4) {echo '★★★★';}
											else if($sitter['star'] == 5) {echo '★★★★★';}

		                 //$boardtime변수에 board['date']값을 넣음
		                $timenow = date('Y-m-d'); //$timenow변수에 현재 시간 Y-M-D를 넣
										$boardtime==$sitter['date'];
		                if($boardtime==$timenow){
		                  $img = "<img src='./img/new.png' alt='new' title='new' />";
		              }else{
		           $img ="";
		         }
						 echo $sitter['date'];
		         ?>
                    </div>
										<div class="col-md-1">
											 </div>
											 <?php 	echo $sitter['address2'];?>

	                            </div>
	                        </div>
	                    </div>
					<?php } ?>
					</div>

				<!--평점순 정렬-->
				<div class="tab-pane fade" id="nav-profile" role="tabpanel" aria-labelledby="nav-profile-tab">
					<?php
						$p = "select * from sitter order by star desc";
						$conn->DBQ($p);
						$conn->DBE();
						while($sitter2 = $conn->DBF()) {?>
	                    <div class="card">
	                        <div class="card-body">
	                            <div class="row">
	                                <div class="col-md-3">
	                                   <a href="./sitter2.php"><img src="https://s3.envato.com/files/248072868/Screenshot/01_preview.jpg"></a>
	                                </div>
	                                <div class="col-md-7">
	                                    <h5><a href='./sitter2.php?idx=<?php echo $sitter2["idx"];?>'><?php echo $sitter2['title'];?></a></h5>
	                                    <small>평점</small>
										<?php
											if($sitter2['star'] == 1) { echo '★';}
											else if($sitter2['star'] == 2) {echo '★★';}
											else if($sitter2['star'] == 3) {echo '★★★';}
											else if($sitter2['star'] == 4) {echo '★★★★';}
											else if($sitter2['star'] == 5) {echo '★★★★★';}
										?>
                    <p><small>위치</small></p>
										<?php echo $sitter2['locate']?>
                    </div>
                </div>
            </div>
        </div>
			<?php } ?>
		</div>

				<!--거리순 정렬-->

	 </div>
				 <!--tab-content py-3 px-3 px-sm-0 end-->
    </div>
  </div>

 <div style="text-align:right"><a href="./sitter_write.php"><button type="button" class="btn btn-success" >글쓰기</button></a>
	 <section class="py-4 bg-orange" >
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
 				</div>
 		</div>
 	</section>
</div>
</div>	  <!--col-md-9 end-->
</section>

	<!--cta section-->


  <!-- 여기까지 쓰고싶은거 마무리 --><!-- 여기까지 쓰고싶은거 마무리 --><!-- 여기까지 쓰고싶은거 마무리 --><!-- 여기까지 쓰고싶은거 마무리 --><!-- 여기까지 쓰고싶은거 마무리 -->
	<?$layout->footer($footer);?>
	<?$layout->JsFile("");?>
	<?$layout->js($js);?>

	</body>
</html>
