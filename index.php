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
    <link rel="stylesheet" href="bootstrap/css/bootstrap.min.css">
</head>
<body>
    <div class="container">
        <div class="row">
        </div>
            <div class="row" style="margin-top: 50px;">
                <div class="col-md-2"></div>
                <div class="col-md-8">
                    <form class="form" action="" method="post">
                      <div class="row">
                        <div class="col-md-8">
                            <input type="text" name="search" placeholder="Search for a drug" class="form-control">
                        </div>
                        <div class="col-md-4">
                            <input type="submit" name="submit" value="Search" class="btn btn-success form-control"></div>
                        </div>
                    </form>
                </div>
                <div class="col-md-2"></div>
            </div><hr>
        <div class="row">
          <div class="col-md-2"><a href="index.php?view" class="btn btn-success">View All Drugs</a>
          </div>
        </div>


<?php
if (isset($_POST['search']) && !empty($_POST['search'])) {
  $search = $_POST['search'];
  $search = substr($search,0,1);
  $sql = "SELECT * FROM drug WHERE name LIKE  '$search%'";
    $result = mysqli_query($conn,$sql); ?>
    <div class="row">
      <div class="col-md-4"></div>
      <div class="col-md-4">
    <table class="table table-condensed table-striped">
      <thead>
        <th class="text-center">Searched Drugs</th>
      </thead>
      <tbody class="text-center">
        <?php while ($row = mysqli_fetch_array($result)) : ?>
        <tr>
          <td><a href="drug.php?list=<?=$row['id'];?>"> <?=$row['name']; ?></a></td>
        </tr>
      <?php   endwhile; ?>
      </tbody>
    </table>

<?php }elseif (isset($_GET['view'])) {
      $sql2= $conn->query("SELECT * FROM drug"); ?>
      <div class="row">
        <div class="col-md-4"></div>
        <div class="col-md-4">
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
<div class="col-md-4"></div>
</div><hr>
<footer class="footer fixed-bottom" style="margin:20px;">
  <p class="text-center" style="background:#000000; color:#FFF; font-size:15px; font-weight:bold; padding:8px 0;"> &copy Interger Group A 2017 </p>
</footer>
  </div>
</body>
</html>
