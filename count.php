<?php
//count string
$str = "隨便輸入十個繁體中文字";
$n = mb_strlen($str);
if($n > 10) $o="大";
elseif($n<10) $o="小";
else $o="等";

$result="這個字串有".$n."個字，".$o."於十";
echo $result;
?>