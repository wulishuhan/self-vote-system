<?php
	header('content-type:text/html;charset=utf-8');
	session_start();
if(isset($_POST['Submit10'])){
  if($_POST['pwd']=='admin'){

    $_SESSION['pwd']=2;

    echo "<script language=javascript>alert('登陆成功！');window.location='admin.php'</script>";
  }else{
    echo "<script language=javascript>alert('登陆失败,请检查您的密码！');window.location='admin.php'</script>";
  }
}
?>