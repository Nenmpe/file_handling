<?php
// File write
$filePath='C://Users//mikel//OneDrive//Desktop//test//text.txt';
$fhand=fopen($filePath,'w');
fwrite($fhand,"This is file handeling");
fclose($fhand);
echo "successfully written";

//File read
$f=fopen($filePath,'r');
$content = fread($f,filesize($filePath));
echo $content;
fclose($f);

//File append
$fileApp=fopen($filePath,'a');
fwrite($fileApp,"This is file 2");
fclose($fileApp);

?>
