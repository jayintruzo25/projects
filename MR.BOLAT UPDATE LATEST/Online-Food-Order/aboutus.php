<?php
session_start();
?>

<html>

  <head>
    <title> About | Mr. Bolat </title>
     <link rel="icon" type="image/x-icon" href="images/LOG.png">
  </head>

  <link rel="stylesheet" type = "text/css" href ="css/aboutus.css">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">
  <script type="text/javascript" src="js/jquery.min.js"></script>
  <script type="text/javascript" src="js/bootstrap.min.js"></script>

  <body>

  
    <button onclick="topFunction()" id="myBtn" title="Go to top">
      <span class="glyphicon glyphicon-chevron-up"></span>
    </button>
  
    <script type="text/javascript">
      window.onscroll = function()
      {
        scrollFunction()
      };

      function scrollFunction(){
        if (document.body.scrollTop > 20 || document.documentElement.scrollTop > 20) {
          document.getElementById("myBtn").style.display = "block";
        } else {
          document.getElementById("myBtn").style.display = "none";
        }
      }

      function topFunction() {
        document.body.scrollTop = 0;
        document.documentElement.scrollTop = 0;
      }
    </script>

   <nav class=" navbar navbar-inverse navbar-fixed-top navigation-clean-search " role="navigation" style="background-color: #ffcb0c;">
      <img src="images/LOG.png" width="50" height="50" align="left">
      <div class="container">
        <div class="navbar-header">
          <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#myNavbar">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
          <a class="navbar-brand" href="index.php" style="color:white;">Mr. Bolat</a>
        </div>

        <div class="collapse navbar-collapse " id="myNavbar">
          <ul class="nav navbar-nav">
            <li><a href="index.php" style="color:white;">Home</a></li>
            <li class="active"><a href="aboutus.php" style="color:white;">About</a></li>
            <li><a href="contactus.php" style="color:white;">Contact Us</a></li>
          </ul>

<?php
if(isset($_SESSION['login_user1'])){

?>


          <ul class="nav navbar-nav navbar-right">
            <li><a href="#" style="color:white;"><span class="glyphicon glyphicon-user"></span> Welcome <?php echo $_SESSION['login_user1']; ?> </a></li>
            <li class="active"><a href="myrestaurant.php">MANAGER CONTROL PANEL</a></li>
            <li><a href="logout_m.php" style="color:white;"><span class="glyphicon glyphicon-log-out"></span> Log Out </a></li>
          </ul>
<?php
}
else if (isset($_SESSION['login_user2'])) {
  ?>
           <ul class="nav navbar-nav navbar-right">
            <li><a href="#" style="color:white;"><span class="glyphicon glyphicon-user"></span> Welcome <?php echo $_SESSION['login_user2']; ?> </a></li>
            <li class="active"><a href="foodlist.php"><span class="glyphicon glyphicon-cutlery"></span> Food Zone </a></li>
            <li><a href="cart.php" style="color:white;"><span class="glyphicon glyphicon-shopping-cart"></span> Cart 
            (<?php
              if(isset($_SESSION["cart"])){
              $count = count($_SESSION["cart"]); 
              echo "$count"; 
            }
              else
                echo "0";
              ?>)
            </a></li>
            <li><a href="logout_u.php" style="color:white;"><span class="glyphicon glyphicon-log-out"></span> Log Out </a></li>
          </ul>
  <?php        
}
else {

  ?>

 <ul class="nav navbar-nav navbar-right">
            <li><a href="#" class="dropdown-toggle active" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false" style="color:white;"><span class="glyphicon glyphicon-user"style="color:white;"></span> Sign Up <span class="caret"></span> </a>
                <ul class="dropdown-menu">
              <li> <a href="customersignup.php"> User Sign-up</a></li>
              <li> <a href="managersignup.php"> Manager Sign-up</a></li>
              
            </ul>
            </li>

            <li><a href="#" class="dropdown-toggle active" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false" style="color:white;"><span class="glyphicon glyphicon-log-in"style="color:white;"></span > Login <span class="caret" style="color:white;"></span></a>
              <ul class="dropdown-menu">
              <li> <a href="customerlogin.php"> User Login</a></li>
              <li> <a href="managerlogin.php"> Manager Login</a></li>
             
            </ul>
            </li>
          </ul>

<?php
}
?>
        </div>

      </div>
    </nav>
    <div class="heading" style="background-color:#ffcb0c;">
      <br>
     <h1 align="center" style="color:white;"><strong>About <span class="edit" style="color: white;"> Mr. Bolat </span></strong></h1>
     <br>
    </div>
    <br>
    <div class="container"> <p style="font-size: 30; text-align: justify; color: black;" > 
        There are many wonderful items available 
        to purchase from Mr. Bolat, 
        a restaurant that accepts internet orders. 
        A crew of foolish men who were utilizing the 
        system to pass their core subjects 
        created this online eatery. 
        Mr. Bolat is user-friendly, 
        we only require data to easily 
        place orders from your homes online.
        The business's success in the 
        quick-service restaurant sector 
        continues to depend heavily on 
        the quality of the food, 
        the level of service, the 
        price-value relationship, 
        and effective operations.</p></div>
        <br>
        <div class="heading" style="background-color:#ffcb0c;">
      <br>
     <h1 align="center" style="color:white;"><strong>Our Mission, and Vission<span class="edit" style="color: white;"></span></strong></h1><br>

     <div id="myCarousel" class="carousel slide" align="center">
    <div class="carousel-inner">

      <div class="item active">
      <img src="images/mv_main.jpg" style="width:80%;">
      <div class="carousel-caption">
      </div>
      </div>

      <div class="item">
      <img src="images/mission.jpg" style="width:80%;">
      <div class="carousel-caption">
      </div>
      </div>

      <div class="item">
      <img src="images/vission.jpg" style="width:80%;">
      <div class="carousel-caption">
      </div>
      </div>
    
    </div>
   <a class="left carousel-control" href="#myCarousel" data-slide="prev">
      <span class="glyphicon glyphicon-chevron-left"></span>
      <span class="sr-only">Previous</span>
    </a>
    <a class="right carousel-control" href="#myCarousel" data-slide="next">
      <span class="glyphicon glyphicon-chevron-right"></span>
      <span class="sr-only">Next</span>
    </a>
    </div>
     </div>
         <div class="heading" style="background-color:#ffcb0c;">
      <br>
     <h1 align="center" style="color:white;"><strong>Where to find<span class="edit" style="color: white;"> Mr. Bolat </span></strong></h1>
     <br>
    </div>
      <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d63474.27028753801!2d125.10038922167966!3d6.111591200000003!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x32f79fa0f6042059%3A0x73a6153fd174fd6!2sRamon%20Magsaysay%20Memorial%20Colleges!5e0!3m2!1sen!2sph!4v1681819495382!5m2!1sen!2sph" width="100%" height="400" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
         </body>
    </div>
  </div>
</div>
  <footer class="container-fluid bg-4 text-center">
  <br>
  <p> SAGING CORP. | &copy All Rights Reserved </p>
  <br>
  </footer>
</html>