<link rel="stylesheet" type="text/css" href="style.css" />
<?php
$servername = "localhost";
$username = "root";
$password = "";
$database = "mystores";

$connection = new mysqli($servername,$username,$password, $database);
if ($connection->connect_error){
   die("Connection failed: " . $connection->connect_error);
}
$sql = "SELECT * FROM `mymaterial`";
$result = $connection->query($sql);
if (!$result){
   die("Invalid query: " . $connection->error);
}
            
if ($result->num_rows > 0) {
    // Output the table structure
    echo "<table>
            <tr>
            <th>Material</th>
            <th>Quantity</th>
            <th>Availability</th>
            </tr>";

    
    while ($row = $result->fetch_assoc()) {
        echo "<tr>
                <td>" . $row["mat_name"] . "</td>
                
                
            </tr>";
    }

  
    echo "</table>";
} else {
    echo "0 results";
}
$conn->close();
            
?>