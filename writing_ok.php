<?php
	include "./db.php";

	$conn = new DBC;
	$conn-> DBI();
	//리뷰보기
	$id = $_POST['id'];
	$rating1 = $_POST['rating1'];
	$rating2 = $_POST['rating2'];
	$content = $_POST['content'];
	$date = date('Ymd');

	 $q = "insert into review(board_idx,id,rating1,rating2,content,date) values('".$_POST['board_idx']."','".$id."','".$rating1."','".$rating2."','".$content."','".$date."')";
	 $conn->DBQ($q);
	 $conn->DBE();

	//board 평점순으로 정렬
	 $p = "select rating1, rating2 from review where board_idx = '".$_POST['board_idx']."'";
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
	 //print_r($rate_arr1);

	 $count =  count($rate_arr1);

	 //print_r($rate['4']['rating1']);
	 //$sum = rating1 + rating2
	 //$array = array{'rating1', 'rating2'};
	 $sum =  array_sum($rate_arr1);

	 $avg = $sum/$count;

	 echo $avg;

	 $p = "update board set star = '".$avg."' where idx = '".$board_idx."'";
	 $conn->DBQ($p);
	 $conn->DBE();

	//board 거리순으로 정렬
	/*$source ="http://openapi.map.naver.com/api/geocode.php?key=test_key&encoding=utf-8&coord=latlng&query=";

	$address = urlencode($address);

	$query = $source . $address;

	$xml = file_get_contents($query);

	$parser = new XMLParser($xml);

	$parser->Parse();

	$lng = $parser->document->item[0]->point[0]->x[0]->tagData;
	$lat = $parser->document->item[0]->point[0]->y[0]->tagData;

	$p = "select id, ( 6371 * acos( cos( radians(37) ) * cos( radians( lat ) ) * cos( radians( lng ) - radians(127) ) + sin( radians(37) ) * sin( radians( lat ) ) ) ) AS locate from board having locate < 5 order by locate LIMIT 0 , 5";
	$conn->DBQ($p);
	$conn->DBE();*/

	//$p = "select locate, (6371 * acos(cos(radians($_POST['lat'])) * cos(radians(lat)) * cos(radians(lng) - radians($_POST['lng'])) + sin(radians($_POST['lat'])) * sin(radians(lat))))
	//		  AS distance from board having distance < 5 order by distance desc limit 0, 5";
	//$conn->DBQ($p);
	//$conn->DBE();
 ?>

  <!-- $test = array('a', 'b', 'c');
  $testNo = count($test); // $test가 가진 배열 길이를 반환

  print_r($testNo); -->

 <!-- <script>
	function sum(array) {
	  var result = 0.0;

	  for (var i = 0; i < array.length; i++)
		result += array[i];

	  return result;
	}


	 function avg(array) {
	  var sum = 0.0;
	  for (var i = 0; i < array.length; i++)
		sum += array[i];
		$bno = $_GET['idx'];

	  return sum / array.length;
	} -->
</script>
<script type="text/javascript">alert("글쓰기 완료되었습니다.");</script>
<meta http-equiv="refresh" content="0 url=./hospital.php?idx=<?php echo $_POST['board_idx']; ?>" />
