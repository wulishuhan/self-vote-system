<?php
	header('content-type:text/html;charset=utf-8');
	session_start();
if(isset($_GET['tj']) == 'out'){
unset($_SESSION['pwd']);
  session_destroy();//删除当前用户对应的session文件以及释放session
  echo "<script language=javascript>alert('退出成功！');window.location='login.html'</script>";
}
?>