<?php require './conn.php';
			$sql="select * from voto";
			// 执行SQL语句，获取结果集
			$res = mysqli_query($link, $sql);
			if (!$res) {
   			 exit(mysqli_error($link));
			}
			$voto_info = array();
			// 遍历结果集，获取每位员工的详细数据
			while ($row = mysqli_fetch_assoc($res)) {
 			   $voto_info[] = $row;
			}
	?>
<!DOCTYPE html>
<html>
	<head>
		<meta charset="UTF-8">
		<title></title>
	</head>
	<link rel="stylesheet" type="text/css" href="css/index.css"/>
	<body style="background: url(./img/03.jpg);">
		<div id="fo">
	<table border="1" cellspacing="" cellpadding="" style="border-collapse: collapse; width: 500px; margin: 0 auto;">
		<tr><td align="center" style="width: 100%;">投票</td></tr>
		<?php  if(!empty($voto_info)) { ?>
		 <?php foreach($voto_info as $row) {    ?>
		 	<form action="vote.php" method="post">
					<tr align="center">
						 <td><input type="radio" name="itm" value="<?php echo $row["id"]?>" /><?php echo $row['item']; ?></td>
					</tr>
		<?php  } ?>
			<tr><td align="center"><input type="submit" name="submit" value="投票"/></td></tr>
			</form>
		<?php  }else{   ?>
					<tr><td>查询的结果不存在！</td></tr>
		<?php } ?>	
	</table>
	
	<table id="hid" border="1" cellspacing="" cellpadding="" style="border-collapse: collapse; width: 500px;margin: 0 auto;">
		<tr><th>项目</th><th>票数</th><th>百分比</th></tr>
		<?php  if(!empty($voto_info)) { ?>
		 <?php foreach($voto_info as $row) {    ?>
		 	<tr align="center">
		 		<td><?php echo $row["item"]?></td>
		 		<td><?php echo $row["count"]?></td>
		 		<td><?php
		 			$SL="SELECT sum(count) as 'total' FROM voto";
		 			$rsss=mysqli_query($link,$SL);
 	 				$rows=mysqli_fetch_assoc($rsss);
 	 				$sum=$rows["total"];  //得出总票数
		 			$pasen=$row['count']/$sum*100;
		 			echo number_format($pasen,2)."%";
		 			?></td>
		 	</tr>
		<?php  } ?>
			
			
		<?php  }else{   ?>
					<tr><td>查询的结果不存在！</td></tr>
		<?php } ?>	
	</table>
	</div>
	
	</body>
</html>

