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
      <a href="index.php" class="btn btn-success" style="margin-top:10px; ">Search</a>
  <?php
  if (isset($_GET['list'])) {
    $search = $_GET['list'];
    $sql = "SELECT * FROM drug WHERE id = '$search'";
    $result = mysqli_query($conn,$sql); ?>
    <table class="text-center table table-condesed table-striped table-bordered">
      <?php while ($row = mysqli_fetch_assoc($result)) :?>
      <caption class="text-center" style="font-weight:bold;font-size:35px;"><?php echo $row['name']; ?> Details</caption>
      <tbody>
         <td>Disease it Cure </td>
         <td><?php echo $row['disease'];?> </td>
        </tr>
        <tr>
          <td>Dosage </td>
          <td><?php echo $row['dosage'];?> </td>
         </tr>
         <tr>
           <td>Adverse Effect </td>
           <td><?php echo $row['adverse_effect'];?> </td>
          </tr>
          <tr>
            <td>Manufactured By </td>
            <td><?php echo $row['manufacturer'];?> </td>
           </tr>

</tbody>
<?php endwhile; ?>
</table>

<?php }

?>
</div>
</body>
</html>
