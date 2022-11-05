<?php

$server = "localhost";
$username = "root";
$password = "";
$database = "csd77";

$con = mysqli_connect($server,$username,$password,$database);

if($con){
    echo "Successfully Connected!";
}else{
    echo "Error!";
}

?>