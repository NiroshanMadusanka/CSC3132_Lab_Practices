<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>php</title>
    <!-- we connected to DB and ran sql query to add data into DB  -->
</head>
<body>
     <?php
    require_once 'connectDB.php';
    if ($_SERVER['REQUEST_METHOD'] == "POST") {
        echo  "Got the POST req form uses";
        $reg = $_POST['regno'];
        $name = $_POST['name'];
        $age = $_POST['age'];
        $course = $_POST['course'];
        AddData($connect,$reg,$name,$age,$course);
        
    }
   function AddData($connect,$reg,$name,$age,$course){
    try{
    
        $sql = "insert into students values('$reg','$name',$age,'$course')";
    
        $result = mysqli_query($connect,$sql);
        if($result) {
            echo " New  student record created sucessfully";
        }else{
            die("Error".mysqli_error($connect));
        }
        
        }catch(Exception $e) {
            die($e->getMessage());
        }
}
?> 
</body>
</html>