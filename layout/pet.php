<?
$pet=
'
<div class="col-md-3">
<!--row mb-3-->
  <div class="row mb-3">
      <div class="col-md-12">
          <div class="card">
              <div class="card-body">
                  <div style="text-align:center"><strong><p>나만의 펫시터를 찾아보세요</p></strong></div>
                  <div class="container pagination justify-content" id="search_box">
                    <form action="./sitter_my.php" method="get">
                      <input type="hidden" name="catgo" value="kind">
                      <input type="hidden" name="catgo2" value="size">
                      <input type="hidden" name="catgo3" value="service">
                      <input type="hidden" name="search" value="<?echo $res3['kind']?>" required="required" />
                      <input type="hidden" name="search2" value="<?echo $res3['size']?>" required="required" />
                        <input type="hidden" name="search3" value="<?echo $row['service']?>" required="required" />
                      <button class="btn btn-warning">나만의 펫시터(위탁)</button><br><br>
                   </form>
                  </div>
              </div>
          </div>
      </div>
  </div>
<!--row mb-3 end-->
</div>
<!--container end-->

<div class="col-md-9">
<div class="row mb-3">
    <div class="col-md-12">
        <div class="container pagination justify-content" id="search_box">
          <span><a href="./sitter.php"> <button class="btn btn-warning">모두 보기</button></a></span>
        <form action="./sitter_leave.php" method="get">
          <input type="hidden" name="catgo" value="service">
          <div style="margin-left:10px"><span><input type="hidden" name="search"  value="위탁" required="required"/><button class="btn btn-warning">위탁</button></span></div>
        </form>
        <form action="./sitter_visit.php" method="get">
          <input type="hidden" name="catgo" value="service">
          <div style="margin-left:10px"><input type="hidden" name="search"  value="방문" required="required"/><button class="btn btn-warning">방문</button></div><br>
        </form>
      </div></span>
'
?>
