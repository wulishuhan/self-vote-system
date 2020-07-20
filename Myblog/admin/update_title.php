<?php
header('content-type:text/html;charset=utf-8');

$link = mysqli_connect('localhost','root','123456');
// 判断数据库连接是否成功，如果不成功则显示错误信息并终止脚本继续执行
if (!$link) {
    exit('连接数据库失败！' . mysqli_connect_error());
}
// 设置字符集，选择数据库
mysqli_set_charset($link, 'utf8');
mysqli_select_db($link, 'test');
if(isset($_POST))
{
	
$title=$_POST["title"];
echo $title;
$sql="update votetitle set votetitle='$title'";
$res=mysqli_query($link,$sql);
if($res){echo "<script>alert('修改成功!');</script>";
	header('refresh:0;url=admin.php');
	}
	

}
?>
