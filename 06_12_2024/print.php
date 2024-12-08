<!DOCTYPE html>
<html>
<head>
    <title>printtable</title>
</head>
<body>
   
<?php

 

require_once 'dconnectDB.php'; 
require_once 'myfunc.php';


 
 $id =$_GET['id'];

Studentdetails($id,$connect);


?>


</body>
</html>