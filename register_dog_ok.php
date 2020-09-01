<?php
	include "./db.php";

    $conn = new DBC;
    $conn-> DBI();

  	$name = $_POST['name'];
  	$kind= $_POST['kind'];
    $gender=$_POST['gender'];
    $lost=$_POST['lost'];
    $size=$_POST['size'];
    $weight=$_POST['weight'];
  	$birth = $_POST['birth1'].$_POST['birth2'].$_POST['birth3'];
		$idx=$_POST['member_idx'];

  $q="insert into dog(name,kind,gender,lost,size,weight,birth,member_idx) values('".$name."','".$kind."','".$gender."','".$lost."','".$size."','".$weight."','".$birth."','".$idx."')";
  $conn -> DBQ($q);
  $conn -> DBE();

	$_SESSION['id'] = $id;
	?>
  <meta charset="utf-8" />
  <script type="text/javascript">alert('강아지 등록이 완료되었습니다.');</script>
  <meta http-equiv="refresh" content="0 url=./index.php">
