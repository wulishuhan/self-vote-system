<?php
//声明文件解析的编码格式
header('content-type:text/html;charset=utf-8');
// 连接数据库
$link = mysqli_connect('localhost','root','123456');
// 判断数据库连接是否成功，如果不成功则显示错误信息并终止脚本继续执行
if (!$link) {
    exit('连接数据库失败！' . mysqli_connect_error());
}
// 设置字符集，选择数据库
mysqli_set_charset($link, 'utf8');
mysqli_select_db($link, 'test');
?>