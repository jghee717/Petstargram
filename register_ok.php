<?php
	include "./db.php";

    $conn = new DBC;
    $conn-> DBI();
		const PASSWORD_COST = ['cost'=>12];


  	$id = $_POST['id'];
  	$password = password_hash($_POST['password'],PASSWORD_DEFAULT,PASSWORD_COST);
  	$name = $_POST['name'];
		$address=$_POST['address'];
		$address2=$_POST['address2'];
		$address3=$_POST['address3'];
  	$birth = $_POST['birth1'].$_POST['birth2'].$_POST['birth3'];
    $phone = $_POST['phone'];

		$email = $_POST['email'].'@'.$_POST['email2'];


  $q="insert into member(id,password,name,email,phone,birth,address,address2,address3) values('".$id."','".$password."','".$name."','".$email."','".$phone."','".$birth."','".$address."','".$address2."','".$address3."')";
  $conn -> DBQ($q);
  $conn -> DBE();

	$_SESSION['id'] = $id;

  ?>
  <meta charset="utf-8" />
  <script type="text/javascript">alert('회원가입이 완료되었습니다.');</script>
  <meta http-equiv="refresh" content="0 url=./register_dog.php">
