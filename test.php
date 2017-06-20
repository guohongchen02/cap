<?php

include_once "admin/includes/connection.php";


$sql="SELECT *"
. " FROM contact"
. " WHERE id = 6";



try {
     $result = $connection->query($sql);
} 
catch (PDOException $e) {
     die("Query failed! " . $e->getMessage());
}



$rows = $result->fetch(PDO::FETCH_ASSOC);
     
	// $mydate = $rows['datetime'];
	// $rows['datetime'] = date('m/d/y h:i a', strtotime($mydate));
	
 
     
   
     echo "<td>" . $rows['name'] . "</td>";
	 echo "<td>" . $rows['email'] . "</td>";
	 echo "<td>" . $rows['subject'] . "</td>";
	 echo "<td>" . $rows['message'] . "</td>";
     echo "<td>" . $rows['datetime'] . "</td>";




?>