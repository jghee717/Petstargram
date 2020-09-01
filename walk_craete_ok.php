<?php
	include "./db.php";
	$conn = new DBC;
  $conn-> DBI();
 	$date = date('Y-m-d');
  $title = $_POST['title'];
  $content = $_POST['content'];
  $q = "insert into walk(title,content,date) values('".$title."','".$content."','".$date."')";
	$conn->DBQ($q);
	$conn->DBE();
 ?>
<script type="text/javascript">alert("글쓰기 완료되었습니다.");</script>
<meta http-equiv="refresh" content="0 url=./walk.php" />
