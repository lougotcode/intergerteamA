<?php
  require_once 'config.php';
  if (isset($_GET['list'])) {
    $search = $_GET['list'];
    $sql = "SELECT * FROM drug WHERE id = '$search'";
    $result = mysqli_query($conn,$sql); ?>
    <table class="table table-condesed table-striped">
      <thead>
        <th>Drug</th><th>Disease</th><th>Dosage</th><th>Adverse Effect</th><th>Manufacturer</th>
      </thead>
      <tbody>
      <?php  while ($row = mysqli_fetch_assoc($result)) : ?>
        <tr>
          <td><?php echo $row['name'];?></td>
          <td><?php echo $row['disease'];?></td>
          <td><?php echo $row['dosage'];?></td>
          <td><?php echo $row['adverse_effect'];?></td>
          <td><?php echo $row['manufacturer'];?></td>
        </tr>
      <?php endwhile; ?>
    </tbody>
    </table>

<?php  }

?>
