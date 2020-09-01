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


<SCRIPT src="http://dmaps.daum.net/map_js_init/postcode.v2.js"></SCRIPT>

<script>

function white() {

	var namew= document.getElementById("name").value;
	if(namew==""){
		alert("이름을 입력해주세요");
		document.getElementById('name').focus();
		return false;
	}
	var phonew= document.getElementById("phone").value;
	if(phonew==""){
		alert("휴대전화 번호를 입력해주세요");
		document.getElementById('phone').focus();
		return false;

	var addressw= document.getElementById("address1").value;
	if(addressw==""){
		alert("주소를 입력해주세요");
		document.getElementById('address1').focus();
		return false;
	}
}
}

function execDaumPostcode(){
	new daum.Postcode({
		oncomplete: function(data){
			var fullRoadAddr = data.roadAddress; //도로명 주소 변수
			var extraRoadAddr = ''; // 도로명 조합형 주소 변수

			if(data.bname !== '' && /[동|로|가]$/g.test(data.bname)){
				extraRoadAddr += data.bname;
			}
			if(data.buildingName !== '' && data.apartment ==='Y'){
				extraRoadAddr += (extraRoadAddr !== '' ? ', '+ data.buildingName : data.build)
			}
			if(extraRoadAddr !==''){
				extraRoadAddr= ' ('+extraRoadAddr + ')';
			}
			if(fullRoadAddr !== ''){
				fullRoadAddr += extraRoadAddr;
			}
			//우편번호와 주소정보를 해당 필등레 넣기
			document.getElementById('address').value = data.zonecode;
			document.getElementById('address2').value= fullRoadAddr;
			document.getElementById('address3').focus();
			}
	}).open();
}
function Onr(){
var reg = /[a-z0-9]|[ \[\]{}()<>?|`~!@#$%^&*-_+=,.;:\"'\\]/g;

    if(reg.test(document.getElementById('name').value))
    {
       alert("한글만 입력 가능합니다.");
       document.getElementById('name').value = "";
       document.getElementById('name').foucs();
       return false;
    }
}

	function pw(){
		var pwReg = /^(?=.*[a-zA-Z])(?=.*[^a-zA-Z0-9])(?=.*[0-9]).{9,19}$/;
      if( !pwReg.test( $("input[name=password]").val() ) ) {
          alert("비밀번호는 10~20자 영문,숫자,특수문자의 조합으로 입력해주세요.")
					document.getElementById('password').value = "";
					document.getElementById('password').focus();
          return false;
      }
		}


	function maxLengthCheck(object){
		if(object.value.length > object.maxLength){
			object.value = object.value.slice(0, object.maxLength);
			alert("11자리를 입력해주세요.");
			document.getElementById('phone').value="";
			document.getElementById('phone').focus();
			return false;
		}
		var idReg =/^01([0|1]?)-?([0-9]{4})-?([0-9]{4})$/;
	    if( !idReg.test( $("input[name=phone]").val() ) ) {
	        alert("휴대전화 입력이 올바르지 않습니다.");
					document.getElementById('phone').value="";
					document.getElementById('phone').focus();
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
     <form method="post" action="./mypage_ok.php" value="" onsubmit="return white()">
        <div class="col-md-12">
          <div class="profile-head">
            <h5>
                내 프로필
            </h5>
              <ul class="nav nav-tabs" id="myTab" role="tablist">
                <li class="nav-item">
                <a class="nav-link active" id="home-tab" data-toggle="tab" href="#home" role="tab" aria-controls="home" aria-selected="true">About</a>
              </li>
          </ul>
      </div>
  </div>
	<div class="col-md-12" style="margin-left:280px">
		 <button type="submit" class="profie-edit-btn">내 정보 수정</button><br><br>
		<a href="./password_update.php"><button type="button" class="profile-edit-btn" name="updatepw" >비밀번호변경</button></a><br><br>
        </div>
          <div class="row">
           <div class="col-md-12">
            <div class="tab-content profile-tab" id="myTabContent">
                <div class="tab-pane fade show active" id="home" role="tabpanel" aria-labelledby="home-tab">
							<html><hr color="black" width=99%></html>
                  <div class="row">
                      <div class="col-md-3">
                        <label>아이디</label>
                      </div>
                      <div class="col-md-9">
                         <input type="text" class="form-control" readonly="" name="id" value="<? echo $res['id'];?>" >
                      </div>
                  </div>
                  <html><hr color="black" width=99%></html>
                  <div class="row">
                      <div class="col-md-3">
                          <label>이름</label>
                      </div>
                      <div class="col-md-9">
                         <input type="text" class="form-control"  name="name" onchange="Onr()" id="name" value="<? echo $res['name'];?>" >
                      </div>
                  </div>
                  <html><hr color="black" width=99%></html>
                  <div class="row">
                      <div class="col-md-3">
                          <label>이메일</label>
                      </div>
                      <div class="col-md-9">
                           <input type="text" class="form-control" name="email" readonly=""value="<? echo $res['email'];?>" onchange="emaill()">
                      </div>
                  </div>
									<div name="email2" value="<?echo $res['email']?>"></div>
                <html><hr color="black" width=99%></html>
                  <div class="row">
                      <div class="col-md-3">
                          <label style="font-size:14px">휴대전화</label>
                      </div>
                      <div class="col-md-9">
                         <input type="text" class="form-control" name="phone" minlength="11" maxlength="11" value="<? echo $res['phone'];?>" onchange="maxLengthCheck(this)"/>
                      </div>
                  </div>
                  <html><hr color="black" width=99%></html>
                  <div class="row">
                      <div class="col-md-3">
                          <label style="font-size:14px">생년월일</label>
                      </div>
                      <div class="col-md-9">
                          <input type="text" class="form-control" readonly="" name="birth" value="<? echo $res['birth'];?>">
                      </div>
                  </div>
                <html><hr color="black" width=99%></html>
                  <div class="row">
                      <div class="col-md-1">
                          <label>주소</label>
                      </div>
                      <div class="col-md-11">
												<button type="button" onclick="execDaumPostcode()">우편번호 검색</button>
												<div class="input-group"><input type="text" class="form-control" name="address" id="address" readonly="" value="<? echo $res['address'];?>"></div>
											 <input type="text" class="form-control" name="address2" id="address2" readonly="" value="<? echo $res['address2'];?>">
											 <input type="text" class="form-control" name="address3" id="address3" value="<? echo $res['address3'];?>">
											</div>
                  </div>
                <html><hr color="black" width=99%></html>
              </div>
            </div>
        </div>
			</div>
    </div>
  </div>
</form>
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
