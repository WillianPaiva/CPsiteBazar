<?php
$servername="localhost";
$username="ateliertest";
$password="ateliertest";
$dbname="ateliers";


//create the connection
$conn = new mysqli($servername, $username, $password, $dbname);


//check connection

if($conn->connect_error){
    die("Connection failed: ".$conn->connect_error);
}


// $sql = "SELECT id, titre FROM ATELIER";
// $result = $conn->query($sql);

// if ($result->num_rows > 0) {
//     // output data of each row
//     while($row = $result->fetch_assoc()) {
//         echo "id: " . $row["id"]. " - Name: " . $row["titre"]."<br>";
//     }
// } else {
//     echo "0 results";
// }

$conn->close();

?>
