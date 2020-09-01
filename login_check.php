<?php
  include 'db.php';
  const PASSWORD_COST=['cost'=>12];

  $idd = $_POST["id"];
  $pwd = $_POST['password'];

  $conn = new DBC;
  $conn-> DBI();
  $q = "select * from member where id = '".$idd."' ";
  $conn -> DBQ($q);
  $conn -> DBE();
  $res1 = $conn->DBF();
  $res2 = $conn->resultRow();


  if($res2 == '1')
  {
    if(password_verify($_POST['password'], $res1['password']))
    {
      $_SESSION['id'] = $idd;
      header('Location: ./index.php');
    }
    else
    {
      ?><meta charset="utf-8" />
      <script type="text/javascript">alert('비밀번호가 틀렸습니다.');</script>
      <meta http-equiv="refresh" content="0 url=./login.php"><?
    }
  }
  else {
    ?><meta charset="utf-8" />
    <script type="text/javascript">alert('아이디가 틀렸습니다.');</script>
    <meta http-equiv="refresh" content="0 url=./login.php"><?
  }
?>
