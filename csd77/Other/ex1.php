<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h2>Registration</h2>
    <form method="post">
        <input type="text" name="txtfname" placeholder="Full Name"> <br>
        <input type="text" name="txtgender" placeholder="gender"> <br>
        <input type="text" name="txtadd" placeholder="Address"> <br>
        <input type="text" name="txtemail" placeholder="Email"> <br>
        <input type="submit" name="btnsubmit" value="Save">
        <input type="reset" value="Clear">
    </form>

    <?php

    include 'ex4.php';

    if(isset($_POST['btnsubmit'])){
        $fullName = $_POST["txtfname"];
        $gender = $_POST['txtgender'];
        $address = $_POST['txtadd'];
        $email = $_POST['txtemail'];

        $sql = "INSERT INTO `personal` ( `fullName`, `gender`, `address`, `email`) VALUES ('$fullName', '$gender', '$address', '$email')";
        $status = mysqli_query($con,$sql);

        if($status){
            echo "Added!";
        }else{
            echo "Error!";
        }
    }


    ?>
</body>
</html>