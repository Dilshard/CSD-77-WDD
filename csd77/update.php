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
    <input type="text" name="txtfname" value="<?php echo $fullname; ?>"> <br>
    <input type="text" name="txtgender" value="<?php echo $gender; ?>"> <br>
    <input type="text" name="txtaddress" value="<?php echo $add; ?>"> <br>
    <input type="text" name="txtemail" value="<?php echo $email; ?>"> <br>
    <input type="submit" name="btnsave" value="Save">
</form>

<?php

    if(isset($_POST['btnsave'])){
        $fulName = $_POST['txtfname'];
        $gender = $_POST['txtgender'];
        $add = $_POST['txtaddress'];
        $email = $_POST['txtemail'];

        $sql2 = "UPDATE `personal` SET `fullName` = '$fulName', gender = '$gender', address = '$add', email = '$email' WHERE `id` = $id";

        $status = mysqli_query($con,$sql2);

        if($status){
            header("Location: view.php");
        }else{
            echo "Error - updated!";
        }
    }

?>