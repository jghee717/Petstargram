<?php
	include "./db.php";
	include "layout/layout.php";

	$conn = new DBC;
	$conn-> DBI();

	$layout = new Layout;
	$q = "select * from cafe_board order by update_time desc";
	$conn->DBQ($q);
	$conn->DBE();
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
	            <div style="text-align:"><h5><strong>동물 병원 / 예방 접종</strong></h5></div>
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
	                             <a href="./board.php"> <li>동물 병원 / 예방 접종</li></a>
	                             <a href="./cafe.php"> <li>애견 카페<li></a>
	                             <a href="./salon.php"> <li>애견 미용실</li></a>
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
				  <!--최신순 정렬-->
				  <div class="tab-content py-3 px-3 px-sm-0" id="nav-tabContent">
                    <div class="tab-pane fade show active" id="nav-home" role="tabpanel" aria-labelledby="nav-home-tab">
					<?php while($cafe_board = $conn->DBF()) {?>
	                    <div class="card">
	                        <div class="card-body">
	                            <div class="row">
	                                <div class="col-md-3">
	                                   <a href="./hospital.php"><img src="https://s3.envato.com/files/248072868/Screenshot/01_preview.jpg"></a>
	                                </div>
	                                <div class="col-md-7">
	                                    <h5><a href='./hospital.php?idx=<?php echo $cafe_board["idx"];?>'><?php echo $cafe_board['title']; ?></a></h5>
	                                    <small>평점</small>
										<?php 
											if($cafe_board['star'] == 1) { echo '★';}
											else if($cafe_board['star'] == 2) {echo '★★';}
											else if($cafe_board['star'] == 3) {echo '★★★';}
											else if($cafe_board['star'] == 4) {echo '★★★★';}
											else if($cafe_board['star'] == 5) {echo '★★★★★';}
										?>
	                                    <p><small>위치</small></p>
										<?php echo $cafe_board['locate']?>
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
						while($cafe_board2 = $conn->DBF()) {?>
	                    <div class="card">
	                        <div class="card-body">
	                            <div class="row">
	                                <div class="col-md-3">
	                                   <a href="./hospital.php"><img src="https://s3.envato.com/files/248072868/Screenshot/01_preview.jpg"></a>
	                                </div>
	                                <div class="col-md-7">
	                                    <h5><a href='./hospital.php?idx=<?php echo $cafe_board2["idx"];?>'><?php echo $cafe_board2['title']; ?></a></h5>
	                                    <small>평점</small>
										<?php 
											if($cafe_board2['star'] == 1) { echo '★';}
											else if($cafe_board2['star'] == 2) {echo '★★';}
											else if($cafe_board2['star'] == 3) {echo '★★★';}
											else if($cafe_board2['star'] == 4) {echo '★★★★';}
											else if($cafe_board2['star'] == 5) {echo '★★★★★';}
										?>
	                                    <p><small>위치</small></p>
										<?php echo $cafe_board2['locate']?>
	                                </div>
	                            </div>
	                        </div>
	                    </div>
					<?php } ?>
				</div>
				
				<!--거리순 정렬-->	
				<div class="tab-pane fade" id="nav-contact" role="tabpanel" aria-labelledby="nav-contact-tab">
					<?php
						$p = "select * from cafe_board order by distance asc";
						$conn->DBQ($p);
						$conn->DBE();
						while($cafe_board3 = $conn->DBF()) {?>
	                    <div class="card">
	                        <div class="card-body">
	                            <div class="row">
	                                <div class="col-md-3">
	                                   <a href="./hospital.php"><img src="https://s3.envato.com/files/248072868/Screenshot/01_preview.jpg"></a>
	                                </div>
	                                <div class="col-md-7">
	                                    <h5><a href='./hospital.php?idx=<?php echo $cafe_board3["idx"];?>'><?php echo $cafe_board3['title']; ?></a></h5>
	                                    <small>평점</small>
										<?php 
											if($cafe_board3['star'] == 1) { echo '★';}
											else if($cafe_board3['star'] == 2) {echo '★★';}
											else if($cafe_board3['star'] == 3) {echo '★★★';}
											else if($cafe_board3['star'] == 4) {echo '★★★★';}
											else if($cafe_board3['star'] == 5) {echo '★★★★★';}
										?>
	                                    <p><small>위치</small></p>
										<?php echo $cafe_board3['locate']?>
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
