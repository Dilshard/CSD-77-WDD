<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Create record</title>
</head>
<body>
    <h3>Student Registration</h3>
    <form method="post">

    <input type="text" name="txtfname" placeholder="Full Name"> <br>
    <input type="text" name="txtgender" placeholder="Gender"> <br>
    <input type="text" name="txtadd" placeholder="Address"> <br>
    <input type="text" name="txtemail" placeholder="Email"> <br>
    <input type="submit" value="Save" name="btnsave"> 
    <input type="reset" value="Clear">

    </form>

    <?php

    include 'con.php';

    if(isset($_POST['btnsave'])){
        $fname = $_POST['txtfname'];
        $gender = $_POST['txtgender'];
        $add = $_POST['txtadd'];
        $stmail = $_POST['txtemail'];

        $sql = "INSERT INTO `personal` (`fullName`, `gender`, `address`, `email`) VALUES ('$fname', '$gender', '$add', '$stmail')";

        $status = mysqli_query($con,$sql);

        if($status){
            echo "Successfully Created!";
        }else{
            echo "Error!";
        }
    }


    

    ?>
</body>
</html>