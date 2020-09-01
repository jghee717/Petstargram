<?php
include 'db.php';
include "layout/layout.php";
$conn = new DBC;
$conn-> DBI();
$layout = new Layout;
$bno = $_GET['idx'];
$q = "select * from dogsta where idx = '".$bno."' ";
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
   <form action="dogsta_modify_ok.php/<?php echo $dogsta['idx']; ?>" method="post">
        <input type="hidden" name="idx" value="<?=$bno?>" />
        <br><?php echo $row['title']; ?>
        <div>
            <p><input type="text" class="form-control" name="title" placeholder="제목"></textarea></p>
        </div>
        <div id="in_content">
          <p><textarea name="content" id="content" class="form-control" rows="20" placeholder="내용"><?php echo $row['content']; ?></textarea>
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
        </div>
    </form>
</br>
</section>
  <!-- 여기까지 쓰고싶은거 마무리 --><!-- 여기까지 쓰고싶은거 마무리 --><!-- 여기까지 쓰고싶은거 마무리 --><!-- 여기까지 쓰고싶은거 마무리 --><!-- 여기까지 쓰고싶은거 마무리 -->


  	<?$layout->footer($footer);?>
  	<?$layout->JsFile("");?>
  	<?$layout->js($js);?>


	</body>
</html>
