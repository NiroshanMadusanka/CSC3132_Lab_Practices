<?php
//conection making to DB
//constant variables
define('SERVERNAME','localhost');
define('USERNAME','root');
define('PASSWORD','');
define('DBNAME','student');

try {
    //code...
    $connect = mysqli_connect(SERVERNAME,USERNAME,PASSWORD,DBNAME);

if (!$connect) {
    die("Connection failed");
}
else{
    //echo "Connected Succesfully";
}
} catch (Exception $e) {
    throw $th;
    die($e ->getMessage());

}



?>