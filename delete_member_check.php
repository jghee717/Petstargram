<?php
  include 'db.php';
  const PASSWORD_COST=['cost'=>12];
  $pwd = $_POST['password'];
  $id = $_GET['id'];

  $conn = new DBC;
  $conn-> DBI();
  $q = "select * from member where id = '".$_SESSION['id']."'";
  $conn->DBQ($q);
  $conn->DBE();
  $res=$conn->DBF();

  if(password_verify($_POST['password'], $res['password']))
  {
    $conn = new DBC;
    $conn-> DBI();
    $q = "delete from member where id='".$_SESSION['id']."'";
    $conn->DBQ($q);
    $conn->DBE();
    $row=$conn->DBF();

    ?><script>alert('회원님의 아이디가 삭제 되었습니다.');
    window.location.href="./login.php"
  </script><?
  }
  else{
    ?><script>alert('비밀번호가 맞지 않습니다.');
    window.location.href="./delete_member.php"
  </script><?$_SESSION['id'] = $id;
  }
?>
