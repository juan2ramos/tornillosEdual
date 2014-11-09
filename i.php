<?php
$parte1 = explode(?/?, $url);
$count = count($parte1);
$count_array = $count ? 1;
if ($count >= 4) {
if ($parte1[$count_array] != ?) {
$path = str_replace($parte1[$count_array], ?, $url); }
else { $path = $url; }
} else {
if(substr($url,-1) != ?/?) $url .= ?/?; $path = $url; }

 $url=$_SERVER['HTTP_HOST'].$_SERVER['PHP_SELF'];
$parte1=explode("/", $url);
$count = count($parte1);
echo $url." ".$count;
?>