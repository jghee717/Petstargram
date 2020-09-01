<?php
include 'db.php';
include "layout/layout.php";
$conn = new DBC;
$conn-> DBI();
$layout = new Layout;
$bno = $_GET['idx'];
$h = "select * from dogsta where idx ='".$bno."'";
$conn->DBQ($h);
$conn->DBE();
$hit = $conn->DBF();
$hit = $hit['hit'] + 1;
$f = "update dogsta set hit = '".$hit."' where idx = '".$bno."'";
$conn -> DBQ($f);
$conn -> DBE();
$q = "select * from dogsta where idx = '".$bno."' ";
$conn -> DBQ($q);
$conn -> DBE();
$row = $conn->DBF();
 ?>
  <!DOCTYPE html>
 <html lang="zxx">
 <?$layout->head($head);?>
<style >

.dat_delete {
display: none;
}
.dat_edit {
display:none;
}
</style>

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

     <!-- 글 불러오기 -->
     <div class="container">
       <div class="form-control" name="title">
     	<h><?php echo $row['title']; ?></h>
    </div>
    <br>
     		<div class="cart-table" >
          <p><?php echo $row['id']; ?> <?php echo $row['date']; ?> 조회:<?php echo $row['hit']; ?><br></p>
                      <p><img src = "<?php echo $row['img'];?>"  style="max-width: 100%; height: auto;"><br></p>
     				<p><?php echo nl2br("$row[content]"); ?></p>
     			</div>
     	<!-- 목록, 수정, 삭제 -->
      <br>
     	<div>
     		<ul>
          <button type="button" class="btn btn-outline-primary">
     			<a href="./dogstagram.php">[목록으로]</a>
          </button>
          <button type="button" class="btn btn-outline-primary">
     			<a href="dogsta_modify.php?idx=<?php echo $row['idx']; ?>">[수정]</a>
          </button>
          <button type="button" class="btn btn-outline-primary">
     			<a href="dogsta_delete.php?idx=<?php echo $row['idx']; ?>">[삭제]</a>
          </button>
     		</ul>
     	</div>
      </div>
	</section>
  <section class="container">
    <a href="./dogstagram.php"><button type="button" class="btn btn-success">돌아가기</button></a>
</section>
<br>

<!--- 댓글 불러오기 -->
<section class="mb-5">
<div  class="reply_view">
  <div class="container">
  <h5>댓글목록</h5>
    <?php
      $s = "select * from reply where con_num='".$bno."'order by idx";
      $conn -> DBQ($s);
      $conn -> DBE();
      ?>
        <div class="card-body">
      <?
      while($reply = $conn->DBF()){
    ?>
    <div class="card">
        <div class="row blockquote review-item">
        <div class="col-lg-3 text-center">
      <br><div class="caption"><small><?php echo $reply['id'];?></small></div>
      <div class="">
        <?php echo $reply['content']; ?>
      </div>
        <div class="dap_lo">
      <div>
        <small class="review-date"><?php echo $reply['date']; ?></small>
        <br>
        <a class="dat_edit_bt badge badge-secondary" href="#">수정</a>
        <a class="dat_delete_bt badge badge-secondary" href="#">삭제</a>
      </div>
      <!-- 댓글 수정 폼 dialog -->
      <div class="dat_edit">
        <form method="post" action="dogsta_reply_modify_ok.php">
          <input type="hidden" name="rno" value="<?php echo $reply['idx']; ?>" />
          <input type="hidden" name="b_no" value="<?php echo $bno; ?>">
          <textarea  class="form-control" name="content" ><?php echo $reply['content']; ?></textarea><br>
          <input type="submit" value="수정하기" class="re_mo_bt btn-secondary btn-sm">
        </form>
      </div>
      <!-- 댓글 삭제  -->
      <div class='dat_delete'>
        <form action="dogsta_reply_delete.php" method="post">
        <input type="hidden" name="rno" value="<?php echo $reply['idx']; ?>" />
        <input type="hidden" name="b_no" value="<?php echo $bno; ?>">
        <input type="submit" class="btn btn-secondary btn-sm" value="확인"></p>
      </form>
      </div>
    </div>
  </div>
</div>
</div>

  <?php } ?>

  <!--- 댓글 입력 폼 -->
  <div>
    <form method="post" class="reply_form">
      <input type="hidden" name="id" value="<?php echo $_SESSION['id']; ?>">
      <input type="hidden" name="bno" value="<?php echo $bno; ?>">
      <div style="margin-top:10px; ">
        <textarea class="form-control" name="content"  id="re_content" ></textarea><br>
        <button  id="rep_bt" class="re_bt btn btn-secondary btn-sm">댓글</button>
      </div>
    </form>
  </div>
</div>
</div>
</section>


  <?$layout->footer($footer);?>
	<?$layout->JsFile("");?>
	<?$layout->js($js);?>
  <script type="text/javascript" src="./js/common.js"></script>

	</body>
</html>
