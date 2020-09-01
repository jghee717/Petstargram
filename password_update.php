<?php
	include "./db.php";
	include "layout/layout.php";

	$conn = new DBC;
	$conn-> DBI();

	$layout = new Layout;
	$q = "select * from member where id = '".$_SESSION['id']."'";
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
<SCRIPT src="http://dmaps.daum.net/map_js_init/postcode.v2.js"></SCRIPT>

<script>
function pw(){
  var pwReg = /^(?=.*[a-zA-Z])(?=.*[^a-zA-Z0-9])(?=.*[0-9]).{9,19}$/;
    if( !pwReg.test( $("input[name=password]").val() ) ) {
        alert("비밀번호는 10~20자 영문,숫자,특수문자의 조합으로 입력해주세요.")
        document.getElementById('password').value = "";
        document.getElementById('password').focus();
        return false;
    }
  }
</script>


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
                   <form method="post" action="./password_update_ok.php" value="" onsubmit="return pw()" >
                      <div class="col-lg-9">
                        <div class="profile-head">
                                    <h5>
                                        비밀번호 변경
                                    </h5>
                                        <ul class="nav nav-tabs" id="myTab" role="tablist">
                                          <li class="nav-item">
                                            <a class="nav-link active" id="home-tab" data-toggle="tab" href="#home" role="tab" aria-controls="home" aria-selected="true">About</a>
                                          </li>
                                      </ul>
                                  </div>
                              </div>
															<div class="col-md-12" style="margin-left:500px">

                              </div>

                                <div class="row">
                                 <div class="col-md-12">
                                  <div class="tab-content profile-tab" id="myTabContent">
                                      <div class="tab-pane fade show active" id="home" role="tabpanel" aria-labelledby="home-tab">

                                        <div class="bo_line"></div>
                                        <div class="row">
                                            <div class="col-md-3">
                                                <label style="font-size:12px">변경하실 비밀번호</label>
                                            </div>
                                            <div class="col-md-9">
                                                <input type="password" class="form-control" name="password" value="" minlength="10" id="password" placeholder="10~20자의 영문,숫자,특수문자의 조합" >
                                            </div>
                                        </div>
                                        <div class="bo_line"></div>
                                        <button type="submit" name="button" >비밀번호 변경</button>
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

  <!-- 여기까지 쓰고싶은거 마무리 --><!-- 여기까지 쓰고싶은거 마무리 --><!-- 여기까지 쓰고싶은거 마무리 --><!-- 여기까지 쓰고싶은거 마무리 --><!-- 여기까지 쓰고싶은거 마무리 -->
	<?$layout->footer($footer);?>



	<?$layout->JsFile("");?>
	<?$layout->js($js);?>

	</body>
</html>
