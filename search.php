<?php
    session_start();
    if(!isset($_SESSION['login_user']))
        header("Location:/login.php");

    include "components/header.php";
    include "classes/dbconnect.php";    

    if( isset($_POST['submit']) ) 
    {
        if($_POST['bgroup'] !='All' and $_POST['city'] != "" && $_POST['state'] != "" )
        {
            $bgroup = $_POST['bgroup'];
            $state = $_POST['state'];
            $city = $_POST['city'];
            $sql = "SELECT * FROM `users` WHERE `bgroup` = '$bgroup' and `city`='$city' and `state` = '$state'";
        }
        else if ($_POST['bgroup'] !='All' and $_POST['city'] != "" )
        {
            $bgroup = $_POST['bgroup'];
            $city = $_POST['city'];
            $sql = "SELECT * FROM `users` WHERE `bgroup` = '$bgroup' and `city`='$city'";
        }
        else if ($_POST['bgroup'] !='All' and $_POST['state'] != "" ) 
        {
            $bgroup = $_POST['bgroup'];
            $state = $_POST['state'];
            $sql = "SELECT * FROM `users` WHERE `bgroup` = '$bgroup' and `state` = '$state'";
        }
        else if($_POST['bgroup']=='All' and $_POST['state'] == "" and $_POST['city'] == ""){
            $sql = "SELECT * FROM `users`";
        }
        else if($_POST['bgroup']=='All' and $_POST['state'] != "" and $_POST['city'] != ""){
            $state = $_POST['state'];
            $city = $_POST['city'];
            $sql = "SELECT * FROM `users` WHERE `city`='$city' and `state` = '$state'";
        }
        else if($_POST['bgroup']=='All' and $_POST['state'] == "" and $_POST['city'] != ""){
            $state = $_POST['state'];
            $city = $_POST['city'];
            $sql = "SELECT * FROM `users` WHERE `city`='$city'";
        }
        else if($_POST['bgroup']=='All' and $_POST['state'] != "" and $_POST['city'] == ""){
            $state = $_POST['state'];
            $city = $_POST['city'];
            $sql = "SELECT * FROM `users` WHERE `state` = '$state'";
        }
        else {
            $bgroup = $_POST['bgroup'];
            $sql = "SELECT * FROM `users` WHERE `bgroup` = '$bgroup'";
        }

        $result = mysqli_query($con,$sql);
        if( !$result ) {
            header('Location:error.php');
        }
    }
    else {
        $sql = "SELECT * FROM `users`";
    
        $result = mysqli_query($con,$sql);
        if( !$result ) {
            header('Location:error.php');
        }
    }
    
?>
<div class="cover">
</div>
<div class="container">
    <h1 class="heading-reg">Search Database</h1>
    <div class="row">
        <form method="post" action="search.php">
            <div class="col-md-3">
                <div class="form-row">
                    <label for="bgroup">Blood Group</label>
                    <select name="bgroup" class="form-control" id="bgroup">
                        <option value="All">All</option>
                        <option value="A+">A+</option>
                        <option value="B+">B+</option>
                        <option value="AB+">AB+</option>
                        <option value="O+" >O+</option>
                        <option value="A-" >A-</option>
                        <option value="B-" >B-</option>
                        <option value="AB-">AB-</option>
                        <option value="O-">O-</option>
                    </select>
                </div>
            </div>
            <div class="col-md-3">
                <label for="ldonated">City</label>
                <input type="text" name="city" class="form-control" id="ldonated" placeholder="City">
            </div>
            <div class="col-md-3">
                <label for="ldonated">State</label>
                <input type="text" name="state" class="form-control" id="ldonated" placeholder="State">
            </div>
            <div class="col-md-3">
                <input type="submit" name="submit" class="btn btn-primary sbutton" value="Search" />
            </div>
        </form>
    </div>

    <div class="spacer"></div>
    <div class="spacer"></div>

    <?php if( isset($result)) while($row = mysqli_fetch_array($result)) : ?>
        <div class="row">
            <div class="container request">
                <div class="col-md-2 blood">
                    <?php echo $row['bgroup']; ?>
                </div>
                <div class="col-md-5 contact">
                    <table class="myTable">
                        <tr>
                            <td class="table_row">Name</td>
                            <td><?php echo $row['fname'];
                                      echo " "; 
                                      echo $row['lname'];
                                ?></td>
                        </tr>
                        <tr>
                            <td class="table_row">Address</td>
                            <td><?php 
                                    echo $row['address'];
                                    echo ", ";
                                    echo $row['city']; 
                                ?>
                            </td>
                        </tr>
                    </table>
                </div>
                <div class="col-md-5 contact">
                    <table class="myTable">
                        <tr>
                            <td class="table_row">Contact </td>
                            <td><?php echo $row['company']; ?></td>
                        </tr>
                        <tr>
                            <td class="table_row">State</td>
                            <td><?php echo $row['state']; ?></td>
                        </tr>
                    </table>
                </div>
            </div>
        </div>
    <?php endwhile;?>
    

    <div class="spacer"></div>
    <div class="spacer"></div>
</div>
<?php
    include "components/footer.php";
?>