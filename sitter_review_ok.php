<?php
	include "./db.php";

	$conn = new DBC;
	$conn-> DBI();
	//리뷰보기
	$id = $_POST['id'];
	$rating1 = $_POST['rating1'];
	$rating2 = $_POST['rating2'];
	$content = $_POST['content'];
	$date = date('Y-m-d h:m:s');

	 $q = "insert into sitter_review(sitter_idx,id,rating1,rating2,content,date) values('".$_POST['sitter_idx']."','".$id."','".$rating1."','".$rating2."','".$content."','".$date."')";
	 $conn->DBQ($q);
	 $conn->DBE();

	//board 평점순으로 정렬
	 $p = "select rating1, rating2 from sitter_review where sitter_idx = '".$_POST['sitter_idx']."'";
	 $conn->DBQ($p);
	 $conn->DBE();
	 $cnt=$conn->resultRow();

	 for($i=0; $i<$cnt; $i++)
	 {
		 $rate[$i] = $conn->DBF();
	 }
	 for($i=0; $i<$cnt; $i++)
	 {
		 $rate_arr1[$i] = $rate[$i]['rating1'];
		 $rate_arr2[$i] = $rate[$i]['rating2'];
	 }

	 $count =  count($rate_arr1);

	 $sum =  array_sum($rate_arr1);

	 $avg = $sum/$count;

	 echo $avg;

	 $p = "update sitter set star = '".$avg."' where idx = '".$sitter_idx."'";
	 $conn->DBQ($p);
	 $conn->DBE();
?>
</script>
<script type="text/javascript">alert("글쓰기 완료되었습니다.");</script>
<meta http-equiv="refresh" content="0 url=./sitter2.php?idx=<?php echo $_POST['sitter_idx']; ?>" />
