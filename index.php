<?php
    session_start();
    include "components/header.php";
?>
    <!-- Banner Section -->
    <div class="banner">
        <img src="images/banner.jpg" alt="banner"/>
    </div>
    <!-- Banner Section Ends -->

    <!-- Description Section -->
    <div class="container">
        <div class="col-md-8 main-section">
            <h2>Our Mission</h2>
            <p>
                To fulfill the needs of the Asian people for the safest, most reliable and most cost-effective
                blood services through voluntary donations.The Blood Bank empowers ordinary people to perform 
                extraordinary acts of service. Our blood donors are ordinary people – high school students, factory
                 and office workers, business executives, parents and grandparents, and people from every walk of life. 
                 But they share one thing – a generous spirit, a desire to give back to their community and help others. 
                 Blood donors play an integral role in the delivery of modern healthcare. Many life-saving medical 
                 treatments and procedures involve blood transfusions and would not be possible without a safe and reliable 
                 blood supply.
            </p>
            <p class="note">
                <strong>Every two seconds someone receives a unit of blood. The need is constant. It is our mission 
                to meet that need.</strong>
            </p>
            <div class="spacer"></div>
        </div>
        <div class="col-md-4">
           <div class="sidebar">
               <img src="images/poster.jpg" alt="Blood Donation"/>
           </div>
        </div>
    </div>
    <!-- Description Section Ends -->


    <!-- Modal -->
  <div class="modal fade" id="SignUpModal" role="dialog">
    <div class="modal-dialog">
    
      <!-- Modal content-->
      <div class="modal-content">
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal">&times;</button>
          <h4 class="modal-title">Sign Up</h4>
        </div>
        <div class="modal-body">
          <form method="POST" action="classes/register.php" onSubmit="return Validate()">
            <div class="input-group">
                <span class="input-group-addon"><i class="glyphicon glyphicon-user"></i></span>
                <input id="email" name="username" type="email" class="form-control" placeholder="Email">
            </div>
            <br>
            <div class="input-group">
                <span class="input-group-addon"><i class="glyphicon glyphicon-lock"></i></span>
                <input id="password" name="password" type="password" class="form-control" placeholder="Password">
            </div>
            <br>
            <div class="input-group">
                <span class="input-group-addon"><i class="glyphicon glyphicon-lock"></i></span>
                <input id="cpassword" onKeyUp="Validate();" name="cpassword" type="password" class="form-control" placeholder="Confirm Password">
            </div>
            <br>
            <div class="input-group">
                <span class="error" id="perror"></span>
            </div>
            <br>
            <div class="input-group">
                <input type="submit" value="Sign Up" name="submit" class="btn btn-success">
            </div>
          </form>
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
        </div>
      </div>
      
    </div>
  </div>

      <!-- Modal -->
    <div class="modal fade" id="LoginModal" role="dialog">
    <div class="modal-dialog">
    
      <!-- Modal content-->
      <div class="modal-content">
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal">&times;</button>
          <h4 class="modal-title">Login</h4>
        </div>
        <div class="modal-body">
        <form method="POST" action="classes/login.php">
            <div class="input-group">
                <span class="input-group-addon"><i class="glyphicon glyphicon-user"></i></span>
                <input id="email" type="email" class="form-control" name="email" placeholder="Email">
            </div>
            <br>
            <div class="input-group">
                <span class="input-group-addon"><i class="glyphicon glyphicon-lock"></i></span>
                <input id="password" name="password" type="password" class="form-control" name="password" placeholder="Password">
            </div>
            <br>
            <div class="input-group">
                <input type="submit" value="Login" name="login" class="btn btn-success" name="msg" placeholder="Additional Info">
                Not a Member? <a href="#" data-toggle="modal" data-target="#LoginModal">Sign Up</a>
            </div>
        </form>
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
        </div>
      </div>
      
    </div>
  </div>

<?php
    include "components/footer.php";
?>

<script>
    function Validate() {
        var password = document.getElementById("password").value;
        var confirmPassword = document.getElementById("cpassword").value;
        if (password != confirmPassword) {
            document.getElementById('perror').innerHTML = "Password Do not Match.";
            return false;
        }
        else {
            document.getElementById('perror').innerHTML = "";
            return true;
        }
    }
</script>
