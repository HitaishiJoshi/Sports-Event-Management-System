<?php 
  include('server.php');
  if(!isset($_SESSION["username"])) {
    $button = "Login";
    $data1 = "modal";
    $data2 = "#exampleModal";
    $link = "#";
  } else {
    $button = "Logout";
    $data1 = "#";
    $data2 = "#";
    $link = "index.php?logout=1";
  }
?>
<!DOCTYPE html>
<html>
<head>
    <title>Register | Score</title>
    <!-- Css link Style.css -->
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="Css/style.css">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
    <script defer src="https://use.fontawesome.com/releases/v5.0.7/js/all.js"></script>
    <link href="https://fonts.googleapis.com/css?family=Open+Sans&display=swap" rel="stylesheet">
    <style>
      .btn-custom {
        background-color: #cb875f;
        color: #FFFFFF;
      }
      i {
        color: #cb875f;
      }
    </style>
</head>
<body>
<div class="navbar-custom">
      <nav class="navbar navbar-expand-lg navbar-light bg-light">
        <a class="navbar-brand" id="score" href="index.php"><img src="img/icons/sports.png" class="main-logo"> SCORE</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
          <ul class="navbar-nav ml-auto">
            <li class="nav-item"><a class="nav-link items" href="index.php">Home</a></li>
            <li class="nav-item"><a class="nav-link items" href="contact.php">Contact Us</a></li>
            <li class="nav-item"><a class="nav-link items" href="event.php">Events</a></li>
            <li class="nav-item"><a class="nav-link active items" href="register.php">Registration</a></li>
            <li class="nav-item"><a class="nav-link items" href="<?php echo $link?>" data-toggle="<?php echo $data1?>" data-target="<?php echo $data2?>"><?php echo $button?><a></button></li>
          </ul>
          </div>
        </nav>
      </div>
    <div class="container">
        <div class="row">
            <div class="col-lg-4 offset-lg-4 mt-3">
                <div class="header text-center">
                    <h2>Register for <span class="text-alternate">SCORE</span></h2>
                </div>
                <div class="card" style="border-color:#cb875f;">
                    <div class="card-body">
                        <form method="POST" action="register.php">
                            <?php include("errors.php")?>
                            <div class="form-group">
                                <label class="control-label">Username</label>
                                <input type="text" name="username" value="<?php echo $username; ?>" class="form-control" required>
                            </div>
                            <div class="form-group"> 
                                <label class="control-label">Email-ID</label>
                                <input type="text" name="email" value="<?php echo $email; ?>" class="form-control" required>
                            </div>
                            <div class="form-group">
                                <label class="control-label">Password</label>
                                <input type="password" name="pwd_1" class="form-control" required>
                            </div> 
                            <div class="form-group">
                                <label class="control-label">Confirm Password</label>
                                <input type="password" name="pwd_2" class="form-control" required>
                            </div>
                            <div class="form-group">
                                <button type="submit" class="btn btn-custom" name="reg-user">Register</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!--MODAL-->
    <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
          <div class="modal-dialog" role="document">
            <div class="modal-content">
              <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Login</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                  <span aria-hidden="true">&times;</span>
                </button>
              </div>
              <div class="modal-body">
              <!--  login Form  -->
                <form method="POST" action="index.php">
                  <?php include("errors.php") ?>
                  <div class="form-group">
                      <label class="control-label">Username</label>
                      <input type="text" name="username" class="form-control" required>
                  </div>
                  <div class="form-group">
                      <label class="control-label">Password</label>
                      <input type="password" name="password" class="form-control" required>
                  </div>
                  <div class="form-group">
                      <button type="submit" class="btn btn-custom-outline" name="login_user">Login</button>
                  </div>
                  <p class="already">
                      Not Yet a Member? <a href="register.php" class="text-alternate">Sign Up!!</a>
                  </p>
                </form>
              </div>
            </div>
          </div>
        </div>
       <section class="footer">
      <footer class="page-footer font-small special-color-dark pt-4">
        <div class="container">
          <ul class="list-unstyled list-inline text-center">
            <li class="list-inline-item">
              <a class="btn-floating btn-fb mx-1" href="#">
                <i class="fab fa-facebook-f" style="color:#cb875f"></i>
              </a>
            </li>
            <li class="list-inline-item">
              <a class="btn-floating btn-tw mx-1" href="#">
                <i class="fab fa-twitter" style="color:#cb875f"></i>
              </a>
            </li>
            <li class="list-inline-item">
              <a class="btn-floating btn-ins mx-1" href="#">
              <i class="fab fa-instagram" style="color:#cb875f"></i>
              </a>
            </li>
            </ul>
        </div>
        <div class="footer-copyright text-center mb-3">© 2018 Copyright:
          <a href="index.php" style="color:#cb875f">SCORE</a>
        </div>
      </footer>
    </section>
  </body>
</html>