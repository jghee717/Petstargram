<?php
	include "./db.php";
	include "layout/layout.php";

	$conn = new DBC;
	$conn-> DBI();

	$layout = new Layout;
	$q = "select * from review order by idx";
	$conn->DBQ($q);
	$conn->DBE();
?>

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

<!DOCTYPE html>
<html lang="zxx">
<?$layout->head($head);?>
<head>
<script type="text/javascript" src="./smart/js/HuskyEZCreator.js" charset="utf-8"></script>

<style>
#rata {
		float:left;
	}

	/* :not(:checked) is a filter, so that browsers that don’t support :checked don’t
		follow these rules. Every browser that supports :checked also supports :not(), so
		it doesn’t make the test unnecessarily selective */
	#rata:not(:checked) > input {
			position:absolute;
			/* top:-9999px; */
			clip:rect(0,0,0,0);
	}

	#rata:not(:checked) > label {
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

	#rata:not(:checked) > label:before {
			content: '★ ';
	}

	#rata > input:checked ~ label {
			color: dodgerblue;

	}

	#rata:not(:checked) > label:hover,
	#rata:not(:checked) > label:hover ~ label {
			color: dodgerblue;

	}

	#rata > input:checked + label:hover,
	#rata > input:checked + label:hover ~ label,
	#rata > input:checked ~ label:hover,
	#rata > input:checked ~ label:hover ~ label,
	#rata > label:hover ~ input:checked ~ label {
			color: dodgerblue;

	}

	#rata > label:active {
			position:relative;
			top:2px;
			left:2px;
	}


	#rate {
			float:left;
		}

		/* :not(:checked) is a filter, so that browsers that don’t support :checked don’t
			follow these rules. Every browser that supports :checked also supports :not(), so
			it doesn’t make the test unnecessarily selective */
		#rate:not(:checked) > input {
				position:absolute;
				/* top:-9999px; */
				clip:rect(0,0,0,0);
		}

		#rate:not(:checked) > label {
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

		#rate:not(:checked) > label:before {
				content: '★ ';
		}

		#rate > input:checked ~ label {
				color: dodgerblue;

		}

		#rate:not(:checked) > label:hover,
		#rate:not(:checked) > label:hover ~ label {
				color: dodgerblue;

		}

		#rate > input:checked + label:hover,
		#rate > input:checked + label:hover ~ label,
		#rate > input:checked ~ label:hover,
		#rate > input:checked ~ label:hover ~ label,
		#rate > label:hover ~ input:checked ~ label {
				color: dodgerblue;

		}

		#rate > label:active {
				position:relative;
				top:2px;
				left:2px;
		}
</style>
</head>
<body>
	<!-- Page Preloder -->
	<div id="preloder">
		<div class="loader"></div>
	</div>

	<?$layout->headerF($headerF);?>

  <!-- 여기서부터 쓸꺼 쓰쎔--><!-- 여기서부터 쓸꺼 쓰쎔--><!-- 여기서부터 쓸꺼 쓰쎔--><!-- 여기서부터 쓸꺼 쓰쎔--><!-- 여기서부터 쓸꺼 쓰쎔--><!-- 여기서부터 쓸꺼 쓰쎔-->
	<section class="mb-5">
	    <div class="container">
			<div class="row title py-3">
			    <div class="col-md-12">
				    <div style="text-align:"><h5><strong>동물 병원 / 예방 접종</strong></h5></div>
				</div>
			</div>

	    <div class="row">

	        <div class="col-lg-12">
	            <div class="row mb-3">

					<!-- 여기서 부터 작성 -->
					<form>
							<div class="container">
								<div class="row">
									<div class="col-lg-12">
										<h6>위생</h6>
										<div class="rating" id="rata">
											 <input type="radio" id="star5" name="rating" value="5" /><label for="star5" title="완전좋음">5 stars</label>
											  <input type="radio" id="star4" name="rating" value="4" /><label for="star4" title="좋음">4 stars</label>
											  <input type="radio" id="star3" name="rating" value="3" /><label for="star3" title="보통">3 stars</label>
											  <input type="radio" id="star2" name="rating" value="2" /><label for="star2" title="별루">2 stars</label>
											  <input type="radio" id="star1" name="rating" value="1" /><label for="star1" title="완전별루">1 star</label>
										</div>
									</div>

									<div class="col-lg-12">
										<h6>친절도</h6>
										<div class="rating" id="rate">
											 <input type="radio" id="star10" name="rating2" value="5" /><label for="star10" title="완전좋음">5 stars</label>
											  <input type="radio" id="star9" name="rating2" value="4" /><label for="star9" title="좋음">4 stars</label>
											  <input type="radio" id="star8" name="rating2" value="3" /><label for="star8" title="보통">3 stars</label>
											  <input type="radio" id="star7" name="rating2" value="2" /><label for="star7" title="별루">2 stars</label>
											  <input type="radio" id="star6" name="rating2" value="1" /><label for="star6" title="완전별루">1 star</label>
										</div>
									</div>
								</div>
							</div>

						<textarea name="title" id="utitle" rows="1" cols="170" placeholder="제목" maxlength="100" required></textarea>
						<input type="id" name="id" value=""/>
						<textarea type="text" id="smart_editor" rows="20" class="form-control" value=""></textarea>
							<script type="text/javascript">
								var oEditors = [];
								nhn.husky.EZCreator.createInIFrame({
									oAppRef: oEditors,
									elPlaceHolder: "smart_editor",
									sSkinURI: "./smart/SmartEditor2Skin.html",
									fCreator: "createSEditor2"
								});
							</script>
						<div class="col-lg-12 card-left">
							<button type="submit">확인</button>
						</div>
					</form>
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
