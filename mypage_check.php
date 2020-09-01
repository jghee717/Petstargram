<?php
  include 'db.php';
  const PASSWORD_COST=['cost'=>12];

  $pwd = $_POST['password'];

  $conn = new DBC;
  $conn-> DBI();
  $q = "select * from member where id = '".$_SESSION['id']."'";
  $conn->DBQ($q);
  $conn->DBE();
  $res1=$conn->DBF();
  $res2=$conn->resultRow();

  if(password_verify($_POST['password'], $res1['password']))
  {
    header('Location:./mypage.php');
  }
  else{
    ?><script>alert('비밀번호가 맞지 않습니다.');
    window.location.href="./mypage_gate.php"
  </script><?
  }
?>
