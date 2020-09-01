<?php
	include "./db.php";

    $conn = new DBC;
    $conn-> DBI();
		$idx =$_POST['idx'];
  	$id = $_POST['id'];
  	$name = $_POST['name'];
    $email=$_POST['email'].$_POST['".@."'].$_POST['email2'];
  	$address = $_POST['address'];
	  $address2 = $_POST['address2'];
	  $address3 = $_POST['address3'];
  	$birth = $_POST['birth'];
    $phone = $_POST['phone'];



    $q="update member set name='".$name."',phone='".$phone."', address='".$address."', address2='".$address2."', address3='".$address3."', email='".$email."' where id = '".$_SESSION['id']."'";
    $conn -> DBQ($q);
    $conn -> DBE();
		$_SESSION['id'] = $id;
?>
<meta charset="utf-8" />
<script type="text/javascript">alert('내 정보가 수정 되었습니다');</script>
<meta http-equiv="refresh" content="0 url=./mypage.php">
