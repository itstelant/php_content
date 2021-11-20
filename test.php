<?php
$inputfl='LoremIpsum.txt';
$content='';


$content = file_get_contents($inputfl);

preg_match_all('/\[.*?\]/',$content,$myarr);

echo '<script type="text/javascript">console.log('.json_encode($myarr).')</script>';



?>