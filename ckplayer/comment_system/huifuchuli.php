<?php
$id = $_GET["id"]; //将点击回复的评论id传过来
$Comment = $_POST["Comment"]; //回复文本域中的内容
$me = "me"; //这里是给定义了一个人
$Times = date("Y-m-d H:i:s");
 
require "DBDA.class.php";
$db = new DBDA();
$sql = "insert into huifu values('','{$id}', '{$me}','{$Times}','{$Comment}')";
$db ---> query($sql);
header("location:main.php");