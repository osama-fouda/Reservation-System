<?php

include "header.php";

?>

<table>
    <th>Number</th>
    <th>Name</th>
    <th>Email</th>
    <th>Date</th>
</table>

<?php

$host = "localhost";
$user = "root";
$pass = "";
$dbName = "hospital";
$conn = mysqli_connect($host,$user,$pass, $dbName);
// if(isset($conn)){
//     echo "yes";
// }else{
//     echo "no";
// }

$query = "SELECT * FROM patients";
$result = mysqli_query($conn, $query);

if($result){
    while($row = mysqli_fetch_assoc($result)){
        echo "<tr><td>" . $row['id'] . "</td><td>" . $row['name'] . "</td><td>" . $row['email'] . "</td><td>" . $row['date'] . "</td></tr>";
    }
    echo "</table>";
}else{
    echo "There Is An Error, Please Try Again";
}





?>