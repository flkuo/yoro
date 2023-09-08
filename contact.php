<?php


if ($_SERVER["REQUEST_METHOD"]== "post"){
$name=$_post["name"];
$email=$_post["email"];
$phone=$_phone["phone"];
$msg=$_post["msg"];

echo "Name: " . $name . "<br>" ;
echo "Email: " . $email. "<br>" ;
echo "phone: " . $phone. "<br>" ;
echo "Msg: " . $msg;
}


?>
