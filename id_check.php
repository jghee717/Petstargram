<?
 include "./db.php"

 $conn = new DBC;
 $conn-> DBI();
 $id=$_GET['id'];

 $q="select count(*) from member where id='$id'";
 $conn -> DBQ($q);
 $conn -> DBE();
 $row= $conn->DBF();

?>
 <script>
 var row="<?=$row[0]?>";
 if(row==1){
 parent.document.getElementById("chk_id2").value="0";
 parent.alert("이미 사용중인 아이디입니다.");
 }
 else{
 parent.document.getElementById("chk_id2").value="1";
 parent.alert("사용 가능합니다.");
 }
</script>
