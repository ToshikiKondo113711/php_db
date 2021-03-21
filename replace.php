<?php
// 文字の置き換え

$str_base = 'PHP4_PHP5_PHP6_PHP7';
$str = str_replace('PHP5','PHP5.5',$str_base);

echo $str.'<br>';
var_dump($str_base);
?>