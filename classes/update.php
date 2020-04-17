<?php
    include "dbconnect.php";
    session_start();
    if(isset($_POST['submit']))
    {   
        $fname = ( isset($_POST['fname']) ) ? $_POST['fname'] : "";
        $lname = ( isset($_POST['lname']) ) ? $_POST['lname'] : "";
        $address = ( isset($_POST['address']) ) ? $_POST['address'] : "";
        $pcode = ( isset($_POST['pcode']) ) ? $_POST['pcode'] : "";
        $country = ( isset($_POST['country']) ) ? $_POST['country'] : "";
        $company = ( isset($_POST['company']) ) ? $_POST['company'] : "";
        $bgroup = ( isset($_POST['bgroup']) ) ? $_POST['bgroup'] : "";
        $donated = ( isset($_POST['donated']) ) ? $_POST['donated'] : "2";
        $email = ( isset($_POST['uname']) ) ? $_POST['uname'] : "";
        $state = ( isset($_POST['state']) ) ? $_POST['state'] : "";
        $city = ( isset($_POST['city']) ) ? $_POST['city'] : "";

        $sql = "UPDATE `users` SET `fname`= '$fname',`lname`='$lname',
                `address`='$address',`city`='$city',`state`='$state',`pcode`=$pcode,`country`='$country',
                `company`='$company',`bgroup`='$bgroup',`donated`= $donated WHERE username = '$email'";
        $result = mysqli_query($con,$sql);
        if($result)
        {
            $enode = base64_encode($email);
            header("Location:../profile.php?id=$enode");
        }
        else {
            header('Location:../');
        }
    }
?>