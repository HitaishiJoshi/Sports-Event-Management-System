<?php 
  include("server.php");
  @session_start();
  if(!isset($_SESSION["username"])) {
    //Navbar for normal user
    $button = "Login";
    $data1 = "modal";
    $data2 = "#exampleModal";
    $link = "#";
    $con = "Contact Us";
    $conlink = "contact.php";
  } else {
    //Navbar for logged in user
    $button = "Logout";
    $data1 = "#";
    $data2 = "#";
    $link = "index.php?logout=1";
    if($_SESSION["username"] == "admin") {
      $con = "Admin";
      $conlink = "admin.php";
    } else {
      $con = "Contact Us";
      $conlink = "contact.php";
    }
  }
  if(isset($_GET["logout"])) {
    session_destroy();
    unset($_SESSION["username"]);
    header("location: index.php");
  }
?>
<!DOCTYPE html>
<html lang="en">
  <head>
      <meta name="viewport" content="width=device-width, initial-scale=1.0">
      <!-- Css link Style.css -->
      <link rel="stylesheet" href="Css/style.css">
      <link rel="stylesheet" href="Css/contact.css">
      <!-- Bootstrap link -->
      <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
      <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
      <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
      <!-- Fontawesome icon generator -->
      <script defer src="https://use.fontawesome.com/releases/v5.0.7/js/all.js"></script>
      <link href="https://fonts.googleapis.com/css?family=Open+Sans&display=swap" rel="stylesheet">
      <script src="js/jQuerySimpleCounter.js"></script>
      <title> Sports Mngmt|@RD </title>
      <style>
        /* Custom Button */
        .btn-custom-outline {
          border-color: #cb875f;
          color: #cb875f;
        }
        .btn-custom-outline:hover {
          background-color: #cb875f;
          color: #ffffff;
        }
      </style>
  </head>
  <body>
  <!-- Navbar -->
  <div class="navbar-custom">
      <nav class="navbar navbar-expand-lg navbar-light bg-light">
        <a class="navbar-brand" id="score" href="index.php"><img src="img/icons/sports.png" class="main-logo"> SCORE</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
          <ul class="navbar-nav ml-auto">
            <li class="nav-item"><a class="nav-link items" href="index.php">Home</a></li>
            <li class="nav-item"><a class="nav-link active items" href="<?php echo $conlink;?>"><?php echo $con;?></a></li>
            <li class="nav-item"><a class="nav-link items" href="event.php">Events</a></li>
            <li class="nav-item"><a class="nav-link items" href="register.php">Registration</a></li>
            <li class="nav-item"><a class="nav-link items" href="<?php echo $link?>" data-toggle="<?php echo $data1?>" data-target="<?php echo $data2?>"><?php echo $button?><a></button></li>
          </ul>
          </div>
        </nav>
      </div>
      <!-- Login Modal -->
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
        <!-- Contact Form -->
        <section id="contact-form" class="py-3">
          <div class="container">
            <div class="row">
              <div class="col-lg-5">
              <h1 class="l-heading"><span class="text-alternate">Contact</span> Us</h1>
              <p>Please fill out the form below to contact us</p>
                <form method="POST">
                  <div class="form-group">
                    <label for="name">Name</label>
                    <input type="text" name="name" id="name">
                  </div>
                  <div class="form-group">
                    <label for="email">Email</label>
                    <input type="email" name="email" id="email">
                  </div>
                  <div class="form-group">
                    <label for="message">Message</label>
                    <textarea name="message" id="message"></textarea>
                  </div>
                  <input type="submit" class="btn btn-custom-outline" name="contact" value="Submit" style="width: 82px;">
                </form>
              </div>
              <!-- Map -->            
          <div class="col-lg-7">
            <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3771.399931893312!2d72.86885431457792!3d19.04614598710498!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3be7cf21727f6e19%3A0x473006136ad440dc!2sK.%20J.%20Somaiya%20Institute%20of%20Engineering%20and%20Information%20Technology!5e0!3m2!1sen!2sin!4v1567870391392!5m2!1sen!2sin" width="650" height="600" frameborder="0" style="border:0;" allowfullscreen="">
            </iframe>
            </div>
            </div>
          </div>    
         </section>
       <!-- Contact  Footer -->
      <section id="contact-info" class="bg-dark">
          <div class="container">
              <div class="box">
                  <i class="fas fa-building fa-3x"></i>
                  <h3>Location</h3>
                  <p>KJSIEIT,SION</p>
               </div>
                <div class="box">
                    <i class="fas fa-phone fa-3x"></i>
                    <h3>Phone Number</h3>
                    <p>(617) 555-5555</p>
                </div>
                <div class="box">
                    <i class="fas fa-envelope fa-3x"></i>
                    <h3>Email Address</h3>
                    <p>kjsieit@kjsieit.edu</p>
                </div>
          </div>
        </section>
        <!-- Footer -->
        <section class="footer">
      <footer class="page-footer font-small special-color-dark pt-4">
        <!-- Footer Elements -->
        <div class="container">
          <!-- Social buttons -->
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
          <!-- Social buttons -->
        </div>
        <!-- Copyright -->
        <div class="footer-copyright text-center mb-3">© 2018 Copyright:
          <a href="index.php" style="color:#cb875f">SCORE</a>
        </div>
        <!-- Copyright -->
      </footer>
      <!-- Footer -->
    </section>
</body>
</html>