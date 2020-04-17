<?php
    include "dbconfig.php";
    $con = mysqli_connect(host,name,pass,dbname);
    if(!$con)
    {
        header('Location: ../error');
    }
?>