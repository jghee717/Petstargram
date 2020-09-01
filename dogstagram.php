<?php
	include "./db.php";
	include "layout/layout.php";
	$conn = new DBC;
	$conn-> DBI();
	$layout = new Layout;
	$q = "select * from dogsta order by idx";
	$conn->DBQ($q);
	$conn->DBE();
?>
<!DOCTYPE html>
<html lang="zxx">
<?$layout->head($head);?>

<body>
 <!-- Page Preloder -->
 <div id="preloder">
	 <div class="loader"></div>
 </div>

 <?
 if($_SESSION['id'] == null)
 {
	 $layout->headerF($headerF); // 로그인이 안되있을때
 }
 else
 {
	 $layout->headerS($headerS); // 로그인이 되어있을때
 }
 ?>


  <!-- 여기서부터 쓸꺼 쓰쎔--><!-- 여기서부터 쓸꺼 쓰쎔--><!-- 여기서부터 쓸꺼 쓰쎔--><!-- 여기서부터 쓸꺼 쓰쎔--><!-- 여기서부터 쓸꺼 쓰쎔--><!-- 여기서부터 쓸꺼 쓰쎔-->
	<section class="mb-5">
	    <div class="container">
	    <div class="row title py-3">
	        <div class="col-md-12">
	            <h5><strong>dogstagram</strong></h5>
	        </div>
	    </div>
	</div>

	<?php
		if(isset($_GET['page'])){
			$page = $_GET['page'];
				}else{
					$page = 1;
				}
					$s = "select * from dogsta";
					$conn->DBQ($s);
					$conn->DBE();
					$row_num = $conn -> resultRow($s); //게시판 총 레코드 수
					$list = 6; //한 페이지에 보여줄 개수
					$block_ct = 5; //블록당 보여줄 페이지 개수

					$block_num = ceil($page/$block_ct); // 현재 페이지 블록 구하기
					$block_start = (($block_num - 1) * $block_ct) + 1; // 블록의 시작번호
					$block_end = $block_start + $block_ct - 1; //블록 마지막 번호

					$total_page = ceil($row_num / $list); // 페이징한 페이지 수 구하기
					if($block_end > $total_page) $block_end = $total_page; //만약 블록의 마지박 번호가 페이지수보다 많다면 마지박번호는 페이지 수
					$total_block = ceil($total_page/$block_ct); //블럭 총 개수
					$start_num = ($page-1) * $list; //시작번호 (page-1)에서 $list를 곱한다.

					$s2 = "select * from dogsta order by idx desc limit $start_num, $list";
					$conn->DBQ($s2);
					$conn->DBE();

					?>
   <div class="container">
     <div class="row">
       <?php while($dogsta = $conn->DBF()) {?>
       <div class="card-deck" style="width: 25rem; height:350px;">
         <div class="card">

           <div class="card-body">
             <h5 class="card-title"><a href="./dogstagram_read.php?idx=<?php echo $dogsta["idx"];?>"><?php echo $dogsta["title"]; ?></a></h5>
             <p class="card-text"><?echo $dogsta['content'];?></p>
           </div>
           <div class="card-footer">
             <i class="flaticon-heart"></i>
            <?php echo $dogsta['id']; ?>
           </div>
         </div>
</div>
	<?php } ?>
</div>
</dvi>
	</section>
<nav aria-label="Page navigation example">
	<div class="container" id="page_num">
	<ul class="pagination justify-content-center">
		<?php
			if($page <= 1)
			{ //만약 page가 1보다 크거나 같다면
				echo "<li class='fo_re'>처음</li>"; //처음이라는 글자에 빨간색 표시
			}else{
				echo "<li><a href='?page=1'>처음</a></li>"; //알니라면 처음글자에 1번페이지로 갈 수있게 링크
			}
			if($page <= 1)
			{ //만약 page가 1보다 크거나 같다면 빈값

			}else{
			$pre = $page-1; //pre변수에 page-1을 해준다 만약 현재 페이지가 3인데 이전버튼을 누르면 2번페이지로 갈 수 있게 함
				echo "<li><a href='?page=$pre'>이전</a></li>"; //이전글자에 pre변수를 링크한다. 이러면 이전버튼을 누를때마다 현재 페이지에서 -1하게 된다.
			}
			for($i=$block_start; $i<=$block_end; $i++){
				//for문 반복문을 사용하여, 초기값을 블록의 시작번호를 조건으로 블록시작번호가 마지박블록보다 작거나 같을 때까지 $i를 반복시킨다
				if($page == $i){ //만약 page가 $i와 같다면
					echo "<li class='fo_re'>[$i]</li>"; //현재 페이지에 해당하는 번호에 굵은 빨간색을 적용한다
				}else{
					echo "<li><a href='?page=$i'>[$i]</a></li>"; //아니라면 $i
				}
			}
			if($block_num >= $total_block){ //만약 현재 블록이 블록 총개수보다 크거나 같다면 빈 값
			}else{
				$next = $page + 1; //next변수에 page + 1을 해준다.
				echo "<li><a href='?page=$next'>다음</a></li>"; //다음글자에 next변수를 링크한다. 현재 4페이지에 있다면 +1하여 5페이지로 이동하게 된다.
			}
			if($page >= $total_page){ //만약 page가 페이지수보다 크거나 같다면
				echo "<li class='fo_re'>마지막</li>"; //마지막 글자에 긁은 빨간색을 적용한다.
			}else{
				echo "<li><a href='?page=$total_page'>마지막</a></li>"; //아니라면 마지막글자에 total_page를 링크한다.
			}
		?>
	</ul>
</div>
</nav>
  <section class="container">
    <a href="./dogsta_create.php"><button type="button" class="btn btn-success">글쓰기</button></a>
</section><br>



  <!-- 여기까지 쓰고싶은거 마무리 --><!-- 여기까지 쓰고싶은거 마무리 --><!-- 여기까지 쓰고싶은거 마무리 --><!-- 여기까지 쓰고싶은거 마무리 --><!-- 여기까지 쓰고싶은거 마무리 -->

	<?$layout->footer($footer);?>
	<?$layout->JsFile("");?>
	<?$layout->js($js);?>

	</body>
</html>
