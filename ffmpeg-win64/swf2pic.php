<?php

$dir="E:/nginx-1.10.2/html/root/oh-videos/fileUploads";

// Open a known directory, and proceed to read its contents
if (is_dir($dir)) {
	if ($dh = opendir($dir)) {
		$i = 0;
		while (($file = readdir($dh)) !== false && $i <=10) {
			
			$fileForAddress = urlencode($file);  //整个文件名
			$fileAddress = '../fileUploads/' . $fileForAddress;				//以localhost为根
			
			
			if(strpos($fileForAddress, '.mp4')){
				$fileName = str_replace(".mp4","",$fileForAddress);
			}else if(strpos($fileForAddress, '.mov')){
				$fileName = str_replace(".mov","",$fileForAddress);
			}else if(strpos($fileForAddress, '.MOV')){
				$fileName = str_replace(".MOV","",$fileForAddress);
			}
			
			echo '$fileName:'.$fileName;
		
			$input_url = $fileAddress;

			echo '$input_url:'.$input_url;

			$outputFile = '../fileUploads/thumb/'.$fileName.'.png';  


			$str = "ffmpeg -i ".$input_url ." -y -f image2 -ss 1 -t 0.001 -s 740x500 ".$outputFile;   //-ss后边的数字表示截取的秒数


			exec($str);   
		}
		
	closedir($dh);
	}
}


?>