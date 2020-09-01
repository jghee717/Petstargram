<?php
include './db.php';
include "./layout/layout.php";
$conn = new DBC;
$conn-> DBI();
$layout = new Layout;
$bno = $_GET['idx'];
$h = "select * from walk where idx ='".$bno."'";
$conn->DBQ($h);
$conn->DBE();
$hit = $conn->DBF();
$hit = $hit['hit'] + 1;
$f = "update walk set hit = '".$hit."' where idx = '".$bno."'";
$conn -> DBQ($f);
$conn -> DBE();
$q = "select * from walk where idx = '".$bno."' ";
$conn -> DBQ($q);
$conn -> DBE();
$row = $conn->DBF();
?>
<!DOCTYPE html>
<html lang="zxx">
<?$layout->head($head);?>
<script type="text/javascript" src="./js/common4.js"></script>
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
<style>
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

  <!-- 여기서부터 쓸꺼 쓰쎔--><!-- 여기서부터 쓸꺼 쓰쎔--><!-- 여기서부터 쓸꺼 쓰쎔--><!-- 여기서부터 쓸꺼 쓰쎔--><!-- 여기서부터 쓸꺼 쓰쎔--><!-- 여기서부터 쓸꺼 쓰쎔-->
  <section class="mb-5">
    <div class="container">
      <div class="row title py-3">
        <div class="col-md-12">
          <h5><strong>산책 같이해요</strong></h5>
        </div>
      </div>
    </div>

    <!-- 글 불러오기 -->
    <section class="contact-section">
      <div class="container">
        <div class="row">
          <div class="col-lg-12 contact-info">
            <div class="panel-body">
              <h2><?echo $row['title'];?></h2><br>
            </div>

            <div class="panel-body">
              <h4><?echo $row['id'];?></h4><br>
            </div>

            <h4>산책시간</h4>
            <div class="panel-body">
              <?echo $row['time'];?></p></br>
            </div>

            <h4>주소</h4>
            <div class="panel-body">
              <p><?echo $row['address2'];?></p>
            </div>

          </div>
        </div>
      </div>
        <div class="map" id="map"></div>
        <script type="text/javascript" src="//dapi.kakao.com/v2/maps/sdk.js?appkey=89af7c06839a68e413b4506f75382953&libraries=services"></script>
      <script>
      var Container = document.getElementById('map'), // 지도를 표시할 div
        Option = {
            center: new daum.maps.LatLng(37.71257383134439,126.89179371406749), // 지도의 중심좌표
            level: 3 // 지도의 확대 레벨
        };

      var map = new daum.maps.Map(Container, Option); // 지도를 생성합니다

      //주소 좌표 변환 객체를 생성
      var geocoder = new daum.maps.services.Geocoder();

      // 주소로 좌표를 검색합니다
      geocoder.addressSearch('<?echo $row['address2']?>', function(result, status) {

          // 정상적으로 검색이 완료됐으면
           if (status === daum.maps.services.Status.OK) {

              var coords = new daum.maps.LatLng(result[0].y, result[0].x);

              // 결과값으로 받은 위치를 마커로 표시합니다
              var marker = new daum.maps.Marker({
                  map: map,
                  position: coords
              });

              // 인포윈도우로 장소에 대한 설명을 표시합니다
              var infowindow = new daum.maps.InfoWindow({
                  content: '<div style="width:150px;text-align:center;padding:6px 0;">산책위치<br><a href="http://map.daum.net/link/map/Hello,<?echo $row['address2']?>" style="color:blue" target="_blank">큰지도보기</a> <a href="http://map.daum.net/link/to/,<?echo $row['address2']?>" style="color:blue" target="_blank">길찾기</a></div>'
              });
              infowindow.open(map, marker);

              // 지도의 중심을 결과값으로 받은 위치로 이동시킵니다
              map.setCenter(coords);
          }
      });
      </script>
    </section>
    <!-- Contact section
    <!-- 목록, 수정, 삭제 -->
    <br>
    <section>

      <div class="container">
        <ul>
          <button type="button" class="btn btn-outline-primary">
            <a href="./walk.php">[목록으로]</a>
            <?php if($_SESSION['id'] == $row['id']){ ?>
            </button>
            <button type="button" class="btn btn-outline-primary">
              <a href="walk_modify.php?idx=<?php echo $row['idx']; ?>">[수정]</a>
            </button>
            <button type="button" class="btn btn-outline-primary">
              <a href="walk_delete.php?idx=<?php echo $row['idx']; ?>">[삭제]</a>
            </button>
          <?php } else { ?>
            <p></p>
          <?php } ?>
        </ul>
      </div>
    </div>
    <br>

    <!--- 댓글 불러오기 -->
    <section class="mb-5">
      <div  class="reply_view">
        <div class="container">
          <h5>댓글목록</h5>
          <?php
          $s = "select * from walk_reply where con_num='".$bno."'order by idx";
          $conn -> DBQ($s);
          $conn -> DBE();
          ?>
          <div class="card-body">
            <?while($walk_reply = $conn->DBF()){?>
              <div class="card">
                <div class="row blockquote review-item">
                  <div class="col-lg-3 text-center">
                    <br><div class="caption"><small><?php echo $walk_reply['id'];?><br><?php echo $walk_reply['date'];?></small></div>
                  </div>
                  <div class="col-lg-6 text-center">
                    <br><?php echo $walk_reply['content']; ?>
                  </div>
                  <div class="dap_lo">
                    <?php if($_SESSION['id'] == $walk_reply['id']){ ?>
                      <br>
                      <a class="dat_edit_bt badge badge-secondary" href="#">수정</a>
                      <a class="dat_delete_bt badge badge-secondary" href="#">삭제</a>
                    <?php } else { ?>
                      <p></p>
                    <?php } ?>
                    <!-- 댓글 수정 폼 dialog -->
                    <div class="dat_edit">
                      <form method="post" action="walk_reply_modify_ok.php">
                        <input type="hidden" name="rno" value="<?php echo $walk_reply['idx']; ?>" />
                        <input type="hidden" name="b_no" value="<?php echo $bno; ?>">
                        <textarea  class="form-control" name="content" ><?php echo $walk_reply['content']; ?></textarea><br>
                        <input type="submit" value="수정하기" class="re_mo_bt btn-secondary btn-sm">
                      </form>
                    </div>
                    <!-- 댓글 삭제  -->
                    <div class='dat_delete'>
                      <form action="walk_reply_delete.php" method="post">
                        <input type="hidden" name="rno" value="<?php echo $walk_reply['idx']; ?>" />
                        <input type="hidden" name="b_no" value="<?php echo $bno; ?>">
                        <input type="submit" class="btn btn-secondary btn-sm" value="확인"></p>
                      </form>
                    </div>
                  </div>
                </div>
              </div>
            <?php } ?>
            <!--- 댓글 입력 폼 -->
            <div>
              <form method="post" class="reply_form" action="walk_reply_ok.php">
                <input type="hidden" name="id" value="<?php echo $_SESSION['id']; ?>">
                <input type="hidden" name="bno" value="<?php echo $bno; ?>">
                <div style="margin-top:10px; ">
                  <textarea class="form-control" name="content"  id="re_content" ></textarea><br>
                  <button  class="btn btn-secondary btn-sm">댓글</button>
                </div>
              </form>
            </div>
          </div>
        </div>
      </div>
    </section>
  </section>
  <?$layout->footer($footer);?>
  <?$layout->JsFile("");?>
  <?$layout->js($js);?>
</body>
</html>
