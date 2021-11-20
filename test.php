<?php
$inputfl='LoremIpsum.txt';
$content='';

#get the content of the file
$content = file_get_contents($inputfl);

#use regex to find the words inside the brackets
preg_match_all('/\[.*?\]/',$content,$myarr);

#output the results to browser's console
echo '<script type="text/javascript">console.log('.json_encode($myarr).')</script>';



?>