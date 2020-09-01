<?php
include './db.php';
include "./layout/layout.php";
$conn = new DBC;
$conn-> DBI();
$layout = new Layout;
$bno = $_GET['idx'];
$q = "select * from walk where idx = '".$bno."' ";
$conn -> DBQ($q);
$conn -> DBE();
$row = $conn->DBF();
 ?>
<!DOCTYPE html>
<html lang="zxx">
<head>
	<title>어서오시개 | eCommerce Template</title>
	<meta charset="UTF-8">
	<meta name="description" content=" 어서오시개 | eCommerce Template">
	<meta name="keywords" content="어서오시개, eCommerce, creative, html">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<!-- Favicon -->
	<link href="img/favicon.ico" rel="shortcut icon"/>

	<!-- Google Font -->
	<link href="https://fonts.googleapis.com/css?family=Josefin+Sans:300,300i,400,400i,700,700i" rel="stylesheet">
	<link href="//maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
	<script src="//maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
	<script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
  <script type="text/javascript" src="./smarteditor2/js/HuskyEZCreator.js"></script>



	<!-- Stylesheets -->
	<link rel="stylesheet" href="css/bootstrap.min.css"/>
	<link rel="stylesheet" href="css/font-awesome.min.css"/>
	<link rel="stylesheet" href="css/flaticon.css"/>
	<link rel="stylesheet" href="css/slicknav.min.css"/>
	<link rel="stylesheet" href="css/jquery-ui.min.css"/>
	<link rel="stylesheet" href="css/owl.carousel.min.css"/>
	<link rel="stylesheet" href="css/animate.css"/>
	<link rel="stylesheet" href="css/style.css"/>


	<!--[if lt IE 9]>
		  <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
	  <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
	<![endif]-->

</head>

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
   <form action="walk_modify_ok.php/<?php echo $dogsta['idx']; ?>" method="post">
        <input type="hidden" name="idx" value="<?=$bno?>" />
        <div>
            <p><input type="text" class="form-control" name="title" placeholder="제목"><?php echo $row['title']; ?></textarea></p>
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
