<?php
include('funcs.php');

$s = '<script>alert("xss");<script>';

echo  h($s);


?>