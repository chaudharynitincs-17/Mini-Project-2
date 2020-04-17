<?php
    include "dbconnect.php";
    session_start();
    if(isset($_POST['submit']))
    {   
        $uname = stripslashes($_POST['username']);
        $pass = stripslashes($_POST['password']);
        $uname = mysqli_escape_string($con,$uname);
        $pass = mysqli_escape_string($con,$pass);
        $pass = md5($pass);

        $sql = "INSERT into `users`(`username`, `password`,`attempt`, `locked`) 
                VALUES ('$uname','$pass',0,0)";
        $result = mysqli_query($con,$sql);
        if($result)
        {
            header("Location:../");
        }
        else {
            echo mysqli_error($con);
        }
    }
?>