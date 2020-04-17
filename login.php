<?php
    session_start();
    include "components/header.php";
?>
<div class="cover">
</div>
<div class="container">
    <h1 class="heading-reg">Login</h1>   
        <form method="POST" action="classes/login.php">
            <div class="col-md-6 icon-col">
                <img src="images/Users-icon.png" alt="User">
            </div>
            <div class="col-md-6">
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
                    Not a Member? <a href="#" data-toggle="modal" data-target="#SignUpModal" >Sign Up</a>
                </div>
                <div class="spacer"></div>
                <div class="spacer"></div>
            </div>
        </form>
</div>
<?php
    include "components/footer.php";
?>
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