<?php
	require 'conn.php';
	session_start();
if(isset($_POST["submit"])){

//if($_SESSION["vote"]==session_id())
//{
//  echo "<script>alert('您已经投票了');
//    location.href='index.php';</script>";
//exit();
//}
if(empty($_POST["itm"])){
	echo "<script language=javascript>alert('投票不能为空');window.location='index.php'</script>";
}
  $id=$_POST["itm"];
  $sql="update voto set count=count+1 where id=$id";
  $res=mysqli_query($link,$sql);
  	if($res){
  	echo "<script language=javascript>alert('投票成功！');window.location='sum.php'</script>";
}
}
?>