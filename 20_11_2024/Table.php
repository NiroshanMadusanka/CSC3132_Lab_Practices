<?php
//get the db connection file
require_once 'ConnectDB.php';

try {

	//Query
	$sql = "SELECT * FROM STUDENTS";

	//excute the quey
	$result = mysqli_query($connect,$sql);
	//check if data exists in the table
	if (mysqli_num_rows($result)>0) {
		// fetch the data from rows
		while ($row = mysqli_fetch_assoc($result)) {
			print_r($row);
		}
	} else {
		echo "No results";
	}
	
} catch (Exception $e) {
	die($e->getMessage());
}


?>