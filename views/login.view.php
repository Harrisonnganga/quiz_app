<?php
require 'partials/head.php';
require 'partials/nav.php';
require 'partials/banner.php';
?>

<body>
  <div class="header">
    <div class="row">
      <div class="col-lg-6">
        <span class="logo">Quiz app</span>
      </div>
      <div class="col-md-2 col-md-offset-4">
        <a href="#" class="btn btn-primary logb" data-toggle="modal" data-target="#myModal"> <span
            class="glyphicon glyphicon-log-in" aria-hidden="true"></span>&nbsp;<span class="title1"><b> Login </b>
          </span></a>
      </div>
      <div class="modal fade" id="myModal">
        <div class="modal-dialog">
          <div class="modal-content title1">
            <div class="modal-header">
              <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span
                  aria-hidden="true">&times;</span></button>
              <h4 class="modal-title title1"><span style="color:darkblue;font-size:12px;font-weight: bold">Login to
                  your Account</span></h4>
            </div>
            <div class="modal-body">
              <form class="form-horizontal" action="login.php?q=index.php" method="POST">
                <fieldset>
                  <div class="form-group">
                    <label class="col-md-3 control-label" for="username"></label>
                    <div class="col-md-6">
                      <input id="username" name="username" placeholder="Username" class="form-control input-md"
                        type="username">
                    </div>
                  </div>
                  <div class="form-group">
                    <label class="col-md-3 control-label" for="password"></label>
                    <div class="col-md-6">
                      <input id="password" name="password" placeholder="Enter your Password"
                        class="form-control input-md" type="password">
                    </div>
                  </div>
                </fieldset>
            </div>
            <div class="modal-footer">
              <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
              <button type="submit" class="btn btn-primary">Log in</button>
              </form>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</body>

</html>
