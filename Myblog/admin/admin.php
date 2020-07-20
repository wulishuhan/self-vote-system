<?php 		
			require './conn.php';
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
			
			$r="select * from votetitle";
			$rs=mysqli_query($link,$r);
			$rows=mysqli_fetch_assoc($rs);
?>
<!DOCTYPE html>
<html>
	<head>
		<meta charset="UTF-8">
		<title></title>
	</head>
	<body style="background: url(img/07.jpeg);">
	<table id="tb" style="  border-collapse: collapse;font-size: 14px; width: 500px;height: 500px;">
		
		<form action="update_title.php" method="post">
		<tr align="center">
		<th	colspan="4">
		<input type="text" name="title" id="" style="width: 250px;height: 30px;" value="<?php echo $rows["votetitle"];?>"/>
		</th>
		<th><input type="submit" name="" id="" value="修改标题" /></th>
		</tr>
		</form>
		<tr style="text-align: center;"><td>编号</td><td>项目</td><td>票数</td><td>修改</td><td>删除</td></tr>	
			<?php  if(!empty($voto_info)) { ?>
		 <?php foreach($voto_info as $row) {    ?>
		 			<form id="frm" name="frm" action="update.php?type=modify&id=<?php echo $row['id']?>"  method="post">
					<tr align="center">
						 <td><input type="checkbox" name="itm" id="itm" value="<?php echo $row['id']?>" /><?php echo $row['id']; ?></td>
						 <td><input  type="text" name="item" id="item" value="<?php echo $row['item']; ?>" /></td>
						 <td><input  type="text" name="count" id="count" value="<?php echo $row['count']; ?>" /></td>
						 <td>
						 	<input type="submit" name="" id="" value="修改" /></form>
						 </td>
						 <td><!--<a href="delete.php?type=del&id=<?php echo $row['id']?>">删除</a>-->
						 	<form action="delete.php?type=del&id=<?php echo $row['id']?>" method="post">
						 	<input type="submit" value="删除"/>
						 	</form>
						 </td>
					</tr>
					
		<?php  } ?>
		<?php  }else{   ?>
					<tr><td colspan="5">查询的结果不存在！</td></tr>
		<?php } ?>	
			<!--<tr>
			<td></td>
			<td><input type="button" name="" id="" value="选择全部" onclick="selectAll()"/>	</td>
			<td><input type="button" name="" id="" value="取消全部" onclick="cancelAll()"/></td>
			<td><input type="button" name="" id="" value="删除所选" onclick="del()"/></td>
			<td></td>
			</tr>-->
			<tr>
				<form action="addnewitem.php" method="post">

				<td colspan="3" align="center"><input type="text" name="newitem" id="newitem" value="" /></td>
				<td><input type="submit" name="Submit2" id="" value="添加新项" /></td>
				<td><a href="./logout.php?tj=out">退出管理</a></td>
				</form>	
			</tr>
	</table>
	</body>
</html>
<style type="text/css">
	#item{
		outline: none; 
		border: 0;
		width: 50px;
	}
	#count{
		outline: none; 
		border: 0;
		width: 50px;
	}
	#tb{
		border:  solid 1px white;
		margin: 100px auto;
		background: white;
		opacity: 0.8;
	}
</style>