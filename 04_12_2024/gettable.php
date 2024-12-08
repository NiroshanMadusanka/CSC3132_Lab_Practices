

<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>

	<?php
//get the db connection file

require_once 'connectDB.php';
require_once 'myfun.php';

//PrintTable ("student",$connect);

//create a search form
//write a function to search the books
//echo $_SERVER['PHP_SELF']; //GET THE FILE NAME

?>

<form action = "<?php echo $_SERVER['PHP_SELF']; ?>" method = "GET">
	<table >
		<tr >
			<td align=right>Name: </td>
			<td><input type="text" name="name"/></td>
		</tr>
		<tr>
			<td><input type="submit" value="Search"></td>
		</tr>

	</table>

</form>
<?php

if (isset($_GET['name']) && $_GET['name'] != '') {
	SearchName($_GET['name'],$connect);
}

//SearchName('Alice',$connect);
?>
</body>
</html>