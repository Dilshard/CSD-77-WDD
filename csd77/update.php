<?php
include 'con.php';
$id = $_GET['selid'];
$sql = "SELECT * FROM Personal WHERE id = $id";

$status = mysqli_query($con,$sql);

if($status){

    while($row = mysqli_fetch_assoc($status)){
        $fullname =  $row['fullName'];
        $gender =  $row['gender'];
        $add =  $row['address'];
        $email =  $row['email'];
        
    }
}else{
    echo "Error";
}




?>

<form method="post">
    <input type="text" name="" value="<?php echo $fullname; ?>"> <br>
    <input type="text" name="" value="<?php echo $gender; ?>"> <br>
    <input type="text" name="" value="<?php echo $add; ?>"> <br>
    <input type="text" name="" value="<?php echo $email; ?>"> <br>
    <input type="submit" value="Save">
</form>