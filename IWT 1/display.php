<?php
//insert DB connection_aborted
require_once 'config.php';

//retrieve data from the database
$sql = "SELECT *From user";
$result = $conn->query($sql);

if($result->num_rows > 0){
while($row = $result -> fetch_assoc()){
	echo "<tr>";
	echo "<td>" . $row["firstname"] . "</td>" . "<br>";
	echo "<td>" . $row["lastname"] . "</td>" . "<br>";
	echo "<td>" . $row["ID"] . "</td>" . "<br>";
	echo "<td>" . $row["gender"] . "</td>" . "<br>";
	echo "<td>" . $row["mobile"] . "</td>" . "<br>";
	echo "<td>" . $row["email"] . "</td>" . "<br>";
	echo "<td>" . $row["DOB"] . "</td>" . "<br>";
	echo "<td>" . $row["role"] . "</td>" . "<br>";
	echo "<td>" . $row["psw"] . "</td>" . "<br>";
    echo "<td>";
	echo "<button onClick =\"redirectToUpdate(".$row['ID'] . ")\">Update</button>";
	echo "<a href =\delete.php?delete_id=" . $row["ID"] . "\">Delete</a>";
	echo "</td>";
	echo "</tr>";

	
}}else{
	echo "no data";
}
$conn->close();
?>