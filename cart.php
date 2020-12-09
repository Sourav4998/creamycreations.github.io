<?php
$item = $_POST['item1'];
$total = $_POST['total1'];
$weight = $_POST['weight1'];


$cookie_name = "item";
$cookie_value = $item;
setcookie($cookie_name, $cookie_value, time() + (86400 * 30), "/"); 
// 86400 = 1 day

$cookie_name = "total";
$cookie_value = $total;
setcookie($cookie_name, $cookie_value, time() + (86400 * 30), "/"); // 86400 = 1 day

$cookie_name = "weight";
$cookie_value = $weight;
setcookie($cookie_name, $cookie_value, time() + (86400 * 30), "/"); // 86400 = 1 day
echo 1;
?>