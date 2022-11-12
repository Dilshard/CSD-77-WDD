<?php include 'menu.php'; ?>
<table border="1px">
    <tr>
        <th>Full Name</th>
        <th>Address</th>
        <th>Gender</th>
        <th>Email</th>
    </tr>
<?php

include 'con.php';

$sql = "SELECT * FROM `personal`";

$results = mysqli_query($con,$sql);

$rowNumber = mysqli_num_rows($results);

if($rowNumber > 0){
    while($row = mysqli_fetch_assoc($results)){
        // echo $row['fullName']." ";
        // echo $row['gender']." ";
        // echo $row['address']." ";
        // echo $row['email']."<br>";
        // echo "<tr>";
        //     echo "<td>".$row['fullName']."</td>";
        //     echo "<td>".$row['gender']."</td>";
        //     echo "<td>".$row['address']."</td>";
        //     echo "<td>".$row['email']."</td>";
        // echo "</tr>";

        echo 
        "<tr>
        <td>$row[fullName]</td>
        <td>$row[gender]</td>
        <td>$row[address]</td>
        <td>$row[email]</td>
        <tr>";
        
    }
}


?>

</table>