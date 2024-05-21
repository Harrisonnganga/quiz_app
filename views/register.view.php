<?php
require 'partials/head.php';
require 'partials/nav.php';
require 'partials/banner.php';
?>

<body>
  <div class="bg1">
    <div class="row">
      <div class="col-md-7"></div>
      <div class="col-md-4 panel">
        <form class="form-horizontal" name="form" action="register.php?q=account.php" onSubmit="return validateForm()"
          method="POST">
          <fieldset>
            <div class="form-group">
              <label class="col-md-12 control-label" for="name"></label>
              <div class="col-md-12">
                <h3 align="center" style="color: white;">Registration Form</h3>
              </div>
            </div>

            <div class="form-group">
              <label class="col-md-12 control-label" for="name"></label>
              <div class="col-md-12">
                <div id="errormsg" style="font-size:14px;font-family:calibri;font-weight:normal;color:red">
                  <!-- <?php if (@$_GET['q7']) { echo '<p style="color:red;font-size:15px;">' . @$_GET['q7']; } ?> -->
                </div>
              </div>
            </div>
            <div class="form-group">
              <label class="col-md-12 control-label" for="name"></label>
              <div class="col-md-12">
                <input id="name" name="name" placeholder="Enter your name" class="form-control input-md" type="text"
                  value="<?php if (isset($_GET['name'])) { echo $_GET['name']; }?>">
              </div>
            </div>
            <div class="form-group">
              <label class="col-md-12 control-label" for="rollno"></label>
              <div class="col-md-12">
                <input id="rollno" name="rollno" placeholder="Enter your Roll no (Ex.732116104***)"
                  class="form-control input-md" type="text" value="<?php if (isset($_GET['rollno'])) { echo $_GET['rollno']; }?>">
              </div>
            </div>
            <div class="form-group">
              <label class="col-md-12 control-label" for="gender"></label>
              <div class="col-md-12">
                <select id="gender" name="gender" placeholder="Select your gender" class="form-control input-md">
                  <option value="">Select Gender</option>
                  <option value="M">Male</option>
                  <option value="F">Female</option>
                </select>
              </div>
            </div>
            <div class="form-group">
              <label class="col-md-12 control-label title1" for="username"></label>
              <div class="col-md-12">
                <input id="username" name="username" placeholder="Choose a username" class="form-control input-md"
                  type="username" value="<?php if (isset($_GET['username'])) { echo $_GET['username']; }; ?>" style="<?php if (isset($_GET['q7'])) echo " border-color:red"; ?>">
              </div>
            </div>
            <div class="form-group">
              <label class="col-md-12 control-label" for="phno"></label>
              <div class="col-md-12">
                <input id="phno" name="phno" placeholder="Enter your mobile number" class="form-control input-md"
                  type="number" value="<?php if (isset($_GET['phno'])) { echo $_GET['phno']; } ?>">
              </div>
            </div>
            <div class="form-group">
              <label class="col-md-12 control-label" for="password"></label>
              <div class="col-md-12">
                <input id="password" name="password" placeholder="Enter your password" class="form-control input-md"
                  type="password">
              </div>
            </div>
            <div class="form-group">
              <label class="col-md-12control-label" for="cpassword"></label>
              <div class="col-md-12">
                <input id="cpassword" name="cpassword" placeholder="Confirm Password" class="form-control input-md"
                  type="password">
              </div>
            </div>
            <div class="form-group">
              <label class="col-md-12 control-label" for=""></label>
              <div class="col-md-12" style="text-align: center">
                <input type="submit" value=" Register Now " class="btn btn-primary" style="text-align:center" />
              </div>
            </div>
          </fieldset>
        </form>
      </div>
    </div>
  </div>
  <div class="row footer">
    <div class="col-md-3 box">
      <a href="#" data-toggle="modal" data-target="#login" style="color:lightyellow">Admin Login</a>
    </div>
    <div class="col-md-3 box">
      <span href="#" data-target="#login" style="color:lightyellow">Organized by abc<br><br></span>
    </div>
    <div class="col-md-2 box">
      <a href="feedback.php" style="color:lightyellow;" onmouseover="this.style('color:yellow')" target="new">Feedback</a>
    </div>
    <div class="modal fade" id="login">
      <div class="modal-dialog">
        <div class="modal-content">
          <div class="modal-header">
            <button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">&times;</span><span class="sr-only">Close</span></button>
            <h4 class="modal-title"><span style="color:darkblue;font-size:12px;font-weight: bold">Login to Server</span></h4>
          </div>
          <div class="modal-body title1">
            <div class="row">
              <div class="col-md-3"></div>
              <div class="col-md-6">
                <form role="form" method="post" action="admin.php?q=index.php">
                  <div class="form-group">
                    <input type="text" name="uname" maxlength="20" placeholder="Username" class="form-control" />
                  </div>
                  <div class="form-group">
                    <input type="password" name="password" maxlength="30" placeholder="Password" class="form-control" />
                  </div>
                  <div class="form-group" align="center">
                    <input type="submit" name="login" value="Login" class="btn btn-primary" />
                  </div>
                </form>
              </div>
              <div class="col-md-3"></div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</body>

</html>
