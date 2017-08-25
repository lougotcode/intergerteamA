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
    <link rel="stylesheet" href="css/result.css">
    <link rel="stylesheet" href="font-awesome/css/font-awesome.css">
    <link rel="stylesheet" href="css/animate.min.css">

  </head>
  <body>
    <div class="container">
      <nav class="navbar navbar-fixed-top">
            <button class="navbar-toggler hidden-sm-up" type="button" data-toggle="collapse" data-target="#navigation">
              &#9776;
            </button>
            <a class="navbar-brand float-xs-right float-sm-left" href="#" name="home"><img src="img/resizednew.PNG" class="img-fluid"/></a>
          <div class="collapse navbar-toggleable-xs" id="navigation">
              <ul class="nav navbar-nav float-sm-right">
                  <li class="nav-item">
                      <a class="nav-link" href="index.php">HOME</a>
                  </li>
                  <li class="nav-item">
                      <a class="nav-link" href="#about">ABOUT</a>
                  </li>
                  <li class="nav-item">
                      <a class="nav-link" href="index.php?#search">SEARCH</a>
                  </li>
                  <li class="nav-item">
                      <a class="nav-link" href="#contact"


                      >CONTACT US</a>
                  </li>
                  <li class="nav-item">
                      <a class="nav-link" href="#faq">FAQ</a>
                  </li>
              </ul>
          </div>
        </nav>
        <!-- THE QUERY -->
        <?php
        if (isset($_GET['list'])) {
          $search = $_GET['list'];
          $sql = "SELECT * FROM drug WHERE id = '$search'";
          $result = mysqli_query($conn,$sql); ?>
          <?php while ($row = mysqli_fetch_assoc($result)) :?>
        <!-- SEARCH -->
      <br><br><br>
      <section id="search"> <a name="search"/>
          <div class="container form-group" id="searchcenter">
              <div class="row wow bounceInRight" data-wow-delay="0.5s" data-wow-duration="2s">
                  <div class="col-md-6">
                    <div id="drugname" class="img-fluid">
                        <h2><?php echo $row['name']; ?></h2>
                    </div>
                  </div>
                  <div class="col-md-4">
                      <fieldset>
                          <input type="text" class="form-control" placeholder="Search for a drug...">
                      </fieldset>
                  </div>

                  <div class="col-md-2 wow bounceInRight" data-wow-delay="0.7s" data-wow-duration="2s">
                      <button type="submit" class="btn btn-success btn-block">Search</button>
                  </div>
              </div>
          </div>
      </section>
      <!-- DRUG IMAGE SECTION -->
      <section id="drugdisplay">
          <div class="container">
              <div class="row" style="margin-bottom:20px;">
                  <div class="col-md-6 col-sm-6" ></div>
                  <div class="col-md-6 col-sm-6" id="drugimage">
                      <img src="img/drugimagenew.png" alt="Image" style="height:150px;"class="img-fluid">
                      <img src="img/prescription-drugs.jpg" alt="Image" style="height:150px;"class="img-fluid">
                  </div>
              </div>
          </div>
      </section>
      <div class="row">
          <div class="col-md-8">
            <section id="diseases">
              <div class="container">
                  <div class="row">
                      <div class="col-md-5">
                          <h3>DISEASES CURABLE</h3>
                          <hr align="left" width="50%">
                      </div>
                  </div>

                  <div class="row">
                      <div class="col-md-8">
                        <ul>  <?php
                          $dis = explode(',', $row['disease']);
                          foreach ($dis as $value): ?>
                          <li><?php echo $value; ?></li>
                        <?php endforeach; ?>
                        </ul>
                        <p></p>
                      </div>
                  </div>
              </div>
            </section>
          </div>
          <!-- DOSAGE -->

          <!-- <section id="linebreak">
              <div class="container">
                  <div class="row">
                      <div class="col-md-12">
                          <hr align="center" width="100%">
                      </div>
                  </div>
              </div>
          </section> -->

          <!-- <br><br><br> -->
          <div class="col-md-4">
            <section id="dosage">
            <div class="container">
                <div class="row">
                    <div class="col-md-5">
                        <h3>DOSAGE</h3>
                        <hr align="left" width="50%">
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-8">
                      <ul>  <?php
                        $dis = explode(',', $row['dosage']);
                        foreach ($dis as $value): ?>
                        <li><?php echo $value; ?></li>
                      <?php endforeach; ?>
                      </ul>
                    </div>
                </div>
            </div>
          </section>
        </div>
    </div>
      <!-- ADVERSE EFFECTS -->

      <section id="linebreak">
          <div class="container">
              <div class="row">
                  <div class="col-md-12">
                      <hr align="center" width="100%">
                  </div>
              </div>
          </div>
      </section>

      <br><br><br>
      <div class="row">
          <div class="col-md-8">
            <section id="adverse">
                <div class="container">
                    <div class="row">
                        <div class="col-md-5">
                            <h3>ADVERSE EFFECTS</h3>
                            <hr align="left" width="50%">
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-md-8">
                        <ul>  <?php
                          $dis = explode(',', $row['adverse_effect']);
                          foreach ($dis as $value): ?>
                          <li><?php echo $value; ?></li>
                        <?php endforeach; ?>
                        </ul>
                        </div>
                    </div>
                </div>
            </section>
          </div>

<!-- MANUFACTURER -->

      <!-- <section id="linebreak">
          <div class="container">
              <div class="row">
                  <div class="col-md-12">
                      <hr align="center" width="100%">
                  </div>
              </div>
          </div>
      </section>

      <br><br><br> -->
          <div class="col-md-4">
            <section id="manufacturer">
                <div class="container">
                    <div class="row">
                        <div class="col-md-5">
                            <h3>MANUFACTURER</h3>
                            <hr align="left" width="50%">
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-8">
                            <p><?php echo $row['manufacturer'];?></p>
                        </div>
                    </div>
                </div>
            </section>
        </div>
    </div>
      <?php endwhile; ?>
<?php }

?>
</div>
<div class="container fixed-bottom" id="footer" style="margin-top:50px;">
        <div class="row">
            <div class="col-md-8 col-sm-8 wow tada" data-wow-delay="0.9s" data-wow-duration="1.5s">
                <a class="navbar-brand hidden-md-down" href="#"><img src="img/logofooter.PNG" class="img-fluid"/></a><br><br><br>
                <table>
                  <tr>
                    <td style="padding:15px;"><p><strong><i class="fa fa-map-marker"></i> Address:</strong> Location, Street, Code</p></td>
                      <td style="padding:15px;"><p><strong><i class="fa fa-envelope"></i> Email:</strong> <a href="#">info@randomemail.com</a></p></td>
                      <td style="padding:15px;"><p><strong><i class="fa fa-phone"></i> Phone:</strong> +01 234 567 8910</p></td>
                  </tr>
                </table>
              </div>
              <div class="col-md-4 col-sm-4 wow tada" data-wow-delay="0.9s" data-wow-duration="1.5s" id="fafooter"> <a name="contact"/>
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
        <div class="row " style="margin-top:20px;">
          <div class="col-md-3 col-sm-3"></div>
            <div class="col-md-12 col-sm-12 wow tada" data-wow-delay="0.9s" data-wow-duration="1.5s">
                <p style="color:blue; font-weight:bold;">&copy; 2017 Interger Group A</p>

                <p><a href="#">Back to top</a></p>
            </div>
            <div class="col-md-3 col-sm-3"></div>
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
