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
    //Navbar for logged in users
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
      <!-- Bootstrap link -->
      <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
      <link rel="stylesheet" href="Css/owl.carousel.css">
      <link href="https://fonts.googleapis.com/css?family=Open+Sans&display=swap" rel="stylesheet">
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
    <!--NAVBAR-->
    <div class="navbar-custom">
      <nav class="navbar navbar-expand-lg navbar-light bg-light">
        <a class="navbar-brand" id="score" href="index.php"><img src="img/icons/sports.png" class="main-logo"> SCORE</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
          <ul class="navbar-nav ml-auto">
            <li class="nav-item"><a class="nav-link active items" href="index.php">Home</a></li>
            <li class="nav-item"><a class="nav-link items" href="<?php echo $conlink;?>"><?php echo $con;?></a></li>
            <li class="nav-item"><a class="nav-link items" href="event.php">Events</a></li>
            <li class="nav-item"><a class="nav-link items" href="register.php">Registration</a></li>
            <li class="nav-item"><a class="nav-link items" href="<?php echo $link?>" data-toggle="<?php echo $data1?>" data-target="<?php echo $data2?>"><?php echo $button?><a></button></li>
          </ul>
          </div>
        </nav>
      </div>
      <div class="bckg-color">
        <div class="container">
          <!-- Owl Carousel -->
          <div class="row">
              <div class="owl-carousel owl-theme custom-carousel">
                <div>
                  <div class="item">
                    <img src="img\events\1.JPG">
                  </div>
                </div>
                <div>
                  <div class="item">
                    <img src="img\events\4.JPG">
                  </div>
                </div>
                <div>
                  <div class="item">
                    <img src="img\events\3.JPG">
                  </div>
                </div>
                <div>
                  <div class="item">
                    <img src="img\events\5.JPG">
                  </div>
                </div>
                <div>
                  <div class="item">
                    <img src="img\events\7.JPG">
                  </div>
                </div>
                <div>
                  <div class="item">
                    <img src="img\events\18.JPG">
                  </div>
                </div>
              </div>
              </div>
          </div>
          <!-- Home Page Text -->
          <div class="row">
            <div class="main-header offset-lg-3 col-lg-6 col-md-6 col-sm-7 offset-sm-2 text-light">
              <h2 class="text-center">SCORE</h2>
              <h4 class="text-center">Be the <span class="text-alternate">Game</span> Changer</h4>
            </div>
          </div>
          <div class="row home-text">
            <div class="col-lg-4">
              <h4 class="text-center">THE STORY TILL <span class="text-alternate">NOW</span></h4>
              <p>Till now more than 200 hundred different teams have participated in score. There are more than 65 winners in these two years
              We are so happy to inform you that many teams participate in different events, not all of them win but surely have great memories with their friends and the game they play</p>
            </div>
            <div class="col-lg-4">
              <h4 class="text-center">WHAT YOU TAKE <span class="text-alternate">BACK</span></h4>
              <p>Not everyone who participates wins the game they say but we feel that the trophy is just the act of winning but the real winners are the ones who take a lot of memories with them and their friends, the one who enjoyed the moment and not cry that they didn’t win. We promise you that once you come here you are going to go back with a lot of memories happy moments and of course a great team</p>
            </div>
            <div class="col-lg-4">
              <h4 class="text-center">TALK OF THE <span class="text-alternate">TOWN</span></h4>
              <p>Contrary to popular belief, Lorem Ipsum is not simply random text. It has roots in a piece of classical Latin literature from 45 BC, making it over 2000 years old. Richard McClintock, a Latin professor at Hampden-Sydney College in Virginia, looked up one of the more obscure Latin words, consectetur, from a Lorem Ipsum passage, and going through the cites of the word in classical literature, discovered the undoubtable source.</p>
            </div>
          </div>
          </div>
        </div>
      </div>
      <!-- Our Numbers Div -->
      <div class="bckg-color-alt">
        <div class="container text-light">
          <div class="row">
            <div class="col-lg-12">
              <div class="main-header">
                <h2 class="text-center">OUR <span class="text-alternate">NUMBERS</span></h2>
                <p class="text-center">SOME OF THE <span class="text-alternate">COOL</span> FACTS ABOUT US</p>
              </div>
            </div>
          </div>
          <div class="row text-center">
            <div class="col-lg-4 col-sm-12 count-div vertical-line">
              <h2 id="count1"></h2>
              <h4>Events</h4>
            </div>
            <div class="col-lg-4 col-sm-12 count-div vertical-line">
            <h2 id="count2"></h2>
              <h4>Participants</h4>
            </div>
            <div class="col-lg-4 col-sm-12 count-div">
            <h2 id="count3"></h2>
              <h4>Attendees</h4>
            </div>
          </div>
        </div>
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
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
    <script src="js/owl.carousel.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
    <script src="js/jQuerySimpleCounter.js"></script>
    <!-- Fontawesome icon generator -->
    <script defer src="https://use.fontawesome.com/releases/v5.0.7/js/all.js"></script>
    <script>
    $(document).ready(function() {
      //Counters
      $("#count1").jQuerySimpleCounter({
        start:0,
        end:100,
        easing:'swing',
        duration: 3000,
        complete:''
      });
      $("#count2").jQuerySimpleCounter({
        start:0,
        end:400,
        easing:'swing',
        duration: 3000,
        complete:''
      });
      $("#count3").jQuerySimpleCounter({
        start:0,
        end:5000,
        easing:'swing',
        duration: 3000,
        complete:''
      });
      //Carousel
      $(".owl-carousel").owlCarousel({
        margin: 10,
        loop: true,
        autoWidth: true,
        items: 4,
        nav: true,
        navText: ["<i class='fa fa-chevron-left'></i>","<i class='fa fa-chevron-right'></i>"],
      });
    });
    </script>
    <!-- Owl Carousel JS -->
</body>
</html>