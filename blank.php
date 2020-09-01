<?php
	include "./db.php";
	include "layout/layout.php";

	$conn = new DBC;
	$conn-> DBI();

	$layout = new Layout;
	$q = "select * from board order by idx";
	$conn->DBQ($q);
	$conn->DBE();
?>

<!DOCTYPE html>
<html lang="zxx">
<?$layout->head($head);?>

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
			    <div class="col-lg-12">
				    <div style="text-align:"><h5><strong>????</strong></h5></div>
				</div>
			</div>

	    <div class="row">

	        <div class="col-lg-12">
	            <div class="row mb-3">

					<!-- 여기서 부터 작성 -->

					<!-- 여기까지 -->
	            </div>

	            </div>

	        </div>
	    </div>
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
