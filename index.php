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
                    <input type="text" name="search" placeholder="Search for a drug" class="form-control"><br>
                    <input type="submit" name="submit" value="Search" class="btn btn-success form-control"><br><hr>
                    </form>
                </div>
                <div class="col-md-2"></div>
            </div>
    </div>
</body>
</html>
<?php
if (isset($_POST['search'])) {
  $search = $_POST['search'];
  $search = substr($search,0,1);
  $sql = "SELECT * FROM drug WHERE name LIKE  '$search%'";
    $result = mysqli_query($conn,$sql); ?>
    <div class="row">
      <div class="col-md-4"></div>
      <div class="col-md-4">
    <table class="table table-condensed table-striped">
      <thead>
        <th class="text-center">Available Drugs</th>
      </thead>
      <tbody class="text-center">
        <?php while ($row = mysqli_fetch_array($result)) : ?>
        <tr>
          <td><a href="drug.php?list=<?=$row['id'];?>"> <?=$row['name']; ?></a></td>
        </tr>
      <?php   endwhile; ?>
      </tbody>
    </table>

<?php }
?>
</div>
<div class="col-md-4"></div>
</div>
