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
