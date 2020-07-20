<?php
	require './conn.php';
	$type = isset($_GET["type"])?$_GET["type"]:"";
	if($type =="modify"){
	$id=$_GET["id"];
//	echo $id;
  	$item=$_POST["item"];
//	echo $item;
  	$count=$_POST["count"];	
//	echo $count;
  	$SQL="UPDATE voto SET item='$item',count=$count WHERE id=$id";
  	$res=mysqli_query($link,$SQL);
  	if($res){
  	echo "<script language=javascript>alert('修改成功！');window.location='admin.php'</script>";
}}

?>