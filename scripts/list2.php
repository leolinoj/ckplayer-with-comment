<?php


/* 
* 关键词中的空格替换为'%20' 
*/ 
function emptyreplace($str) { 
$str = str_replace('　', ' ', $str); //替换全角空格为半角 
$str = str_replace(' ', ' ', $str); //替换连续的空格为一个 
$noe = false; //是否遇到不是空格的字符 
for ($i=0 ; $i<strlen($str); $i++) { //遍历整个字符串 
if($str[$i]==' ') $str[$i] = '%20'; //如果当前这个空格之前出现了不是空格的字符 
//elseif($str[$i]!=' ') $noe=true; //当前这个字符不是空格，定义下 $noe 变量 
} 
return $str; 
} 


$dir="E:/nginx-1.10.2/html/root/oh-videos/fileUploads";

// Open a known directory, and proceed to read its contents
if (is_dir($dir)) {
	if ($dh = opendir($dir)) {
		$i = 0;
		while (($file = readdir($dh)) !== false && $i <=10) {
			
			$fileForAddress = urlencode($file);
			$fileAddress = '../fileUploads/' . $fileForAddress;				//以localhost为根
			
			
			//echo "address is $fileAddress</br>";
			//echo "filename:<a href = ./video.php?fileAddress=$fileAddress >$file</a> ";    //   ./这种相对地址很重要  表示list2文件所在的文件夹
			echo "filename:<a href = ../ckplayer/comment_system/iframe.php?fileAddress=$fileAddress >$file</a> "; 		//    ../表示返回上一个文件夹
			
			

			//echo "<video controls poster=/images/aa.gif>";
			//echo "</video>";
						
			
			echo "</br>";
			//$i ++;
		}
		
	closedir($dh);
	}
}
?>