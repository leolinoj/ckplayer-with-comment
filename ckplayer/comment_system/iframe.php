<html>
	<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
	<head>
		<meta charset="UTF-8">
		<title>ckplayer</title>
		<style type="text/css">body{margin:0;padding:0px;font-family:"Microsoft YaHei",YaHei,"微软雅黑",SimHei,"黑体";font-size:14px}</style>

	</head>
	 
	<link href="mystyle.css" rel="stylesheet" type="text/css"/>
	<style type="text/css">
		body {
			background-color:#b0c4de;
		}
		iframe{
			margin-left:200px;
			padding:0;
		}
		.content{
			margin-left:200px; 
		}
		.submitBox{
			background-color: #b473f3; width:600px;
			padding:0; margin:0;
		}
		.comment{
			background-color: #00e9b5; width:600px;
			padding:0; margin:0;
			margin-left:200px;
			
			border-top-style:none;
			border-right-style:none;
			border-bottom-style:solid;
			border-left-style:none;
			border-color:yellow;

		} 
		.recomment {
			padding:0; margin:0;
		}
	</style>
	
	
	
	<?php
		$fileAddress = $_GET['fileAddress'];
		$coverAddress = $_GET['coverAddress'];

	?> 

	

	<body>
		
		<?php
			echo "<iframe src=../definition.html?fileAddress={$fileAddress}&coverAddress={$coverAddress} height=500 width=600 frameborder=0 allowfullscreen></iframe>";
			// 作为src的参数也可以进行传参
		?> 
		<div class="content">
			<div height="300">
				<form class="submitBox" action="pinglunchuli.php" method="post">
				 
					<!-- <input type="text" hidden="hidden" value="zhangsan" name="name"> <!--因为没有权限，这里给了一个默认值-->
					用户:<textarea name="name"></textarea><br>
					内容:<textarea name="content"></textarea>
					<input type="submit" value="评论"><!--评论显示的地方--><!--单击评论提交内容进处理页面-->

				</form>
			</div>
		</div>
		
	</body>

</html>


 



 
 
<?php
  require "DBDA.class.php"; //调用封装类注意修改数据库名
  $db = new DBDA();
  $sql ="select * from pinglun";
  $arr = $db -> query($sql,1);
  foreach($arr as $v)
  {
    echo"
		<div class=comment>
		
			<div style=color:blue>{$v[1]} {$v[3]}</div>
			<div style=color:orange; font-size:55px>{$v[2]}</div>
			
			<form action=delchuli.php?id={$v[0]} method=post>
				<input type=submit value=删除>
			</form>
			
		</div>
       ";
	//<form class=recomment action=huifuchuli.php?id={$v[0]} method=post>
	//		<textarea name=Comment></textarea><input type=submit value=回复>
	//</form>
       
	$dc = new DBDA(); 
	$sql1 ="select * from huifu where jieshouid ={$v[0]}"; //查询回复表中的id和传过去的id是不是一样的
	  $arr1 = $dc->query($sql1,1);
	foreach($arr1 as $k)
	{
	echo "<div>{$k[2]} {$k[3]}</div>
	   <div>{$k[4]}</div>
	   ";
	}
         
  }
     
?>