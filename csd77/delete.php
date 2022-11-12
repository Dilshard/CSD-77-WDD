<?php

include 'con.php';

$id = $_GET['selectedID'];

$sql = "DELETE FROM personal WHERE id=$id";

$status = mysqli_query($con,$sql);

if($status){
    header("Location: view.php");
}else{
    echo "Error";
}



?>