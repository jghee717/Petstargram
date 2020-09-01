<?php
	include "./db.php";

    $conn = new DBC;
    $conn-> DBI();

    $pw = password_hash($_POST['password'],PASSWORD_DEFAULT);

    $q="update member set password='".$pw."' where id = '".$_SESSION['id']."'";
    $conn -> DBQ($q);
    $conn -> DBE();
?>
<meta charset="utf-8" />
<script type="text/javascript">alert('비밀번호가 변경 되었습니다');</script>
<meta http-equiv="refresh" content="0 url=./mypage.php">
