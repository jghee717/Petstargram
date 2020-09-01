<?php
	include "./db.php";
	$conn = new DBC;
  $conn-> DBI();
	$idx = $_POST['idx'];
	$id=$_POST['id'];
  $title = $_POST['title'];
  $content = $_POST['content'];
	$address=$_POST['address'];
	$address2=$_POST['address2'];
	$date = $_POST['date'];
	$phone = $_POST['phone'];
	$service=$_POST['service'];
	$time = $_POST['time'];
  $q = "update sitter set idx='".$idx."',title = '".$title."', content = '".$content."' address='".$address."', address2='".$address2."', date='".$date."', phone='".$phone."',service='".$service."',time='".$time."' where idx='".$idx."'";
	$conn->DBQ($q);
	$conn->DBE();
 ?>
<script type="text/javascript">alert("수정되었습니다.");</script>
<meta http-equiv="refresh" content="0 url=http://ccitb.dothome.co.kr/divisima/sitter.php?idx=<?php echo $idx; ?>">
