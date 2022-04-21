<?php

$file = 'txtfile';
$test = file_get_contents($file);
$test .= json_encode($_GET);
file_put_contents($file, $test);

?>


