<?php
	include "./db.php";
  $conn = new DBC;
  $conn-> DBI();
  $q = "delete from dogsta where idx= '".$_GET['idx']."'";
  $conn->DBQ($q);
  $conn->DBE();
?>
<script type="text/javascript">alert("삭제되었습니다.");</script>
<meta http-equiv="refresh" content="0 url=./dogstagram.php" />
