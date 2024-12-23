<?php
function GetTableData($query,$connection){
	$result = mysqli_query($connection,$query);
	$data = array();
	if (mysqli_num_rows($result) > 0) {
		$data = mysqli_fetch_all($result,MYSQLI_ASSOC);
	}
	return $data;
}

function RequiredField($value,$msg="the field can't be empty"){
	if (empty($_POST['$value'])) {
		echo $msg;
	}else{
		return true;
	}
}

?>