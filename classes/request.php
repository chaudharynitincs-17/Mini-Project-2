<?php
    include "dbconnect.php";
    session_start();
    if(isset($_POST['submit']))
    {   
        $pName = $_POST['pname'];
        $hName = $_POST['hname'];
        $haddress = $_POST['haddress'];
        $city = $_POST['city'];
        $dName = $_POST['dName'];
        $bgroup = $_POST['bgroup'];
        $cName = $_POST['cName'];
        $cNumber = $_POST['cNumber'];
        
        $sql = "INSERT INTO `request`(`pName`, `hName`, `haddress`, `city`, `dName`,`bgroup`, `cName`, `cNumber`)
                VALUES ('$pName','$hName','$haddress','$city','$dName','$bgroup','$cName',$cNumber)";

        $result = mysqli_query($con,$sql);
        if($result)
        {
            header("Location:../check_requests.php");
        }
        else {
            echo mysqli_error($con);
        }
    }
?>