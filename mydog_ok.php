<?php
	include "./db.php";

    $conn = new DBC;
    $conn-> DBI();
  	$name = $_POST['name'];
  	$size = $_POST['size'];
    $weight = $_POST['weight'];
		$lost=$_POST['lost'];
    $idx =$_POST['idx'];



    $q="update dog set name='".$name."',lost='".$lost."', size='".$size."', weight='".$weight."'where idx = '".$idx."'";
    $conn -> DBQ($q);
    $conn -> DBE();
		$_SESSION['id'] = $id;
?>
<meta charset="utf-8" />
<script type="text/javascript">alert('강아지 정보가 수정 되었습니다');</script>
<meta http-equiv="refresh" content="0 url=./mydog.php">
