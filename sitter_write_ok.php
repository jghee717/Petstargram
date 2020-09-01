<?php
	include "./db.php";
	$conn = new DBC;
  $conn-> DBI();
 	$date = date('Y-m-d');
  $title = $_POST['title'];
  $content = $_POST['content'];
	$address = $_POST['address'];
	$address2 = $_POST['address2'];
	$service=$_POST['service'];
	$kind=$_POST['kind'];
	$size=$_POST['size'];
  $q = "insert into sitter(id,title,content,address,address2,date,service,size,kind) values('".$_SESSION."','".$title."','".$content."','".$address."','".$address2."','".$date."','".$service."','".$size."','".$kind."')";
	$conn->DBQ($q);
	$conn->DBE();
 ?>
<script type="text/javascript">alert("글쓰기 완료되었습니다.");</script>
<meta http-equiv="refresh" content="0 url=./sitter.php" />
