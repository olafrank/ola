<?php

$name = $_POST["name"];
$email = $_POST["email"];
$password = $_POST["password"];
$confirm = $_POST["confirm"];
$enteraddress = $_POST["address"];

echo $name;
echo $email;
echo $password;
echo $confirm;
echo $enteraddress; 

function validate(){
    if($password==$confirm){
echo "validate";
}
else{
    echo "password not correct";
}
}
validate();
?>