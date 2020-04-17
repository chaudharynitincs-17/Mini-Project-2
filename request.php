<?php
    session_start();
    if(!isset($_SESSION['login_user']))
        header("Location:login.php");

    include "components/header.php";
    include "classes/dbconnect.php";

?>
<div class="cover">
</div>

<div class="container">
    <h1 class="heading-reg">Request Blood</h1>   
    <form action="classes/request.php" method="post">
        <div class="row form-row">
            <div class="col-md-6">
                <label for="FirstName">Patient's Name</label>
                <input type="text" name="pname" required class="form-control" id="pName" aria-describedby="FirstName" placeholder="Patients name">
                </div>
            <div class="col-md-6">
                <label for="LastName">Hospital Name</label>
                <input type="text" name="hname" required class="form-control" id="hName" aria-describedby="LastName" placeholder="Hospital name">
            </div>
        </div>
        <div class="spacer"></div>
        <div class="form-row row">
            <div class="col-md-12">
                <label for="StreetAddress">Hospital Address</label>
                <input type="text" name="haddress" required class="form-control" id="StreetAddress" aria-describedby="StreetAddress" placeholder="Hospital address">
            </div>
        </div>
        <div class="spacer"></div>
        <div class="row form-row">
            <div class="col-md-6">
                <label for="city">City</label>
                <input type="text" name="city" required class="form-control" id="city" placeholder="City">
                </div>
            <div class="col-md-6">
                    <label for="state">Doctor Name</label>
                    <input type="text" name="dName" required class="form-control" id="state" placeholder="Doctor Name">
                </div>
        </div>
        <div class="spacer"></div>
        <div class="row form-row">
            <div class="col-md-6">
            <label for="bgroup">Blood Group</label>
                <select name="bgroup" class="form-control" id="bgroup">
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

        <h1 class="heading-reg">Contact Details</h1>

        <div class="spacer"></div>
        <div class="row form-row">
            <div class="col-md-6">
                <label for="PostalCode">Contact Name</label>
                <input type="text" name="cName" required class="form-control" id="PostalCode" aria-describedby="PostalCode" placeholder="Contact Name">
            </div>
            <div class="col-md-6">
                <label for="Country">Contact Number </label>
                <input type="number" name="cNumber" required class="form-control" id="Country" aria-describedby="Country" placeholder="Contact Number">
            </div>
        </div>
        
        <div class="spacer"></div>
        <div class="row">
            <div class="col-md-12">
                <input type="submit" name="submit" value="Request Blood" class="btn btn-danger">            
            </div>
        </div>
        <div class="spacer"></div>
      </div>
    </form>    
</div>


<?php
    include "components/footer.php";
?>