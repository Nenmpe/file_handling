<?php
$filew = fopen("C://Users//mikel//OneDrive//Desktop//test//text.txt",'w');
fwrite($filew,"Hello, I am a text file.");
fclose($filew);

echo "Successful";
?>