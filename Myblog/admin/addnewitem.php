<?php
	require './conn.php';
    if(isset($_POST["Submit2"]))
    {
     $newitem=$_POST["newitem"];
     echo $newitem;
     $SQL="INSERT INTO voto (titleid,item,count) VALUES (1,'$newitem',1)";
     mysqli_query($link,$SQL);
     echo "<script language=javascript>alert('添加成功！');window.location='admin.php'</script>";
    }
?>