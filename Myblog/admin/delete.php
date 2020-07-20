<?php
	require './conn.php';
$type = isset($_GET["type"])?$_GET["type"]:"";
if($type =="del"){
  $id=$_GET["id"];
  echo $id;
  $SQL="DELETE FROM voto WHERE id=$id";
  $res=mysqli_query($link,$SQL);
  if($res){
  echo "<script language=javascript>alert('删除成功！');window.location='admin.php'</script>";
}}
?>