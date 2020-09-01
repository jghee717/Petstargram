<?php
include 'db.php';
include "layout/layout.php";
$conn = new DBC;
$conn-> DBI();
$layout = new Layout;
$q = "select * from dogsta";
$conn -> DBQ($q);
$conn -> DBE();
$row = $conn->DBF();
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
 <section class="container">
   <br>
  <form action="dogsta_create_ok.php" method="POST">
    <p><input type="text" class="form-control" name="title" placeholder="제목"></p>
    <p><textarea name="content" id="content" class="form-control" rows="20" placeholder="내용"></textarea>
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
