
<?php
	include "./db.php";
	include "layout/layout.php";

	$conn = new DBC;
	$conn-> DBI();

	$layout = new Layout;
	$q = "select * from member";
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

	<?$layout->headerS($headerS);?>

  <!-- 여기서부터 쓸꺼 쓰쎔--><!-- 여기서부터 쓸꺼 쓰쎔--><!-- 여기서부터 쓸꺼 쓰쎔--><!-- 여기서부터 쓸꺼 쓰쎔--><!-- 여기서부터 쓸꺼 쓰쎔--><!-- 여기서부터 쓸꺼 쓰쎔-->
  <section class="mb-5">
	    <div class="container">
			<div class="row title py-3">
			    <div class="col-lg-12">
				    <div style="text-align:"><h5><strong>마이페이지</strong></h5></div>
				</div>
			</div>
    </div>
  </section>

					<!-- 여기서 부터 작성 -->

          <div class="container emp-profile">

          <div class="row">
            <div class="col-lg-3">
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

					    <script type="text/javascript">
					        // 비밀번호 미입력시 경고창
					        function checkValue(){
					            if(!document.deleteform.password.value){
					                alert("비밀번호를 입력하지 않았습니다.");
					                return false;
					            }
					        }
					    </script>

					    <form name="deleteform" method="post" action="delete_member_check.php" onsubmit="return checkValue()">
                  <div  style="margin-left:100px" class="col-md-12 ">
                    <div class="profile-head">
                      <h5><br>
                          회원 탈퇴
                      </h5><br><br><br>


                      <div class="row">
                         <div class="col-lg-12">
                          <div class="input-group">
                            <label>비밀번호</lable> <input type="password" class="form-control"  name="password"></div>
                        </div>
                      </div>
                    </div>

					        <br>
					        <input type="button" value="취소" onclick="javascript:window.location='mypage.php'">
					        <input type="submit" value="탈퇴" />
					    </form>
					<!-- 여기까지 -->
              </div>
	            </div>

	        </div>
	    </div><br><br><br><br><br><br><br>
    </form>

	<!--cta section-->


  <!-- 여기까지 쓰고싶은거 마무리 --><!-- 여기까지 쓰고싶은거 마무리 --><!-- 여기까지 쓰고싶은거 마무리 --><!-- 여기까지 쓰고싶은거 마무리 --><!-- 여기까지 쓰고싶은거 마무리 -->
	<?$layout->footer($footer);?>



	<?$layout->JsFile("");?>
	<?$layout->js($js);?>

	</body>
</html>
