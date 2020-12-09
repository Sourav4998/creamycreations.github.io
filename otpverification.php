<?php 
$password = $_POST['password'];
$cookieotp = $_COOKIE["otp"];
if($password == $cookieotp){
unset($_COOKIE["otp"]);
echo 1;
}else{
echo 0;
}
?>