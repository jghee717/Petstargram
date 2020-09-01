<?php
	include "./db.php";
	include "layout/layout.php";

	$conn = new DBC;
	$conn-> DBI();

	$layout = new Layout;
	$q = "select * from member";
	$conn->DBQ($q);
	$conn->DBE();
	$board=$conn->DBF();
?>

<!DOCTYPE html>
<html lang="zxx">
<?$layout->head($head);?>

<body>
	<!-- Page Preloder -->
	<div id="preloder">
		<div class="loader"></div>
	</div>

	<?$layout->headerS($headerS);?>

  <!-- 여기서부터 쓸꺼 쓰쎔--><!-- 여기서부터 쓸꺼 쓰쎔--><!-- 여기서부터 쓸꺼 쓰쎔--><!-- 여기서부터 쓸꺼 쓰쎔--><!-- 여기서부터 쓸꺼 쓰쎔--><!-- 여기서부터 쓸꺼 쓰쎔-->
	<section class="mb-5">
	    <div class="container">
			<div class="row title py-3">
			    <div class="col-lg-12">
				    <div style="text-align:"><h5><strong>My page</strong></h5></div>
				</div>
			</div>
    </div>
  </section>


					<!-- 여기서 부터 작성 -->
          <section class="category-section spad">
            <div class="container">
             <div class="row mt">
              <div class="col-lg-3">
              </div>
                <div class="col-lg-6">
                 <div class="main-login main-center">
                  <form class="form-horizontal" method="post" action="./mypage_check.php">
                   <div class="form-group">
                    <label for="password">비밀번호 입력</label>
                     <div class="input-group">
                      <input type="password" class="form-control" name="password" id="pw"  placeholder="비밀번호를 입력하세요..">
                     </div>
                  </div>
                  <div class="login-register" style="text-align:center;">
                   <button type="submit" class="btn btn-warning">확인</button><br>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </section><br><br><br><br><br><br><br><br><br><br><br><br><br><br>
					<!-- 여기까지 -->

  <!-- 여기까지 쓰고싶은거 마무리 --><!-- 여기까지 쓰고싶은거 마무리 --><!-- 여기까지 쓰고싶은거 마무리 --><!-- 여기까지 쓰고싶은거 마무리 --><!-- 여기까지 쓰고싶은거 마무리 -->
	<?$layout->footer($footer);?>



	<?$layout->JsFile("");?>
	<?$layout->js($js);?>

	</body>
</html>
