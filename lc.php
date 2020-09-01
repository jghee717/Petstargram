<?php
  include 'db.php';

  $idd = $_POST["id"];
  $pwd = $_POST['password'];

  $conn = new DBC;
  $conn-> DBI();
  $q = "select * from member where id = '".$idd."' ";
  $conn -> DBQ($q);
  $conn -> DBE();
  $res1 = $conn->DBF();
  $res2 = $conn->resultRow();


  if($res2 == '1'){
    if($res1['password'] == $pwd){
      $_SESSION['id'] = $idd;
      if(isset($_SESSION['id']))
      {
        header('Location: ./index.php');
      }
      else{
        echo "아이디틀림";
      }
    }
    else{
      echo "비밀번호 틀림";
    }
  }
?>
