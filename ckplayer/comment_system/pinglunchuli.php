<?php
$zhangsan = $_POST["zhangsan"];
$content = $_POST["content"];
$time = date("Y-m-d H:i:s");
 
require "DBDA.class.php";
$db = new DBDA();
$sql = "insert into pinglun values('2','{$zhangsan}','{$content}','{$time}')";
$db->query($sql);
header("location:iframe.php");