<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>HTML form of adding data into DB</title>
    <!-- We used forms to get data from user in this file -->
</head>
<body>
<form action="student.php" method='POST'>
    <table >
        <tr>
            <td>
            <label for="regno">Registration No:</label>
            </td>
            <td>
            <input type="text" id="regno" name="regno" value="2020/ASP/21">                
            </td>
        </tr>
        <tr>
            <td>
                <label for="name">Name:</label>
            </td>
            <td>
                <input type="text" id="name" name="name" value="M Kalifah"><br>
            </td>
        </tr>
        <tr>
            <td>
            <label for="age">Age:</label>            
            </td>
            <td>
            <input type="number" id="age" name="age" value="23"><br>
            </td>
        </tr>
        <tr>
            <td>
            <label for="course">course:</label>           
            </td>
            <td>
            <select name="course" >
                <option value="AMC">AMC</option>
                <option value="BIO">BIO</option>
                <option value="ICT">ICT</option>
            </select>
            </td>
        </tr>
        <tr>
            <td>

            </td>
            <td>
            <input type="submit" value="Submit">
            </td>
        </tr>

    </table>
</form> 

</body>
</html>