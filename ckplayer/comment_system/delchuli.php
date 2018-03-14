<?php
$id = $_GET["id"];
require "DBDA.class.php";
$db = new DBDA();
$sql = "delete from Pinglun where id='{$id}'";
if($db->query($sql))
{
 
  header("location:iframe.php");
}
else
{
  echo "删除失败！";
}