<?php
include "./db.php";
$conn = new DBC;
$conn-> DBI();
$rno = $_POST['rno'];
$q = "select * from reply where idx='".$rno."'";
$conn->DBQ($q);
$conn->DBE();
$reply = $conn->DBF();

$bno = $_POST['b_no'];
$s = "select * from dogsta where idx='".$bno."'";
$conn->DBQ($s);
$conn->DBE();
$reply = $conn->DBF();

$sq = "update reply set content='".$_POST['content']."' where idx = '".$rno."'";
$conn->DBQ($sq);
$conn->DBE();
?>
<script type="text/javascript" src="./js/common.js"></script>
<script type="text/javascript">alert('수정되었습니다.'); location.replace("dogstagram_read.php?idx=<?php echo $bno; ?>");</script>
