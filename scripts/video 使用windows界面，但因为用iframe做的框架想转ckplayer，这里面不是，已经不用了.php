<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" " http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd"> 
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" /> 
<meta http-equiv="pragma" content="no-cache" /> 
<meta http-equiv="cache-control" content="no-cache" /> 
<meta http-equiv="expires" content="0" /> 
<title>video!</title>
</head>
<?php
$fileAddress = $_GET['fileAddress'];
?> 

<body>
	<video width="320" height="640" controls="controls">
	<?php echo "<source src= $fileAddress type=video/mp4 />"; ?>
	  
	Your browser does not support the video tag.
	</video>
</body>
</html>
