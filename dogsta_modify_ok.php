<?php
	include "./db.php";
	$conn = new DBC;
  $conn-> DBI();
  $title = $_POST['title'];
  $content = $_POST['content'];
  $idx = $_POST['idx'];
  $q = "update dogsta set title = '".$title."', content = '".$content."' where idx='".$idx."'";
	$conn->DBQ($q);
	$conn->DBE();
 ?>
<script type="text/javascript">alert("수정되었습니다.");</script>
<meta http-equiv="refresh" content="0 url=http://ccitb.dothome.co.kr/divisima/dogstagram_read.php?idx=<?php echo $idx; ?>">
