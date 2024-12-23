
<!DOCTYPE html>
<html>
<head>
    <title>printtable</title>
</head>
<body>
   
<?php

require_once 'dbconf.php'; 
require_once 'myfunc.php';

if (isset($_GET['book_id']) && $_GET['book_id'] != '') {
    $book_id = $_GET['book_id'];

    // Check if the view is for authors
    if (isset($_GET['view']) && $_GET['view'] === 'authors') {
        Jointable($book_id, $connect); // Display author details
    } else {
        Libdetails($book_id, $connect); // Display book details
    }
}

 

?>

</body>
</html>