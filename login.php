<?php 
$email = $_POST['name1'];
$password = $_POST['password'];

$cookie_name = "email";
$cookie_value = $email;
setcookie($cookie_name, $cookie_value, time() + (86400 * 30), "/"); // 86400 = 1 day

$cookie_password = "password";
$cookie_passwordvalue = $password;
setcookie($cookie_password, $cookie_passwordvalue, time() + (86400 * 30), "/");
$rndno=rand(100000, 999999);

$cookie_otp = "otp";
$cookie_otpvalue = $rndno;
setcookie($cookie_otp, $cookie_otpvalue, time() + 3600, "/");
// 3600 = 1 hrs

$me=$email;
$from="Creamy Creations";
$headers1="From:".$from;
$subject1 = "Otp";
$txt1 = "Dear, ".$email." You Otp for Login is ".$rndno." Do not share this otp with anyone. " ;
$ok= mail($me,$subject1,$txt1,$headers1);
if($ok == true){
echo 1;
}else{
echo 0;
}
?>