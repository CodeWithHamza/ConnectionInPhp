<?php


$servername="localhost";
$username="root";
$password="";
$database="test";
$connection=mysqli_connect($servername,$username,$password,$database);
if(!$connection){
    echo "false conditions". mysqli_connect_error();
}else{
    echo "Success";
}

?>




<?php

//example of if else
$x="20";
if($x>33){
    echo "It Is True";
}else{
    echo "It Is False";
}




?>






<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    
</body>
</html>