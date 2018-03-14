
<?php
		
	$dir="E:/nginx-1.10.2/html/root/oh-videos/fileUploads/thumb";
	$queue = array(); 

	// Open a known directory, and proceed to read its contents
	if (is_dir($dir)){
		if ($dh = opendir($dir)){
			$n = 0;
			while (($file = readdir($dh)) !== false){	
				
				if($file!=".."&&$file!="."){
					//echo $file;
					array_push($queue, $file);
					$n++;
				}
			} 
			closedir($dh);
			//echo json_encode($queue);
			echo json_encode($queue);
		}
	}
?>


