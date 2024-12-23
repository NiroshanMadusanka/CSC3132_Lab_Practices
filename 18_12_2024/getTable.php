
<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>

	<?php


require_once 'dbconf.php';
require_once 'myfunc.php';

PrintTable ("books",$connect);

?>

<form action = "<?php echo $_SERVER['PHP_SELF']; ?>" method = "GET">
	<table >
		<tr >
			<td align=right>Book_ID :</td>
			<td><input type="text" name="book_id"/></td>
		</tr>
		<tr>
			<td><input type="submit" value="Search"></td>
		</tr>

	</table>

</form>
<?php

if (isset($_GET['book_id']) && $_GET['book_id'] != '') {
	Searchbook($_GET['book_id'],$connect);
}

//Searchbook('Mark',$connect);



?>
</body>
</html>