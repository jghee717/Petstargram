<?php
	include "./db.php";
  $conn = new DBC;
  $conn-> DBI();
  $bno = $_POST['bno'];
  $content = $_POST['content'];
	$q = "insert into reply(con_num,content) values('".$bno."','".$content."')";
  $conn->DBQ($q);
  $conn->DBE();
?>
<script type="text/javascript" src="./js/common.js"></script>
