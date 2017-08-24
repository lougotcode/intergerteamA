<?php
  require_once 'config.php';?>
  <!DOCTYPE html>
  <html lang="en">
    <head>
      <!-- Required meta tags always come first -->
      <meta charset="utf-8">
      <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
      <meta http-equiv="x-ua-compatible" content="ie=edge">

  	<!-- Bootstrap CSS -->
      <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-alpha.5/css/bootstrap.min.css" integrity="sha384-AysaV+vQoT3kOAXZkl02PThvDr8HYKPZhNT5h/CXfBThSRXQ6jW5DO2ekP5ViFdi" crossorigin="anonymous">

      <link href="https://fonts.googleapis.com/css?family=Alegreya+Sans:300,400,700" rel="stylesheet">
      <link rel="stylesheet" href="css/bootstrap.min.css">
      <link rel="stylesheet" href="css/styles.css">
      <link rel="stylesheet" href="font-awesome/css/font-awesome.css">
      <link rel="stylesheet" href="css/animate.min.css">

    </head>
    <body>
        <div class="container">
      <!-- NAVBAR -->

<nav class="navbar navbar-fixed-top">

          <button class="navbar-toggler hidden-sm-up" type="button" data-toggle="collapse" data-target="#navigation">
            &#9776;
          </button>

          <a class="navbar-brand float-xs-right float-sm-left" href="#" name="home"><img src="img/resizednew.PNG" class="img-fluid"/></a>

        <div class="collapse navbar-toggleable-xs" id="navigation">
            <ul class="nav navbar-nav float-sm-right">
                <li class="nav-item">
                    <a class="nav-link" href="#home">HOME</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#about">ABOUT</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#search">SEARCH</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#contact">CONTACT US</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#faq">FAQ</a>
                </li>
            </ul>
        </div>

</nav>



 <!-- CAROUSEL -->

<section id="caro hidden-sm-up">

    <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">

      <ol class="carousel-indicators">
        <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
        <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
        <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
      </ol>

      <div class="carousel-inner" role="listbox">

        <div class="carousel-item active">
          <img class="d-block img-fluid" src="img/translogo.jpg" alt="First slide">
            <div class="carousel-caption d-none d-md-block">
                <h2>WELCOME TO HEALTH ONLINE</h2>
            </div>
        </div>

        <div class="carousel-item"> <a name="about"/>
          <img class="d-block img-fluid" src="img/translogo.jpg" alt="Second slide">
            <div class="carousel-caption d-none d-md-block">
                <h3 style="padding-bottom: 20px;">Health online is your go to online database for a search on any medicine of your choice</h3>
            </div>
        </div>

        <div class="carousel-item"> <a name="services"/>
          <img class="d-block img-fluid" src="img/translogo.jpg" alt="Third slide">
            <div class="carousel-caption d-none d-md-block">
                <h3>Health online is your go to online database for a search on any medicine of your choice</h3>
            </div>
        </div>

      </div>

      <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
        <span class="sr-only">Previous</span>
      </a>

      <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
        <span class="carousel-control-next-icon" aria-hidden="true"></span>
        <span class="sr-only">Next</span>
      </a>

    </div>

</section>
<section id="search"> <a name="about"/>
    <div class="row">
      <div class="row wow bounceIn" data-wow-delay="0.5s" data-wow-duration="2s" id="drugheading">
        <h2 align="center">DRUG SEARCH</h2>
      </div>
      <div class="row wow bounceInLeft" data-wow-delay="0.5s" data-wow-duration="2s">
        <form class="form" action="" method="post">
          <div class="col-md-2"><a href="index.php?view" class="btn btn-primary">View All Drugs</a></div>
          <div class="col-md-8">
            <input type="text" name="search" placeholder="Search for a drug" class="form-control"></div>
          <div class="col-md-2 wow bounceInRight" data-wow-delay="0.7s" data-wow-duration="2s">
            <input type="submit" name="submit" value="Search" class="btn btn-success form-control"></div>
        </form>
      </div>
    </div>
</section>
<div class="col-md-3"></div>
<?php
if (isset($_POST['search']) && !empty($_POST['search'])) {
  $search = $_POST['search'];
  $search = substr($search,0,1);
  $sql = "SELECT * FROM drug WHERE name LIKE  '$search%'";
    $result = mysqli_query($conn,$sql); ?>
    <!-- <div class="row" >
      <div class="col-md-4"></div>
      <div class="col-md-4"> -->
      <div class="col-md-6">
        <table class="table table-condensed table-striped" style="margin:20px">
          <thead>
            <th class="text-center">Searched Drugs</th>
          </thead>
          <tbody class="text-center">
            <?php while ($row = mysqli_fetch_array($result)) : ?>
            <tr>
              <td><a href="drug.php?list=<?=$row['id'];?>"> <?=$row['name']; ?></a></td>
            </tr>
          <?php endwhile; ?>
          </tbody>
        </table>
      <!-- </div>
      <div class="col-md-4"></div> -->

<?php }elseif (isset($_GET['view'])) {
      $sql2= $conn->query("SELECT * FROM drug"); ?>
      <!-- <div class="row">
        <div class="col-md-4"></div>
        <div class="col-md-4"> -->
      <table class="table table-condensed table-striped">
        <thead>
          <th class="text-center">All Available Drugs</th>
        </thead>
        <tbody class="text-center">
          <?php while ($row2 = mysqli_fetch_array($sql2)) : ?>
          <tr>
            <td><a href="drug.php?list=<?=$row2['id'];?>"> <?=$row2['name']; ?></a></td>
          </tr>
        <?php   endwhile; ?>
        </tbody>
      </table>


<?php }else{
      echo "";
}
?>
</div>
<div class="col-md-3"></div>
<!-- </div> -->

<!-- FOOTER -->

    <div id="footer" style="margin-top:50px;">
            <div class="row">
                <div class="col-md-8 wow tada" data-wow-delay="0.9s" data-wow-duration="1.5s">
                    <a class="navbar-brand hidden-md-down" href="#"><img src="img/logofooter.PNG" class="img-fluid"/></a><br><br><br>
                    <table>
                      <tr>
                        <td style="padding:15px;"><p><strong><i class="fa fa-map-marker"></i> Address:</strong> Location, Street, Code</p></td>
                          <td style="padding:15px;"><p><strong><i class="fa fa-envelope"></i> Email:</strong> <a href="#">info@randomemail.com</a></p></td>
                          <td style="padding:15px;"><p><strong><i class="fa fa-phone"></i> Phone:</strong> +01 234 567 8910</p></td>
                      </tr>
                    </table>
                  </div>
                  <div class="col-md-4 wow tada" data-wow-delay="0.9s" data-wow-duration="1.5s" id="fafooter"> <a name="contact"/>
                    <table>
                      <tr>
                        <td><a href="https://web.facebook.com/" target="_blank"><i class="fa fa-facebook"></i></a></td>
                        <td><a href="https://twitter.com/" target="_blank"><i class="fa fa-twitter"></i></a></td>
                        <td><a href="https://www.instagram.com/" target="_blank"><i class="fa fa-instagram"></i></a></td>
                        <td><a href="https://plus.google.com/" target="_blank"><i class="fa fa-google-plus"></i></a></td>
                        <td><a href="#" target="_blank"><i class="fa fa-rss"></i></a></td>
                      </tr>
                      <table>
                  </div>
              </div>
            <div class="row text-center" style="margin-top:20px;">
                <div class="col-md-12 wow tada" data-wow-delay="0.9s" data-wow-duration="1.5s">
                    <p style="color:blue; font-weight:bold;">&copy; 2017 Interger Group A</p>
                    <p><a href="#">Back to top</a></p>
                </div>

            </div>
    </div>
  </div>
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.0.0/jquery.min.js" integrity="sha384-THPy051/pYDQGanwU6poAc/hOdQxjnOEXzbT+OuUAFqNqFjL+4IGLBgCJC3ZOShY" crossorigin="anonymous"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/tether/1.2.0/js/tether.min.js" integrity="sha384-Plbmg8JY28KFelvJVai01l8WyZzrYWG825m+cZ0eDDS1f7d/js6ikvy1+X+guPIB" crossorigin="anonymous"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-alpha.3/js/bootstrap.min.js" integrity="sha384-ux8v3A6CPtOTqOzMKiuo3d/DomGaaClxFYdCu2HPMBEkf6x2xiDyJ7gkXU0MWwaD" crossorigin="anonymous"></script>

  <script src="js/wow.min.js"></script>
  <script>
  new WOW().init();
  </script>
</body>
</html>
