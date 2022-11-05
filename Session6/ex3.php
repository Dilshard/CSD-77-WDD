<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form method="POST">
        Marks 01 <br>
        <input type="number" name="txtmk1"> <br>
        Marks 02 <br>
        <input type="number" name="txtmk2"> <br>
        <input type="submit" name="btntotal" value="Total">
        <input type="reset" value="Clear">
    </form>

    <?php

    if(isset($_POST['btntotal'])){
        $mk1 = $_POST['txtmk1'];
        $mk2 = $_POST['txtmk2'];
        $total = $mk1 + $mk2;
        echo $total;
    }


    ?>
</body>
</html>