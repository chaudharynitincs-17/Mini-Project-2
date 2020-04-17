<?php
    include "dbconnect.php";
    session_start();
    if(isset($_POST['login']))
    {   
        $uname = stripslashes($_POST['email']);
        $pass = stripslashes($_POST['password']);
        $uname = mysqli_escape_string($con,$uname);
        $pass = mysqli_escape_string($con,$pass);
        $pass = md5($pass);
        
        $sql = "SELECT * FROM users WHERE username = '$uname'";
        $result = mysqli_query($con,$sql);
        if(mysqli_num_rows($result) == 1)
        {
            $row = mysqli_fetch_array($result);
            if($row['locked'] != 1)
            {
                $sql = "SELECT * FROM users WHERE username = '$uname' AND password = '$pass'";
                $result = mysqli_query($con,$sql);
                if(mysqli_num_rows($result) == 1)
                {
                    $_SESSION['login_user'] = $uname;
                    $encode = base64_encode($uname);
                    header("Location:../profile.php?id=$encode");
                }
                else
                {
                    if($row['attempt'] >= 5)
                    {
                        $sql = "UPDATE users SET locked = 1";
                        mysqli_query($con,$sql);
                        header("Location:../login_error.php");
                    }
                    else
                    {
                        $attempt = $row['attempt'];
                        $attempt = $attempt + 1;
                        $sql = "UPDATE users SET attempt = $attempt";
                        mysqli_query($con,$sql);
                        header("Location:../login_error.php");
                    }
                }
            }
            else
            {
                header("Location:../locked.php");
            }
        }
        else
        {
            header("Location:../login_error.php");
        }
    }
    else
    {
        header("Location:../error.php");
    }
?>