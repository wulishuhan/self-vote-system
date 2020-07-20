<?php
	 require './conn.php';
  	 $SQL="SELECT sum(count) as 'total' FROM voto";
 	 $rs=mysqli_query($link,$SQL);
 	 $rows=mysqli_fetch_assoc($rs);
 	 $sum=$rows["total"];  //得出总票数
 	 echo $sum;
 	 header('refresh:0;url=index.php?sum='.$sum); //跳转到登录页面
	 
?>