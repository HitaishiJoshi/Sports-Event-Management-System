<?php 
  include("server.php");
  @session_start();
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
      <link rel="stylesheet" href="Css\style.css">
      <!-- Bootstrap link -->
      <link rel="stylesheet" media="mediatype and|not|only (expressions)" href="style.css">
      <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
      <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
      <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
      <!-- Fontawesome icon generator -->
      <script defer src="https://use.fontawesome.com/releases/v5.0.7/js/all.js"></script>
      <link href="https://fonts.googleapis.com/css?family=Open+Sans&display=swap" rel="stylesheet">
      <script src="js/jQuerySimpleCounter.js"></script>
      <title> Sports Mngmt|@RD </title>
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
            <li class="nav-item"><a class="nav-link items" href="contact.php">Contact Us</a></li>
            <li class="nav-item"><a class="nav-link active items" href="event.php">Events</a></li>
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
        <!-- Cricket -->
        <div class="cricket-bg"><!-- 1 -->
          <div class="container"><!-- 2 -->
            <div class="row event-class text-light"><!-- 3 -->
              <div class="cricket col-lg-4 col-md-4 col-sm-6"><!-- 4 -->
                <img src="img/icons/cricket.svg" class="event-ico" style="color:#FFFFFF;">
                <h4>CRICKET</h4>
                <p>Hello cricketers<span class="text-alternate"> WE ARE SO EXCITED TO ANNOUNCE</span> our cricket event to you all. If you want to be a part of this event please click on the cricket icon to register your team and win amazing prizes.</p>
                <form method="POST" action="eventreg.php" name="cricket-form">
                <input type="hidden" value="cricket" name="sport">
                </form>
              </div><!-- 4 -->
              <div class="col-lg-5 offset-lg-3 col-md-7 col-sm-12 col-xs-12"><!-- 5 -->
                <div class="hovereffect"><!-- 6 -->
                  <img class="img-responsive event-image" src="img/events/8.JPG" alt="" height="400" width="400">
                  <div class="overlay"><!-- 7 -->
                      <h2>Register Now</h2>
                      <p>
                        <a href="#" class="cricket">LINK HERE</a>
                      </p>
                  </div><!-- 7 -->
                </div><!-- 6 -->
              </div><!-- 5 -->
            </div><!-- 3 -->
          </div><!-- 2 -->
        </div><!-- 1 -->
        <!-- Badminton -->
        <div class="badminton-bg"><!-- bg -->
          <div class="container"><!-- 1 -->
            <div class="row event-class text-light"><!-- 2 -->
              <div class="badminton col-lg-4 col-md-4 col-sm-6"><!-- 3 -->
                <img src="img/icons/badminton.svg" class="event-ico">
                <h4>BADMINTON</h4>
                <p>hello students, here is a very nice chance for you all to show your badminton game!!! YES YES YES you heard it right we have this event for you all where you can register yourself clicking on the icon and Get your team/yourself registered and Stand a chance to be a WINNER! </p>
                <form method="POST" action="eventreg.php" name="badminton-form">
                <input type="hidden" value="badminton" name="sport">
                </form>
              </div><!-- 3 -->
              <!-- <div class="col-lg-4 offset-lg-4 event">
              <img src="img/events/19.JPG" class="event-img">
              </div> -->
              <div class="col-lg-5 offset-lg-3 col-md-4 col-sm-6 col-xs-12"><!-- 4 -->
                <div class="hovereffect"><!-- 5 -->
                <img class="img-responsive event-image" src="img/events/19.JPG" alt="" height="400" width="400">
                <div class="overlay"><!-- 6 -->
                  <h2>Register Now</h2>
                  <p>
                    <a href="#" class="badminton">LINK HERE</a>
                  </p>
                  </div><!-- 6 -->
                </div><!-- 5 -->
              </div><!-- 4 -->
            </div><!-- 2 -->
          </div><!-- 1 -->
        </div><!-- bg -->
        <!-- Volleyball -->
        <div class="volleyball-bg"><!-- bg -->
          <div class="container"><!-- 1 -->
            <div class="row event-class text-light"><!-- 2 -->
              <div class="volleyball col-lg-4 col-md-4 col-sm-6"><!-- 3 -->
                <img src="img/icons/volleyball.svg" class="event-ico">
                <h4>VOLLEYBALL</h4>
                <p>Want to be THE <span class="text-alternate">VOLLEY BALL CHAMPION of SOMAIYA??</span> yes you can do that by getting your name entry saved in the registration form and that can be done by clicking on that volleyball icon and WOOOAAAAHHH!  you are done registering! ALL THE BEST.</p>
                <form method="POST" action="eventreg.php" name="volleyball-form">
                <input type="hidden" value="volleyball" name="sport">
                </form>
              </div><!-- 3 -->
              <div class="col-lg-5 offset-lg-3 col-md-7 col-sm-12 col-xs-12"><!-- 4 -->
                <div class="hovereffect"><!-- 5 -->
                  <img class="img-responsive event-image" src="img/events/4.JPG" alt="" height="400" width="400">
                  <div class="overlay"><!-- 6 -->
                    <h2>Register Now</h2>
                    <p>
                    <a href="#" class="volleyball">LINK HERE</a>
                    </p>
                  </div><!-- 6 -->
                </div><!-- 5 -->
              </div><!-- 4 -->
            </div><!-- 2 -->
          </div><!-- 1 -->
        </div><!-- bg -->
        <!-- Basketball -->
        <div class="basketball-bg"><!-- bg -->
          <div class="container"><!-- 1 -->
            <div class="row event-class text-light"><!-- 2 -->
              <div class="basketball col-lg-4 col-md-4 col-sm-6"><!-- 3 -->
                <img src="img/icons/basketball (2).svg" class="event-ico">
                <h4>BASKETBALL</h4>
                <p><span class="text-alternate">BOOOM!</span> YES you saw that right we have basket ball event for you all and you can register your team and compete with the best teams in mumbai and get a chance to be a <span class="text-alternate">SOMAIYA BASKETBALL CHAMPION</span> </p>
                <form method="POST" action="eventreg.php" name="basketball-form">
                <input type="hidden" value="basketball" name="sport">
                </form>
              </div><!-- 3 -->
              <div class="col-lg-5 offset-lg-3 col-md-7 col-sm-12 col-xs-12"><!-- 4 -->
                <div class="hovereffect"><!-- 5 -->
                  <img class="img-responsive event-image" src="img/events/15.JPG" alt="" height="400" width="400">
                  <div class="overlay"><!-- 6 -->
                    <h2>Register Now</h2>
                    <p>
                    <a href="#" class="basketball">LINK HERE</a>
                    </p>
                  </div><!-- 6 -->
                </div><!-- 5 -->
              </div><!-- 4 -->
            </div><!-- 2 -->
          </div><!-- 1 -->
        </div><!-- bg -->
        <!-- Table Tennis -->
        <div class="table_tenis-bg"><!-- bg -->
            <div class="container"><!--1-->
              <div class="row event-class text-light"> <!--3-->
                 <div class="tablet col-lg-4 col-md-4 col-sm-6"> <!--4-->
                    <img src="img/icons/table-tennis.svg" class="event-ico">
                     <h4>TABLE TENNIS</h4>
                     <p>IS PLAYING TENNIS your Favourite sport? yes you can showcase your talent into our 'SCORE' Somaiya sports festival and to register please click on the icon above and you are in the game zone.<span class="text-alternate"> Get your RACKETS ready!</span></p>
                     <form method="POST" action="eventreg.php" name="table_tenis-form">
                      <input type="hidden" value="table_tenis" name="sport">
                     </form>
                  </div><!--3-->
                <div class="col-lg-5 offset-lg-3 col-md-7 col-sm-12 col-xs-12"><!--4-->
                    <div class="hovereffect"> <!--5-->
                        <img class="img-responsive event-image" src="img/events/19.JPG" alt="" height="400" width="400">
                        <div class="overlay"><!--6-->
                            <h2>Register Now</h2>
                            <p>
                              <a href="#" class="tablet">LINK HERE</a>
                            </p>
                        </div><!--6-->
                      </div><!--5-->
                    </div><!--4-->
                  </div><!--2-->
               </div><!--1-->
            </div><!--bg--> 
            <!-- Lan Gaming -->
            <div class="lan_gaming-bg"><!-- bg -->     
           <div class="container"><!--1-->
            <div class="row event-class text-light"><!--3-->
              <div class="lan_gaming col-lg-4 col-md-4 col-sm-6"><!--4-->
                <img src="img/icons/online-gaming.svg" class="event-ico">
                <h4>LAN GAMING</h4>
                <p>Interested in experiencing lan gaming? We have arranged it for you<span class="text-alternate"> in our Campus itself!</span> you can be a part of it just by clicking on the icon above and registering yourself for the event!</p>
                <form method="POST" action="eventreg.php" name="lan_gaming-form">
                  <input type="hidden" value="lan_gaming" name="sport">
                </form>
              </div><!--3-->
              <div class="col-lg-5 offset-lg-3 col-md-7 col-sm-12 col-xs-12"><!--4-->
                    <div class="hovereffect"> <!--5-->
                        <img class="img-responsive event-image" src="img/events/lan-bg.jpg" alt="" height="400" width="400">
                        <div class="overlay"><!--6-->
                            <h2>Register Now</h2>
                            <p>
                              <a href="#" class="lan_gaming">LINK HERE</a>
                            </p>
                        </div><!--6-->
                      </div><!--5-->
                    </div><!--4-->
                  </div><!--2-->
               </div><!--1-->
            </div><!--bg-->
         </div> 
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
     <script>
          //Sport Registration
          $(document).ready(function() {
            $(".cricket").click(function() {
              $("form[name='cricket-form']").submit();
            });
            $(".badminton").click(function() {
              $("form[name='badminton-form']").submit();
            });
            $(".volleyball").click(function() {
              $("form[name='volleyball-form']").submit();
            });
            $(".basketball").click(function() {
              $("form[name='basketball-form']").submit();
            });
            $(".tablet").click(function() {
              $("form[name='table_tenis-form']").submit();
            });
            $(".lan_gaming").click(function() {
              $("form[name='lan_gaming-form']").submit();
            });
          });
     </script>
</body>
</html>