<?php
include 'db.php';
include "layout/layout.php";
$conn = new DBC;
$conn-> DBI();
$layout = new Layout;
$q = "select * from sitter";
$conn -> DBQ($q);
$conn -> DBE();
$row = $conn->DBF();
$q = "select * from member where id = '".$_SESSION['id']."'";
$conn->DBQ($q);
$conn->DBE();
$res=$conn->DBF();
 ?>

<!DOCTYPE html>
<html lang="zxx">
<?$layout->head($head);?>
<link rel="stylesheet" href="//code.jquery.com/ui/1.11.4/themes/smoothness/jquery-ui.css">
<script src="//code.jquery.com/jquery.min.js"></script>
<script src="//code.jquery.com/ui/1.11.4/jquery-ui.min.js"></script>

<script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
<script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
<SCRIPT src="http://dmaps.daum.net/map_js_init/postcode.v2.js"></SCRIPT>
<script>
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
  
			}
	}).open();
}

$(function() {
  var languages = [
    "포메라니안", "닥스훈트", "시츄","요크셔테리어", "리트리버",
    "골든리트리버", "말티즈", "치와와", "비숑", "푸들",
    "불독", "프렌치 불독", "진돗개", "웰시코기", "시바견(시바이누)",
    "삽살개", "퍼그", "스피츠", "슈나우저", "사모예드",
    "말라뮤트", "허스키","스코티시 테리어","카바리에 킹 찰스 스파니엘","베들링턴"
    ,"재패니즈 친","보스턴 테리어","페키니즈","맨체스터 테리어"
    ,"비글","보더 콜리","보더 콜리"
  ];

  $( "#kind" ).autocomplete({
    source: languages
  });
});
</script>
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
 <section class="container">
   <br>
  <form action="sitter_write_ok.php" method="POST">




      <span><button type="button" onclick="execDaumPostcode()">위치 설정</button>
          <script>$(document).ready(function(){
        $("select option[value='<?echo $row['service'];?>']").attr("selected", true);
        });</script>
          <select  name="service" class"form-control"  selected="selected">
            <option value="서비스">서비스</option><option value="위탁">위탁</option><option value="방문">방문</option>
         </select>
         <script>$(document).ready(function(){
       $("select option[value='<?echo $row['size'];?>']").attr("selected", true);
     });</script>
         <select  name="size" class"form-control"  selected="selected">
            <option value="사이즈">사이즈</option><option value="대형">대형</option><option value="중형">중형</option><option value="소형">소형</option>
        </select></span>
       <div class="input-group"><input type="text" class="form-control" name="address" id="address" readonly="" value="<? echo $res['address'];?>"></div>
       <input type="text" class="form-control" name="address2" id="address2" readonly="" value="<? echo $res['address2'];?>">
       <input type="text" class="form-control" name="kind" value=""  id='kind' placeholder="품종을 입력하세요.."><br>
  <p><input type="text" class="form-control" name="title" placeholder="제목"></p>
    <p><textarea name="content" id="content" class="form-control" rows="20" placeholder="ffsdafsadfsafsfsdfas"></textarea>
      <script type="text/javascript">
      var oEditors = [];
      nhn.husky.EZCreator.createInIFrame({
          oAppRef: oEditors,
          elPlaceHolder: "content",
          sSkinURI: "./smarteditor2/SmartEditor2Skin.html",
          fCreator: "createSEditor2"
      });
      function submitContents(elClickedObj) {
          // 에디터의 내용이 textarea에 적용됩니다.
          oEditors.getById["content"].exec("UPDATE_CONTENTS_FIELD", []);
          // 에디터의 내용에 대한 값 검증은 이곳에서 document.getElementById("ir1").value를 이용해서 처리하면 됩니다.

          try {
              elClickedObj.form.submit();
          } catch(e) {}
      }
      </script>
</p>
    <p><input type="submit" value="확인"  onclick="submitContents(this)"></p>
  </form>
</br>
</section>
  <!-- 여기까지 쓰고싶은거 마무리 --><!-- 여기까지 쓰고싶은거 마무리 --><!-- 여기까지 쓰고싶은거 마무리 --><!-- 여기까지 쓰고싶은거 마무리 --><!-- 여기까지 쓰고싶은거 마무리 -->


  	<?$layout->footer($footer);?>
  	<?$layout->JsFile("");?>
  	<?$layout->js($js);?>


	</body>
</html>
