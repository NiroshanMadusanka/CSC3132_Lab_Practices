<html lang="HTML">
<head>

    <title>Parking Management App</title>
    <style>
        .main {
            margin: 40px;
            padding: 20px;
            background-color: #CDF5FD;
            display: flex;
            flex-direction: column;
        }

        .head {
            margin: 10px;
            display: flex;
            flex-direction: row;
        }

        .content {
            padding: 10px;
            background-color: #ffff;
            display: flex;
            flex-direction: row;
        }

        .left {
            border: 2px solid #00A9FF;
            float: left;
            width: 65%;
            background-color: #A0E9FF;
            margin-right: 10px;
        }

        .right {
            border: 2px solid #D0A2F7;
            float: right;
            width: 35%;
            background-color: #E5D4FF;
        }

        h2 {
            text-align: center;
            padding: 5px;
        }

        .space {
            margin: 10px;
            padding: 10px;
        }

        .parking-container {
            display: flex;
            flex-wrap: wrap;
        }

        .parking-container > div {
            background-color: #f1f1f1;
            margin: 10px;
            padding: 5px;
            text-align: center;
            line-height: 25px;
            font-size: 20px;
            border: 2px firebrick solid;
            border-radius: 5px;
            width: 80px;
        }

        .error {
            padding: 5px;
            color: #D8000C;
            background-color: #FFBABA;
            line-height: 25px;
        }

        .success {
            color: #4F8A10;
            background-color: #DFF2BF;
            padding: 5px;
            margin: 10px;
        }
    </style>
</head>
<body>
<?php
require_once 'conf.php';
require_once 'func.php';
?>
<div class="main">
    <div class="head">
        <div class="left">
            <h2>
                Parking View
            </h2>
        </div>
        <div class="right">
            <h2>
                Control panel
            </h2>
        </div>
    </div>
    <div class="content">
        <div class="left">
            <div class="parking-container">
                <?php

                $q = "SELECT parking_slot, vehicle_no FROM parkinglog";

                $data = GetTableData($q,$connection);

                foreach ($data as $key => $value) {
                    if($value['vehicle_no']=='EMPTY'){
                        echo "<div>";
                    }
                    else{
                        echo "<div style='background-color:#FF5555'>";
                    }
                    echo $value['parking_slot'];
                    echo "<br>";                    
                    echo $value['vehicle_no'];
                    echo "</div>";
                }

                ?>
            </div>
        </div>
        <div class="right">
            <form method="post" action="<?php echo $_SERVER['PHP_SELF']; ?>">
                <table>
                    <tr>
                        <td align="right">Option:</td>
                        <td>
                        <label>
                            <input type="radio" name="park" value="alloc" checked onclick="toggleInput(this)"> Allocate
                            <input type="radio" name="park" value="free" onclick="toggleInput(this)"> Free
                        </label>
                        </td>
                        <td>

                        </td>
                    </tr>
                    <tr>
                        <td>Slot No:</td>
                        <td align="right">
                            <label>
                                <input type="number" name="slot" placeholder="Enter Slot No">
                            </label>
                        </td>
                        <td>
                            <label class="error">
                            <?php

                            if($_SERVER['REQUEST_METHOD']=='POST' && empty($_POST['slot'])){
                                RequiredField($_POST['slot'],'please enter slot number <br>');
                            }

                            ?>
                            </label>

                        </td>
                    </tr>
                    <tr id="vnoLabel" style="display: ">
                        <td>Vehicle No:</td>
                        <td align="right">
                            <label>
                                <input type="text" name="vno" placeholder="Enter Vehicle No">
                            </label>
                        </td>
                        <td>
                            <label class="error" id="error">
                            <?php

                            if($_SERVER['REQUEST_METHOD']=='POST' && $_POST['park']=='alloc' && empty($_POST['vno'])){
                                RequiredField($_POST['vno'],'please enter vehicle number <br>');
                            }

                            ?>
                                
                            </label>
                        </td>
                    </tr>
                    <tr>
                        <td align="right">
                        </td>
                        <td>
                            <label>
                                <input type="submit" name="alloc_btn" value="Allocate or Free">
                            </label>
                        </td>
                        <td>

                        </td>
                    </tr>
                    <tr>
                        <td colspan="2">
                        </td>
                    </tr>
                </table>
            </form>
        </div>
    </div>
</div>

<?php

if($_SERVER['REQUEST_METHOD']=='POST' && $_POST['slot']!=''){
    $parkType = $_POST['park'];
    $slot = $_POST['slot'];
    $vehiNo = $_POST['vno'];

    if($_POST['slot']!='' && $_POST['park']!=''){
        if($parkType=='alloc'){
            $q = "SELECT parking_slot FROM parkinglog WHERE id=$slot AND vehicle_no='EMPTY'";
            $result = mysqli_query($connection,$q);
            if (mysqli_num_rows($result)==1){
                $q = "UPDATE parkinglog SET vehicle_no='$vehiNo' WHERE id=$slot";
                mysqli_query($connection,$q);
                echo "<script> location.replace('index.php'); </script>";
                //header('location:index.php');
            }
            else{
                $q = "SELECT vehicle_no FROM parkinglog WHERE id=$slot";
                $result = mysqli_query($connection,$q);
                $row = mysqli_fetch_row($result);
                echo "<script>document.getElementById('error').innerHTML = 'This slot is not availbale, allready allocate to ".$row[0]."';</script>";
            }
        }
        else{
            $q = "UPDATE parkinglog SET vehicle_no='EMPTY' WHERE id=$slot";
            $result = mysqli_query($connection,$q);
            echo "<script> location.replace('index.php'); </script>";
            //header('location:index.php');
        }
    }

}
?>

<script>
        function toggleInput(radio) {
            const vnoLabel = document.getElementById('vnoLabel');
            if (radio.value === "free") {
                vnoLabel.style.display = "none"; // Hide input
            } else {
                vnoLabel.style.display = ""; // Show input
            }
        }
</script>
</body>
</html>