<?php
include "./db.php";
$conn = new DBC;
$conn-> DBI();
$rno = $_POST['rno'];

$q = "select * from sitter_reply where idx='".$rno."'";
$conn->DBQ($q);
$conn->DBE();
$reply = $conn->DBF();

$bno = $_POST['b_no'];
$s = "select * from sitter where idx='".$bno."'";
$conn->DBQ($s);
$conn->DBE();
$reply = $conn->DBF();

$d = "delete from sitter_reply where idx='".$rno."'";
$conn->DBQ($d);
$conn->DBE();
?>
<script type="text/javascript" src="./js/common2.js"></script>

	<script type="text/javascript">alert('댓글이 삭제되었습니다.'); location.replace("sitter2.php?idx=<?php echo $bno; ?>");</script>
