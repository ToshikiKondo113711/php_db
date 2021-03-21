<?php

// $d = date('Y年m月d日 H時i分s秒');
// echo '<br>';
// echo $d

$d = date('s');
    if($d >= 30){
        echo '<p style = "color:red">30秒以上</p>';
    }else{
        echo '<p style = "color:bule">29秒以下</p>';
    }
echo '現在：'.$d.'秒';
?>